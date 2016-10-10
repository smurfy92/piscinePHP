INSERT INTO ft_table (login, groupe, date_de_creation)
SELECT nom, 3, date_naissance FROM fiche_personne WHERE nom LIKE '%a%' AND LENGTH(nom) < 9 ORDER BY nom ASC LIMIT 10;