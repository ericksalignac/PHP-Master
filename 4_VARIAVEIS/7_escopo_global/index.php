<?php

  $teste = "blabla";

  echo "$teste global 1 <br>";

  if(5 > 2) {

    $teste = "qlqr coisa";

    echo "$teste if <br>";

  }

  echo "$teste global 2 <br>";

  function funcao() {

    $teste = "xsxs";

    echo "$teste local <br>";

  }

  funcao();

  function testandoGlobal() {

    global $teste;

    $teste = 2;

    echo "$teste global função <br>";

  }

  testandoGlobal();

  echo "$teste global 3 <br>";