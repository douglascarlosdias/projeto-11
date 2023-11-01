<?php
require_once __DIR__ . '/../databases/conexao.php';

class ProdutoDAO
{

    private $dbh;

    public function __construct()
    {
        $this->dbh =  Conexao::getConexao();
    }

    public function getAll()
    {
        $query = "SELECT * FROM tiogogadelivery.produtos ";

        $stmt = $this->dbh->query($query);
        $rows = $stmt->fetchAll();
        $this->dbh = null;

        return $rows;
    }

    public function getById(int $id)
    {
        $query = "SELECT * FROM tiogogadelivery.produtos WHERE id = :id;";

        $stmt = $this->dbh->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_BOTH);
        $this->dbh = null;

        return $row;
    }

    public function delete(int $id): int
    {
        $query = "DELETE FROM tiogogadelivery.produtos WHERE id = :id;";

        $stmt = $this->dbh->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $result = (int) $stmt->rowCount();
        $this->dbh = null;

        return $result;
    }

    public function save(string $nome, $descricao,$valor,$categoria,$imagem): int
    {
        $query = "INSERT INTO tiogogadelivery.produtos (nome, descricao,valor,categoria,imagem) 
            VALUES (:nome, :descricao,:valor,:categoria,:imagem);";

        $stmt = $this->dbh->prepare($query);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':descricao', $descricao);
        $stmt->bindParam(':valor', $valor);
        $stmt->bindParam(':categoria', $categoria);
        $stmt->bindParam(':imagem', $imagem);

        $result = (int) $stmt->execute();
        $this->dbh = null;

        return $result;
    }
}