<?php
    $conn = pg_connect("postgres://qqfsxgpjyimmer:cdd71e127d681364b3bcf09dd8e8672a0b1dab5691a7b0af47c5eb26c32fed79@ec2-107-23-135-132.compute-1.amazonaws.com:5432/de7nlm8429mm66");

    if(!$conn){
        die("Can not connect database");
    } 
?>