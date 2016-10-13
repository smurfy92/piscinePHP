SELECT nom, prenom FROM `db_jtranchi`.fiche_personne
WHERE nom LIKE '%-%' OR prenom LIKE '%-%'
ORDER BY nom, prenom ASC;