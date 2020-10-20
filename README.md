# Projet fil rouge : Une application de gestion de comptes bancaires

Vous êtes développeur junior au sein du service informatique d’une grande enseigne bancaire.
 
Le coeur de cible de cette banque était jusqu’à maintenant les épargnants âgés, 
qui utilisent peu internet. 

Elle souhaite maintenant diversifier sa clientèle, entrer de plein pied dans l’ère du
numérique et proposer à ses usagers un service bancaire en ligne renouvelé afin d’attirer 
de nouveau utilisateurs.

Cependant la banque est un métier de confiance et c’est la sécurité des utilisateurs qui doit 
primer avant tout.
 
A ce titre, vous devez créer une application qui permet à l’utilisateur de créer et gérer 
des comptes bancaires.

## Spécifications fonctionnelles :
- Sur l’accueil du site, l’utilisateur voit par défaut tous ses comptes bancaires.

- A son arrivée sur l’accueil un layer s’affiche par dessus l’ensemble de la page et lui 
rappelle les règles de sécurité essentielles sur un site internet. 
Les règles de sécurité sont stockées dans un fichier et récupérées par requête HTTP (AJAX).

- Sur une page de statistiques l’utilisateur accède à des informations bancaires comme 
les taux d’emprunt, le cours de la bourse, ect… 
Ces informations sont récupérées depuis un fichier via requête HTTP et présentées sous 
forme de tableau. Ces informations sont stockées dans un fichier
au format JSON.

- Une page de blog, qui affichera des articles récupérés depuis l’API suivante : 
https://ocjswebsrv.herokuapp.com/api/articles

## Optionnel :
- Sur une page dédiée, un formulaire lui permet de créer un nouveau compte bancaire avec
minimum un type de compte (courant, livretA, PEL etc...) et une somme par défaut 
supérieure à 50 euros.

- Pour chaque compte l’utilisateur peut cliquer sur un lien qui par la suite lui permettra 
de supprimer le compte.

- Pour chaque compte, l’utilisateur peut, via un formulaire faire un dépôt d’argent.

- Pour chaque compte, l’utilisateur peut, via un formulaire faire un retrait d’argent.

- Sur une page dédiée, à l’aide d’un formulaire, l’utilisateur peut réaliser un virement 
d’un compte à un autre. 
Il peut donc sélectionner un compte A à débiter, indiquer un montant et sélectionner le
compte B à créditer. 
Il ne peut sélectionner que ses propres comptes.

## Spécifications techniques :

- HTML5

- CSS3

- Framework Boostrap4

- Base Boilerplate

- JavaScript avec respect des normes ES6

- Vous avez produit des maquettes de type wireframe simples pour au moins une des pages

- Vous avez produit une arborescence fonctionnelle de l’application reprenant les cas 
d’utilisation possible de la page

- Vos wireframes sont accessibles dans un dossier DOC

- Votre interface est responsive sur tous les supports

- Vous respectez le principe DRY

- Votre code est commenté

- Votre code est hébergé sur GitHub

- Vous avez fait usage d’un logiciel de versionning

- Votre site est hébergé via une GH-page

- Le repository contient un readme, une description et des tags

- Vous utilisez un outil de gestion de projet de type KANBAN. 
Idéalement pour chaque tâche vous estimez le temps et la priorité et vous vous 
mettez dans la peau de l’utilisateur.

## Pour aller plus loin :

Vous pouvez ajouter des fonctionnalités à votre projet:

- Un formulaire de création et de connexion d’utilisateurs sur une page dédiée.

- Rendre les formulaires fonctionnels en JavaScript. 
Par exemple si je remplis le formulaire de création de compte, les informations 
rentrées sont traitées en JavaScript et permettent de créer un nouveau compte 
en HTML qui est ajouté à la page. 
Pour cela vous devrez peut-être utiliser les sessions.

- Valider les formulaires en JavaScript



# Dynamiser le projet fil rouge

Le conseil d’administration a été très satisfait du premier jet de votre application 
et la trouve intéressante. 

Il a donc donné son feu vert au service informatique pour poursuivre le projet.
 
Votre scrum master après en avoir discuté avec le product owner est revenu vers vous 
et vous demande maintenant de commencer à dynamiser l’application à l’aide d’un 
langage back-end afin de pouvoir intégrer par la suite une base de données.

Il souhaiterait dans un premier temps intégrer les fonctionnalités suivantes;

## Spécifications fonctionnelles :

- Afin de gagner en maintenabilité, le template n’est plus dupliqué sur toutes les pages. 
Il est maintenant éclaté dans des fichiers header.php, nav.php, footer.php etc chargés 
sur chacune des pages.

- Les données pour affichées les comptes en banque sur la page d’accueil sont maintenant 
stockées dans un tableau, et une boucle affiche tous les comptes. 
Ceux-ci ne sont plus écrits en dur dans le HTML.

- Quand on clique sur un compte en banque, on arrive sur une page spécifique dédiée 
au compte et qui n’affiche que les informations de ce compte. 
Cette fonctionnalité utilise la transmission de données par l’URL.

- Quand l’utilisateur remplit le formulaire de création de compte et qu’il soumet le 
formulaire, le compte est créé à côté du formulaire avec les informations rentrées 
par l’utilisateur.

## Spécifications techniques :

- PHP 7

- Serveur Apache2

- Base Boilerplate

### Pour aller plus loin :

- Intégrer un embryon de formulaire de connexion, en effet plus tard il faudra pouvoir 
gérer les utilisateurs de l’application. 
Rajoutez une page de connexion avec un formulaire demandant un login et un mot de passe. 
Le login et le mdp rentrés sont comparés à un login et un mdp stockés en dur dans le 
fichier et s’ils sont identiques l’utilisateur est redirigé vers l’application.

