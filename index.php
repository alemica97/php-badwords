<?php 
    $paragrafo = "PHP (acronimo ricorsivo di 'PHP: Hypertext Preprocessor', preprocessore di ipertesti; originariamente acronimo di 'Personal Home Page')
                 è un linguaggio di scripting interpretato, originariamente concepito per la programmazione di pagine web dinamiche.";


    $parola_da_censurare = $_GET['censura'];
    $paragrafo_modificato = str_replace( $parola_da_censurare, '***', $paragrafo);

    // Stampo la variabile che contiene il paragrafo 
    echo $paragrafo;
    echo '<br>';
    // Stampo la lunghezza della variabile, ovvero del paragrafo 
    echo 'Il paragrafo è lungo: ';
    echo strlen($paragrafo);
    // Stampo il paragrafo modificato, che avrà la parola PHP censurata
    echo '<br>';
    echo $paragrafo_modificato;

    echo '<br>';
    echo 'Il paragrafo censurato è lungo: ';
    echo strlen($paragrafo_modificato);
?>