<?php
$id = $_GET['a'];

function getUrl($id)
{
    $url = "https://api.rawg.io/api/games/{$id}";
    $json = json_decode(file_get_contents($url));
    // return var_dump($json);
    return "<div class='card'>
            <b class='card-title'>$json->name_original</b>
            <img class='p-5' src='$json->background_image' width='1050' height='590'>
            <div class='card-body'><p class='text-justify'>$json->description_raw</p>
            <a href='{$json->website}'>Web Site</a>
            <p>lancamento: $json->released</p></div></div>";
        
}

getUrl($id);