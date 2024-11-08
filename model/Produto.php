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


}