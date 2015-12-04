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
            <h1> Hello, Haiku </h1>  
            <!--<a href="/"><img alt="Hello, Haiku" src="../views/logo.png"/></a>-->
          </div>
        </div>
        <div id="middle">
          <p><?php echo $message?></p>
          <br />
        </div>
        
        <form action="index.php" method="post">
              <fieldset>
                  <div class="form-group">
                      <button class="btn btn-default" type="submit">
                          <span aria-hidden="true"></span>
                          Ok!
                    </button>
                    </div>
              </fieldset>
          </form>
          
          <div id="bottom">
          <!-- Brought to you by <a href="http://aelfarsdottir.github.io">Hello, Haiku</a>. -->
          <p>Copyright &copy; 2015 Hello, Haiku. All rights reserved.</p>
        </div>
      </div>
    </body>
</html>