<!DOCTYPE html>
<html>
    <head>
        <!-- http://getbootstrap.com/ -->
        <link href="../css/bootstrap.min.css" rel="stylesheet"/>
        <link href="../css/styles.css" rel="stylesheet"/>
        <title>Hello, Haiku</title>
    </head>
    
    <body>
        
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        
        <?php 
        
        if (!empty($_POST['pick']) && (empty($_POST['imglink'])))
        { 
            $background = $_POST['pick'];
                    
            if(!empty($_POST['musiclink']))
            {?>
                <audio autoplay controls="controls"><source src=<?php $_POST['musiclink'] ?> type="audio/mpeg" /></audio>
            <?php }
            ?>
                    
            <?php 
            if ($_POST['pick'] == "../img/image1.jpg")
            { ?>
                <audio autoplay controls="controls"><source src="./music/peterpan.mp3" type="audio/mpeg" /></audio>
            <?php }
            ?>
                    
            <?php
            if ($_POST['pick'] == "../img/image12.jpg")
            { ?>
                <audio autoplay controls="controls"><source src="./music/meadow.mp3" type="audio/mpeg" /></audio>
            <?php }
            ?>
                    
            <?php
            if ($_POST['pick'] == "../img/image3.jpg")
            { ?>
                <audio autoplay controls="controls"><source src="./music/hongkong.mp3" type="audio/mpeg" /></audio>
            <?php }
            ?>
                    
            <?php
            if ($_POST['pick'] == "../img/image4.jpg")
                { ?>
                <audio autoplay controls="controls"><source src="./music/japan.mp3" type="audio/mpeg" /></audio>
            <?php }
            ?>
            
            <?php
            if ($_POST['pick'] == "../img/image5.jpg")
            { ?>
                <audio autoplay controls="controls"><source src="./music/chinese.mp3" type="audio/mpeg" /></audio>
            <?php }
            ?>
                    
            <?php
            if ($_POST['pick'] == "../img/image6.jpg")
            { ?>
                <audio autoplay controls="controls"><source src="./music/grandcanyon.mp3" type="audio/mpeg" /></audio>
            <?php }
            ?>
                    
            <?php
            if ($_POST['pick'] == "../img/image7.jpg")
            {?>
                <audio autoplay controls="controls"><source src="./music/yosemite.mp3" type="audio/mpeg" /></audio>
            <?php }
            ?>
                    
            <?php
            if ($_POST['pick'] == "../img/image11.jpg")
            {?>
                <audio autoplay controls="controls"><source src="./music/turkey.mp3" type="audio/mpeg" /></audio>
            <?php }
            ?>
                    
            <?php
            if ($_POST['pick'] == "../img/image8.jpg")
            { ?>
                <audio autoplay controls="controls"><source src="./music/titanic.mp3" type="audio/mpeg" /></audio>
            <?php }
            ?>
                    
            <?php
            if ($_POST['pick'] == "../img/image9.jpg")
            { ?>
                <audio autoplay controls="controls"><source src="./music/paris.mp3" type="audio/mpeg" /></audio>
            <?php }
            } ?>
                
                
            <?php 
            if (empty($_POST['pick']) && (!empty($_POST['imglink'])))
            { 
                $background = $_POST['imglink']; ?>
                <audio autoplay controls="controls"><source src="./music/forrest.mp3" type="audio/mpeg" /></audio>
                
                <?php
                if (!empty($_POST['musiclink']))
                { ?>
                    <audio autoplay controls="controls"><source src=$_POST['musiclink'] type="audio/mpeg" /></audio>
                <?php }
            } ?>
            
      <div class="container">
        <div id="top">
          <div>
            <br /> 
            <h1> Hello, Haiku </h1>  
          </div>
        </div>
            
        <div id="middle">
            
            <div id="border-box">
                <div class="image">
                    <p><img src="<?php echo $background; ?>" alt="Error displaying image; check url." height="342" width="342"/></p>
                </div>
                <div id="textbox">
                    <h2><span><?php echo $firstline ?><span class='spacer'></span><br /><span class='spacer'></span><?php echo $secondline ?><span class='spacer'></span><br /><span class='spacer'></span><?php echo $thirdline ?></span></h2>
                </div>
            </div>
            
            <form action="index.php" method="post">
                  <fieldset>
                      <div class="form-group">
                          <button class="btn btn-default" type="submit">
                              <span aria-hidden="true"></span>
                              Regenerate!
                          </button>
                      </div>
                  </fieldset>
            </form>
        </div>
        
        <div class="text">
            <p> Love your haiku?! </p>
            <p> Don't forget to like and share Hello, Haiku on Facebook! </p>
        </div>
        <br/>
            
        <div class="row">
            <div class="fb-like"
                data-href="https://ide50-aelfarsdottir.cs50.io" 
                data-action="like" 
                data-layout="button_count"
                data-show-faces="true">
            </div>
        </div>
        <br/>
        
        <div class="fb-share-button" data-href="https://ide50-aelfarsdottir.cs50.io" data-layout="button"></div>
        
        <div id="bottom">
           Brought to you by <a href="https://ide50-aelfarsdottir.cs50.io/">Hello, Haiku</a>. 
          <p> Copyright &copy; 2015 Hello, Haiku. All rights reserved.</p>
        </div>
      </div>
    </body>
</html>