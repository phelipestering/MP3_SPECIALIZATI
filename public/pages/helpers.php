<?php

function getAlbums ()
{
    $albums = glob('Albuns/*');

    return $albums;
}

