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
            
            <div class="image">
                <img src = <?php echo $_POST['pick']; ?> alt="chosen background" height="342" width="342"><p></p>
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
        <div id="bottom">
           Brought to you by <a href="https://ide50-aelfarsdottir.cs50.io/">Hello, Haiku</a>. 
          <p>Copyright &copy; 2015 Hello, Haiku. All rights reserved.</p>
        </div>
      </div>
    </body>
</html>