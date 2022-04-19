<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>All Projects</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/fontawesome.min.css" integrity="sha512-8Vtie9oRR62i7vkmVUISvuwOeipGv8Jd+Sur/ORKDD5JiLgTGeBSkI3ISOhc730VGvA5VVQPwKIKlmi+zMZ71w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    width: 0px;
    height: 0px;
    margin: -32px 0 0 -32px;
    /* border: 1px solid #0f1c64; */
    border-radius: 50%;
    pointer-events: none;
    background-color: orangered;
    /* opacity: 0.5; */
}

.all_project_banner{
  /* background-color:#008E89; */
  padding: 1em;
  background: url('https://is1-2.housingcdn.com/01c16c28/dc5d2ba66b69400c46fcf6560dcd4e72/v0/fs/3_bhk_apartment-for-sale-volagerekallahalli-Bangalore-others.jpg') no-repeat;
  height: 50vh;
  display: grid;
  align-items: center;
  background-size: cover;
}
.all_project_banner h1{
  width: fit-content;
  border-style: solid;
  padding: 1em;
  color: white;
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
}
</style>

  </head>

<body>

<?php include "header.php"?>

<section class="all_project_banner">
<h1>
  All Projects 
  <i class="fa-solid fa-chevron-right"></i>
</h1>
</section>

<section>
<div id="mouse-circle"></div>
</section>

<style>
  .all_project_search{
    background-color: cadetblue;
    padding: 1em;
    display: grid;
    grid-template-columns: auto auto auto auto;
    justify-content: center;
    align-items: center;
  }
  .all_project_search input{
    padding: 1em;
    display: block;
    margin: 1em auto;
    /* width: 500px; */
  }
</style>

<div class="all_project_search">
<input type="text" onkeyup="myFunction()" id="myInput" placeholder="PROJECT AREA"/>
<input type="text" onkeyup="myFunction()" id="myInput" placeholder="PROJECT LOCATION"/>
<input type="text" onkeyup="myFunction()" id="myInput" placeholder="PROJECT TYPE"/>
<input type="text" onkeyup="myFunction()" id="myInput" placeholder="PROJECT PRICE"/>
</div>


<script>
    document.addEventListener('DOMContentLoaded', () => {
    let mousePosX = 0,
        mousePosY = 0,
        mouseCircle = document.getElementById('mouse-circle');

    document.onmousemove = (e) => {
        mousePosX = e.pageX;
        mousePosY = e.pageY;
    }

    let delay = 6,
        revisedMousePosX = 0,
        revisedMousePosY = 0;

    function delayMouseFollow() {
        requestAnimationFrame(delayMouseFollow);

        revisedMousePosX += (mousePosX - revisedMousePosX) / delay;
        revisedMousePosY += (mousePosY - revisedMousePosY) / delay; 

        mouseCircle.style.top = revisedMousePosY + 'px';
        mouseCircle.style.left = revisedMousePosX + 'px';
    }
    delayMouseFollow();
});
</script>
  </body>
</html>

<?php
//  error_reporting(0);

include "connect.php";

?>
<?php
$respond = "SELECT * FROM iandsdata ORDER BY prop_id DESC";
			$getMCase = mysqli_query($conn,$respond);
			if($getMCase && mysqli_num_rows($getMCase)>0){
				$r = 1;
				while($tData = mysqli_fetch_array($getMCase)){
					// if($r==1)

echo "<section class='prop'>";
  echo "<div class='prop_card'>
    <img src='{$tData['prop_cover']}'/>".
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

<?php include "footer.php"?>


  
