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
        display: grid;
        grid-template-columns: auto;
        place-content: center;
        place-items: flex-start;
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
      

</style>



<?php include "connect.php";
//  error_reporting(0);
	$id = $_GET["prop_id"];

	// $result = mysqli_connect($host,$uname,$pwd) or die("Could not connect to database." .mysqli_error());
	// mysqli_select_db($result,$db_name) or die("Could not select the databse." .mysqli_error());
	$image_query = mysqli_query($conn,"select * from iandsdata where $id = prop_id");
	while($rows = mysqli_fetch_array($image_query))
	{
        
        $prop_id = $rows['prop_id'];
        $prop_cover = $rows['prop_cover'];
        $prop_title = $rows['prop_title'];
		$prop_area = $rows['prop_area'];
        $prop_type = $rows['prop_type'];
        $prop_desc = $rows['prop_desc'];
        $prop_bio = $rows['prop_bio'];
		// $prop_hall = $rows['prop_hall'];
        // $prop_bed = $rows['prop_bed'];
        // $prop_kitchen = $rows['prop_kitchen'];

        $prop_hall_desc = $rows['prop_hall_desc'];
        $prop_bed_desc = $rows['prop_bed_desc'];
        $prop_kitchen_desc = $rows['prop_kitchen_desc'];
        
	?>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .edit_form form{
        display: grid;grid-gap:20px;
        padding: 2em;
    }
    .edit_form input{
        padding: 1em;
    }
    .edit_form label{
        font-weight: bold;
        text-transform: uppercase;
        color: red;
    }
    .edit_form button{
        width: fit-content;
        padding: 0.5em 1em;
        display: block;
        margin: 0 auto;
    }
     h1{
        text-align: center;
        background-color: wheat;
        padding: 1em;
    }

</style>
<h1>Edit/Update Data</h1>
<div  class="edit_form">
<form action="" method="POST" enctype="multipart/form-data">
<input type="text" disabled name="prop_id" value="<?php echo $id; ?>">
<label>property_title</label>
        <input type="text" name="prop_title" value="<?php echo $prop_title;?>">
        <label>property_area</label>
        <input type="text" name="prop_area" value="<?php echo $prop_area;?>">
        <label>property_type</label>
        <input type="text" name="prop_type" value="<?php echo $prop_type;?>">
        <label>property_desc</label>
        <input type="text" name="prop_desc" value="<?php echo $prop_desc;?>">
        <label>property_bio</label>    
        <textarea type="text" name="prop_bio" rows="6"><?php echo $prop_bio;?></textarea>
        
        <label>property_cover_image</label>
        <span>you have to re-upload same file if you don't want to change image otherwise upload new image</span>
        <input type="file" name="prop_cover"/>  
        
        <!-- living room -->

        <label>property_Living Room_image</label>
        <span>you have to re-upload same file if you don't want to change image otherwise upload new image</span>
        <input type="file" name="prop_hall"/> 
             
        <label>property_hall_desc</label>
        <textarea type="text" name="prop_hall_desc" rows="6" ><?php echo $prop_hall_desc;?></textarea>
        
        <!-- bedroom -->

        <label>property_bedroom_image</label> 
        <span>you have to re-upload same file if you don't want to change image otherwise upload new image</span>
        <input type="file" name="prop_bed"/>
        
        
        <label>property_bed_desc</label>
        <textarea type="text" name="prop_bed_desc" rows="6" ><?php echo $prop_bed_desc;?></textarea>
        <!--kitchen  -->
        <label>property_prop_kitchen_image</label>
        <span>you have to re-upload same file if you don't want to change image otherwise upload new image</span>
        <input type="file"  name="prop_kitchen" />
       
        <label>property_kitchen_desc</label>
        <textarea type="text" name="prop_kitchen_desc" rows="6"><?php echo $prop_kitchen_desc;?></textarea>  
        <button type="submit" name="update">Submit</button>
</form>
</div>


<?php
	}
	?>

    

<?php  

    if(isset($_POST['update']))
    {
        // $prop_i = $_POST['prop_id'];
        $prop_title = $_POST['prop_title'];
        $prop_area = $_POST['prop_area'];
        $prop_type = $_POST['prop_type'];
        $prop_bio = $_POST['prop_bio'];
        $prop_desc = $_POST['prop_desc'];
        // $prop_cover = $_POST['prop_cover'];
        // $prop_hall = $_POST['prop_hall'];
        $prop_hall_desc = $_POST['prop_hall_desc'];
        // $prop_bed = $_POST['prop_bed'];
    $prop_bed_desc = $_POST['prop_bed_desc'];
        // $prop_kitchen = $_POST['prop_kitchen'];
    $prop_kitchen_desc = $_POST['prop_kitchen_desc'];
        
//   prop_image

    $prop_cover = $_FILES['prop_cover']['name'];
    $tmp_img_name = $_FILES['prop_cover']['tmp_name'];
    $folder='images/cover/';
    $main_img = $folder.$prop_cover;
    move_uploaded_file($tmp_img_name,$folder.$prop_cover);

    $prop_hall = $_FILES['prop_hall']['name'];
    $tmp_img_name1 = $_FILES['prop_hall']['tmp_name'];
    $folder='images/living_room/';
    $main_img1 = $folder.$prop_hall;
    move_uploaded_file($tmp_img_name1,$folder.$prop_hall);

    $prop_bed = $_FILES['prop_bed']['name'];
    $tmp_img_name2 = $_FILES['prop_bed']['tmp_name'];
    $folder='images/bedroom/';
    $main_img2 = $folder.$prop_bed;
    move_uploaded_file($tmp_img_name2,$folder.$prop_bed);

    $prop_kitchen = $_FILES['prop_kitchen']['name'];
    $tmp_img_name3 = $_FILES['prop_kitchen']['tmp_name'];
    $folder='images/kitchen/';
    $main_img3 = $folder.$prop_kitchen;
    move_uploaded_file($tmp_img_name3,$folder.$prop_kitchen);

    // end file



// 

$sqlupdate = "UPDATE `iandsdata` SET 
        prop_title = '$prop_title',
        prop_area = '$prop_area',
        prop_type = '$prop_type',
        prop_bio = '$prop_bio',
        prop_desc = '$prop_desc',
        prop_cover = '$main_img',
        prop_hall = '$main_img1',
        prop_hall_desc = '$prop_hall_desc',
        prop_bed = '$main_img2',
        prop_bed_desc = '$prop_bed_desc',
        prop_kitchen = '$main_img3',    
        prop_kitchen_desc = '$prop_kitchen_desc'
        WHERE prop_id = $prop_id";
        $query_run = mysqli_query($conn,$sqlupdate);

        if ($query_run){
            echo ("<script LANGUAGE='JavaScript'>
            window.alert('Project Edited/Updated Succesfully');
            window.location.href='all_projects.php';
            </script>");
        }
        else{
            echo "Error: " . $sqlupdate . "
" . mysqli_error($conn);
        }
    }

?>





