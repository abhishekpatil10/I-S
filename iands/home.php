<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>I&S Solutions</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.3.1/swiper-bundle.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.3.1/swiper-bundle.min.js"></script>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab&family=Rochester&family=RocknRoll+One&display=swap');

  .home-head{
    background: url("https://livewp.site/wp/md/ewebot/wp-content/uploads/sites/64/2019/12/header_wave-bg.png");
    background-position: bottom center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 110vh;
    width: 100vw;
padding: 1em;
margin-bottom: 2em;
  }
  .home-head h1{
    text-align: center;
    color: white;
    margin: 0.5em;
    font-size: 40px;
  font-family: 'RocknRoll One', sans-serif;
  text-transform: uppercase;
  
  }
  .home-head .home-head-box {
    display: grid;
    grid-template-columns: auto auto auto auto;
    justify-content: space-around;
    align-items: center;
    margin: 2em 0;
  }
  .home-head .home-head-box .home-head-box-one{
    width: 250px;
    padding: 1em;
    /* background-color: crimson; */
    border-radius: 10px;
    background: rgba( 74, 144, 226, 0.25 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 4px );
-webkit-backdrop-filter: blur( 4px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );
  }
  .home-head .home-head-box .home-head-box-one h5,h3{
    margin: 10px 0;
  }
  .home-head .home-head-box .home-head-box-one img{
    width: 175px;
    height: 150px;
    display: block;
    margin: 10px auto;
}

.home-one{
  height: 100vh;
  /* width: 100vw; */
  background: url("https://livewp.site/wp/md/ewebot/wp-content/uploads/sites/64/2019/12/header_wave-bg.png");
    background-position: bottom center;
    background-repeat: no-repeat;
    background-size: cover;
    padding: 1em;
    display: flex;
    justify-content: space-around;
    align-items: center;
}

@media screen and (max-width:1035px) {
  .home-one{
    display: grid;
    height: 155vh;
    
  }
  .home-head .home-head-box{
    display: grid;
    grid-template-columns: auto auto;
  }
}


@media screen and (max-width:550px) {
  .home-one .home-one-left{
    width: fit-content;
  }
  .home-one .home-one-left{
  text-align: center;
  }
  
  .home-one .home-one-left h3{
    font-size:25px !important;
  }
  
  .home-one .home-one-left h1{
    font-size:30px !important;
  }
  .home-one .home-one-left h5{
    text-align: justify;
    font-size: 14px !important;
    width: 250px !important;
  }
  .home-one .home-one-right img{
    width: 275px !important;
    height: 275px !important;
  }

  .home-one .home-one-left .home-one-left-button{
  margin: 2em 0;
  display: grid;
  grid-template-columns: auto !important;
  grid-gap: 20px;
}

  .home-head{
    height: 1040vh;
    margin-bottom: 0;
  }
  .home-head .home-head-box{
    display: grid;
    grid-template-columns: auto;
    grid-gap: 20px;
  }
}



.home-one .home-one-left h3{
  font-size: 35px;
  text-transform: uppercase;
  font-family: 'RocknRoll One', sans-serif;
}
.home-one .home-one-left h2{
  text-transform: uppercase;
  font-family: 'Roboto Slab', serif;
}

.home-one .home-one-left h1{
  font-size: 55px;
  font-family: 'RocknRoll One', sans-serif;
  text-transform: uppercase;
}

.home-one .home-one-left h5{
  /* font-size: 55px; */
  margin: 1em 0;
  text-transform: uppercase;
  width: 500px;
  font-family: 'Roboto Slab', serif;
}

.home-one .home-one-left .home-one-left-button{
  margin: 2em 0;
  display: grid;
  grid-template-columns: auto auto;
  grid-gap: 20px;
  width: fit-content;
}
.home-one .home-one-left #home-connect{
  /* background-color: #f29111; */
  background: #f12711;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #f5af19, #f12711);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #f5af19, #f12711); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  text-decoration: none;
  padding: 15px;
  color: white;
  border-radius: 5px;
  /* margin: 2em; */
  text-transform: uppercase;
  font-family: 'RocknRoll One', sans-serif;
}


.home-one .home-one-left #home-connect:hover{
  background: transparent;
  /* border: 3px solid #4A00E0; */
  border-image: linear-gradient(45deg, rgba(100,57,242,1) 0%, rgba(242,55,55,1) 100%);
      border-image-slice: 10;
      border-style: solid;
  padding: 13px;
}

