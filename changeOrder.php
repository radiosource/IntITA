<?php


echo '<p> Hello from server side! </p>';
foreach($_POST["item"] as $s){
    echo $s;
}