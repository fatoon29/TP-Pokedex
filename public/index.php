
<?php 

    require("../vendor/autoload.php");

    $router = new AltoRouter();

    $router->setBasePath($_SERVER["BASE_URI"]);

    $router->map(
        "GET",
        "/",  
        [
            "method" => "home",
            "controller" => "Pokedex\Controllers\MainController",
        ],
        "home" 
    );

    $router->map(
        "GET",
        "/details/[i:id]/",  
        [
            "method" => "pokemonDetails",
            "controller" => "Pokedex\Controllers\PokedexController",
        ],
        "details" 
    );


    $match = $router->match();

if (isset($_GET['_url'])){
    $page = $_GET['_url'];
}
else {
    $page = "/";
}


if ($match === false){
    //@todo: gérer la page 404 correctement
    header('HTTP/1.0 404 Not Found');
    die("404");
}
else {
    $controllerToUse = $match['target']['controller'];
    $methodToUse = $match['target']['method'];

    $controller = new $controllerToUse();

    $controller->$methodToUse($match['params']);

}