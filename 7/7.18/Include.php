<?php

    include 'Person.php';
    include_once 'Author.php';

    $newAuthor = new Author("Samuel Langhorne", "Clemens", 1899);
    echo $newAuthor->getCompleteName();

?>