.home-one .home-one-left #home-more{
  text-transform: uppercase;
  background: #8E2DE2;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #4A00E0, #8E2DE2);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #4A00E0, #8E2DE2); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  text-decoration: none;
  padding: 15px;
  color: white;
  border-radius: 5px;
  font-family: 'RocknRoll One', sans-serif;
}

.home-one .home-one-left #home-more:hover{
  background: transparent;
  /* border: 3px solid #4A00E0; */
  border-image: linear-gradient(45deg, rgba(100,57,242,1) 0%, rgba(242,55,55,1) 100%);
      border-image-slice: 10;
      border-style: solid;
  padding: 13px;
}

.home-one .home-one-right img{
  width: 400px;
  height: 400px;
}

.cursor {
  position: fixed;
  width: 40px;
  height: 40px;
  margin-left: -20px;
  margin-top: -20px;
  border-radius: 50%;
  border: 2px solid #fbab7e;
  transition: transform 0.3s ease;
  transform-origin: center center;
  pointer-events: none;
  z-index: 1000;
}

.grow,
.grow-small {
  transform: scale(4);
  background: white;
  mix-blend-mode: difference;
  border: none;
}

.grow-small {
  transform: scale(2);
}

@media screen and (max-width:500px) {
  .cursor{
    display: none ;
  }
  .home-one .home-one-left .home-one-left-button{
  margin: 2em auto;
  }
}

</style>
    </head>
    <body>
    <div class="cursor"></div>  
    <!-- header file -->
        <?php include "header.php"?>
        <!-- slider -->

<section class="home-one">
  <div class="home-one-left cursor-scale small">
      <h3>Welcome</h3>
      <h2>to The</h2>
      <h1>I&S Solutions</h1>
      <h5>We are Result oriented and Roi driven full fledged
        Creative Digital Marketing Agency<br/> in Mumbai, India. </h5>
        <div class="home-one-left-button">
          <a href="#" id="home-more">More About Us</a>
          <a href="#" id="home-connect">Connect Now</a>
        </div>
  </div>
  <div class="home-one-right cursor-scale small" data-aos="fade-left">
  <img src="https://d35zmchr4x6j29.cloudfront.net/resources/img/blog_content_image/cc10fcd4940b5f7448d64ab3b9527852"/>
  </div>
</section>
<style>
  .home-about{
    padding:1em 2em;
  }
  .home-about h1{
    font-size: 50px;
    font-family: 'RocknRoll One', sans-serif;
  text-transform: uppercase;
  text-align: center;
  }
  .home-about .home-about-one{
    margin:2em 0em;
    display: flex;
    justify-content: space-around;
    /* align-items: center; */
  }
  .home-about .home-about-one-left img{
    width: 600px;
    height: 400px;
  }
  
  .home-about .home-about-one-right{
    margin:0 3em;
  }
  .home-about-one-right h4{
    font-family: 'RocknRoll One', sans-serif;
  text-transform: uppercase;
  text-align: justify;
  font-size: 14px;
  margin-bottom: 2em;
  }
  .home-about-one-right h3{
    margin: 20px;
    font-size: 30px;
    font-family: 'RocknRoll One', sans-serif;
  text-transform: uppercase;
  
  }
  .home-about-one-right a{
    text-transform: uppercase;
  background: #8E2DE2;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #4A00E0, #8E2DE2);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #4A00E0, #8E2DE2); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  text-decoration: none;
  padding: 15px;
  color: white;
  border-radius: 5px;
  font-family: 'RocknRoll One', sans-serif;
  }

  .home-about .home-about-one-right a:hover{
  background: transparent;
  /* border: 3px solid #4A00E0; */
  border-image: linear-gradient(45deg, rgba(100,57,242,1) 0%, rgba(242,55,55,1) 100%);
      border-image-slice: 10;
      border-style: solid;
  padding: 13px;
  color: black;
}


@media screen and (max-width:1160px) {
  .home-about .home-about-one{
    display: grid;
    place-content: center;
    place-items: center;
  }
}

@media screen and (max-width:500px) {

  .home-about .home-about-one .home-about-one-left img{
    width: 300px;
    height: 300px;
  }
  .home-about .home-about-one-right{
    margin: 0;
  }
  .home-about .home-about-right h1{
    font-size:40px;
  }
  .home-about .home-about-one-right h3{
    font-size:20px;
  }
}
</style>
<!-- about -->
<section class="home-about">
<div class="home-about-right ">
    <h1 >About Us</h1>
   
  </div>
  <div class="home-about-one">
  <div class="home-about-one-left cursor-scale" data-aos="fade-right">
  <img src="https://neyonix.com/wp-content/uploads/2021/05/who-we-are-ab.png"/>
