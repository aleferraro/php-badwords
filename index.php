<?php

/*
Creare una variabile con un paragrafo di testo.
Recuperare dalla query string un parametro badword che contiene una parola definita dall'utente
Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre *.
*/


$badword = $_GET['badword'];


$string = 'ciao mi chiamo alessandro';


$new_string = str_replace($badword, "***", $string);


?>


<p> 
    <strong>badword: </strong> <?php echo $badword; ?>
    <br>
    <strong>string: </strong> <?php echo $string; ?>
    <br>
    <strong>new string: </strong> <?php echo $new_string; ?>
</p>