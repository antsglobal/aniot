import pyodbc
from flask import Flask, render_template
server = 'numero.database.windows.net'
database = 'numero'
username = 'numero'
password = 'Alpha@123$'
driver= '{ODBC Driver 17 for SQL Server}'
cnxn = pyodbc.connect('DRIVER='+driver+';SERVER='+server+';PORT=1433;DATABASE='+database+';UID='+username+';PWD='+ password)
cursor = cnxn.cursor()
cursor.execute("SELECT Temperature FROM ANIOT_TEMP")
app = Flask(__name__)
row = cursor.fetchone()
data = []
print(data)
while row:
    data.append(row[0])
    row = cursor.fetchone()
@app.route('/')
def home():
    #print(data)
    return render_template('index.html', data=data)
if __name__ == '__main__':
    app.run(debug=True)