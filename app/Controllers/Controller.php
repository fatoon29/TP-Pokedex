<?php 

namespace Pokedex\Controllers;

use Pokedex\Models\Type;

class Controller
{
    protected function show(string $filename, array $viewParams = Null)
    {
       
        global $router;

        require('../app/views/header.tpl.php');
        require("../app/views/$filename.tpl.php");
        require('../app/views/footer.tpl.php');

        if (!empty($viewParams)){
            extract($viewParams);
        }



    }

}