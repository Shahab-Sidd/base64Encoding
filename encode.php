<html>
    <head>
         <meta charset="UTF-8">
        <title>Encode Using Base64</title>
        <link rel="stylesheet" type="text/css" href="enStyle.css">

        
    </head> 
    <body>
        
        
    <header>
       <nav>
           <h2>Base64 Encoding</h2>
  <ul>
    <li>
        <a class="dered" href="index.php">HOME</a>
    </li>
     <li>
        <a class="enred" href="encode.php">ENCODE</a>
    </li>
    <li>
        <a class="dered" href="decode.php">DECODE</a>
    </li>
    <li>
        <a class="dered" href="aboutus.html">About Us</a>
    </li>
    <li>
        <a class="dered" href="howto.html">How it Works</a>
    </li>
  </ul>
</nav>
        
      </header>
        <div class="divider"></div>
        <div class="clear"></div>
        <div class="intro">
            Do you have to deal with <strong>Base64</strong> format? Then this site is perfect for you! Use our super handy online tool to <strong>encode</strong> or decode your data.
        </div>
        
        <section>
            <h1>
                Encode to Base64 format
            </h1>
            <label for="input">Simply enter your data then push the encode button.
            </label>
            <form method="POST" name="text" action="encode.php">
                
                <textarea name="input" id="input" placeholder="Type (or paste) here..." spellcheck="false"></textarea>
                
                <span class="info">
                    <i class="info-logo"></i>
                    To encode binaries (like images, documents, etc.) use the file upload form a little further down on this page.
                </span>
                <br>
                <span class="option"><button class="btn3" type="submit" id="submit_text"> > ENCODE < 
                     
                       </button>
                    <label class="t1" for="output"> <strong>Encodes your data into the area below.</strong></label>
                </span>
                
            </form>
           <?php
           if(!empty($_REQUEST["input"]))
           {
           
            $udata = $_REQUEST["input"];
            $show = base64_encode($udata);
           }
           else
           {
               $show = "";
           }
        ?>
                
            <textarea placeholder="Result goes here.." name="output" id="output" spellcheck="false"><?php echo $show; ?></textarea>

        </section>
        
     
        
        
        
        
        
        
    </body>
    
    
    
    
    
</html>