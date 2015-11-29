<!DOCTYPE html>
<html>
    <head>
        <!-- http://getbootstrap.com/ -->
        <link href="../css/bootstrap.min.css" rel="stylesheet"/>
        <link href="../css/styles.css" rel="stylesheet"/>
        <title>Hello, Haiku</title>
    </head>
    <body>
      <div class="container">
        <div id="top">
          <div>
            <a href="/"><img alt="Hello, Haiku" src="../views/logo.png"/></a>
          </div>
        </div>

        <div id="middle">
            <br></br>
            <p><?php echo $firstline ?></p>
            <p><?php echo $secondline ?></p>
            <p><?php echo $thirdline ?></p>
            <br></br>
            <form action="draft.php" method="post">
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