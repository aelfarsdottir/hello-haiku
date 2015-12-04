<!DOCTYPE html>
<html>
    <head>
        <!-- http://getbootstrap.com/ -->
        <link href="../css/bootstrap.min.css" rel="stylesheet"/>
        <link href="../css/styles.css" rel="stylesheet"/>
        <title>Hello, Haiku</title>
    </head>
    
    <body>
      
        <audio autoplay controls="controls">
            <source src="../music/forrest.mp3" type="audio/mp3" />
        </audio>
        
      <div class="container">
        <div id="top">
          <div>
            <h1> Hello, Haiku </h1>  
            <!--<a href="/"><img alt="Hello, Haiku" src="../img/logo.png"/></a>-->
          </div>
        </div>

        <div id="middle">
          <p> Choose a background image for your haiku: </p>
          <br />

          <form action="haiku.php" method="post">
              <fieldset>
                  
                    <div class="img">
                     <img src="../img/image1.jpg" alt="background" width="110" height="90">
                     <input type="radio" name = "pick" class="radio" id="check2" value="../img/image1.jpg" />
                    <!-- <label for="check2">-->
                    <!--    <img src="../img/image1.jpg" alt="background" width="110" height="90">-->
                    <!--</label>-->

                     <!--<div class="desc">lavender</div>-->
                    </div>
                    
                    <div class="img">
                     <img src="../img/image12.jpg" alt="background" width="110" height="90"></a>
                     <input type="radio" name = "pick" class="radio" id="check2" value="../img/image12.jpg"/>
                     <!--<div class="desc">lagoon</div>-->
                    </div>  
                    
                    <div class="img">
                     <img src="../img/image3.jpg" alt="background" width="110" height="90"></a>
                     <input type="radio" name = "pick" class="radio" id="check2" value="../img/image3.jpg"/>
                     <!--<div class="desc">lagoon</div>-->
                    </div> 
                    
                    <div class="img">
                     <img src="../img/image4.jpg" alt="background" width="110" height="90"></a>
                     <input type="radio" name = "pick" class="radio" id="check2" value="../img/image4.jpg"/>
                     <!--<div class="desc">lagoon</div>-->
                    </div> 
                    
                    <div class="img">
                     <img src="../img/image5.jpg" alt="background" width="110" height="90"></a>
                     <input type="radio" name = "pick" class="radio" id="check2" value="../img/image5.jpg"/>
                     <!--<div class="desc">lagoon</div>-->
                    </div> 
                    
                    <div class="img">
                     <img src="../img/image6.jpg" alt="background" width="110" height="90"></a>
                     <input type="radio" name = "pick" class="radio" id="check2" value="../img/image6.jpg"/>
                     <!--<div class="desc">lagoon</div>-->
                    </div> 

                    <div class="img">
                     <img src="../img/image7.jpg" alt="background" width="110" height="90"></a>
                     <input type="radio" name = "pick" class="radio" id="check2" value="../img/image7.jpg"/>
                     <!--<div class="desc">lagoon</div>-->
                    </div> 
                      
                    <div class="img">
                     <img src="../img/image8.jpg" alt="background" width="110" height="90"></a>
                     <input type="radio" name = "pick" class="radio" id="check2" value="../img/image8.jpg"/>
                     <!--<div class="desc">lagoon</div>-->
                    </div> 
                    
                    <div class="img">
                     <img src="../img/image9.jpg" alt="background" width="110" height="90"></a>
                     <input type="radio" name = "pick" class="radio" id="check2" value="../img/image9.jpg"/>
                     <!--<div class="desc">lagoon</div>-->
                    </div>
                    
                    <br /><br /><br /><br /><br />
                    
                    <p> Or paste a link to an image and/or music of your choice:</p>
                    
                    <br />
                    
                    <div class="form-group">
                        <input autocomplete="off" autofocus class="form-group" name="imglink" placeholder="Insert image link" type="text"/>
                    </div>
                    
                    <div class="form-group">
                        <input autocomplete="off" autofocus class="form-group" name="musiclink" placeholder="Insert music link" type="text"/>
                    </div>
                    
                    <br /><br />
                    
                  <div class="form-group">
                    <button class="btn btn-default" type="submit">
                          <span aria-hidden="true"></span>
                          Generate!
                    </button>
                  </div>
              </fieldset>
          </form>
          <!--we want to submit the generate button click via POST in order to call draft.php and generate a haiku-->
          <!--<input name="myBtn" type="submit" value="Generate!" onclick="ajax_post();">-->
          <br />
        </div>
    
        <div id="bottom">
          <!-- Brought to you by <a href="http://aelfarsdottir.github.io">Hello, Haiku</a>. -->
          <p>Copyright &copy; 2015 Hello, Haiku. All rights reserved.</p>
        </div>
      </div>
    </body>
</html>