<?php

    $authors = array("Charles Dickens", "Jane Austen", "William Shakespeare");

    $authorsAssociative =   array(
                                "quarky"    =>  "Charles Dickens",
                                "brilliant" =>  "Jane Austen",
                                "poetic"    =>  "William Shakespeare"
                            );

    // echo $authors[1];
    // echo $authorsAssociative['quarky'];

    // echo array_key_exists(2, $authors);
    echo array_key_exists('poetic', $authorsAssociative);

?>