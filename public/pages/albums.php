<h1>Album</h1>

<div class="row">
    <?php
        $albums = getAlbums();

        //var_dump($albums);
        
        //for($i=1; $i<=10; $i++):

        foreach($albums as $album):

        $infoAlbum = explode('/', $album);
        $nameAlbum = $infoAlbum [1];

        //$imgAlbum = $album . '/' . $nameAlbum . '.jpeg';
        
        $imgAlbum = "{$album}/{$nameAlbum}.jpeg";
    ?>
    <div class="col-3 album">

        <a href="">
            <img src="<?=$imgAlbum?>" alt="<?=$nameAlbum?>" class="img-album">
            <h4><?=$nameAlbum?> </h4>
        </a>

    </div>
    <?php
        endforeach;
    ?>
</div>