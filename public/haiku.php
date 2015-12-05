<?php

    require("../helpers.php");
    require("../functions.php");

    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        redirect("index.php");
    }
    
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST['pick']) && empty($_POST['imglink']))
        {
            apologize("Please choose a background image for your haiku or paste an image url.");
        }
        
        if (!empty($_POST['pick']) && !empty($_POST['imglink']))
        {
            apologize("Please choose one option or the other.");
        }
        
        // one or the other is not empty
        elseif (empty($_POST['pick']) && !empty($_POST['imglink']))
        {
            $info = new SplFileInfo($_POST['imglink']);
            $extension = $info->getExtension();

            if ($extension == "jpg" || $extension == "png" || $extension == "tif" || $extension == "gif") 
            {
                $line1 = gent5sline();
                
                //add a puctuation
                $punc = rtrim(RandomLine("../wordbank/punc.txt"));
                $firstline = $line1.$punc;
    
                $line2 = gent7sline();
                $punc = rtrim(RandomLine("../wordbank/punc.txt"));
                $secondline = $line2.$punc;
    
                $line3 = gent5sline();
                // add a terminating punctuation
                $puncf = rtrim(RandomLine("../wordbank/puncf.txt"));
                $thirdline = $line3.$puncf;
                
                // redirect("haiku.php");
                render("haiku_display.php", ["title" => "Hello, Haiku", "firstline" => $firstline, "secondline" => $secondline, "thirdline" => $thirdline]);
            }
            
            else
            {
                apologize("Please paste a link to an image file, followed by no spaces.");
            }
        }
        
        else
        {
            $line1 = gent5sline();
            //add a puctuation
            $punc = rtrim(RandomLine("../wordbank/punc.txt"));
            $firstline = $line1.$punc;
    
            $line2 = gent7sline();
            $punc = rtrim(RandomLine("../wordbank/punc.txt"));
            $secondline = $line2.$punc;
    
            $line3 = gent5sline();
            // add a terminating punctuation
            $puncf = rtrim(RandomLine("../wordbank/puncf.txt"));
            $thirdline = $line3.$puncf;
                
            // redirect("haiku.php");
            render("haiku_display.php", ["title" => "Hello, Haiku", "firstline" => $firstline, "secondline" => $secondline, "thirdline" => $thirdline]);
        }
    }
?>
