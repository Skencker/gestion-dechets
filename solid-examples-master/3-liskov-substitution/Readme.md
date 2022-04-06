# Exemple du carré et du rectangle

En mathématiques, un carré est un rectangle particulier dont la longueur et la largeur sont égales. Il paraît donc naturel d'utiliser l'héritage pour les implémenter.

En pratique, on se rend compte que l'on est obligé de modifier le comportement des setters et que le résultat obtenu, même si il est correct mathématiquement parlant, n'est pas celui attendu : le principe de **substitution de Liskov** n'est pas respecté : [rectangle.php](rectangle.php).

Dans ce cas, il faut remplacer l'héritage par une interface et implémenter carré de manière indépendante : [rectangle-refactored.php](rectangle-refactored.php).