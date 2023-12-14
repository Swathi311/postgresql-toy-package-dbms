import psycopg2


hostname = 'localhost'
database = 'student'
username = 'postgres'
pwd = 'admin'
post_id = 5432


try:
    conn = psycopg2.connect(host = hostname, dbname=database, user= username,password=pwd, port = post_id)
    cur = conn.cursor()
    cur.execute("INSERT INTO student values()")
    conn.commit()
    

except Exception as error:
    print(error)

finally:
    if cur is not None:
        cur.close()
    if conn is not None:
        conn.close()