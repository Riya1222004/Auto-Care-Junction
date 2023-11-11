
CREATE TABLE `acj1`.`user` ( `U_Id` INT(5) NOT NULL AUTO_INCREMENT ,  `Role` VARCHAR(10) NOT NULL ,  `First_Name` VARCHAR(20) NOT NULL ,  `Last_Name` VARCHAR(20) NOT NULL ,  `Display_Name` VARCHAR(20) NOT NULL ,  `Gender` VARCHAR(5) NOT NULL ,  `DOB` DATE NOT NULL ,  `Email` VARCHAR(20) NOT NULL ,  `Password` VARCHAR(50) NOT NULL ,  `Mob_No` INT(10) NOT NULL ,  `Join_Date` DATE NULL ,  `Left_Date` DATE NULL ,  `Image` BLOB NOT NULL ,  `Contry` VARCHAR(20) NOT NULL ,  `State` VARCHAR(20) NOT NULL ,  `City` VARCHAR(20) NOT NULL ,  `Address` VARCHAR(50) NOT NULL ,  `Date` DATETIME on update CURRENT_TIMESTAMP NOT NULL ,    PRIMARY KEY  (`U_Id`)) ;

CREATE TABLE `acj1`.`uname_id` ( `U_Id` INT(5) NOT NULL  ,  `Role` VARCHAR(10) NOT NULL ,  `First_Name` VARCHAR(20) NOT NULL ,  `Last_Name` VARCHAR(20) NOT NULL ) ENGINE = InnoDB;

CREATE TABLE `acj1`.`vehicle` ( `Vehicle_Id` INT(5) NOT NULL AUTO_INCREMENT ,  `Date` DATETIME(6) on update CURRENT_TIMESTAMP NOT NULL ,  `Vehicle_Type` VARCHAR(20) NOT NULL ,  `Vehicle_Brand` VARCHAR(20) NOT NULL ,  `Vehicle_Model` INT(20) NOT NULL ,  `Vehicle_Fuel` VARCHAR(20) NOT NULL ,  `Vehicle_Chessis_No` INT(20) NOT NULL ,  `Vehicle_Model_Year` DATE NOT NULL ,  `Vehicle_Gear` INT(5) NOT NULL ,  `Vehicle_Odometer` INT(30) NOT NULL ,  `Vehicle_Gearbox_No` INT(20) NOT NULL ,  `Vehicle_Engine_no` INT(20) NOT NULL ,  `Vehicle_No_Plate` INT(20) NOT NULL ,  `Vehicle_MFD` DATE NOT NULL ,  `Vehicle_desc` VARCHAR(30) NOT NULL , U_Id INT(5) ,    PRIMARY KEY  (`Vehicle_Id`)) ;



CREATE TABLE `acj1`.`supplier` ( `S_Id` INT NOT NULL AUTO_INCREMENT ,  `Date` DATETIME NOT NULL ,  `Supplier_Name` VARCHAR(20) NOT NULL ,  `Product_Name` VARCHAR(20) NOT NULL ,  `Company_Name` VARCHAR(20) NOT NULL ,  `Email` VARCHAR(20) NOT NULL ,  `Mob_No` INT(9) NOT NULL ,  `Contry` VARCHAR(20) NOT NULL ,  `State` VARCHAR(20) NOT NULL ,  `City` VARCHAR(20) NOT NULL ,  `Address` VARCHAR(50) NOT NULL ,    PRIMARY KEY  (`S_Id`));

CREATE TABLE `acj1`.`product` ( `P_Id` INT NOT NULL AUTO_INCREMENT ,  `S_Id` INT NOT NULL ,  `Date` DATETIME NOT NULL ,  `P_MFD` DATE NOT NULL ,  `Product_Name` VARCHAR(20) NOT NULL ,  `Product_Image` BLOB NOT NULL ,  `Product_Color` VARCHAR(20) NOT NULL ,  `Manufacture_Name` VARCHAR(20) NOT NULL ,  `Product_Price` INT(10) NOT NULL ,  `Product_Warrenty` INT(10) NOT NULL ,    PRIMARY KEY  (`P_Id`)) ;


CREATE TABLE `acj1`.`stock` ( `Stock_Id` INT NOT NULL AUTO_INCREMENT ,  `Date` DATETIME NOT NULL ,  `P_Id` INT NOT NULL ,  `Stock_Quantity` INT NOT NULL ,    PRIMARY KEY  (`Stock_Id`)) ;


CREATE TABLE `acj1`.`service` ( `Service_Id` INT NOT NULL AUTO_INCREMENT,  `Date` DATETIME NOT NULL ,  `Service_Name` VARCHAR(20) NOT NULL ,  `Service_Cost` INT NOT NULL ,  PRIMARY KEY  (`Service_Id`) );

CREATE TABLE `acj1`.`appoinment` ( `Appoinment_Id` INT NOT NULL AUTO_INCREMENT ,  `Date` DATETIME NOT NULL ,  `U_Id` INT NOT NULL ,  `V_Id` INT NOT NULL ,  `P_Id` INT NOT NULL ,  `Service_ID` INT NOT NULL ,  `PickUp` VARCHAR(3) NOT NULL ,  `Appoinment_Date` DATE NOT NULL ,  `Appoinment_Time` DATETIME NOT NULL ,  `Appoinment_Extra` VARCHAR(50) NULL ,  `Pack_Id` INT NULL ,    PRIMARY KEY  (`Appoinment_Id`));


CREATE TABLE `acj1`.`assignment` ( `Assignment_Id` INT NOT NULL AUTO_INCREMENT ,  `Date` DATETIME NOT NULL ,  `U_Id` INT NOT NULL ,  `A_Id` INT NOT NULL ,  PRIMARY KEY  (`Assignment_Id`)) ;



CREATE TABLE `acj1`.`bill` ( `Bill_Id` INT NOT NULL AUTO_INCREMENT ,  `Date` DATETIME NOT NULL ,  `Service_Id` INT NOT NULL ,  `Service_Hours` INT NOT NULL ,  `Service_Cost` INT NOT NULL ,  `P_Id` INT NOT NULL ,  `U_Id` INT NOT NULL ,  `Pack_Id` INT NOT NULL ,    PRIMARY KEY  (`Bill_Id`)) ;

CREATE TABLE `acj1`.`package` ( `Pack_Id` INT NOT NULL AUTO_INCREMENT ,  `Date` DATETIME NOT NULL ,  `Pack_Name` VARCHAR(20) NOT NULL ,  `S_Id` INT NOT NULL ,  `Pack_Price` INT NOT NULL ,  `Pack_Descount` INT NOT NULL ,  `Pack_Validity` INT NOT NULL ,  `Pack_No_Service` INT NOT NULL ,  PRIMARY KEY  (`Pack_Id`)) ;



ALTER TABLE service ADD Extra_Comm VARCHAR(20);

CREATE TABLE `acj1`.`service_title` ( `Id` INT NOT NULL AUTO_INCREMENT ,  `Date` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP ,  `Servic_Title` VARCHAR(100) NOT NULL ,  `Image` LONGBLOB NOT NULL ,  `Video` LONGBLOB NOT NULL ,    PRIMARY KEY  (`Id`)) ENGINE = InnoDB;