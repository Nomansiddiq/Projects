Create database students;
use students;
create table student(
id int(30) not NULL primary key,
FirstName varchar(40) not NULL,
LastName varchar(40) not NULL,
Email varchar(50) not NULL,
Phone_no int(40) not NULL,
Password varchar(100) not NULL,
FCS_A_Level_marks DECIMAL(60) not NULL,
NTS_marks DECIMAL(60) not NULL);

ALTER TABLE student
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;


insert into student values(1,"ibrar","babar","ibrar@gmail.com",033454,123,70.9,89.5);