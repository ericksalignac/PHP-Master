<?php

  $pessoa = [
    'nome' => 'Erick',
    'idade' => 20,
    'profissao' => 'Programador',
    'graduacao' => 'Engenhaia de Software'
  ];

  $maioridade = 18;

  // desafio
  if($pessoa['idade'] >= $maioridade) {
    echo "A pessoa é maior de idade!";
  }