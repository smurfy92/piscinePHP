SELECT `date` FROM `db_jtranchi`.historique_membre WHERE MONTH(`date`) = 12 AND DAY(`date`) = 24 OR `date` < '2007-07-27' AND `date` > '2006-10-30';