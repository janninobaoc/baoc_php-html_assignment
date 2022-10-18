


<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handler</title>
    <link rel="stylesheet" type="text/css" href="form.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
 </head>
 <body>
 <?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
   $firstName =htmlspecialchars($_POST["firstname"]) ;
   $lastName = htmlspecialchars ($_POST["lastname"]);
   $Address = htmlspecialchars ($_POST["address"]);
   $Email = htmlspecialchars ($_POST["email"]);
   $Password = ($_POST["password"]);
   $Password2 = ($_POST["password2"]);
}

?>
   <div class="handler_background">
   
   <div class="cont_2">
      
    <h2 class= "handler">Form Handler Page</h2> 
       

    <br>
    <label style="margin-left:10%;">
    <span >Welcome: <br> <?php echo $_POST["firstname"]," ",$_POST ["lastname"] ; ?> </span>
     
    </label>
    <br>
    <label style="margin-left:10%;">
     <span>Your email address is: <br> <?php echo $_POST["email"]; ?>  </span>
     
    </label>
    <br>
    <label style="margin-left:10%;">
    <span>Your address is: <br> <?php echo $_POST["address"]; ?></span>
     
    </label>

    <br>

    <label style="margin-left:10%;">
    <span>Your Password is: <br> <?php echo $_POST["password"];?> </span>
    </label>
    <div style= "margin-left:43%;margin-top:-45%">
       <video width="500" height="530" autoplay muted>
       <source src="The Sunset.mp4" type="video/mp4">
       </video>
    </div>
    </div>
    </div>
 </body>
 </html>