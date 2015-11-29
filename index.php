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
            <a href="/"><img alt="Hello, Haiku" src="../views/logo2.png"/></a>
          </div>
        </div>

        <div id="middle">
          <p></p><img src="http://img11.deviantart.net/8f9c/i/2009/101/d/3/fuji_cherry_blossoms__by_zeroai.jpg" alt="Cherry Blossoms" height="342" width="342"><p></p>
          <br></br>
          <form action="haiku.php" method="post">
              <fieldset>
                  <div class="form-group">
                      <button class="btn btn-default" type="submit">
                          <span aria-hidden="true"></span>
                          Generate!
                      </button>
                      
                    <div class="img">
                     <img src="../views/image1.jpg" alt="background" width="110" height="90"></a>
                     <input type="radio" name = "pick" class="radio" id="check1" value="../views/image1.jpg" />
                     <div class="desc">lavender</div>
                    </div>   
                    
                    <div class="img">
                     <img src="../views/image2.jpg" alt="background" width="110" height="90"></a>
                     <input type="radio" name = "pick" class="radio" id="check2" value="../views/image2.jpg"/>
                     <div class="desc">lagoon</div>
                    </div>  
                    
                    <div class="img">
                     <img src="../views/image3.jpg" alt="background" width="110" height="90"></a>
                     <input type="radio" name = "pick" class="radio" id="check2" value="../views/image3.jpg"/>
                     <div class="desc">lagoon</div>
                    </div> 
                    
                    <div class="img">
                     <img src="../views/image4.jpg" alt="background" width="110" height="90"></a>
                     <input type="radio" name = "pick" class="radio" id="check2" value="../views/image4.jpg"/>
                     <div class="desc">lagoon</div>
                    </div> 
                    
                    <div class="img">
                     <img src="../views/image5.jpg" alt="background" width="110" height="90"></a>
                     <input type="radio" name = "pick" class="radio" id="check2" value="../views/image5.jpg"/>
                     <div class="desc">lagoon</div>
                    </div> 
                    
                    <div class="img">
                     <img src="../views/image6.jpg" alt="background" width="110" height="90"></a>
                     <input type="radio" name = "pick" class="radio" id="check2" value="../views/image6.jpg"/>
                     <div class="desc">lagoon</div>
                    </div> 

                    <div class="img">
                     <img src="../views/image7.jpg" alt="background" width="110" height="90"></a>
                     <input type="radio" name = "pick" class="radio" id="check2" value="../views/image7.jpg"/>
                     <div class="desc">lagoon</div>
                    </div> 
                    
                  </div>
              </fieldset>
          </form>
          <!--we want to submit the generate button click via POST in order to call draft.php and generate a haiku-->
          <!--<input name="myBtn" type="submit" value="Generate!" onclick="ajax_post();">-->
          <br></br>
        </div>

        <div id="bottom">
          <!-- trying to add images -->
          
        
          <!--
          <div class="img">
           <a target="_blank" href="klematis2_big.htm"><img src="../views/image2.jpg" alt="Klematis" width="110" height="90"></a>
           <div class="desc">Add a description of the image here</div>
          </div>
          <div class="img">
           <a target="_blank" href="klematis3_big.htm"><img src="klematis3_small.jpg" alt="Klematis" width="110" height="90"></a>
           <div class="desc">Add a description of the image here</div>
          </div>
          <div class="img">
           <a target="_blank" href="klematis4_big.htm"><img src="klematis4_small.jpg" alt="Klematis" width="110" height="90"></a>
           <div class="desc">Add a description of the image here</div>
          </div>
          -->

          <!-- Brought to you by <a href="http://aelfarsdottir.github.io">Hello, Haiku</a>. -->
          <p>Copyright &copy; 2015 Hello, Haiku. All rights reserved.</p>
        </div>
      </div>
    </body>
</html>