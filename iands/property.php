<html>
<head>
  <title>Property</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    @import url('https://fonts.googleapis.com/css2?family=PT+Serif&family=Rowdies&display=swap');
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    .prop{
        padding: 1em;
        /* display: grid;
        grid-template-columns: auto;
        place-content: center;
        place-items: flex-start; */
        /* background-color: wheat ; */
    }
    .prop .prop_card{
        display: grid;
        grid-template-columns: auto auto;
        place-content: center;
        place-items: center;
        margin: 1em;
    }
    .prop img{
        width: 350px;
        height: 350px;
        margin: 1em;
        margin-right: 3em;
        box-shadow: 2px 2px 3px black;
    }

    .prop img:hover{
        cursor: pointer;
        transform: scale(1.01);
        box-shadow: 8px 8px 5px black;
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

iframe{
  margin: 1em;
}
#mouse-circle {
    position: absolute;
    width: 35px;
    height: 35px;
    margin: -32px 0 0 -32px;
    /* border: 1px solid #0f1c64; */
    border-radius: 50%;
    pointer-events: none;
    background-color: orangered;
    
}

.prop_more{
  padding: 1em;
        display: grid;
        grid-template-columns: auto;
        justify-content: space-around;
}
.prop_more_one{
  display: flex;
  justify-content: flex-start;
        margin: 1em;
        align-items: center;  

}
.prop_more h2{
    text-transform: uppercase;
        margin: 0;
        font-size: 25px;
        /* text-align: center; */
        font-family: 'Rowdies', cursive;
        text-shadow: 2px 2px white;
        margin: 1em;
        border-bottom: 5px solid black;
        width: fit-content;

}
.prop_more_one h4{
        text-align: justify;
        /* margin-bottom:2em; */
        font-family: 'PT Serif', serif;
        width: 400px;

        }
      
#pro_loc_head{
  text-transform: uppercase;
        margin: 0;
        font-size: 25px;
        /* text-align: center; */
        font-family: 'Rowdies', cursive;
        text-shadow: 2px 2px white;
        margin: 1em;
        border-bottom: 5px solid black;
        width: fit-content;
}

       @media screen and (max-width:950px) {
         .prop .prop_card{
           display: grid;
           grid-template-columns: auto;
           align-items: center;
         }
         .prop .prop_more{
           display: grid;
          place-content: center;
          }
         .prop .prop_more_one{
           display: grid;
         }
       }

       @media screen and (max-width:500px) {
         .prop .prop_card img{width: 250px;height: 250px;}
         .prop .prop_card .prop_card_info{
          width: 250px;
        }
        .prop .prop_card .prop_card_info p{
          width: 250px;
        }
      
        .prop .prop_more .prop_more_one{
          display: grid;
          place-items: center;
        }
        .prop .prop_more .prop_more_one img{
          width: 250px;
          height: 250px;
        }
        .prop .prop_more h2{
          font-size: 20px;
        }
        .prop .prop_more .prop_more_one h4{
          width: 250px;
        }
        iframe{
          width: 285px;
          margin: 1em 0;
        }
        #pro_loc_head{
          font-size: 20px;
        }
      }
</style>
    </head>
    <body>
<?php include "header.php" ?>

<?php
include "connect.php";

?>
<?php
 error_reporting(0);
	$id = $_GET["prop_id"];

	// $result = mysqli_connect($host,$uname,$pwd) or die("Could not connect to database." .mysqli_error());
	// mysqli_select_db($result,$db_name) or die("Could not select the databse." .mysqli_error());
	$image_query = mysqli_query($conn,"select * from iandsdata where $id = prop_id");
	while($rows = mysqli_fetch_array($image_query))
	{
        $prop_cover = $rows['prop_cover'];
        $prop_title = $rows['prop_title'];
		$prop_area = $rows['prop_area'];
        $prop_type = $rows['prop_type'];
        $prop_desc = $rows['prop_desc'];
		$prop_hall = $rows['prop_hall'];
        $prop_bed = $rows['prop_bed'];
        $prop_kitchen = $rows['prop_kitchen'];

        $prop_hall_desc = $rows['prop_hall_desc'];
        $prop_bed_desc = $rows['prop_bed_desc'];
        $prop_kitchen_desc = $rows['prop_kitchen_desc'];
        
	?>


<section class='prop'>
 <div class='prop_card'>
    <img src='<?php echo $prop_cover;?>'  onclick="window.open(this.src)"/>
    <div class='prop_card_info'>
      <h1><?php echo $prop_title; ?></h1>
      <h3><?php echo $prop_area; ?></h3>
      <h4><?php echo $prop_type; ?></h4>
      <p><?php echo $prop_desc; ?></p>
      <a href='contact.php' class='cta'>
      <span>Connect Now</span>
      <svg width='13px' height='10px' viewBox='0 0 13 10'>
        <path d='M1,5 L11,5'></path>
        <polyline points='8 1 12 5 8 9'></polyline>
      </svg>
    </a>
    </div>
   
</div>

<div class="prop_more">
        <h2>Living Room Details <i class="fa-solid fa-arrow-right"></i></h2>
        <div class="prop_more_one">  
      
        <img src='<?php echo $prop_hall;?>' onclick="window.open(this.src)" />
        <h4><?php echo $prop_hall_desc?></h4>
        </div>
        <h2>Bed Room Details <i class="fa-solid fa-arrow-right"></i> </h2>
        <div class="prop_more_one"> 
        <img src='<?php echo $prop_bed;?>' onclick="window.open(this.src)"/>
        <h4><?php echo $prop_bed_desc?></h4>
        </div>
        <h2>Kitchen Room Details <i class="fa-solid fa-arrow-right"></i></h2>
        <div class="prop_more_one"> 
        <img src='<?php echo $prop_kitchen;?>' onclick="window.open(this.src)"/>
        <h4><?php echo $prop_kitchen_desc?></h4>
        </div>
      
    </div>
    <?php
        echo '<h2 id="pro_loc_head">Project Location  <i class="fa-solid fa-arrow-right"></i></h2>';
        echo '<iframe width="1200" height="450" frameborder="0" src="https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=' . str_replace(",", "", str_replace(" ", "+", $prop_area)) . '&z=14&output=embed"></iframe>';
       ?>
</section>

<?php
	}
	?>


<?php include "footer.php"?>



</body>

</html>


