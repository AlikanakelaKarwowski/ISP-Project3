DROP TABLE IF EXISTS books;

CREATE TABLE books (
  id INT(11) NOT NULL AUTO_INCREMENT,
  Title varchar(255) NOT NULL,
  Price FLOAT NOT NULL,
  Quantity INT(4) NOT NULL,
  flag BOOLEAN NOT NULL,
  PRIMARY KEY (id)
);

insert into books values
(1, 'Dune', 30.99, 100, 0),
(2, 'Otherland', 20.99, 200, 0),
(3, 'City of Dark Light', 30, 2001, 0),
(4, 'City of Embers', 19.99, 10, 0),
(5, 'Gods and Goddesses', 150.10, 25, 0),
(6, 'Fake Book', 0.50, 0, 1),
(7, '50 shades of grey', 55.99, 100, 0),
(8, '50 Shades darker', 17.99, 150, 0),
(9, '50 positions for your wife', 3.99, 1, 0);

