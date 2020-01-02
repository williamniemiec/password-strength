<?php
class Anuncio{
    public function getMeusAnuncios_old($idUsuario){
        // Alternativa
        /*
            SELECT *,
            (select anuncios_imagens.url 
            from anuncios_imagens 
            where anuncios_imagens.id_anuncio = anuncios.id 
            limit 1) as url 
            FROM anuncios 
            WHERE id_usuario = :userId
        */

        global $pdo;

        $anuncios = array();
        $sql = $pdo->query("SELECT * FROM anuncios WHERE id_usuario = '$idUsuario'");
        if($sql->rowCount() > 0){
            $anuncios = $sql->fetchAll();
            
            $i = 0;
            foreach($anuncios as $anuncio){
                $idAnuncio = $anuncio['id'];
                $sql = $pdo->query("SELECT url FROM anuncios_imagens WHERE id_anuncio = '$idAnuncio' limit 1");
                $anuncios[$i]['url'] = $sql->fetch()['url'];
                $i += 1;
            }
        }
            
        return $anuncios;
    }

    public function getMeusAnuncios(){
        global $pdo;

        $sql = $pdo->query("SELECT *,(select anuncios_imagens.url from anuncios_imagens where id_anuncio = anuncios.id limit 1) as url FROM anuncios WHERE id_usuario = ".$_SESSION['userID']);
        /*if($sql->rowCount() > 0){
            return $sql->fetchAll();
        } else{
            return null;
        }*/
        return $sql->fetchAll();
    }

    public function addAnuncio($id_usuario, $titulo, $descricao, $valor, $estado, $catID, $imgs){
        global $pdo;
        $sql = $pdo->prepare('INSERT INTO anuncios SET id_usuario = :userId, id_categoria = :catId, titulo = :titulo, descricao = :descricao, valor = :valor, estado = :estado');
        $sql->bindValue(':userId', $id_usuario);
        $sql->bindValue(':catId', $catID);
        $sql->bindValue(':titulo', $titulo);
        $sql->bindValue(':descricao', $descricao);
        $sql->bindValue(':valor', $valor);
        $sql->bindValue(':estado', $estado);
        $sql->execute();

        $id_anuncio = $pdo->lastInsertId();

        foreach($imgs as $url){
            $sql = $pdo->query("INSERT INTO anuncios_imagens SET id_anuncio = '$id_anuncio', url = '$url'");
        }
    }

    // Recebe array do form imgs e retorna array com paths das imagens
    public function savePhotos($arrayImgs){
        $totFiles = count($arrayImgs['tmp_name']);
        $imgs = array();

        for($i = 0; $i < $totFiles; $i++){
            if(!empty($arrayImgs['tmp_name'][$i])){
                $nomeArquivo = md5(time().rand(0,100));
                $extensao = explode('/', $arrayImgs['type'][$i])[1];
                $filepath = 'assets/images/anuncios/'.$nomeArquivo.'.'.$extensao;
                move_uploaded_file($arrayImgs['tmp_name'][$i], $filepath);
                array_push($imgs, $filepath);
            }
            else{
                return null;
            }
        }

        return $imgs;
    }

    public function getTitle($id_anuncio){
        global $pdo;
        $sql = $pdo->query("SELECT titulo FROM anuncios WHERE id = ".$id_anuncio);
        $anuncio = $sql->fetch();

        return $anuncio['titulo'];
    }

    public function getDescription($id_anuncio){
        global $pdo;
        $sql = $pdo->query("SELECT descricao FROM anuncios WHERE id = ".$id_anuncio);
        $anuncio = $sql->fetch();

        return $anuncio['descricao'];
    }

    public function getValue($id_anuncio){
        global $pdo;
        $sql = $pdo->query("SELECT valor FROM anuncios WHERE id = ".$id_anuncio);
        $anuncio = $sql->fetch();

        return $anuncio['valor'];
    }

    public function getStatus($id_anuncio){
        global $pdo;
        $sql = $pdo->query("SELECT estado FROM anuncios WHERE id = ".$id_anuncio);
        $anuncio = $sql->fetch();

        return $anuncio['estado'];
    }

    public function editAnuncio($id_anuncio, $titulo, $descricao, $valor, $catId, $estado){
        global $pdo;
        $sql = $pdo->query("UPDATE anuncios SET titulo = '$titulo', descricao = '$descricao', valor = '$valor', estado = $estado, id_categoria = '$catId' WHERE id = ".$id_anuncio);
    }

    public function delete($id_anuncio){
        global $pdo;
        $sql = $pdo->query("DELETE FROM anuncios WHERE id = ".$id_anuncio);
    }

    public function getCategoria($id_anuncio){
        global $pdo;

        $sql = $pdo->query("SELECT id_categoria FROM anuncios WHERE id = ".$id_anuncio);
        $anuncio = $sql->fetch();

        return $anuncio['id_categoria'];
    }
}
?>