</div>  
<div class="home-about-one-right">
<h3>Full Stack Digital Marketing Services</h3>
  <h4>
Boosts Your Digital Traffic!
Crez means growth and Vatic (Sanskrit) means prediction through digital data. 
Crezvatic Pvt. Ltd. is a results and ROI driven Full Fledged web design & development, digital/ Internet marketing agency along with 15 years of experience in Contact center sales and support in Mumbai, India. Powering digital dreams & building future for many businesses across the Globe.Digital marketing agency in Mumbai
</h4>
<a href="#">Know More</a>
</div>

  </div>
</section>
<!-- projects section -->

<style>
    @import url('https://fonts.googleapis.com/css2?family=PT+Serif&family=Rowdies&display=swap');
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    .prop{
        padding: 1em;
        display: grid;
        grid-template-columns: auto;
        place-content: center;
        place-items: center;
        /* background-color: wheat ; */
    }
    .prop .prop_card{
        display: flex;
        margin: 1em;
        align-items: center;  
       
    }
    .prop img{
        width: 350px;
        height: 350px;
        margin: 1em;
        margin-right: 3em;
        box-shadow: 8px 8px 5px #ccc;
    }

    .prop img:hover{
        cursor: pointer;
        transform: scale(1.01);
        box-shadow: 8px 8px 5px white;
    }
    .prop .prop_card .prop_card_info{
        width: 500px;
    }
    .prop_card_info p{
        text-align: justify;
        margin-bottom:2em;
        font-family: 'PT Serif', serif;
        width: 400px;
    }
    .prop_card_info h1{
        text-transform: uppercase;
        margin: 0;
        font-size: 35px;
        font-family: 'Rowdies', cursive;
    }
    .prop_card_info h3{
        margin: 10px 0;
        font-family: 'PT Serif', serif;
    }
    
    .prop_card_info h4{
        margin: 10px 0;
        font-family: 'PT Serif', serif;
    }

.prop_card_info a {
  text-decoration: none;
  color: inherit;
}

.prop_card_info .cta {
  position: relative;
  margin:auto;
  padding: 19px 22px;
  transition: all 0.2s ease;

}
.prop_card_info .cta:before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  border-radius: 28px;
  background: rgba(255, 171, 157, 0.5);
  width: 56px;
  height: 56px;
  transition: all 0.3s ease;
}
.prop_card_info .cta span {
  position: relative;
  font-size: 14px;
  line-height: 18px;
  font-weight: 900;
  letter-spacing: 0.25em;
  text-transform: uppercase;
  vertical-align: middle;
}
.prop_card_info .cta svg {
  position: relative;
  top: 0;
  margin-left: 10px;
  fill: none;
  stroke-linecap: round;
  stroke-linejoin: round;
  stroke: #111;
  stroke-width: 2;
  transform: translateX(-5px);
  transition: all 0.3s ease;
}
.prop_card_info :hover:before {
  width: 100%;
  background: #ffab9d;
}
.prop_card_info .cta:hover svg {
  transform: translateX(0);
}
.prop_card_info .cta:active {
  transform: scale(0.96);
}

#mouse-circle {
    position: absolute;
    width: 25px;
    height: 25px;
    margin: -32px 0 0 -32px;
    /* border: 1px solid #0f1c64; */
    border-radius: 50%;
    pointer-events: none;
    background-color: orangered;
    /* opacity: 0.5; */
}

.all_project_banner{
  background-color:#008E89;
  height: 50vh;
  display: grid;
  align-items: center;
  background-position: center;
  padding: 1em;
}
.all_project_banner h1{
  width: fit-content;
  border-style: solid;
  padding: 1em;
  border-image: linear-gradient(135deg, #2a7fff 50%,orange 50%) 15/10px;
}

@media screen and (max-width:500px) {
  
  .prop .prop_card{
    display: grid;
    
  }
  .prop .prop_card img{
    width: 250px;
  }
  .prop .prop_card .prop_card_info{
    width: 250px;
    margin-left: 1em;
  }
  .prop .prop_card .prop_card_info p{
    width: 250px;
  }
  .home_project h1{
    font-size: 25px !important;
  }
}
.home_project{
  /* background-color: wheat; */
  padding: 1em;
  margin-bottom: 2em;
}
.home_project h2{
  text-align: center;
    font-size: 40px;
  font-family: 'RocknRoll One', sans-serif;
  text-transform: uppercase;
}
.home_project #all_proj{
  display: block;
  margin: 0 auto;
  background-color: #051367;
  width: fit-content;
  border-radius: 8px;
  padding: 1em 2em;
  
}
.home_project #all_proj a{
  text-decoration: none;
  color: white;
  font-size: 18px;
  font-weight: bold;
}
.home_project #all_proj:hover{
  cursor: pointer;
  background-image: linear-gradient(to right, #eb3941, #f15e64, #e14e53, #e2373f);  box-shadow: 0 5px 15px rgba(242, 97, 103, .4);
}