- A la création d’un compte bancaire appliquer des vérifications de sécurité. 
Par exemple, vérifier que le type de compte est bien un type de compte autorisé 
(courant, pel, livret a, perp …). 
Vérifier également que les montant minimum à l’ouverture est bien d’au moins 50 euros. 

# Créer et administrer une BDD

Les bases de données (ou BDD) sont incontournables en programmation car même
l’application la plus basique a besoin de stocker des données. 

Au fil de ses itérations votre projet d’application bancaire prend de l’ampleur. 

L’application se structure et commence à exploiter des données dans des fichiers. 

Votre scrum master estime qu’il est maintenant temps d’intégrer une base de données 
dans l’application et ainsi d’assurer la persistance mais aussi l’intégrité des données.

## Spécifications techniques :

- SGBD : MySQL

- créer une base de données nommée banque_php mais aussi supprimer tout base de données 
préexistante nommée banque_php de tel sorte que votre fichier puisse toujours être 
importé sans conflit.

- créer un utilisateur nommé banquePHP et supprimer tout utilisateur pré-existant portant 
le même nom.
 Vous êtes libres de choisir son mot de passe. 
Cet utilisateur ne doit avoir les droits que sur la base de données banque_php.

- Créer les tables nécessaires à l’application avec les types de données qui vous semblent 
les plus pertinents et efficaces.

- Insérer dans chaque table au moins 2 lignes.

- Implantez un système de connexion des utilisateurs dans le projet, sans base de données 
pour l’instant (un seul utilisateur peut se connecter).



# Dynamiser son application bancaire

Maintenant que votre base de données est prête, vous avez un sprint d’une semaine pour 
intégrer les fonctionnalités suivantes : 

## Spécifications fonctionnelles :

- L’application n’est accessible qu’aux seuls utilisateurs connectés.

- Quand un utilisateur non connecté va sur l’application il est redirigé vers une page de 
connexion avec un formulaire.

- Un utilisateur se connecte à l’aide d’une adresse mail et d’un mot de passe.

- Un utilisateur connecté peut se déconnecter.

- Une fois connecté, l’utilisateur voit uniquement ses comptes en banque personnels. 
Pour l’instant il ne voit pas la dernière opération effectuée sur le compte, 
juste les comptes avec leurs informations.

- Quand l’utilisateur clique sur un compte en banque, il arrive sur une page dédié au 
compte où il voit les informations du compte mais aussi les dernières opérations 
effectuées sur le compte.

- Via une page dédiée un utilisateur peut créer un nouveau compte personnel à l’aide d’un
formulaire. 
Une fois créé le compte apparaît sur la page d’accueil. 
Attention le compte doit respecter les conditions minimum de création de compte 
(bon type et bon montant).

- L’utilisateur peut effectuer des dépôts ou des retraits sur le compte de son choix. 
Le montant du compte est alors mis à jour et une nouvelle opération est enregistrée 
sur le compte.

## Spécifications techniques :

- PHP7

- Utilisation de PDO pour se connecter à la base de données

- SGBD : Mysql

- Serveur : Apache2

- Réaliser une arborescence fonctionnelle du site avec les pages et les actions réalisables 
sur ces pages.

- Le site est également mis en ligne sur un serveur mutualisé.

- L’utilisateur peut effectuer des transfères d’un compte à l’autre, ce qui crée deux 
nouvelles opérations.

- Des messages d’erreur sont affichés sur les différents formulaires quand ceux-ci
sont mal remplis.

- L’utilisateur peut supprimer les comptes qui lui appartiennent.

- Sur la page d’accueil, pour chaque compte l’utilisateur voit la dernière opération sur 
ce compte.

- L’utilisateur peut accéder à la page de son profil et mettre à jour ses informations 
personnels.



# Intégrer la POO dans une application MVC

Maintenant que votre application est en ligne, de nombreux bugs et demandes d’amélioration 
ont été remontés à votre product owner.
 
La squad projet s’est déjà attelée à leur résolution mais le travail est plus compliqué que 
prévu.
 
Il est difficile d’intervenir dans le code mais aussi de comprendre l’organisation de 
l’application et l’implémentation des fonctionnalités.

Une réunion a donc été organisée avec l’équipe projet par le scrum master et vous avez décidé 
de faire évoluer l’application vers une application objet organisée avec le pattern MVC.

Pas de nouvelles fonctionnalités mais votre code doit être écrit en orienté objet partout où 
cela est possible et vous refactorez l’application entre model view et controller.

En ce qui concerne les requêtes SQL, vous mettez en place les transactions à minima sur 
l’opération de débit et de crédit.

Cela signifie que vous réalisez un diagramme de classes. 

Vous mettez également votre projet en ligne chez un hébergeur.

## Pour aller plus loin :
- Intégrez une nouvelle table dans votre application qui aura pour objectif de stocker les 
types de comptes bancaires autorisés et utilisez cette table pour tout ce qui concerne les 
types de comptes.

- Parmi les utilisateur intégrez le rôle conseiller. 
En effet tous vos utilisateurs sont pour l’instant des utilisateurs lambda mais normalement 
l’application serait également accessible aux banquiers. 
Ces derniers ont une liste de client dont ils peuvent accéder aux comptes et aux informations.

- Proposez à l’utilisateur connecté de pouvoir modifier les informations de son profil via 
un formulaire. 
Certaines informations comme son age ne sont pas modifiables mais l’adresse par exemple 
peut faire l’objet d’un changement.
