<?php

  class Pessoa {

    function falar() {
      echo "Olá pessoal!";
    }

  }

  $erick = new Pessoa();

  $erick->nome = "Erick";

  echo $erick->nome;

  echo "<br>";

  $erick->falar();