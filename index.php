<form action="" method="post">
    <input type="text" name="address">
    <input type="submit" name="acao" value="Enviar">
</form>

<?php

    // usando a API do Google para pesqisar endereços

    if(isset($_POST['acao'])){

        // Requisição para o Google usando file get contents
        $url = urlencode($_POST['address']);
        $str = file_get_contents("https://maps.googleapis.com/maps/api/geocode/json?address=".$url."&key=AIzaSyBdcUGncCgjl2-0EESNFdWXsoCA7WWijjc&sensor=false");


        $endereco = json_decode($str);


        echo '<pre>';
        var_dump($str);
        echo '<pre>';
    

     echo "Nome do bairro:";
     echo "<br>";
     echo $endereco->results[0]->address_components[1]->short_name;

     echo "<hr>";

     echo "Nome da Rua:";
     echo "<br>";
     echo $endereco->results[0]->address_components[0]->short_name;  




    }




?>