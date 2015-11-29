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
        
      <div class="container">
        <div id="top">
          <div>
            <h1> Hello, Haiku </h1>  
            <!--<a href="/"><img alt="Hello, Haiku" src="../views/logo.png"/></a>-->
          </div>
        </div>

        <div id="middle">
          <p> Choose a background image for your haiku. </p>
          <br />
  
          
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
        
        
        
        
        <div class="row">

            <div class="fb-like"
              data-href="https://ide50-tuonghuynh.cs50.io" 
              data-action="like" 
              data-layout="box_count"
              data-show-faces="false"></div>
        </div>
        <br/>
        
        <div class="fb-share-button" data-href="https://ide50-tuonghuynh.cs50.io" data-layout="button"></div>

    
        <div id="bottom">
          <!-- Brought to you by <a href="http://tuonghuynh.github.io">Hello, Haiku</a>. -->
          <p>Copyright &copy; 2015 Hello, Haiku. All rights reserved.</p>
        </div>
      </div>
    </body>
</html>