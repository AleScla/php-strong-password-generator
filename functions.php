<?php
    function pswGenerator(){
        $keycripter ='ABCDEFGHILMNOPQRSTUVZabcdefghilmnopqrstuvz1234567890!"$%&/()=?^_:';
        $psw_cripted = '';
        if(isset($_GET['psw-gen'])){
            $psw_length = strlen($_GET['psw-gen']);
            for ($i = 0; $i < $psw_length; $i++){
                $psw_cripted .= $keycripter[rand(0, strlen($keycripter) - 1)];
            };
            echo $psw_cripted;
        }
    }
     // questa funzione usa una funzione basilare di php (rand(min, max)) che andrà a sostituire 
     // il valore dell'indice dell'array keycripter con un numero random ad ogni interazione
     // prendendo così un carattere diverso per interazione, stampando infine il risultato       
?>