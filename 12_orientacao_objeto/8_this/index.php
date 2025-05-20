<?php

    class Animal {

        public $nome;

        function ecolherNome($nome){

            $this->nome = $nome;

        }

        function latir(){

            return "Au au <br>";

        }

        function latirForte(){

            return strtoupper($this->latir());

        }

    }

    $dog = new Animal;

    echo "o nome do animal e $dog->nome <br>";

    $dog->ecolherNome("Estrelinha");

    echo "o nome do animal e $dog->nome <br>";

    echo $dog->latirForte();