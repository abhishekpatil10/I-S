
<?php session_start();

include "connect.php";
if(!isset($_SESSION['name']))
	header("location: admin_login.php");
else{
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Panel</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <style>
      * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica,
    Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
}

.main-container {
  padding: 30px;
}

/* HEADING */

.heading {
  text-align: center;
}

.heading__title {
  font-weight: 600;
  text-transform: uppercase;
}

.heading__credits {
  margin: 10px 0px;
  color: #888888;
  font-size: 25px;
  transition: all 0.5s;
}

.heading__link {
  text-decoration: none;
}

.heading__credits .heading__link {
  color: inherit;
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
  min-height: 200px;
  display: grid;
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

    </style>
  </head>
  <body>



<div class="main-container">
  <div class="heading">
    <h1 class='heading__title'>Welcome Back , <?php if(isset($_SESSION['name'])) echo $_SESSION['name']; ?></h1>
  </div>

  <div class="cards">
    <div class="card card-1">
      <div class="card__icon"><i class="fa-solid fa-file"></i></div>
      <h2 class="card__title">All Projects</h2>
      <p class="card__apply">
        <a class="card__link" href="admin_all_projects.php">View Now <i class="fas fa-arrow-right"></i></a>
      </p>
    </div>
    <div class="card card-2">
      <div class="card__icon"><i class="fa-solid fa-plus"></i></div>
      <h2 class="card__title">Add Project</h2>
      <p class="card__apply">
        <a class="card__link" href="admin_add_project.php">Add Now <i class="fas fa-arrow-right"></i></a>
      </p>
    </div>
  
    <div class="card card-1">
      <div class="card__icon"><i class="fa-solid fa-list-check"></i></div>
      <h2 class="card__title">Contact Us Queries</h2>
      <p class="card__apply">
        <a class="card__link" href="admin_contact.php">Check Now <i class="fas fa-arrow-right"></i></a>
      </p>
    </div>
     <div class="card card-4">
      <div class="card__icon"><i class="fa fa-sign-out" aria-hidden="true"></i></div>
      <h2 class="card__title">LOGOUT</h2>
      <p class="card__apply">
        <a class="card__link" href="admin_logout.php"> Now <i class="fas fa-arrow-right"></i></a>
      </p>
    </div>  
  </div>
</div>
  </body>
</html>

<?php
}
?>
