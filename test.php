<?php

if(isset($_POST['fn']) && isset($_POST['ln'])){
    echo "Hello there " . $_POST['fn'] . " " . $_POST['ln'];
}