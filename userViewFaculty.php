<!-- File created by Kyle Welch -->
<!-- This file is mostly HTML front-end work. The View Faculty Page. Doesn't really require a connection to the db,
but I added it just for show. No admin accessibility (can't edit or delete). -->
<!-- I had used a Bootstrap drag-and-click generator, as my CSS skills are very rusty plus it saved a lot of time. Here is a link,
and it will be provided in the final writeup https://mobirise.com/ -->
<?php
require_once('connect.php');
session_start();

$resultQuery = mysqli_query($mysqli, "SELECT * FROM professor");
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">

    <title>WUCS - Students</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
</head>
<body>
<section class="menu cid-rpZCvGTzeF" once="menu" id="menu2-2">
    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-4" href="http://localhost/410webapp/userIndex.php">WU Computer Science<br></a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="http://localhost/410webapp/userViewStudents.php">
                        Students</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="http://localhost/410webapp/userViewFaculty.php">Faculty</a>
                </li>
                <li class="navitem">
                    <a class ="nav-link link text-black display-4" href="http://localhost/410webapp/userViewClasses.php">Classes</a>
                </li></ul>
        </div>
    </nav>
</section>
<style>
    table
    {
        width: 100%;
        background-color: #017572;
    }
    th, td
    {
        text-align: center;
        padding: 10px;
    }
    th
    {
        color: black;
    }
    tr
    {
        color: black;
    }
    button
    {
        background-color: #017572;
        border: 1px solid black;
        text-align: center;
        font-size: 12pt;
        margin-right: auto;
        margin-left: auto;
    }
    button:hover
    {
        background-color: #017572;
        color: #ADABAB;
    }
    a
    {
        color: black;
    }
    a:hover
    {
        color: #ADABAB;
    }
</style>
<section class="engine"></a></section><section class="tabs3 cid-rpZOWSJbS0" id="tabs3-6">
    <table>
        <tr>
            <u><th>Name</th> <th>Office</th> <th>Phone</th><th>Email</th></u>
        </tr>
        <?php
        while($user_data = mysqli_fetch_array($resultQuery))
        {
            echo "<tr>";
            echo "<td><a href='viewFacultyProfile.php?id=$user_data[id]'>".$user_data['name']."</a></td>";
            echo "<td>".$user_data['office']."</td>";
            echo "<td>".$user_data['phone']."</td>";
            echo "<td>".$user_data['email']."</td>";
        }
        ?>
    </table>
</body>
</html>

