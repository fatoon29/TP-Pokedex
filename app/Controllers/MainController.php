<?php

namespace Pokedex\Controllers;

use Pokedex\Models\Pokemon;

class MainController extends Controller
{
    public function home ()
    { 
        $pokemonList = new Pokemon;

        $list = $pokemonList->findAll();

        $viewParams = 
        [
            'title' => 'Accueil pokedex',
            'list' => $list
        ];

        $this->show('home', $viewParams);
       
    }



}