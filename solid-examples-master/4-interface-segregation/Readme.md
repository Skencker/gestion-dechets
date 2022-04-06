# Exemple des contacts

Dans cet exemple, nous avons une interface qui permet de contacter un utilisateur de 3 manières différentes (par mail, téléphone ou courrier). Mais nous ne respectons pas le principe de **ségrégation des interfaces** car certains utilisateurs ne disposent pas de ces informations, ce qui peut entraîner des erreurs lorsque l'on va essayer de les contacter par ce biais : [contact.php](contact.php).

Pour résoudre le problème, nous scindons l'interface initiale en 3 interfaces distinctes, ayant chacune une responsabilité unique. Les différents types d'utilisateurs peuvent désormais implémenter les moyens de contact qui correspondent aux informations dont ils disposent : [contact-refactored.php](contact-refactored.php).

# Exemple de la gestion de projet

Reprenons notre équipe projet, dans cet exemple, nous souhaitons faire coder les différents membres de notre équipe qui en ont la capacité. Malheureusement l'interface mise en place ne respecte pas le principe de **ségrégation des interfaces** : [pm.php](pm.php).

Comme pour l'exemple précédent, nous allons donc scinder l'interface existante en 2 interfaces indépendantes : [pm-refactored.php](pm-refactored.php).