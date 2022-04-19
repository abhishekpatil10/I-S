<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>I&S Solutions</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


<!--FONT AWESOME-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  *, *:after, *:before {
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
}
body{
margin:0;
overflow-x:hidden !important;
box-sizing:border-box;
font-family: 'Source Sans Pro', sans-serif;
}

.border-shape {
background: #ffbe00 none repeat scroll 0 0;
color: #fff;
display: block;
height: 3px;
left: 0;
margin: 20px auto;
position: relative;
right: 0;
text-align: center;
top: 0;
width: 80px;
}

.border-shape::before {
background: #ffbe00 none repeat scroll 0 0;
bottom: 0;
content: "";
height: 1px;
left: 80px;
margin: 0 auto;
position: absolute;
text-align: center;
top: 1px;
width: 100px;
}

.border-shape::after {
background: #ffbe00 none repeat scroll 0 0;
bottom: 0;
content: "";
height: 1px;
margin: 0 auto;
position: absolute;
right: 80px;
text-align: center;
top: 1px;
width: 100px;
}


/*FOOTER*/
footer{
width:100%;
background-color: #6254e7;
/* background: rgba( 74, 144, 226, 0.25 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 4px );
-webkit-backdrop-filter: blur( 4px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 ); */
color:black;
}

.top_header{
padding:2rem;
display:flex;
align-items:center;
justify-content:center;
position:relative;
}

.top_header section{
display:flex;
align-items:center;
justify-content:center;
width:100%;
}

.top_header span{
padding:0 1rem;
}

.top_header .fa{
color:#ffbe00;
font-size:35px;
}

footer .border-shape {
width: 40%;
}

footer .border-shape::before {
width: 100%;
left:120px;
}

footer .border-shape::after {
width: 100%;
right:120px;
}

footer .bottom_content section{
padding:1.5rem 2rem;
display:flex;
align-items:center;
justify-content:Center;
}

.bottom_content a{
margin:0 20px;
color:rgba(255,255,255,0.7);
transition:0.5s;
color:black;

}

.bottom_social a{
  font-size: 32px;
  color: white;
}
.bottom_content a:hover{
color:#ffbe00;
}


.copyright{
padding:0.8em 0;
background-color:#1e1e1e;
text-align:center;
color:rgba(255,255,255,0.7);
font-size:12px;
}

.foot-links a{
  text-decoration: none;
  color:white;
}

@media (max-width:820px){
.top_header{
padding:1rem;
display:block;
}

.top_header section{
margin:40px 0;
align-items:left;
justify-content:left;
}
footer .bottom_content section{
padding:1rem;
display:block;
}
footer .bottom_content section a{
padding:1rem;
font-size:12px;
margin:0 5px;
display:inline-block;
}
}


@media screen and (max-width:400px) {
  footer .border-shape {
width: 20%;
}

}


</style>
  </head>
<body>
<!--FOOTER-->
<section class="footer">
<footer>
<div class="top_header">
<section>
<span><i class="fa fa-map-marker"></i></span>
<span>Street, full address, state/province, country, pincode</span>
</section>
<section>
<span><i class="fa fa-phone"></i></span>
<span>(00) 0000 0000</span>
</section>
<section>
<span><i class="fa fa-envelope"></i></span>
<span>info@websitename.com</span>
</section>
</div>
<span class="border-shape"></span>
<div class="bottom_content">
<section class="bottom_social">
<a href="#"><i class="fa-brands fa-facebook"></i></a>
<a href="#"><i class="fa-brands fa-instagram"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
<a href="#"><i class="fa-brands fa-linkedin"></i></a>
<a href="#"><i class="fa-brands fa-whatsapp"></i></a>
</section>
<section class="foot-links">
<a href="#">Home</a>
<a href="#">About us</a>
<a href="#">All Projects</a>
<a href="#">Contact Us</a>
</section>
</div>
<div class="copyright">
Copyright © 2021 websitename - All rights reserved 
</div>

</footer>

</body>
</html>