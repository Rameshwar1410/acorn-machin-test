# Acorn-machin-test
#### Step 1 composer install
#### Step 2 Create Table using below mentioned schema
```
CREATE TABLE `foods`(
    `id` INT(11) NOT NULL,
    `Type` VARCHAR(20) NOT NULL,
    `DateNew` DATETIME NOT NULL,
    `Total` INT(11) NOT NULL,
    `Status` INT(11) NOT NULL
)
```
#### Step 3 Change DB details
Path: App\Config\DBConnection
