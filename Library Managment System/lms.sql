create database library_managment_system;
use library_managment_system;
CREATE TABLE `authors` (
  `author_id` int(11) NOT NULL,
  `author_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `authors` (`author_id`, `author_name`) VALUES
(102, 'JJ thomson'),
(103, 'Broslie'),
(104, 'Meer ali Shah');


CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `book_name` varchar(250) NOT NULL,
  `author_id` int(11) NOT NULL,
  `book_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `books` (`book_id`, `book_name`, `author_id`, `book_price`) VALUES
(1, 'Software engineering', 101, 270),
(2, 'Data structure', 102, 300),
(3,"OOP",102,350),
(4,"Databases",103,400),
(5,"Algorithm",104,500),
(6,"Software",105,550);



CREATE TABLE `issued_books` (
  `s_no` int(11) NOT NULL,
  `book_name` varchar(200) NOT NULL,
  `book_author` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `issue_date` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `issued_books` (`s_no`,`book_name`, `book_author`, `user_id`, `status`, `issue_date`) VALUES
(1, 'Data structure', 'james', 4, 1, '0000-00-00 00:00:00'),
(18,'operating system', 'skoatler', 2, 1, '2020-04-22');




CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` int(10) NOT NULL,
  `address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `users` (`id`, `name`, `email`, `password`, `mobile`, `address`) VALUES
(4, 'user', 'user@gmail.com', 'user@1234', 2147483644, 'XYZ Coloney, PQR Nagar , Jaipur'),
(7, 'ali', 'ali@gmail.com', 'ali@123', 2147483644, 'XYZ Coloney, PQR Nagar , Jaipur');
insert into users values(1,"ibrar","usman@gmail.com",123,03364177,"Alraheem Garden, Lahore");


create table join_data(
	id int not null,
     book_id int not null,     
     primary key(id,book_id)
     );
 insert into join_data values(1,1);
 insert into join_data values(1,2);
 insert into join_data values(1,3);
 insert into join_data values(1,4);
 insert into join_data values(1,5);
 insert into join_data values(3,1);



ALTER TABLE `authors`
  ADD PRIMARY KEY (`author_id`);


ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);


ALTER TABLE `issued_books`
  ADD PRIMARY KEY (`s_no`);


ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

alter table issued_books add foreign key (book_id) REFERENCES books (book_id);
 alter table issued_books add foreign key (id) REFERENCES users (id);



ALTER TABLE `authors`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;





ALTER TABLE `issued_books`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;


ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;



ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

