<?php

    // $authors = array(
    //     "Charles Dickens",
    //     "Jane Austin",
    //     "William Shakespeare",
    //     "Mark Twain",
    //     "Louisa May Alcott"
    // );

    $authors = [
        "Male" => array(
            "Charles Dickens" => array("A Christmas Carol", "Oliver Twist"),
            "William Shakespeare" => array("Romeo & Juliet", "Richard III"),
            "Mark Twain" => array("Tom Sawyer", "Huckleberry Finn")
        );
        "Female" => array(
            "L. M. Montegomery" => array("Anne of Green Gables", "Anne of Avonlea");
            "Louisa May Alcott" => array("Little Women");
        );
    ]

    echo count($authors, COUNT_RECURSIVE);

?>