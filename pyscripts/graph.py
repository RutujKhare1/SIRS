import pandas as pd
import matplotlib.pyplot as plt
import mysql.connector as mysql
import errno
import sys
import os

db = mysql.connect(
    host = "localhost",
    user = "root",
    passwd = "",
    database = "attendance"
)

cursor = db.cursor()
uid = sys.argv[1]
subquery = "SELECT c_id FROM course"
cursor.execute(subquery)
cid = cursor.fetchall()
sublist = list()
perlist = list()
for course in cid:
    subquery = "SELECT c_name FROM course WHERE c_id = '"+course[0]+"'"
    cursor.execute(subquery)
    result = cursor.fetchall()
    courseName = result[0][0]

    subquery = "SELECT count(s_id) FROM attendance WHERE s_id = '" +uid+"' AND c_id = '"+course[0]+"'"
    cursor.execute(subquery)
    result = cursor.fetchall()
    totalCount = result[0][0]

    subquery = "SELECT count(s_id) FROM attendance WHERE s_id = '" +uid+"' AND attendance = 1 AND c_id = '"+course[0]+"'"
    cursor.execute(subquery)
    result = cursor.fetchall()
    preCount = result[0][0]

    sublist.append(str(courseName))
    if(totalCount != 0):
        percent = preCount/totalCount*100
        perlist.append(percent)
    else:
        perlist.append(60)

data = {"Subject" : sublist,
        "Percentage" : perlist}

df = pd.DataFrame(data)
df.plot(kind='bar',x="Subject",y="Percentage",color='green')

filename = "image/graph/" + uid + "/userGraph.png"
if not os.path.exists(os.path.dirname(filename)):
        os.makedirs(os.path.dirname(filename))
plt.savefig(filename)