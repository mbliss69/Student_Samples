/* Username: Admin **************
   Password: admin **************
*********************************/
Create DATABASE cardealer;
SHOW DATABASES;
Use cardealer;
Create TABLE categories (
    id int(11) NOT NULL,
    name varchar(255) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=latin1;
ALTER TABLE categories ADD PRIMARY KEY (id);
ALTER TABLE categories MODIFY id int(11) NOT NULL AUTO_INCREMENT;

INSERT INTO categories (name) VALUES ('Business'), ('Transportation'), ('Leasing');


CREATE TABLE cars (
    id int(11) NOT NULL,
    category_id int(11) NOT NULL,
    dealer varchar(255) NOT NULL,
    car_make varchar(255) NOT NULL,
    car_model varchar(255) NOT NULL,
    price varchar(255) NOT NULL,
    location varchar(255) NOT NULL,
    contact_user varchar(255) NOT NULL,
    contact_email varchar(255) NOT NULL
)ENGINE=INNODB DEFAULT CHARSET=latin1;
 
ALTER TABLE cars ADD PRIMARY KEY (id);
ALTER TABLE cars MODIFY id int(11) NOT NULL AUTO_INCREMENT;


INSERT INTO cars (category_id, dealer, car_make, car_model, price, location, contact_user, contact_email)
VALUES (1, 'Auto One', 'Toyota', '2018', '$15,000.00', 'Etobicoke', 'Josep Olmez', 'joseph@gmail.com');

INSERT INTO cars (category_id, dealer, car_make, car_model, price, location, contact_user, contact_email)
VALUES (1, 'Auto Sunny', 'Mercedes', '2012', '$13,000.00', 'Mississaga', 'Frank Rain', 'frank@gmail.com');

INSERT INTO cars (category_id, dealer, car_make, car_model, price, location, contact_user, contact_email)
VALUES (1, 'Auto Rose', 'Honda', '2017', '$13,500.00', 'Toronto', 'Ceren Mary', 'ceren@hotmail.com');

INSERT INTO cars (category_id, dealer, car_make, car_model, price, location, contact_user, contact_email)
VALUES (1, 'Auto King', 'Hyundai', '2019', '$22,000.00', 'Waterloo', 'Mark Snow', 'mark@yahoo.com');


Create DATABASE loginsystem;
SHOW DATABASES;
Use loginsystem;
Create Table users (
	idUsers int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
	uidUsers TINYTEXT NOT NULL,
	emailUsers TINYTEXT NOT NULL,
	pwdUsers LONGTEXT NOT NULL
);
INSERT INTO users (uidUsers, emailUsers, pwdUsers) VALUES ('Admin', 'admin@gmail.com', 'admin');