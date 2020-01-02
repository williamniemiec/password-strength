<?php
class Categoria{
    public function getCategorias(){
        global $pdo;

        $sql = $pdo->query('SELECT * FROM categorias');
        $sql = $sql->fetchAll();
        return $sql;
    }
}
?>