<?php

    $authors = array(
        "Male" => array(
            "Charles Dickens" => array("A Christmas Carol", "Oliver Twist"),
            "William Shakespeare" => array("Romeo & Juliet", "Richard III"),
            "Mark Twain" => array("The Adventures of Tom Sawyer", "The Prince and the Pauper")
        ),
        "Female" => array(
            "L. M. Montgomery" => array("Anne of Green Gables", "Anne of Avonlea"),
            "Louisa May Alcott" => array("Little Women")
        )
    );

    // print_r($authors);
    // print_r($authors['Male']);
    // print_r($authors['Male']['Mark Twain']);
    print_r($authors['Male']['Mark Twain'][1]);

?>