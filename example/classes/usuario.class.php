<?php
class Usuario{
    public function cadastrar($nome, $email, $senha, $tel){
        global $pdo;
        $sql = $pdo->prepare('SELECT id FROM usuarios WHERE email = :email');
        $sql->bindValue(':email', $email);
        $sql->execute();

        if ($sql->rowCount() == 0){ // Se usuário não foi cadastrado, cadastra ele
            $sql = $pdo->prepare('INSERT INTO usuarios SET nome = :nome, email = :email, senha = :senha, telefone= :tel');
            $sql->bindValue(':nome', $nome);
            $sql->bindValue(':senha', md5($senha));
            $sql->bindValue(':email', $email);
            $sql->bindValue(':tel', $tel);
            $sql->execute();

            return true;
        }
        else{
            return false;
        }
    }

    public function entrar($email, $senha){
        global $pdo;
        $sql = $pdo->prepare('SELECT id FROM usuarios WHERE email = :email AND senha = :senha');
        $sql->bindValue(':email', $email);
        $sql->bindValue(':senha', md5($senha));
        $sql->execute();

        if ($sql->rowCount() != 0){
            // Salva sessão
            $sql = $sql->fetch();
            $_SESSION['userID'] = $sql['id'];

            return true;
        } else{
            return false;
        }
    }

    public function getName($id){
        global $pdo;
        $sql = $pdo->query("SELECT nome FROM usuarios WHERE id = '$id'");

        if ($sql->rowCount() == 0)
            return false;
        else
            return $sql->fetch()['nome'];
    }
}
?>