@media screen and (max-width:500px) {
  .home_project h2{
    font-size: 30px;
  }
  .prop .prop_card img{
    margin: 1em 0;
  }
}
</style>




<section class="home_project">
  <h2>Our Projects</h2>
<?php include "connect.php";

$respond = "SELECT * FROM iandsdata ORDER BY prop_id DESC LIMIT 3";
			$getMCase = mysqli_query($conn,$respond);
			if($getMCase && mysqli_num_rows($getMCase)>0){
				$r = 1;
				while($tData = mysqli_fetch_array($getMCase)){
					// if($r==1)

echo "<section class='prop'>";
  echo "<div class='prop_card' data-aos='fade-right'>
    <img class='cursor-scale' src='{$tData['prop_cover']}'/>".
    "<div class='prop_card_info'>
      <h1>{$tData['prop_title']}</h1>
      <h3>{$tData['prop_area']}</h3>
      <h4>{$tData['prop_type']}</h4>
      <p>{$tData['prop_bio']}</p>
      <a href='property.php?prop_id={$tData['prop_id']}' class='cta'>
      <span>Learn More</span>
      <svg width='13px' height='10px' viewBox='0 0 13 10'>
        <path d='M1,5 L11,5'></path>
        <polyline points='8 1 12 5 8 9'></polyline>
      </svg>
    </a>
    </div>".
"</div>";

echo "</section>";

if($r==3){
						echo '</div>';
						$r = 0;
					}
					
					$r++;
				}
			}
			else{
				echo '<div class="row">';
				echo "<div class='col-sm-12 col-md-12 clearfix'><p>&nbsp;</p><h1 style='text-align:center;margin:1em'>Currently No Projects Available . </h1></div>";
				echo '</div>';
			}	
		?>	
    <div id="all_proj">
<a href="all_projects.php">All Projects</a>
    </div>
</section>

<!-- perks & benefits -->
<style>
  .perks-benefits{
  background: url("https://livewp.site/wp/md/ewebot/wp-content/uploads/sites/64/2019/12/header_wave-bg.png");
    background-position: bottom center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 180vh;
    width: 100vw;
padding: 1em;
margin-bottom: 2em;
  }
  .perks-benefits .perk-head h1{
    text-align: center;
    color: white;
    margin: 0.5em;
    font-size: 40px;
  font-family: 'RocknRoll One', sans-serif;
  text-transform: uppercase;
  }

/* CARDS */

.cards {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.card {
  margin: 20px;
  padding: 20px;
  width: 500px;
  min-height: 180px;
  display: grid;
  align-items: center;
  place-items: center;
  grid-template-rows: 20px 50px 1fr 50px;
  border-radius: 10px;
  box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.25);
  transition: all 0.2s;
}

.card:hover {
  box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.4);
  transform: scale(1.01);
}

.card__link,
.card__exit,
.card__icon {
  position: relative;
  text-decoration: none;
  color: rgba(255, 255, 255, 0.9);
}

.card__link::after {
  position: absolute;
  top: 25px;
  left: 0;
  content: "";
  width: 0%;
  height: 3px;
  background-color: rgba(255, 255, 255, 0.6);
  transition: all 0.5s;
}

.card__link:hover::after {
  width: 100%;
}

.card__exit {
  grid-row: 1/2;
  justify-self: end;
}

.card__icon {
  grid-row: 2/3;
  font-size: 30px;
}

.card__title {
  grid-row: 3/4;
  font-weight: 400;
  color: #ffffff;
}

.card__apply {
  grid-row: 4/5;
  align-self: center;
}

.fa-arrow-right{
  font-size: 20px;
}

/* CARD BACKGROUNDS */

