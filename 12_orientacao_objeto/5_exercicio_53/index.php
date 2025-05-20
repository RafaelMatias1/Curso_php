<?php

    class Cachorro{

        function latir(){

            echo "au au au au <br>";

        }
        function andar($metro){

            echo "andou $metro metros <br>";

        }

    }

    $dog = new Cachorro;

    $dog->latir();
    $dog->andar(1000);