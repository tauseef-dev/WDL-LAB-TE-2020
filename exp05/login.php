<!DOCTYPE html>
<html>
<head>
        <?php include 'css/style.php' ?>
        <?php include 'links/link.php' ?>
    <title>LOGIN</title>
</head>
<body>

    <section class="header">
        <video autoplay loop muted plays-inline class="video-background">
            <source src="video3.mp4" type="video/mp4">
        </video>
        <a href="index.php"><img class="logo" src="log3.png"></a>
        <a href="index.php" class="btn btnr-log">HOME</a>
        <a href="about.php" class="btn btnr-abt">ABOUT</a>
        <div class="logcenter">  
        <div class="logcontainer">   
            
            <center> <h1 style = "color: #979fcb " > LOGIN FORM </h1> </center>

            <input type="text" placeholder="Enter Username" name="username" required> 
            <br> 
              
            <input type="password" placeholder="Enter Password" name="password" required>
            <br>
              
            <button  type="submit"  href="aboutus.html" >Login</button>
            <br>  
            <input type="checkbox" checked="checked"> Remember me 
             
             
        </div>
        </div>   
    </section>

  </body>
</html>