.card-1 {
  background: radial-gradient(#1fe4f5, #3fbafe);
}

.card-2 {
  background: radial-gradient(#fbc1cc, #fa99b2);
}

.card-3 {
  background: radial-gradient(#76b2fe, #b69efe);
}

.card-4 {
  background: radial-gradient(#60efbc, #58d5c9);
}

.card-5 {
  background: radial-gradient(#f588d8, #c0a3e5);
}

/* RESPONSIVE */

@media (max-width: 1600px) {
  .cards {
    justify-content: center;
  }
}

@media screen and (max-width:500px) {
  .perks-benefits{
    height: 325vh;
  }
}

</style>


<section class="perks-benefits">
  <div class="perk-head">
  <h1>Perks & Benefits </h1>
  </div>
  <div class="perk-two">
  <div class="cards">
    <div class="card card-1" data-aos="fade-right">
      <div class="card__icon"><i class="fa-solid fa-house"></i></div>
      <h2 class="card__title">Spacious Living</h2>
    </div>
    <div class="card card-2" data-aos="fade-left">
      <div class="card__icon"><i class="fa-solid fa-car"></i></div>
      <h2 class="card__title">Pickup & Drop Facility</h2>
    </div>
    <div class="card card-3" data-aos="fade-right">
      <div class="card__icon"><i class="fa-solid fa-house"></i></div>
      <h2 class="card__title">Spacious Living</h2>
    </div>
    <div class="card card-4" data-aos="fade-left">
      <div class="card__icon"><i class="fa-solid fa-car"></i></div>
      <h2 class="card__title">Pickup & Drop Facility</h2>
    </div>
  
    <div class="card card-5" data-aos="fade-right">
      <div class="card__icon"><i class="fa-solid fa-list-check"></i></div>
      <h2 class="card__title">Free Registeration</h2>
    </div>
     <div class="card card-1" data-aos="fade-left">
      <div class="card__icon"><i class="fa fa-hand-sparkles" aria-hidden="true"></i></div>
      <h2 class="card__title">Benefit of  PMAS</h2>
    </div>  
  </div>
  
</div>

</section>


  <!--map integration  -->
  <style>
    .home-map{
      padding: 1em;
    }
    .home-map h1{
      text-align: center;
    font-size: 40px;
  font-family: 'RocknRoll One', sans-serif;
  text-transform: uppercase;
    }
    .home-map iframe{
      display: block;
      margin: 1em auto;
    }
    @media screen and (max-width:500px) {
      .home-map h1{
        font-size: 30px;
        margin-bottom: 1em;
      }
    }
  </style>
<section class="home-map ">
  <h1>Our Presence</h1>
<iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15074.48765118418!2d73.06429221272691!3d19.168020460746906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7bfe8df4490a1%3A0x41629dfb5084dff1!2sPalava%20City%2C%20Maharashtra%20421204!5e0!3m2!1sen!2sin!4v1645898792869!5m2!1sen!2sin" width="100%  " height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section>

<!-- footer file -->
<?php include "footer.php"?>

        <script>
            const swiper = new Swiper(".swiper", {
	// Optional parameters
	direction: "horizontal",
	loop: true,
	effect: "fade",
	fadeEffect: {
		crossFade: true
	},
	speed: 400,

	// If we need pagination
	/*pagination: {
    el: '.swiper-pagination',
  },*/

	// Navigation arrows
	navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev"
	}

	// And if we need scrollbar
	/*scrollbar: {
    el: '.swiper-scrollbar',
  },*/
});

        </script>
          <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="https://unpkg.co/gsap@3/dist/gsap.min.js"></script>
  <script>
    let cursor = document.querySelector('.cursor');
let cursorScale = document.querySelectorAll('.cursor-scale'); 
let mouseX = 0;
let mouseY = 0;

gsap.to({}, 0.016, {
  repeat: -1,
  onRepeat: function(){
    gsap.set(cursor, {
      css: {
        left: mouseX,
        top: mouseY,
      }
    })
  }
});

window.addEventListener('mousemove', (e)=> {
  mouseX = e.clientX;
  mouseY = e.clientY;
})

cursorScale.forEach(link => {
  link.addEventListener('mousemove', ()=> {
    cursor.classList.add('grow'); 
    if (link.classList.contains('small')){
      cursor.classList.remove('grow');
      cursor.classList.add('grow-small');
    }
  });
  
  link.addEventListener('mouseleave', ()=> {
    cursor.classList.remove('grow');
    cursor.classList.remove('grow-small');
  });
})
  </script>
    </body>
</html>





<!-- Location : https://assets-global.website-files.com/5bfd6f4468ee7943c2d331dd/5fe1c13eca8202186db23d85_%D0%A1%D0%BD%D0%B8%D0%BC%D0%BE%D0%BA%20%D1%8D%D0%BA%D1%80%D0%B0%D0%BD%D0%B0%202020-12-22%20%D0%B2%2012.06.09.png -->