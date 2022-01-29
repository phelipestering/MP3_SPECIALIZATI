<?php

function getAlbums ()
{
    $albums = glob('Albuns/*');

    return $albums;
}

function getMusic ($album)
{
    $musics = glob ("albuns/{$album}/musicas/*.mp3");

    return $musics;

}
