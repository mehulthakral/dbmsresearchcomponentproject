import sys
import pymysql
import matplotlib.pyplot as plt


db = pymysql.connect(host='localhost', user='root', passwd='123')
cursor = db.cursor()
query = ("use research")
cursor.execute(query)
if len(sys.argv)==1:
    query = "SELECT year,count(*) FROM publication group by year"
    cursor.execute(query)
    temp = cursor.fetchall()
    temp=dict(temp)
    plt.bar(list(temp.keys()), list(temp.values()))    # naming the x axis
    plt.xlabel('year')
    plt.xticks(list(temp.keys()))
    # naming the y axis
    plt.ylabel('No of Publications')

    # giving a title to my graph
    plt.title('Yearwise Publications')

    # function to show the plot
    plt.savefig("./images/publication.png")
    plt.figure()

    query = "SELECT g.year,g.gcount+p.pcount from (SELECT COUNT(*) as gcount ,year FROM grants group by year) as g,(SELECT COUNT(*) as pcount,year FROM proposals group by year) as p where g.year=p.year group by g.year"
    cursor.execute(query)
    temp = cursor.fetchall()
    temp = dict(temp)
    plt.bar(list(temp.keys()), list(temp.values()))    # naming the x axis
    plt.xlabel('year')
    plt.xticks(list(temp.keys()))
    # naming the y axis
    plt.ylabel('No of grants+proposals')
    #print(temp.values(),temp.keys())
    # giving a title to my graph
    plt.title('Yearwise grants and proposals')

    # function to show the plot
    plt.savefig("./images/grantsAndProposals.png")
    plt.figure()

    query = "select year(date) as year,count(*) as num from mou group by year order by year asc"
    cursor.execute(query)
    temp = cursor.fetchall()
    temp = dict(temp)
    plt.bar(list(temp.keys()), list(temp.values()))    # naming the x axis
    plt.xlabel('year')
    plt.xticks(list(temp.keys()))
    # naming the y axis
    plt.ylabel('No of grants+proposals')
    #print(temp.values(), temp.keys())
    # giving a title to my graph
    plt.title('Yearwise grants and proposals')

    # function to show the plot
    plt.savefig("./images/mous.png")
    plt.figure(figsize=(5,5))
    #plt.tight_layout()
    query = "SELECT f.fname,count(*) as c from faculty as f, publication as p, fpublication as fp where f.fid=fp.fid and p.pid=fp.pid group by fname order by c DESC"
    cursor.execute(query)
    temp = cursor.fetchall()
    temp = dict(temp)
    new_temp={}
    for i in temp:
        if temp[i]>=8:
            new_temp[i]=temp[i]
    plt.barh(list(new_temp.keys()), list(new_temp.values()))    # naming the x axis
    plt.xlabel('number of publications')
    plt.yticks(list(new_temp.keys()))
    # naming the y axis
    plt.ylabel('No of Publications')
    #print(temp.values(), temp.keys())
    # giving a title to my graph
    plt.title('Faculty Publications')

    # function to show the plot
    plt.savefig("./images/fpublications.png", bbox_inches="tight")
    plt.figure()

else :
    name= sys.argv[1]
    query = "SELECT p.year,count(*) FROM publication as p,fpublication as fp, faculty as f WHERE p.pid=fp.pid and fp.fid=f.fid and lower(f.fname) Like '"+name+"' group by p.year"
    cursor.execute(query)
    temp = cursor.fetchall()
    temp = dict(temp)
    #print(temp)
    plt.bar(list(temp.keys()), list(temp.values()))    # naming the x axis
    plt.xlabel('year')
    plt.xticks(list(temp.keys()))
    # naming the y axis
    plt.ylabel('No of Publications')

    # giving a title to my graph
    plt.title('Yearwise Publications')
    name=''.join(name.split(" "))
    # function to show the plot
    plt.savefig("./images/publication_"+name+".png")
    plt.figure()
