<!-- File created by Kyle Welch -->
<!-- This file is mostly HTML front-end work. The student homepage the my app. Doesn't really require a connection to the db,
but I added it just for show. This allows the user three options for the students. They can either view the students enrolled in this dept,
 add a new student (admin only), or they can change a student (admin only).-->
<!-- I had used a Bootstrap drag-and-click generator, as my CSS skills are very rusty plus it saved a lot of time. Here is a link,
and it will be provided in the final writeup https://mobirise.com/ -->

<?php
    require_once('connect.php');
    session_start();
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
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-4" href="http://localhost/410webapp/index.php">WU Computer Science<br></a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="http://localhost/410webapp/students.php">
                        Students</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="http://localhost/410webapp/faculty.php">Faculty</a>
                </li>
                <li class="navitem">
                    <a class ="nav-link link text-black display-4" href="http://localhost/410webapp/classes.php">Classes</a>
                </li></ul>
        </div>
    </nav>
</section>
<section class="engine"></a></section><section class="tabs3 cid-rpZOWSJbS0" id="tabs3-6">
    <div class="container">
        <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">
            Students in the CS Department</h2>
        <h3 class="mbr-section-subtitle  display-5 align-center mbr-light mbr-fonts-style">
            As an Admin here, you are given two options. You can either view all the current students (you are granted access to also change and/or delete) the existing students within
        the department. Or, you can add a new student into the record.</h3>
    </div>
    <div class="container-fluid">
        <div class="row tabcont">
            <ul class="nav nav-tabs pt-3 mt-5" role="tablist">
                <li class="nav-item mbr-fonts-style"><a class="nav-link active display-7" role="tab" data-toggle="tab" href="http://localhost/410webapp/viewStudents.php">
                        View</a></li>
                <li class="nav-item mbr-fonts-style"><a class="nav-link  active show display-7" role="tab" data-toggle="tab" href="http://localhost/410webapp/addStudent.php" aria-selected="true">
                        Add</a></li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="row px-1">
            <div class="tab-content">
                <div id="tab1" class="tab-pane in active mbr-table" role="tabpanel">
                    <div class="row tab-content-row">
                        <div class="col-xs-12 col-md-6">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>

