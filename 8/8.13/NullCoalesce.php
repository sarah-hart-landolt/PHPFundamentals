<?php

    $authors = ["Charles Dickens", "Jane Austin", "William Shakespeare", "Mark Twain", "Louisa May Alcott"];
    $count = count($authors);

    // $outcome = $count ?? "Count unavailable.";
    $outcome = $count ?? $anotherVariable ?? "Count unavailable.";

    echo $outcome;

?>