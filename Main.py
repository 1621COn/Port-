
from flask import Flask, render_template
import psycopg2


app = Flask(__name__)


conn = psycopg2.connect(
    database = "postgres",
    user = "postgres",
    password = "pass", 
    host = "/var/run/postgresql",
    port = 5432
)   
cursor = conn.cursor()
if( not cursor):
    print("welp")
   
   
if(cursor):
    cursor.execute("SELECT  user_name FROM USERS WHERE user_id = 1")
    rows = cursor.fetchall()
    for row in rows:
        print(row[0])
        user = row[0]



@app.route('/')
def index():
    title = "Who We Are"
    para1 = "We are an independent organization;"
    img = "/home/linuxtor/Desktop/Java/img.jpg"
    #user_data = {"name":"FirstUser", "lastname": "bro"}
    return render_template('index.html', message = title, paragraph1 = para1, imgsrc = img, userdata = user)

if(__name__ == '__main__'):
    app.run(debug=True)



