<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>I&S Solutions</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    * {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  scroll-behavior: smooth;
}




.container {
  width: 100vw;
  position: relative;
background-color: #6254e7;

  display:flex;
  align-items:center;
  justify-content:space-between; 
    z-index: 1000;
  
}

.menu_overlay {
  width: -webkit-fill-available;
  height: 100vh;
  position: absolute;
  overflow: hidden;
  color: #fff;
  z-index: 100;
  transform: translateY(-100vh);
  transition: transform 0.5s ease;
  background:url("web_images/nav_bg.png") ;
  background-repeat: no-repeat;
  background-size: cover;
  display: flex;
  justify-content: center;
  align-items: center;

}

.list {
  height: 40%;
  width: 40%;
  position: relative;
  list-style: none;
  display: flex;
  align-items: center;
  justify-content: center;
}

  
.container .list button{
  display: none;
  margin:0 1em;
  width:160px;
  padding:1em;
  outline: none;
  border: none;
  background: #f12711;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #f5af19, #f12711);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #f5af19, #f12711); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
 border-radius: 5px;
}
.list li {
  height: 100px;
  width: 150px;
  padding: 20px;
}


.list a {
  padding:0.5em 1em;
  outline: none;
  border: none;
  background-color: wheat;
  text-decoration: none;
  transition: all 0.4s ease; 
  font-size: 22px;
  font-weight: bolder;
  background: -webkit-linear-gradient(#041562, #F05454);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.list a:hover{
  /* cursor: pointer; */
  /* color: black; */
  /* background-color: red; */
  /* border: 2px solid blue; */
  border-image: linear-gradient(45deg, rgba(100,57,242,1) 0%, rgba(242,55,55,1) 100%);
      border-image-slice: 10;
      border-style:solid;
}



.menu_overlay .fas {
  position: absolute;
  right: 30px;
  top: 38px;
  font-size: 2.5rem;
  transition: all 0.3s ease;
  z-index: 100;
}
.menu_overlay .fas:hover {
  color: #4b134f;
  transform: scale(1.1) rotate(180deg);

}

#menuBtn {
  display: none;
}

.landing_page {
  max-height: 100vh;
  height: 100%;
  width: 100%;
  position: relative;
}

.menu {
  position: absolute;
  right: 20px;
  top: 20px;
}

.fas {
  font-size: 2rem;
  color: #222;
}

.fas:hover {
  color: #4b134f;
}

#times{
  right:55px;
  top: 40px;
}

#times:hover{
  cursor: pointer;
}

.side_text {
  height: 10vh;
  width: 30%;
  color: #c94b4b;
  position: absolute;
  left: 0px;
  bottom: 0px;
  text-shadow: 0 0 1px #111;
  padding: 10px;
  font-size: 16px;
  color: #4b134f;
}

.main_text {
  color: #c94b4b;
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  text-shadow: 0 0 1px #111;
  display: flex;
  flex-direction: column;
}

.h2-r,
.h2-l {
  font-size: 6rem;
}

.h2-r {
  transform: rotate(270deg);
  margin-left: -100px;
  z-index: 10;
}

.h2-l {
  margin-left: 100px;
  background-color: #4b134f;
  padding: 20px;
  z-index: 0;
}


.header_menu{
  margin-top:0.2em;
  margin-right:3em;
  display:flex;
  align-items:center;
}

.header_menu button{
  margin:0 1em;
  width:160px;
  padding:1em;
  outline: none;
  border: none;
  background: #f12711;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #f5af19, #f12711);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #f5af19, #f12711); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
 border-radius: 5px;
}

.header_menu button:hover{
  cursor: pointer;
  background: transparent;
  border-image: linear-gradient(45deg, rgba(100,57,242,1) 0%, rgba(242,55,55,1) 50%);
      border-image-slice: 10;
      border-style: solid;
}

.header_menu #bars{
  margin-left: 1em;
}

.header_menu #bars:hover{
  cursor: pointer;
  color: #c94b4b;
}

@media screen and (max-width: 650px) {
  .list a {
    font-size: 1.4rem;
  }
  .container{
    width: 100vw;
  }
  .container .header_menu button {
    width: max-content;
    margin-right: 0;
    display: none;
}
  /* .menu_overlay{
    width: 50vw;
  } */
  .container .list button{
    margin-right: 0;
    display: block;
    margin-top: 10px;
  }
  .container .list #lets_connect{
    margin-top: 1em;
  }
  .list{
    display: grid;
  }
  #times{
    margin-top: 0.1em;
  }
  .menu_overlay{
    margin-top: -5px;
  }
  .list li{
    height: 50px;
  }
}



.fixed {
    position: fixed;
    top:0; left:0;
    width: 100%; 
  }

  .container a{
    text-decoration: none;
    color: black;
  }

</style>

  </head>

  <body>
<div class="container">
  <a href="home.php"><h1 style="margin:1em">Logo</h1></a>
  <div class="header_menu">
  <a href="all_projects.php"><button>All Projects</button></a>
  <a href="contact.php"> <button>Lets' Connect </button> </a>
  <i class="fas fa-bars" id="bars"></i>
  </div> <div class="menu_overlay">
    <i class="fas fa-times" id="times"></i>
    <ul class="list">
      <li><a href="admin_login.php">Admin</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="all_projects.php">Projects</a></li>
      <li><a href="contact.php">Contact</a></li>
  <button>All Projects</button>
  <button id="lets_connect">Lets' Connect</button>
      
    </ul>
  </div>

</div>

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
<title>Full Page Menu Layout</title>
<script src="https://kit.fontawesome.com/a7e9f794eb.js" crossorigin="anonymous"></script>
<script>
    let overlay = document.querySelector(".menu_overlay");
let open = document.querySelector(".fa-bars");
let close = document.querySelector(".fa-times");

open.addEventListener("click", () => {
  overlay.style.transform = "translateY(40vh)";
});

close.addEventListener("click", () => {
  overlay.style.transform = "translateY(-110%)";
});

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  $(window).scroll(function(){
  var sticky = $('.container'),
      scroll = $(window).scrollTop();

  if (scroll >=100) sticky.addClass('fixed');
  else sticky.removeClass('fixed');
});
</script>
  </body>
</html>