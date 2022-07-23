import mysql.connector as mysql
import json
import os
import sys
from flask import Flask
from flask import request
from flask import make_response


# Flask app should start in global layout
app = Flask(__name__)
db = mysql.connect(
    host = "localhost",
    user = "root",
    passwd = "",
    database = "attendance"
)


@app.route('/webhook', methods=['POST'])
def webhook():
    req = request.get_json(silent=True, force=True)
    file = open("log.txt",'r')
    uid = file.read()
    if uid == "admin":
        res = adminService(req)
    else:
        res = studentService(uid,req)
    file.close()
    res = json.dumps(res, indent=4)
    r = make_response(res)
    r.headers['Content-Type'] = 'application/json'
    return r

def studentService(uid,req):
    print("StudentService ON !!")
    if req.get("queryResult").get("action") == "getStudentInfo":
        return {
            "fulfillmentText": "You are not Admin...Stop joking ;P",
            "source": ""
        }
    cursor = db.cursor()
    result = req.get("queryResult")
    parameters = result.get("parameters")
    subject = parameters['Subject']

    if subject == "All Subjects":
        percentage = calculateAllPercent(cursor,uid) 
    else:
        percentage = calculatePercent(subject,cursor,uid)
    
    # print(totalCount ,type(totalCount))
    # print(attendCount ,type(attendCount))

    reply = "Your attendance of "+subject+" :: "+str("{:.2f}".format(percentage))+" %"
    promtMsg = promtSubjects(cursor,uid)
    if promtMsg != None:
        reply = reply + promtMsg

    #string = "Keep it up Otaku !! :)"
    my_result = {
        "fulfillmentText": reply,
        "source": reply
    }
    return my_result

def calculatePercent(subject,cursor,uid):
    subquery = "SELECT c_id FROM course WHERE c_name = '"+subject+"'"
    cursor.execute(subquery)
    result = cursor.fetchall()
    print("Yolooooo : ")
    print(subject,type(subject))
    print(result,type(result))
    subjectid = result[0][0]
    
    subquery = "SELECT count(s_id) FROM attendance WHERE s_id = '" +uid+ "' AND c_id = "+subjectid
    cursor.execute(subquery)
    result = cursor.fetchall()
    totalCount = result[0][0]

    subquery = "SELECT count(s_id) FROM attendance WHERE s_id = '" +uid+ "' AND attendance = 1 AND c_id = "+subjectid
    cursor.execute(subquery)
    result = cursor.fetchall()
    attendCount = result[0][0]
    if totalCount == 0:
        return 60
    percentage = (attendCount/totalCount)*100
    return percentage


def calculateAllPercent(cursor,uid):
    subquery = "SELECT count(s_id) FROM attendance WHERE s_id = '" +uid+ "'"
    cursor.execute(subquery)
    result = cursor.fetchall()
    totalCount = result[0][0]

    subquery = "SELECT count(s_id) FROM attendance WHERE s_id = '" +uid+ "' AND attendance = 1"
    cursor.execute(subquery)
    result = cursor.fetchall()
    attendCount = result[0][0]
    if totalCount == 0:
        return 60
    percentage = (attendCount/totalCount)*100
    return percentage

def promtSubjects(cursor,uid):
    subquery = "SELECT c_name FROM course"
    cursor.execute(subquery)
    result = cursor.fetchall()
    flag = 0
    promptReply = "\n\n=====> Subjects having low Attendance : \n\n"
    for tup in result:
        subject = tup[0]
        perct = calculatePercent(subject,cursor,uid)
        if perct < 70:
            promptReply = promptReply + subject + " : " + str(perct) + " % "
            flag = 1
    if flag == 1:
        return promptReply
    else:
        return None 

@app.route('/static_reply', methods=['POST'])
def static_reply():
    string = ""
    my_result = {

        "fulfillmentText": string,
        "source": string
    }

    res = json.dumps(my_result, indent=4)
    r = make_response(res)
    r.headers['Content-Type'] = 'application/json'
    return r

def adminService(req):
    print("Admin Service ON !!")
    if req.get("queryResult").get("action") == "getAttendance":
        return {
            "fulfillmentText": "You are Admin...Remember this :|",
            "source": ""
        }
    cursor = db.cursor()
    sid = req.get("queryResult").get("parameters").get("StudentPRN")[0]
    subject = req.get("queryResult").get("parameters").get("Subjects")
    #print(sid , type(sid))
    if subject =="All Subjects":
        percentage = calculateAllPercent(cursor,sid)
        reply = "Total Attendance of "+sid+" => "+str("{:.2f}".format(percentage))+" %"
    else:
        percentage = calculatePercent(subject,cursor,sid)
        reply = "Attendance of "+sid+" for " + subject + " Lecture => "+str("{:.2f}".format(percentage))+" %"
    my_result = {
        "fulfillmentText": reply,
        "source": reply
    }
    return my_result

if __name__ == '__main__':
    port = int(os.getenv('PORT', 5000))

    print("Starting app on port %d" % port)

    app.run(debug=True, port=port, host='0.0.0.0')