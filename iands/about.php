<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>About US</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <style>
         
         .about_banner{
 
  padding: 1em;
  background: url('https://is1-2.housingcdn.com/01c16c28/dc5d2ba66b69400c46fcf6560dcd4e72/v0/fs/3_bhk_apartment-for-sale-volagerekallahalli-Bangalore-others.jpg') no-repeat;
  height: 50vh;
  display: grid;
  align-items: center;
  background-size: cover;
}
.about_banner h1{
  /* background-color: wheat; */
  width: fit-content;
  padding: 1em;
  border-radius: 10px ;
  /* margin-left: 1em; */
  display: flex;
  align-items: center;
  border-style: solid;
  padding: 1em;
  color: white;
  border-image: linear-gradient(135deg, #2a7fff 50%,orange 50%) 15/10px;
}
.about_banner i{
  margin:5px;
}
.about_content{
    padding: 1em;
    display: flex;
    justify-content: space-around;
    align-items: center;
}
.about_content .about_content_one{
    width: 50%;
}
.about_content .about_content_two img{
    width: 500px;
    /* height: 350px;/ */
}
     </style>
    </head>
    <body>
        <?php include "header.php"?>
        <section class="about_banner">
<h1>
  About Us
  <i class="fa-solid fa-chevron-right"></i>
</h1>
</section>
    
<section class="about_content">
    <div class="about_content_one">
        <h3>
👋 CodePen is a social development environment. At its heart, it allows you to write code in the browser, and see the results of it as you build. A useful and liberating online code editor for developers of any skill, and particularly empowering for people learning to code. We focus primarily on front-end languages like HTML, CSS, JavaScript, and preprocessing syntaxes that turn into those things.

</h3>
    </div>
    <div class="about_content_two">
    <img src="web_images/nav_bg.png"/>
    </div>
</section>
<section class="about_content">
<div class="about_content_two">
    <img src="web_images/nav_bg.png"/>
    </div>
    <div class="about_content_one">
        <h3>
👋 CodePen is a social development environment. At its heart, it allows you to write code in the browser, and see the results of it as you build. A useful and liberating online code editor for developers of any skill, and particularly empowering for people learning to code. We focus primarily on front-end languages like HTML, CSS, JavaScript, and preprocessing syntaxes that turn into those things.

</h3>
    </div>
   
</section>
<?php include "footer.php"?>
    </body>
</html>