<html>
    <head>
         <meta charset="UTF-8">
        <title>Decode Using Base64</title>
        <link rel="stylesheet" type="text/css" href="deStyle.css">

        
    </head> 
    <body>
        
        
    <header>
       <nav>
           <h2>Base64 Decoding</h2>
  <ul>
    <li>
        <a class="dered" href="index.php">HOME</a>
    </li>
    
     <li>
        <a class="dered" href="encode.php">ENCODE</a>
    </li>
    <li>
        <a class="decred" href="decode.php">DECODE</a>
    </li>
    <li>
        <a class="dered" href="encode.php">About Us</a>
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
            Do you have to deal with <strong>Base64</strong> format? Then this site is perfect for you! Use our super handy online tool to encode or <strong>decode</strong> your data.
        </div>
        
        <section>
            <h1>
                Decode to Base64 format
            </h1>
            <label for="input">Simply enter your data then push the Decode button.
            </label>
            <form method="POST" name="text" action="decode.php">
                
                <textarea name="input" id="input" placeholder="Type (or paste) here..." spellcheck="false"></textarea>
                
                <span class="info">
                    <i class="info-logo"></i>
                    To decode binaries (like images, documents, etc.) use the file upload form a little further down on this page.
                </span>
                <br>
                <span class="option"><button class="btn3" type="submit" id="submit_text"> > DECODE < 
                     
                       </button>
                    <label class="t1" for="output"> <strong> Decodes your data into the area below.</strong></label>
                </span>
                
            </form>
           <?php
            $udata = $_REQUEST["input"];
            $show = base64_decode($udata);
            
        ?>
                
            <textarea placeholder="Result goes here.." name="output" id="output" spellcheck="false" value=""><?php echo $show; ?></textarea>

        </section>
        
     
        
        
        
        
        
        
    </body>
    
    
    
    
    
</html>