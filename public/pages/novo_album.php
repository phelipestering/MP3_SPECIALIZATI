
<a href="?pages=albums">Voltar para Albuns</a>

<h1>Cadastrar Novo Album</h1>

<form action="" method="post" class="action" enctype="multipart/form-data">
    <div class="form-group">
        <input type="text" name = "name" placeholder="Nome:"  class="form-control"/>
    </div>
    <div class="form-group">
        <input type="file" name="image" class="form-control" >
    </div>
    <button type="submit" class="btn btn-success" >Cadastrar</button>
</form>



<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $album = $_POST['name'];
        $path = "Albuns/{$album}";

        if (!is_dir($path)){
            mkdir($path);
        }

        $file = $_FILES['image'];
        $fileInfo = explode('.', $file['name']);

        $extension = $fileInfo[1];
        $nameImage = $album . '.' . $extension;

        if(move_uploaded_file($file['tmp_name'], $path.'/'.$nameImage )){
            header('Location: ?page=albums');
        } else {
            echo 'Deu pau...';
        }

    }

?>