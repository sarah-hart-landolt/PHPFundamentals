<?php

    function bookByAuthorYear($authorName, $year)
    {
        echo $year;
        echo "\n";
        echo $authorName;
    }

    $year       = 1910;
    $authorName = "William Shakespeare";

    bookByAuthor($authorName, $year);

?>