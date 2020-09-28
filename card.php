<?php
function getCard(){
    $pesquisa = $_POST['pesquisar'] ?? '';
    $pagina = $_POST['pagina'] ?? '';
    return getApi($pesquisa, $pagina);
}

function getApi($pesquisa, $pagina){
    $pag = $pagina;

    if ($pag == '') {
        $url = "https://api.rawg.io/api/games?dates=2019-10-10,2020-10-10&ordering=-added";
    }else{
        $url = "https://api.rawg.io/api/games?dates=2019-10-10,2020-10-10&ordering=-added&page={$pag}";
    }
    
    $obj = json_decode(file_get_contents($url));
    //return var_dump($obj);
    if ($pesquisa == ''){
        $jogosObj = '';

        foreach($obj->results as $jogo){
            $jogosObj .= "<div class='col-4 p-2'>";
            $jogosObj .= "<div class='card' style='width: 23rem; height: 25rem;'><p>{$jogo->name}</p>";
            $jogosObj .= "<a href='info.php?a={$jogo->id}'><img width='320' height'400' src='{$jogo->background_image}'></img></a>";
            $jogosObj .= "<p class='card-body'>";
            $jogosObj .= "Data: {$jogo->released}";
            $jogosObj .= "<br> Plataforma: ";
            foreach($jogo->platforms as $plat){
                $jogosObj .= $plat->platform->name . ', ';
            }
            $jogosObj .= "<br> Gênero: ";
            foreach ($jogo->genres as $key ) {
                $jogosObj .= $key->name . " ";
            }
            $jogosObj .= "<br><a href='{$jogo->clip->clip}'>Baixar clip do jogo</a></p></div></div>";
        }
    }
    else {
        $jogosObj = '';
        foreach($obj->results as $jogo){
            if ($pesquisa == $jogo->name) {
                $jogosObj .= "<div class='col-4'>";
                $jogosObj .= "<div class='card' style='width: 25rem; height: 18rem;'><p>{$jogo->name}</p>";
                $jogosObj .= "<img width='320' height'400' src='{$jogo->background_image}'></img>";
                $jogosObj .= "<p class='card-body'>";
                foreach($jogo->platforms as $plat){
                    $jogosObj .= $plat->platform->name . ', ';
                }
                $jogosObj .= "</p></div></div>";
            }
        }
        if($jogosObj == ''){
            $jogosObj = "<p>Jogo não encontrado!!</p>";
        }
    }
    return $jogosObj;
}