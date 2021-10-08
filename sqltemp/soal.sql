/*create soal*/
use english;
show tables;
select * from soal;
insert into soal(`question`, `description`, `answer`, `level`) values("Question 1", "Description 1", "1", "1");
insert into soal(`question`, `description`, `answer`, `level`) values("Question 2", "Description 2", "2", "2");
insert into soal(`question`, `description`, `answer`, `level`) values("Question 3", "Description 3", "3", "3");
insert into soal(`question`, `description`, `answer`, `level`) values("Question 4", "Description 4", "4", "4");
insert into soal(`question`, `description`, `answer`, `level`) values("Question 5", "Description 5", "5", "5");
insert into soal(`question`, `description`, `answer`, `level`) values("Question 6", "Description 6", "6", "6");
insert into soal(`question`, `description`, `answer`, `level`) values("Question 7", "Description 7", "7", "7");
insert into soal(`question`, `description`, `answer`, `level`) values("Question 8", "Description 8", "8", "8");
insert into soal(`question`, `description`, `answer`, `level`) values("Question 9", "Description 9", "9", "9");
insert into soal(`question`, `description`, `answer`, `level`) values("Question 10", "Description 10", "10", "10");

truncate soal;