-- PLDT MONTH

CREATE TABLE `prtg`.`pldt_month`(
   `bw_id` INT NOT NULL AUTO_INCREMENT,
  `date` varchar(100) NOT NULL,
  `kbit_in` float NOT NULL,
  `kbit_out` float NOT NULL,
    PRIMARY KEY (`bw_id`)
);

-- EASTERN MONTH

CREATE TABLE `prtg`.`eastern_month`(
   `bw_id` INT NOT NULL AUTO_INCREMENT,
  `date` varchar(100) NOT NULL,
  `kbit_in` float NOT NULL,
  `kbit_out` float NOT NULL,
    PRIMARY KEY (`bw_id`)
);

-- GLOBE MONTH

CREATE TABLE `prtg`.`globe_month`(
   `bw_id` INT NOT NULL AUTO_INCREMENT,
  `date` varchar(100) NOT NULL,
  `kbit_in` float NOT NULL,
  `kbit_out` float NOT NULL,
    PRIMARY KEY (`bw_id`)
);

-- IMPORT CSV DATA

LOAD DATA INFILE '' 
INTO TABLE prtg 
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 ROWS
(date , kbit_in, kbit_out);


LOAD DATA INFILE 'aug13_min_pldt200.csv' 
INTO TABLE country 
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 ROWS
(date , kbit);