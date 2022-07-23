import mysql.connector as mysql
import random 


#Search for an upper case "S" character in the beginning of a word, and print the word:
#print(x.group())
db = mysql.connect(
    host = "localhost",
    user = "root",
    passwd = "",
    database = "attendance"
)
cursor = db.cursor()
uid = ['CD1802','C17048']
sub = [310248 ,310247 ,310246 ,310245 ,310244 ,310243 ,310242 ,310241]
att = [0,1]

for i in range (1,29):
    subquery = "INSERT INTO attendance VALUES('" + random.choice(uid) + "'," + str(random.choice(sub)) + ",'2019-10-" + str(i) + "'," + str(random.choice(att)) + ")"
    cursor.execute(subquery)
    subquery = "INSERT INTO attendance VALUES('" + random.choice(uid) + "'," + str(random.choice(sub)) + ",'2019-10-" + str(i) + "'," + str(random.choice(att)) + ")"
    cursor.execute(subquery)
    subquery = "INSERT INTO attendance VALUES('" + random.choice(uid) + "'," + str(random.choice(sub)) + ",'2019-10-" + str(i) + "'," + str(random.choice(att)) + ")"
    cursor.execute(subquery)
    db.commit()
    # result = cursor.fetchall()
    # print(result,type(result))
    # subjectid = result[0][0]
    # print(subjectid,type(subjectid))
    print("Loop : ",i)