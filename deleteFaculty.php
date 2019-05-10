<!-- File created by Kyle Welch -->
<!-- This is used to delete a professor from the database. This also looks very similar to deleteStudent.php and deleteClass.php.-->
<!-- I had used a Bootstrap drag-and-click generator, as my CSS skills are very rusty plus it saved a lot of time. Here is a link,
and it will be provided in the final writeup https://mobirise.com/ -->
<?php
// include database connection file
include_once("connect.php");

// Get id from URL to delete that user
$id = $_GET['id'];

// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM professor WHERE id=$id");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:viewFaculty.php");
?>
