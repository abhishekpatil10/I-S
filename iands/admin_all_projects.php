<!DOCTYPE html>
<html>
<head>
  <title>All Projects</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/fontawesome.min.css" integrity="sha512-8Vtie9oRR62i7vkmVUISvuwOeipGv8Jd+Sur/ORKDD5JiLgTGeBSkI3ISOhc730VGvA5VVQPwKIKlmi+zMZ71w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

<style>

table{
    width:100%;
}

thead{
  font-weight: bold;
  color: blue;
  text-transform: capitalize;
}
 td{
  padding: 2px;
}
label {
    display: inline-flex;
    margin-bottom: .5rem;
    margin-top: .5rem;   
}

#action_btns{
  background-color: red;
}

#action_btns button{
  width: 50px;
  margin: 0.8em 0;
  text-decoration: none;
  font-weight: bold;
  color: wheat;
}

</style>
</head>
<body>

<?php include "connect.php";
?>
<style>
   .add_project_banner{
  background-color:#008E89;
  height: 50vh;
  display: grid;
  align-items: center;
  background-position: center;
  padding: 1em;
}
.add_project_banner h1{
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
.add_project_banner i{
  margin:5px;
}
.add_project_banner a{
    
    color: orange;
}
.project_search{
  padding: 2em;
}
.project_search input{
  display: block;
  margin: 0 auto;
  width: 500px;
  padding: 5px;
}
</style>
<section class="add_project_banner">
<h1>
  All Projects 
  <i class="fa-solid fa-chevron-right"></i>
  <a href="admin_panel.php">Back to Admin</a>
</h1>
</section>
<div class="project_search">
<input type="text" onkeyup="myFunction()" id="myInput" placeholder="SEARCH BY PROJECT TITLE"/>
</div>
<div class="container" style="font-size: 10px;margin:1em 0">
	<div class="row">
	<table id="example" class="table table-striped table-bordered" >
        <thead>
        <tr>
        <th>prop_id</th>
    <th>prop_title</th>
    <th>prop_area</th>
    <th>prop_type</th>
    <th>prop_bio</th>
    <th>prop_desc</th>
    <th>prop_cover</th>
    <th>prop_hall</th>
    <th>prop_hall_desc</th>
    <th>prop_bed</th>
    <th>prop_bed_desc</th>
    <th>prop_kitchen</th>
    <th>prop_kitchen_desc</th>
    <th>Action</th>
  </tr>
        </thead>


        <tbody>
        <?php
$respond = "SELECT * FROM iandsdata";
			$getMCase = mysqli_query($conn,$respond);
			if($getMCase && mysqli_num_rows($getMCase)>0){
				$r = 1;
				while($tData = mysqli_fetch_array($getMCase)){
          ?>

        <tr id="cust_body">
    
        <td ><?php echo $tData['prop_id'];?></td>
    <td ><?php echo $tData['prop_title'];?></td>
    <td ><?php echo $tData['prop_area'];?></td>
    <td ><?php echo $tData['prop_type'];?></td>
    <td >
      <textarea rows="5" cols="11" disabled>
      <?php echo $tData['prop_bio'];?>
        </textarea></td>
    <td >
      <textarea rows="5" cols="11" disabled>
      <?php echo $tData['prop_desc'];?>
        </textarea></td>
        <td >
      <textarea rows="5" cols="10" disabled>
      <?php echo $tData['prop_cover'];?>
        </textarea></td>
    <td >
      <textarea rows="5" cols="10" disabled>
      <?php echo $tData['prop_hall'];?>
        </textarea></td>
    <td >
      <textarea rows="5" cols="11" disabled>
      <?php echo $tData['prop_hall_desc'];?>
        </textarea></td>
        <td >
      <textarea rows="5" cols="10" disabled>
      <?php echo $tData['prop_bed'];?>
        </textarea></td>
    <td >
      <textarea rows="5" cols="11" disabled>
      <?php echo $tData['prop_bed_desc'];?>
        </textarea></td>
        <td >
      <textarea rows="5" cols="10" disabled>
      <?php echo $tData['prop_kitchen'];?>
        </textarea></td>
    <td >
      <textarea rows="5" cols="11" disabled>
      <?php echo $tData['prop_kitchen_desc'];?>
        </textarea></td>
        <td style="padding-top:1em;display:grid;grid-gap:10px">
  <a href="admin_delete_project.php?prop_id=<?php echo $tData["prop_id"]; ?>" style="background-color: blue;padding:1em;text-decoration:none;color:white;font-weight:bold;border-radius:6px;width:fit-content;" onclick="alert('Project Deleted Successfully');"><i class="fas fa-trash"></i></a>
  <a href="admin_edit_project.php?prop_id=<?php echo $tData["prop_id"]; ?>" style="background-color: blue;padding:1em;text-decoration:none;color:white;font-weight:bold;border-radius:6px;width:fit-content;"><i class="fas fa-pen"></i></a></td>
      
</tr>

  <?php
  }
}
  ?>
  
      </tbody>
    </table>
  </div>





</body>
</html>



<script>
  // '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
$(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();
</script>

<script>
  function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("example");
  tr = table.getElementsByTagName("tr");
  for (i = 1; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {

      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
