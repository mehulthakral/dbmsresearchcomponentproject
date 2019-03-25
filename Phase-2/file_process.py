import sys
import pymysql
import docx
file_name= sys.argv[1]
db = pymysql.connect(host='localhost', user='root', passwd='123')
cursor = db.cursor()
query = ("use research")
cursor.execute(query)
query = "SELECT fname,fid FROM faculty"
cursor.execute(query)
# Fetch all the rows in a list of lists.
results = dict(cursor.fetchall())
query = "SELECT pid FROM publication"
cursor.execute(query)
temp = cursor.fetchall()
if temp:
    last_pid = max(map(lambda x: x[0],temp))
else:
    last_pid = 0
months = {'January': 'spring','February': 'spring', 'March': 'spring', 'April': 'spring', 'May': 'summer', 'June': 'summer', 'July': 'summer', 'August': 'fall', 'September': 'fall', 'October': 'fall', 'November': 'fall', 'December': 'fall'}
d = {'International Conference': [], 'National Conference': [],
     'International Journal Publications': [], 'Book Chapters': []}

extra=[]

def getText(filename):
    doc = docx.Document(filename)
    fullText = []
    for para in doc.paragraphs:
        fullText.append(para.text)
    fullText = '\n'.join(fullText)
    fullText = fullText.replace(chr(8220), '"')
    fullText = fullText.replace(chr(8221), '"')
    return fullText.split('\n')

if (".txt"in file_name)or (".TXT" in file_name) or (".docx" in file_name) or (".DOCX" in file_name):
    if (".txt"in file_name)or (".TXT" in file_name):
        data = open(file_name,'r', encoding="ISO-8859-1").read().split('\n')
    else:
        data = getText(file_name)
    k=0
    for i in data:
        if i.strip() in d:
            k=i.strip()
            continue
        if k and i.strip():
            d[k].append(i.strip())
        if not k and i.strip():
            extra.append(i.strip())
    year=extra[-1]
    for i in d:
        for j in range(len(d[i])):
            d[i][j]=d[i][j].split(',')
            d[i][j] = list(map(str.strip, d[i][j]))
            if (".txt"in file_name)or (".TXT" in file_name):
                d[i][j][0] = d[i][j][0][len(str(j+1))+1:]
            #print(d[i][j][0],end=" ")
            faculty=[]
            students=[]
            title=""
            details=[]
            month=""
            for n in d[i][j]:
                #n=n.strip()
                if n in results:
                    faculty.append(results[n])
                elif '"' in n:
                    title=n[1:-1]
                elif (not title) and n:
                    students.append(n)
                else:
                    details.append(n)
            details=" ".join(details)
            cursor.execute("INSERT INTO publication VALUES ( %s, %s, %s, %s, %s )",(last_pid+1, title,year, i, details))
            db.commit()
            for n in faculty:
                cursor.execute("INSERT INTO fpublication (fid,pid) VALUES (%s, %s)", (n, last_pid+1))
                db.commit()
            for n in students:
                cursor.execute("INSERT INTO spublication (sname,pid) VALUES (%s,%s)", (n, last_pid+1))
                db.commit()
            last_pid+=1
else:
    print("Wrong file format")
    

