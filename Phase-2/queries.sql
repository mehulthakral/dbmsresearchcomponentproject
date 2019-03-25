SELECT title FROM `publication` as p,`fpublication` as fp,`faculty` as f WHERE p.pid=fp.pid and fp.fid=f.fid and f.fname='Mamatha H R';
SELECT sname FROM `publication` as p,`spublication` as sp WHERE p.pid=sp.pid and p.title='Software Fault Tolerance in PISAT'
SELECT title from publication as p, spublication as sp where p.pid=sp.pid and sname='V K Agrawal'
SELECT detail FROM domain as d,activity as a WHERE head_id='01UF11428' and a.dname=d.dname
SELECT `project_name` FROM `proposals` WHERE p_investigator_fid='01UF11068'
SELECT COUNT(*) from mou where dname='Center for Cloud Computing & Big Data'
SELECT COUNT(*) from faculty where role="admin";