<?php
class Commande { // class Commande to manage the orders
    private $conn;

    public function __construct($db) {// constructor to initialize the database 
        $this->conn = $db;
    }
    public function create($nom, $prenom, $adresse, $prix) {// creates a new order in the db with the given parameters
        $sql = "INSERT INTO commande (nom, prenom, adresse, prix, statut) VALUES (?, ?, ?, ?, 'Order Received')"; 
        $stmt = $this->conn->prepare($sql);//  prevent sql injection
        return $stmt->execute([$nom, $prenom, $adresse, $prix]);
    }
    public function getAll() {// gets all orders from db and filters by highest id 
        $sql = "SELECT * FROM commande ORDER BY id DESC";//
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function updateStatut($id, $statut) {// updates the status of an in the db by id
        $sql = "UPDATE commande SET statut = ? WHERE id = ?";// 
        $stmt = $this->conn->prepare($sql);// prevent sql injection using preped statem
        return $stmt->execute([$statut, $id]);
    }
}
?>