SELECT titre, resum FROM `db_jtranchi`.`film` WHERE resum LIKE '%42%' OR titre LIKE '%42%' ORDER BY duree_min ASC;