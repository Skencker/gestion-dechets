# Exemple de la machine à café
Dans cet exemple ([coffee.php](coffee.php)), la machine à café fait également de la bière et du thé !
Ce n'est pas réaliste et cela ne respecte pas le principe de **responsabilité unique**.

Pour remédier à cela, on va créer 3 classes différentes qui représentent chacune une machine différente : [coffee-refactored.php](coffee-refactored.php)

Il est ensuite possible d'utiliser ces différentes classes d'une manière similaire en implémentant une interface commune : [coffee-refactored-extended.php](coffee-refactored-extended.php).

# Exemple du rapport
Dans cet exemple ([report.php](report.php)), notre classe représente une entité et gère également la manière dont on affiche les données. Elle ne respecte donc pas le principe de **responsabilité unique**.

Pour corriger ce problème, on crée une seconde classe dont l'unique objectif est de formater un object en JSON. Chaque classe a bien un objectif unique : [report-refactored.php](report-refactored.php)