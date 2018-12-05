/*Database Section------------------------------------------------------------------------------------------------------------------------------------------*/

CREATE TABLE Users (
id int(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
firstname varchar(20) NOT NULL,
lastname varchar(20) NOT NULL,
password varchar(20) NOT NULL,
telephone int(11) NOT NULL,
email varchar(20) NOT NULL,
date_joined date NOT NULL
);

CREATE TABLE Jobs (
id int(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
job_title varchar(20) NOT NULL,
job_description varchar(50) NOT NULL,
category varchar(20) NOT NULL,
company_name varchar(20) NOT NULL,
company_location varchar(20) NOT NULL,
date_posted date NOT NULL,
);

CREATE TABLE Jobs Applied For (
id int(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
job_id varchar(20) NOT NULL,
user_id varchar(20) NOT NULL,
date_applied date NOT NULL,
);

INSERT INTO Users (email, password)
VALUES ('admin@hireme.com', 'password123');