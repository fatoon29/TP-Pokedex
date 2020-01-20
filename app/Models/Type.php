<?php

namespace Pokedex\Models;

use PDO;
use Pokedex\Utils\Database;

class Type
{
    private $id;
    private $name;
    private $color;
    private $nom;
    private $numero;
    
    public function findAll()
    {
        $pdo = Database::getPDO();

        $sql = "SELECT 
                * 
                FROM `type`";

        $pdoStatement = $pdo->query($sql);
        $pokemonList = $pdoStatement->fetchAll(\PDO::FETCH_CLASS, __CLASS__);

        return $pokemonList;
    }

    public function find(int $id)
    {
        $sql = '
        SELECT *
        FROM `pokemon_type`
        JOIN `type`
        ON `pokemon_type`.type_id = `type`.id
        JOIN `pokemon`
        ON `pokemon_type`.pokemon_numero = `pokemon`.numero 
        WHERE `pokemon`.id =' . $id;

        $pdo = Database::getPDO();

        $pdoStatement = $pdo->query($sql);
        $pokemonDetails = $pdoStatement->fetchAll(PDO::FETCH_CLASS,__CLASS__);

        return $pokemonDetails;
    }

    public function pokemonByType(int $id)
    {
        $sql = '
        SELECT *
        FROM `pokemon_type`
        JOIN `type`
        ON `pokemon_type`.type_id = `type`.id
        JOIN `pokemon`
        ON `pokemon_type`.pokemon_numero = `pokemon`.numero 
        WHERE `type`.id =' . $id;

        $pdo = Database::getPDO();

        $pdoStatement = $pdo->query($sql);
        $pokemonByType = $pdoStatement->fetchAll(PDO::FETCH_CLASS,__CLASS__);

        return $pokemonByType;
    }


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of numero
     */ 
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     *
     * @return  self
     */ 
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }
}