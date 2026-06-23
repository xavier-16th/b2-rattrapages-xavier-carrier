rattrapage mangoo 

## Structure du Projet
- `index.php` : Le point d'entrée et la logique du contrôleur.
- `model/` : Gère les données et les interactions avec la base de données.
    - `Database.php` : Configuration de la connexion à la base de données.
    - `Commande.php` : Logique liée aux données de commande.
- `view/` : Modèles d'interface utilisateur (vues).
    - `form.php` : Formulaire de création de commande.
    - `list.php` : Tableau de bord de suivi des commandes.

## Installation
1. Assurez-vous d'avoir un environnement serveur local configuré (ex: MAMP/XAMPP).
2. Assurez-vous d'avoir une base de données MySQL nommée `mongoo`.
3. Créez la table `commande` dans votre base de données avec la structure suivante :
   ```sql
   CREATE TABLE commande (
       id INT AUTO_INCREMENT PRIMARY KEY,
       nom VARCHAR(255) NOT NULL,
       prenom VARCHAR(255) NOT NULL,
       adresse TEXT NOT NULL,
       prix DECIMAL(10, 2) NOT NULL,
       statut VARCHAR(255) DEFAULT 'Order Received'
   );
   ```

###  Sources et ressources utiles
Pour réaliser ce projet, je me suis appuyé sur plusieurs ressources qui m'ont aidé
 les cours sur le site de IIM sur archi bdd et le site du prof Yoann coulean 
 **[Tuto vidéo de AUZ Tutorials](https://www.youtube.com/watch?v=Y9LFqKTrJE4)** 
 **[W3Schools - MVC Architecture](https://www.w3schools.in/mvc-architecture)** 
 **[Documentation PHP : la fonction `rand()`](https://www.php.net/manual/en/function.rand.php)** 
 **[W3Schools - Les formulaires PHP](https://www.w3schools.com/php/php_forms.asp)** 
<img width="1024" height="511" alt="image" src="https://github.com/user-attachments/assets/b63deb29-45a0-4f22-9c55-d794ccc997a7" />
