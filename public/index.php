<?php 

    // configuration
    require("../helpers.php");
    
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render homepage
        render("index_display.php");
    }
    
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // else render homepage
        render("index_display.php");
    }
    
?>