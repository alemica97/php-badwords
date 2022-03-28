<?php 
    $paragrafo = "PHP (acronimo ricorsivo di 'PHP: Hypertext Preprocessor', preprocessore di ipertesti; originariamente acronimo di 'Personal Home Page')
                 è un linguaggio di scripting interpretato, originariamente concepito per la programmazione di pagine web dinamiche.";

    $paragrafo_modificato = str_replace('PHP', '***', $paragrafo);

    // Stampo la variabile che contiene il paragrafo 
    echo $paragrafo;
    echo '<br>';
    // Stampo la lunghezza della variabile, ovvero del paragrafo 
    echo 'Il paragrafo è lungo: ';
    echo strlen($paragrafo);
    // Stampo il paragrafo modificato, che avrà la parola PHP censurata
    echo '<br>';
    echo $paragrafo_modificato;
?>