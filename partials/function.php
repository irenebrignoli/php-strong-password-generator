<?php

function randomPassword($number){

  if (!empty($number)) {
    if ($number < 7) {
      echo '<div class="alert alert-danger" role="alert">
              La password deve avere almeno 7 caratteri
            </div>';
    } else {
      $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890?!1234567890';
      $password = array();
      $charactersLength = strlen($characters) - 1;

      for ($i = 0; $i < $number; $i++) {
        $n = rand(0, $charactersLength);
        $password[] = $characters[$n];
      }

      return implode($password);
    }

  }
}