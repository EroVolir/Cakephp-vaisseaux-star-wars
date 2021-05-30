# Cakephp-vaisseaux-star-wars
Le but de cette mini-application est de permettre un affichage des données de la base de données "Vaisseaux Star Wars" de la base bien plus claire que le parcours directes de par un SGBD. Elle permet à la fois de visualiser des données mais aussi d'en ajouter ainsi que d'en modifier et d'en supprimer.

## Tutoriel d'installation de l'interface utilisateur
Afin d'utiliser l'interface utilisateur, il faut installer Wamp Server. Cela permettra d'utiliser la base de données ainsi que cette interface en local.

Tout d'abord, il faut importer la base de données dans l'application PHPmyAdmin. Cette base de données sera utilisée par l'interface utilisateur afin d'afficher les données.

Une fois cela fait, il faut placer le dossier "cakephp" dans le dossier "www" de wamp. L'interface est donc dans le dossier des projets mais n'est pas encore définie comme un VirtualHost, c'est à dire que l'interface n'est pas encore reconnue par Wamp server en tant qu'application web.

Pour ce faire, il faut se rendre sur "localhost", accessible via un navigateur. Une fois sur cette page, cliquez sur "ajouter un Virtual Host". Des trois champs, seul les deux premiers sont à remplir. Une fois cela fait, revenez à l'accueil et vous pouvez accéder à l'interface utilisateur.
