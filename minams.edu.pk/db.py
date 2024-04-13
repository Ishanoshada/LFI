import pymysql
import json

# Define database connection details
DB_SERVER = "muhammadtayyabtahir.ipagemysql.com"
DB_USER = "muhammadtayyab"
DB_PASS = "Pakistan@123"
DB_NAME = "minams"

# Connect to the database
connection = pymysql.connect(host=DB_SERVER, user=DB_USER, password=DB_PASS, database=DB_NAME)

try:
    with connection.cursor() as cursor:
        # Select all data from a table (replace 'table_name' with your table name)
        sql = "SELECT * FROM table_name"
        cursor.execute(sql)
        # Fetch all rows
        rows = cursor.fetchall()

        # Dump data as JSON
        data = []
        for row in rows:
            data.append(row)
        
        # Write data to a JSON file
        with open('data_dump.json', 'w') as json_file:
            json.dump(data, json_file)

finally:
    connection.close()
