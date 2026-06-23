<?php

// Load necessary data models
require_once 'model/Database.php';
require_once 'model/Commande.php';

class CommandeController {
    

    private $model;
    public function __construct() {
        $db = (new Database())->getConnection();
        $this->model = new Commande($db);
    }

    public function route() {
        $action = $_GET['action'] ?? 'form';

        // Handle form submission for creating a new order
        if ($action === 'create' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            // Retrieve form data and create a new order
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $adresse = $_POST['adresse'];
            // Generate a random price
            $prix = rand(1000, 2500) / 100;
            $this->model->create($nom, $prenom, $adresse, $prix);
            header("Location: index.php?action=list");
            exit;
        }

        //status 
        if ($action === 'update' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->updateStatut($_POST['id'], $_POST['statut']);
            header("Location: index.php?action=list");
            exit;
            
        }
        
        if ($action === 'list') {
            $commandes = $this->model->getAll();
            require 'view/list.php';
            // Display the list of orders
        } else {
            // Display the order form
            require 'view/form.php';
        }
    }
}
// Initialize and route the incoming request
$controller = new CommandeController();
$controller->route();
?>