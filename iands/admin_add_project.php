<?php session_start();
include "connect.php";
if(!isset($_SESSION['name']))
	header("location: admin_login.php");
else{
    ?>
<?php include "connect.php";

    if(isset($_POST["submit"])){
        // $prop_id  = $_POST['prop_id'];
        $prop_title = $_POST['prop_title'];
        $prop_area = $_POST['prop_area'];
        $prop_type = $_POST['prop_type'];
        $prop_bio = $_POST['prop_bio'];
        $prop_desc = $_POST['prop_desc'];
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


    $prop_hall_desc = $_POST['prop_hall_desc'];
    $prop_bed_desc = $_POST['prop_bed_desc'];
    $prop_kitchen_desc = $_POST['prop_kitchen_desc'];

   $sql =  "INSERT INTO `iandsdata` VALUES ('','$prop_title','$prop_area','$prop_type','$prop_bio','$prop_desc','$main_img','$main_img1','$prop_hall_desc','$main_img2','$prop_bed_desc','$main_img3','$prop_kitchen_desc')";

   if (mysqli_query($conn, $sql)) {
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Project Added Succesfully');
    window.location.href='all_projects.php';
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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add Project</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/fontawesome.min.css" integrity="sha512-8Vtie9oRR62i7vkmVUISvuwOeipGv8Jd+Sur/ORKDD5JiLgTGeBSkI3ISOhc730VGvA5VVQPwKIKlmi+zMZ71w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .admin_form{
        display: grid;
        place-content: center;
        place-items: center;
        background-color: wheat;
        padding: 7px;
    }
    .admin h2{
        background-color: wheat;
        padding: 10px;
        text-align: center;
        font-size: 30px;
        border-bottom: 5px solid saddlebrown;
        
        font-weight: bold;
        /* width: 100%; */
    }
 .admin_form form{
     display: grid;
     border:2px solid black; 
     padding: 10px;   
     box-shadow: 5px 5px white;
     background-color: wheat;
        border-radius: 5px;
    }
 form label{
     margin: 1em;
 }
 form input{
     margin: 0 1em;
     padding: 1em;
     width: 500px;
 }
 form button{
     width: fit-content;
     padding: 10px 30px;
     display: block;
     margin: 1em auto;
     border-radius: 10px;
     border: none;
     outline: none;
 }
 form button:hover{
     cursor: pointer;
     border: 2px solid crimson;
     background-color: transparent;
 }

 .admin_banner{
  background-color:#008E89;
  height: 50vh;
  display: grid;
  align-items: center;
  background-position: center;
  padding: 1em;
}
.admin_banner h1{
  /* background-color: wheat; */
  width: fit-content;
  padding: 1em;
  border-radius: 10px ;
  /* margin-left: 1em; */
  display: flex;
  align-items: center;
  border-style: solid;
  padding: 1em;
  font-size: 25px;
  border-image: linear-gradient(135deg, #2a7fff 50%,orange 50%) 15/10px;
}
.admin_banner i{
  margin:5px;
}
.admin_banner a{
    /* text-decoration: none; */
    color: orange;
}

</style>
  </head>
  <body>

<section class="admin">
<section class="admin_banner">
<h1>
  Add Project 
  <i class="fa-solid fa-chevron-right"></i>
  <a href="admin_panel.php">Back to Admin</a>
</h1>
</section>
    <div class="admin_form">
<form action="" method="POST" enctype="multipart/form-data">

<label for="name">Property Title : </label>
    <input type="text" placeholder="property_title" name="prop_title" required/> 
    <label for="name">Property Area : </label>  
    <input type="text" placeholder="property_area" name="prop_area" required/>   
    <label for="name">Property Type : </label> 
    <input type="text" placeholder="property_type" name="prop_type" required/>  
    <label for="name">Property Small Description :  </label> 
    <input type="text" placeholder="property_bio" name="prop_bio" required/>
    <label for="name">Property Large Description :  </label> 
    <input type="text" placeholder="property_description" name="prop_desc" required/>
    <label for="name">Property cover image : </label>  
    <input type="file" name="prop_cover" required/>
    <label for="name">Property Living Room Image : </label>  
    <input type="file" name="prop_hall" required/>
    <label for="name">Property Living Room Description :  </label> 
    <input type="text" placeholder="property_living_room" name="prop_hall_desc" required/>
    <label for="name">Property Bedroom Image: </label>  
    <input type="file" name="prop_bed" required/>
    <label for="name">Property Bedroom Description :  </label> 
    <input type="text" placeholder="property_bed_room" name="prop_bed_desc" required/>
    <label for="name">Property Kitchen Image : </label>  
    <input type="file" name="prop_kitchen" required/>
    <label for="name">Property Kitchen Description :  </label> 
    <input type="text" placeholder="property_kitchen_room" name="prop_kitchen_desc" required/>
    <button type="submit" name="submit">Submit</button>
</form>
    </div>
</section>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

  </body>
</html>


<?php
}
?>

