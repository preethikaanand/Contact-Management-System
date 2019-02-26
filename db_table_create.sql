CREATE TABLE CONTACT (
	Contact_id int NOT NULL AUTO_INCREMENT,
	Fname varchar(255) NOT NULL,
	Mname varchar(255),
	Lname varchar(255),
	PRIMARY KEY (Contact_id)
);

CREATE TABLE ADDRESS (
	Address_id int NOT NULL AUTO_INCREMENT,
	Contact_id int,
	Address_type varchar(255),
	Address varchar(255),
	City varchar(255),
	State varchar(255),
	Zip int,
	PRIMARY KEY (Address_id),
	FOREIGN KEY (Contact_id) REFERENCES CONTACT(Contact_id)
);

CREATE TABLE PHONE (
	Phone_id int NOT NULL AUTO_INCREMENT,
	Contact_id int,
	Phone_type varchar(255),
	Area_code int,
	Number varchar(255),
	PRIMARY KEY (Phone_id),
	FOREIGN KEY (Contact_id) REFERENCES CONTACT(Contact_id)
);

CREATE TABLE DATE (
	Date_id int NOT NULL AUTO_INCREMENT,
	Contact_id int,
	Date_type varchar(255),
	Date date,
	PRIMARY KEY (Date_id),
	FOREIGN KEY (Contact_id) REFERENCES CONTACT(Contact_id)
);