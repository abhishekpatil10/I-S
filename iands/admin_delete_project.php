
<?php include "connect.php";
?>



<?php

header('Location:admin_all_projects.php'); 
    $id=$_GET['prop_id'];
$sql = "DELETE FROM `iandsdata` WHERE `prop_id`=$id";
if (mysqli_query($conn, $sql)) {
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Project Deleted Succesfully');
    </script>");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>