<!DOCTYPE html>
<html>
<title>Home_page</title>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Car DataTable</title>

    <link href="assets/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        <?php include('style.css'); ?>
    </style>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/2f85583488.js" crossorigin="anonymous"></script>
    <style>
        <?php include('style.css'); ?>
    </style>
</head>

<body>

    <div class="w3-sidebar w3-bar-block w3-light-grey w3-card" style="width:20%">
        <a class="w3-bar-item w3-red" >Menu</a>
        <a href="Home_1_page.php" class="w3-bar-item w3-button"><i class="fas fa-home"></i> Profile</a>
        <a href="Home_2_edit.php" class="w3-bar-item w3-button"><i class="fas fa-pen"></i> Edit Profile</a>
        <a href="Home_3_search.php" class="w3-bar-item w3-button"><i class="fas fa-search"></i> Search</a>
    </div>

    <div style="margin-left:18%; padding-top :7%;">

        <div class="container my-6">
            <h1>Hello my page<h1>
        </div>

    </div>
    <?php
    include('connection_profile.php');
    ?>
 
</body>

</html>