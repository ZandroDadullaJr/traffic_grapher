-- PLDT MONTH

CREATE TABLE `prtg`.`pldt_month`(
   `bw_id` INT NOT NULL AUTO_INCREMENT,
  `date` DATETIME NOT NULL,
  `kbit_in` float NOT NULL,
  `kbit_out` float NOT NULL,
    PRIMARY KEY (`bw_id`)
);

-- EASTERN MONTH

CREATE TABLE `prtg`.`eastern_month`(
   `bw_id` INT NOT NULL AUTO_INCREMENT,
  `date` DATETIME NOT NULL,
  `kbit_in` float NOT NULL,
  `kbit_out` float NOT NULL,
    PRIMARY KEY (`bw_id`)
);

-- GLOBE MONTH

CREATE TABLE `prtg`.`globe_month`(
   `bw_id` INT NOT NULL AUTO_INCREMENT,
  `date` DATETIME NOT NULL,
  `kbit_in` float NOT NULL,
  `kbit_out` float NOT NULL,
    PRIMARY KEY (`bw_id`)
);

-- IMPORT CSV DATA


LOAD DATA INFILE 'pldt_January-July_2019_gdrive.csv' 
INTO TABLE pldt_month 
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 ROWS
(date , kbit_in, kbit_out);



LOAD DATA INFILE 'eastern_January-July_2019_gdrive.csv' 
INTO TABLE eastern_month 
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 ROWS
(date , kbit_in, kbit_out);


LOAD DATA INFILE 'globe_January-July_2019_gdrive.csv' 
INTO TABLE globe_month 
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 ROWS
(date , kbit_in, kbit_out);

-- REPLACE STRING

UPDATE pldt_month SET date = REPLACE(date, ':', '')

-- CONVERT TO DATE

SELECT STR_TO_DATE('1/1/2019 1:00','%m/%d/%Y %h:%i')

UPDATE pldt_month SET date = RSTR_TO_DATE(date,'%Y%m%d %h%i')


UPDATE `table`
SET `column` = str_to_date( `column`, '%d-%m-%Y' );

UPDATE `table` SET `my_new_date_field` = STR_TO_DATE( `my_old_data_field`, '%d/%m/%Y');



UPDATE `pldt_min` SET `my_new_date_field` = STR_TO_DATE( `date`, '%m/%d/%Y %h:%i');





CREATE TABLE `prtg`.`pldt_month2`(
   `bw_id` INT NOT NULL AUTO_INCREMENT,
  `date` DATETIME NOT NULL,
  `kbit_in` float NOT NULL,
  `kbit_out` float NOT NULL,
    PRIMARY KEY (`bw_id`)
)
