<?php

    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        require("../helpers.php");
        redirect("index.php");
    }
    
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST['pick']))
        {
            require("../helpers.php");
            apologize("Please choose a background image for your haiku.");
        }
        
        else
        {
            require("../functions.php");
    
            $line1 = gent5sline();
            //add a puctuation
            $punc = rtrim(RandomLine("../wordbank/punc.txt"));
            $firstline = $line1.$punc."\n";

            $line2 = gent7sline();
            $punc = rtrim(RandomLine("../wordbank/punc.txt"));
            $secondline = $line2.$punc."\n";

            $line3 = gent5sline();
            // add a terminating punctuation
            $puncf = rtrim(RandomLine("../wordbank/puncf.txt"));
            $thirdline = $line3.$puncf."\n";
            
            require("../helpers.php");
            // redirect("haiku.php");
            render("haiku_display.php", ["title" => "Hello, Haiku", "firstline" => $firstline, "secondline" => $secondline, "thirdline" => $thirdline]);
        
        }
    }

?>
