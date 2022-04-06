# Exemple de la commande
Dans cet exemple ([order.php](order.php)), aucun problème. Mais nous souhaiterions pouvoir appliquer une réduction à l'ensemble de la commande.

Nous pourrions modifier la classe existante en ajoutant un attribut `discount` et en modifiant le calcul du montant, mais ce n'est pas conseillé. Lorsque l'on souhaite ajouter et/ou modifier une fonctionnalité il est préférable d'étendre la classe et de surcharger les éléments nécessaires : [order-discount.php](order-discount.php).

# Exemple de la gestion de projet
Dans cet exemple ([pm.php](pm.php)), pour pouvoir s'exécuter la méthode `process` doit comparer le type du paramètre avec l'ensemble des classes possibles. Si on rajoute une classe, il faut rajouter un test : le principe **d'ouverture/fermeture** n'est pas respecté.

Pour rendre notre code plus modulaire et moins rigide, on ajoute une interface que toutes les classes concernées (présentes et futures) doivent implémenter pour pouvoir être utilisées dans la méthode `process` : [pm-refactored.php](pm-refactored.php).