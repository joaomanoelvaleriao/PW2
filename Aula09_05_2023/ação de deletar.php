<?php

if (file_exists("votos.txt")) {
    unlink('votos.txt');
}    

header('Location: indexVota.php');

?>