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
                </div>
            </div>

            <div id="middle">
            <p> Choose an image for your haiku: </p>
            <br/>

            <form action="haiku.php" method="post">
                <fieldset>
                    <div class="img">
                        <label>    
                        <input type="radio" name = "pick" class="radio" id="check1" value="../img/image1.jpg" />
                        <img src="../img/image1.jpg" alt="background" width="110" height="90">
                        </label>    
                    </div>
                    
                    <div class="img">
                        <label> 
                        <input type="radio" name = "pick" class="radio" id="check2" value="../img/image12.jpg"/>
                        <img src="../img/image12.jpg" alt="background" width="110" height="90">
                        </label> 
                    </div>  
                    
                    <div class="img">
                        <label>
                        <input type="radio" name = "pick" class="radio" id="check3" value="../img/image3.jpg"/>
                        <img src="../img/image3.jpg" alt="background" width="110" height="90">
                        </label>
                    </div> 
                    
                    <div class="img">
                        <label>
                        <input type="radio" name = "pick" class="radio" id="check4" value="../img/image4.jpg"/>
                        <img src="../img/image4.jpg" alt="background" width="110" height="90">
                        </label>
                    </div> 
                    
                    <div class="img">
                        <label>
                        <input type="radio" name = "pick" class="radio" id="check5" value="../img/image5.jpg"/>
                        <img src="../img/image5.jpg" alt="background" width="110" height="90">
                        </label>
                    </div> 
                    
                    <div class="img">
                        <label>
                        <input type="radio" name = "pick" class="radio" id="check6" value="../img/image6.jpg"/>
                        <img src="../img/image6.jpg" alt="background" width="110" height="90">
                        </label>
                    </div> 

                    <div class="img">
                        <label>
                        <input type="radio" name = "pick" class="radio" id="check7" value="../img/image7.jpg"/>
                        <img src="../img/image7.jpg" alt="background" width="110" height="90">
                        </label>
                    </div> 
                      
                    <div class="img">
                        <label>
                        <input type="radio" name = "pick" class="radio" id="check8" value="../img/image8.jpg"/>
                        <img src="../img/image8.jpg" alt="background" width="110" height="90">
                        </label>
                    </div> 
                    
                    <div class="img">
                        <label>
                        <input type="radio" name = "pick" class="radio" id="check9" value="../img/image9.jpg"/>
                        <img src="../img/image9.jpg" alt="background" width="110" height="90">
                        </label>
                    </div>
                    
                    <div class="img">
                        <label>
                        <input type="radio" name = "pick" class="radio" id="check10" value="../img/image11.jpg"/>
                        <img src="../img/image11.jpg" alt="background" width="110" height="90">
                        </label>
                    </div>
                    
                    <br /><br /><br /><br /><br /><br /><br /><br />
                    <p> Or paste a link to an image of your choice:</p>
                    <br />
                    
                    <div class="form-group">
                        <input autocomplete="off" autofocus class="form-group" name="imglink" placeholder="Insert image URL" type="text"/>
                    </div>
                    
                    <br />
                    
                    <div class="form-group">
                        <button class="btn btn-default" type="submit">
                        <span aria-hidden="true"></span>
                        Generate!
                        </button>
                   </div>
              </fieldset>
            </form>
            <br />
        </div>
    
        <div id="bottom">
           <p>Copyright &copy; 2015 Hello, Haiku. All rights reserved.</p>
        </div>
    </div>
    </body>
</html>