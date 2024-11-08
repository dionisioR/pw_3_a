<?php 
class Produto{
    private $conn;
    private $table_name = "produto";

    public $pro_id;
    public $pro_nome;
    public $pro_descricao;
    public $pro_preco;
    public $pro_url;

    public function __construct($db){
        $this->conn = $db;
    }

    public function readAll(){
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function readOne(){
        $query = "SELECT * FROM " . $this->table_name . " WHERE pro_id = ? limit 1";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->pro_id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->pro_nome = $row['pro_nome'];
        $this->pro_descricao = $row['pro_descricao'];
        $this->pro_preco = $row['pro_preco'];
        $this->pro_url = $row['pro_url'];
    }


}