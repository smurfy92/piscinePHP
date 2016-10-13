SELECT titre AS `Titre`, resum AS `Resume`, annee_prod FROM `db_jtranchi`.`film` WHERE id_genre IN
(SELECT id_genre FROM `db_jtranchi`.`genre` WHERE nom = "erotic") ORDER BY annee_prod DESC;