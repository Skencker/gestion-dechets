# Contexte
L'objectif de ce TD est de créer une mini-application de gestion de projet.

Une équipe projet est affectée à un projet et est composée de plusieurs membres. Un membre ne peut avoir qu'un seul rôle sur le projet.

Des tâches projet sont réalisées par les différents membres. Les différents types de tâche doivent être effectués par des rôles spécifique (ex. : une tâche de test peut être effectuée par un testeur, un développeur ou un chef de projet).

## Membre de l’équipe projet
* nom
* prénom
* email
* rôle

## Différents rôles pour les membres (évolutif)
* manager
* chef de projet
* lead dev
* développeur
* designer
* testeur

## Tâches
* date
* durée
* libellé
* type
* membre assigné (un seul et unique membre par tâche)

## Différents type de tâches (évolutif)
* développement
* test
* création
* intégration
* conception
* rédaction
* relation client
* reporting
* suivi

## Objectifs

* pouvoir créer des tâches et les assigner à une personne qualifiée
* pouvoir calculer le temps global passé sur le projet
* pouvoir calculer le temps passé par type de tâche
* pouvoir calculer le temps passé par personne

# Méthodologie

## 1. Analyse
* 1.1 lister les objets / classes qui vont intervenir dans le projet
* 1.2 les hiérarchiser / catégoriser / regrouper
* 1.3 voir les relations / dépendances entre les différents objets
* 1.4 lister les fonctionnalités associées à chaque objet

## 2. Développement
* 2.1 créer les différentes classes (structure uniquement, pas de code dans les fonctions)
* 2.2 remplir les fonctions et potentiellement refactoriser
