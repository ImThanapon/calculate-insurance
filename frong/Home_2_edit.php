<?php
// include('connection_profile.php');
?>
<?php
// $sql1 = "SELECT * FROM provinces";
// $query1 = mysqli_query($conn1, $sql1);
// if ($query1 === false){
//     die("ERROR: Could not connect. " . mysqli_connect_error());
// }
// else 
// echo "connect succress";
// 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile_edit</title>

    <script src="assets/jquery.min.js"></script>
    <script src="assets/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <link href="assets/bootstrap.min.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/2f85583488.js" crossorigin="anonymous"></script>
    <style>
        <?php include('style.css'); ?>
    </style>
</head>

<body>
    <div class="w3-sidebar w3-bar-block   w3-card" style="width:20%; ">
    <a class="w3-bar-item w3-red" >Menu</a>
        <a href="Home_1_page.php" class="w3-bar-item w3-button"><i class="fas fa-home"></i> Profile</a>
        <a href="Home_2_edit.php" class="w3-bar-item w3-button"><i class="fas fa-pen"></i> Edit Profile</a>
        <a href="Home_3_search.php" class="w3-bar-item w3-button"><i class="fas fa-search"></i> Search</a>
    </div>

    <div style="margin-left:18%; padding-top :7%;">

        <div class="container my-6">

            <h3>แก้ไขโปรไฟล์</h3>
            <form>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>ชื่อ</label>
                        <input class="form-control" type="text" id="fname" name="fname">
                    </div>
                    <div class="form-group col-md-4">
                        <label>นามสกุล</label>
                        <input class="form-control" type="text" id="lname" name="lname">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>เบอร์โทรศัพท์</label>
                        <input class="form-control" type="text" id="Phone" name="Phone" maxlength="10">
                    </div>
                    <div class="form-group col-md-4">
                        <label>E-mail</label>
                        <input class="form-control" type="text" id="email" name="email">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label>เกี่ยวกับฉัน</label>
                        <textarea class="form-control" type="text" id="about" name="about"></textarea>
                    </div>
                </div>
                <div class="form-row">

                    <div class="form-group col-md-4">
                        <label for="province">จังหวัด</label>
                        <select name="province_id" id="province" class="form-control">
                            <option value="">เลือกจังหวัด</option>
                            <?php while ($result = mysqli_fetch_assoc($query1)) : ?>
                                <option value="<?= $result["id"] ?>"><?= $result["name_th"] ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="amphure">อำเภอ</label>
                        <select name="amphure_id" id="amphure" class="form-control">
                            <option value="">เลือกอำเภอ</option>
                        </select>
                    </div>

                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="district">ตำบล</label>
                        <select name="district_id" id="district" class="form-control">
                            <option value="">เลือกตำบล</option>
                        </select>
                    </div>
                </div><br>
                
                   
            </form>






</body>

</html>
<?php
// $dom = new DOMDocument('1.0', 'iso-8859-1');

// $dom->validateOnParse = true;
// $dom->load('register.php');
// // $element = $dom->appendChild(new DOMElement('div'));
// // $attr = $element->setAttributeNode(
// //         new DOMAttr('id', 'my_id'));
// // $element->setIDAttribute('id', true);

// $tagname = $dom->getElementById('brand')->tagName;
// echo "<script type='text/javascript'>alert('$tagname');</script>";

//echo $tagname;
mysqli_close($conn1);
?>