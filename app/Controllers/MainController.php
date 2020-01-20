<?php

namespace Pokedex\Controllers;

use Pokedex\Models\Type;
use Pokedex\Models\Pokemon;

class MainController extends Controller
{
    public function home ()
    { 
        $pokemonList = new Pokemon;

        $list = $pokemonList->findAll();

        $pokemonType = new Type;

        $type = $pokemonType->findAll();

        $viewParams = 
        [
            'title' => 'Accueil pokedex',
            'list' => $list,
            'type' => $type
        ];

        $this->show('home', $viewParams);
       
    }



}