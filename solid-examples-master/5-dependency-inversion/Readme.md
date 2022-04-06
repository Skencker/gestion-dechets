# Exemple de la machine Nespresso

Dans notre implémentation de départ ([capsule.php](capsule.php)), c'est la machine qui crée la capsule ! Ce serait très pratique mais ce n'est malheureusement pas le cas.

Pour remédier à cela, nous allons fournir à notre machine une capsule via son constructeur : [capsule-refactored-constructor.php](capsule-refactored-constructor.php). C'est mieux, mais si nous souhaitons faire 2 café, il nous faut 2 machines Nespresso ! Pas très rentable tout ça.

Nous allons donc faire en sorte de pouvoir changer de capsule en remplaçant le constructeur par une méthode dédiée : [capsule-refactored-reusable.php](capsule-refactored-reusable.php). Voilà une machine réutilisable. Mais elle ne peut être utilisée qu'avec des capsule Nespresso et pas avec les capsules compatibles : elle ne respecte pas le principe **d'inversion des dépendances**.

Pour supprimer cette dépendance aux capsules Nespresso, nous allons créer une interface que devront implémenter les capsules compatibles : [capsule-refactored-interface.php](capsule-refactored-interface.php).