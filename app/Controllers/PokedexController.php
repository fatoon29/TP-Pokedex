<?php

namespace Pokedex\Controllers;

use Pokedex\Models\Type;
use Pokedex\Models\Pokemon;

class PokedexController extends Controller
{

    public function pokemonDetails ($params)
    { 
        $pokemonDetails = new Pokemon;

        $details = $pokemonDetails->find($params['id']);

        $pokemonType = new Type;

        $type = $pokemonType->find($params['id']);


        $viewParams = 
        [
            'title' => 'Détail du pokemon',
            'details' => $details,
            'type' => $type
            
        ];  
        $this->show('details', $viewParams);
    }

    public function pokemonByType ($params)
    {
        $type = new Type;

        $allPokemon = $type->pokemonByType($params['id']);

        $viewParams = 
        [
            'title' => 'Pokemons du type',
            'allPokemon' => $allPokemon
            
        ];  

        $this->show('type', $viewParams);

    }
    
}

