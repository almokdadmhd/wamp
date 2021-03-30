<?php
       function SupNumTel($telephone)  {
          return  preg_replace('/0[1-9]([-.\s/]?\d{2}){4}/', " non autorisé ", $telephone);
}
       $numTel = 'message 01-23-45-67-89 p suite 01/23/25/69/87  lettres 01.23.25.69.87 encore lettres 01 23 25 69 87 ou 01232569*87';
        echo SupNumTel($numTel);
