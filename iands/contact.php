
<?php
include "connect.php";


    if(isset($_POST["submit"])){
        $sender = $_POST['sender'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $message = $_POST['message'];

   $sql =  "INSERT INTO `iandscontact` VALUES ('','$sender','$email','$contact','$message')";

if (mysqli_query($conn, $sql)) {
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Thanks for Connecting');
    </script>");
 } else {
    echo "Error: " . $sql . "
" . mysqli_error($conn);
 }
   }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Lets' Connect</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- internal styling css -->
    <style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap');

* {
  margin: 0;
  box-sizing: border-box;
}

#contact {
  /* background-color: wheat; */
  display: flex;
  justify-content: center;
  align-items: center;
}

.contact-box {
  width: clamp(100px, 90%, 1000px);
  margin: 80px 50px;
  display: flex;
  flex-wrap: wrap;
}

.contact-links, .contact-form-wrapper {
  width: 50%;
  padding: 8% 5% 10% 5%;
}


.contact-links {
  background-color: #1f2e43;
  background:
    radial-gradient(
      circle at 55% 92%, #426691 0 12%, transparent 12.2%
    ), 
    radial-gradient(
      circle at 94% 72%, #426691 0 10%, transparent 10.2%
    ), 
    radial-gradient(
      circle at 20% max(78%, 350px), #263a53 0 7%, transparent 7.2%
    ), 
    radial-gradient(
      circle at 0% 0%, #263a53 0 40%, transparent 40.2%
    ), 
    #1f2e43;
  border-radius: 10px 0 0 10px;
}

.contact-form-wrapper {
  /* background-color:#008E89; */
  border-radius: 0 10px 10px 0;
  background: #f12711;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #f5af19, #f12711);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #f5af19, #f12711); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
 /* border-radius: 5px; */
}

@media only screen and (max-width: 800px) {
  .contact-links, .contact-form-wrapper {
    width: 100%;
  }
  
  .contact-links {
    border-radius: 10px 10px 0 0;
  }
  
  .contact-form-wrapper {
    border-radius: 0 0 10px 10px;
  }
}

@media only screen and (max-width: 400px) {
  .contact-box {
    width: 95%;
    margin: 8% 5%;
  }
}

h2 {
  font-family: 'Arimo', sans-serif;
  color: #fff;
  font-size: clamp(30px, 6vw, 60px);
  letter-spacing: 2px;
  text-align: center;
  transform: scale(.95, 1);
}

.links {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  padding-top: 50px;
}

.link {
  margin: 10px;
  cursor: pointer;
}

img {
  width: 45px;
  height: 45px;
  filter: 
    hue-rotate(220deg)
    drop-shadow(2px 4px 4px #0006);
  transition: 0.2s;
  user-select: none;
}

img:hover {
  transform: scale(1.1, 1.1);
}

img:active {
  transform: scale(1.1, 1.1);
  filter: 
    hue-rotate(220deg)
    drop-shadow(2px 4px 4px #222)
    sepia(0.3);
}

.form-item {
  position: relative;
}

label, input, textarea {
  font-family: 'Poppins', sans-serif;
}

label {
  position: absolute;
  top: 10px;
  left: 2%;
  color: #999;
  font-size: clamp(14px, 1.5vw, 18px);
  pointer-events: none;
  user-select: none;
}

input, textarea {
  width: 100%;
  outline: 0;
  border: 1px solid #ccc;
  border-radius: 4px;
  margin-bottom: 20px;
  padding: 12px;
  font-size: clamp(15px, 1.5vw, 18px);
}

input:focus+label, 
input:valid+label, 
textarea:focus+label, 
textarea:valid+label {
  font-size: clamp(13px, 1.3vw, 16px);
  color: #777;
  top: -20px;
  transition: all .225s ease;
}

.submit-btn {
  background-color: #fd917e;
  filter: drop-shadow(2px 2px 3px #0003);
  color: #fff;
  font-family: "Poppins",sans-serif;
  font-size: clamp(16px, 1.6vw, 18px);
  display: block;
  padding: 12px 20px;
  margin: 2px auto;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  user-select: none;
  transition: 0.2s;
  background: #8E2DE2;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #4A00E0, #8E2DE2);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #4A00E0, #8E2DE2); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  
}

.submit-btn:hover {
  transform: scale(1.1, 1.1);
}

.submit-btn:active {
  transform: scale(1.1, 1.1);
  filter: sepia(0.5);
}

@media only screen and (max-width: 800px) {
  h2 {
    font-size: clamp(40px, 10vw, 60px);
  }
}

@media only screen and (max-width: 400px) {
  h2 {
    font-size: clamp(30px, 12vw, 60px);
  }
  
  .links {
    padding-top: 30px;
  }
  
  img {
    width: 38px;
    height: 38px;
  }
}

/* #ef9273 - buttons
#fef9f8 - bg
#0d0d0d - text */
.contact_banner{
  /* background-color:#008E89; */
  background: url('https://is1-2.housingcdn.com/01c16c28/dc5d2ba66b69400c46fcf6560dcd4e72/v0/fs/3_bhk_apartment-for-sale-volagerekallahalli-Bangalore-others.jpg') no-repeat;
  height: 50vh;
  display: grid;
  align-items: center;
  background-size: cover;

  padding: 1em;
}
.contact_banner h1{
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
  font-weight: bold;
  border-image: linear-gradient(135deg, #2a7fff 50%,orange 50%) 15/10px;
}
.contact_banner i{
  margin:5px;
}

</style>

  </head>
  <body>
    <!-- including header file -->
  <?php include "header.php" ?>
    <!-- contact form banner -->
  <section class="contact_banner">
<h1>
  Lets' Connect
  <i class="fa-solid fa-chevron-right"></i>
</h1>
</section>

<!-- contact form -->
<section id="contact">
  <div class="contact-box">
    <div class="contact-links">
      <h2>CONTACT</h2>
      <div class="links">
        <div class="link">
          <a><img src="https://i.postimg.cc/m2mg2Hjm/linkedin.png" alt="linkedin"></a>
        </div>
        <div class="link">
          <a><img src="https://i.postimg.cc/YCV2QBJg/github.png" alt="github"></a>
        </div>
        <div class="link">
          <a><img src="https://i.postimg.cc/W4Znvrry/codepen.png" alt="codepen"></a>
        </div>
        <div class="link">
          <a><img src="https://i.postimg.cc/NjLfyjPB/email.png" alt="email"></a>
        </div>
      </div>
    </div>
    <div class="contact-form-wrapper">
      <form action="" method="POST">
        <div class="form-item">
          <input type="text" name="sender" required>
          <label>Name:</label>
        </div>
        <div class="form-item">
          <input type="text" name="email" required>
          <label>Email:</label>
        </div>
        <div class="form-item">
          <input type="text" name="contact" required>
          <label>Contact Number:</label>
        </div>
        <div class="form-item">
          <textarea class="" name="message" required></textarea>
          <label>Message:</label>
        </div>
        
        <button class="submit-btn" type="submit" name="submit">Send</button>  
      </form>
    </div>
  </div>
</section>


<!-- including footer file -->
<?php include "footer.php" ?>

  </body>
</html>

<?php

?>

