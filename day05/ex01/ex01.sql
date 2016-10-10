CREATE TABLE `db_jtranchi`.`ft_table` IF NOT EXISTS (
`id` INT NOT NULL AUTO_INCREMENT ,
`login` CHAR(8) NOT NULL DEFAULT 'toto' ,
`groupe` ENUM('staff', 'student', 'other') NOT NULL,
`date_de_creation` DATE NOT NULL,
PRIMARY KEY (`id`)) ENGINE = InnoDB;