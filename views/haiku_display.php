<html>
    <head>
        <!-- http://getbootstrap.com/ -->
        <link href="../css/bootstrap.min.css" rel="stylesheet"/>
        <link href="../css/styles.css" rel="stylesheet"/>
        <title>Hello, Haiku</title>
    </head>
    
    <!--<div class="module">-->
        <!--<header>-->
            <h1><?php //echo $firstline ?></h1>
        <!--    <br />-->
            <h1><?php //echo $secondline ?></h1>
        <!--    <br />-->
            <h1><?php //echo $thirdline ?></h1>
        <!--</header>-->
    <!--</div>-->

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
        if ($_POST['pick'] == "../img/image1.jpg")
        { ?>
            <audio autoplay controls="controls"><source src="./music/Peterpan.mp3" type="audio/mpeg" /></audio>
        <?php }
        ?>
        
        <?php
        if ($_POST['pick'] == "../img/image2.jpg")
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
        if ($_POST['pick'] == "../img/image8.jpg")
        { ?>
            <audio autoplay controls="controls"><source src="./music/waterfall.mp3" type="audio/mpeg" /></audio>
        <?php }
        ?>
        
        <?php
        if ($_POST['pick'] == "../img/image9.jpg")
        { ?>
            <audio autoplay controls="controls"><source src="./music/paris.mp3" type="audio/mpeg" /></audio>
        <?php }
        ?>
        
      <div class="container">
        <div id="top">
          <div>
            <br /> 
            <h1> Hello, Haiku </h1>  
            <!--<a href="/"><img alt="Hello, Haiku" src="../views/logo.png"/></a>-->
          </div>
        </div>
            
        <div id="middle">
            <!--<br /> -->
            <!--<p></p><img src="http://www.funmayo.com/wp-content/uploads/2015/09/Top-Most-Beautiful-Nature-Wallpaper.jpg" alt="Cherry Blossoms" height="342" width="342"><p></p>-->
            <!--<br />-->
            <!--<div class="module">-->
            <!--    <header>-->
            <!--        <h3><?php echo $firstline ?><br />-->
            <!--        <?php echo $secondline ?><br />-->
            <!--        <?php echo $thirdline ?></h3>-->
            <!--    </header>-->
            <!--</div>-->
            <!--<br />-->
            
            <?php 
                if (!empty($_POST['pick']) && (empty($_POST['imglink'])))
                { 
                    $background = $_POST['pick'];
                }
                if (empty($_POST['pick']) && (!empty($_POST['imglink'])))
                { 
                    $background = $_POST['imglink'];
                }
            ?>
            <div class="image">
                <img src = <?php echo $background; ?> alt="chosen background" height="342" width="342"><p></p>
                <!--
                <img src="http://www.funmayo.com/wp-content/uploads/2015/09/Top-Most-Beautiful-Nature-Wallpaper.jpg" height="342" width="342"/>
                -->
                <h2><span><?php echo $firstline ?><span class='spacer'></span><br /><span class='spacer'></span><?php echo $secondline ?><span class='spacer'></span><br /><span class='spacer'></span><?php echo $thirdline ?></span></h2>
            </div>
            
            <br />
            
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
            Love your haiku?!
                <p> Like and share Hello, Haiku on Facebook!</p>
            </div>
            <br/>
            
            <div class="row">

            <div class="fb-like"
              data-href="https://ide50-aelfarsdottir.cs50.io" 
              data-action="like" 
              data-layout="box_count"
              data-show-faces="false"></div>
        </div>
        <br/>
        
        <div class="fb-share-button" data-href="https://ide50-aelfarsdottir.cs50.io" data-layout="button"></div>
        
        <!--<form action="screenshot.php" method="post">-->
        <!--          <fieldset>-->
        <!--              <div class="form-group">-->
        <!--                  <button class="btn btn-default" type="submit">-->
        <!--                      <span aria-hidden="true"></span>-->
        <!--                      Share a screenshot!-->
        <!--                  </button>-->
        <!--              </div>-->
        <!--          </fieldset>-->
        <!--    </form>-->
            
        <div id="bottom">
           Brought to you by <a href="https://ide50-aelfarsdottir.cs50.io/">Hello, Haiku</a>. 
          <p>Copyright &copy; 2015 Hello, Haiku. All rights reserved.</p>
        </div>
      </div>
    </body>
</html>