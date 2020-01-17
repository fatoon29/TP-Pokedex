<?php

namespace Pokedex\Controllers;

use Pokedex\Models\Pokemon;

class PokedexController extends Controller
{

    public function pokemonDetails ($params)
    { 
        $pokemonDetails = new Pokemon;

        $details = $pokemonDetails->find($params['id']);
       
        $viewParams = 
        [
            'title' => 'Détail du pokemon',
            'details' => $details,
            
        ];  
        $this->show('details', $viewParams);
    }
    

}