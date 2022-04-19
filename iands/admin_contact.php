
<?php
//  error_reporting(0);
include "connect.php";

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Contact Us Queries</title>
        <meta name="description" content="">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/fontawesome.min.css" integrity="sha512-8Vtie9oRR62i7vkmVUISvuwOeipGv8Jd+Sur/ORKDD5JiLgTGeBSkI3ISOhc730VGvA5VVQPwKIKlmi+zMZ71w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body{
            padding: 2em;
        }
    </style>
</head>
    <body>
      
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contact</th>
      <th scope="col">Message</th>
    </tr>
  </thead>
  <tbody>
  <?php
$respond = "SELECT * FROM iandscontact";
			$getMCase = mysqli_query($conn,$respond);
			if($getMCase && mysqli_num_rows($getMCase)>0){
				$r = 1;
				while($tData = mysqli_fetch_array($getMCase)){
          ?>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $tData['sender'];?></td>
      <td><?php echo $tData['email'];?></td>
      <td><?php echo $tData['contact'];?></td>
      <td><?php echo $tData['message'];?></td>
    </tr>
    <?php
}
      }

?>
  </tbody>
</table>

        
</body>
</html>


