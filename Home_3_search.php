<?php
include('connection_car.php');
?>
<?php
$sql1 = "SELECT * FROM yearcar";
$query1 = mysqli_query($conn1, $sql1);
// if ($query2 === false){
//     die("ERROR: Could not connect. " . mysqli_connect_error());
// }
// else 
// //echo "connect succress";
// 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home_dataTable</title>

    <script src="assets/jquery.min.js"></script>
    <script src="assets/Car.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <link href="assets/bootstrap.min.css" rel="stylesheet">
    </script>
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
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
    <div class="w3-sidebar w3-bar-block w3-light-grey w3-card" style="width:20%;">
        <a class="w3-bar-item w3-red">Menu</a>
        <a href="Home_1_page.php" class="w3-bar-item w3-button"><i class="fas fa-home"></i> Profile</a>
        <a href="Home_2_edit.php" class="w3-bar-item w3-button"><i class="fas fa-pen"></i> Edit Profile</a>
        <a href="Home_3_search.php" class="w3-bar-item w3-button"><i class="fas fa-search"></i> Search</a>
    </div>

    <div style="margin-left:18%; padding-top :7%;">

        <div class="container my-6">

            <h3>ตารางแสดงรายละเอียดของรถ</h3><br>
            <form   method="post">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="year">ปีที่ผลิต</label>
                        <select name="year_car" id="year" class="form-control" required>
                            <option value="">เลือกปีที่ผลิตที่ต้องการ</option>
                            <?php while ($result = mysqli_fetch_assoc($query1)) : ?>
                                <option value="<?= $result["YearID"] ?>"><?= $result["Year"] ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="brand">ยี่ห้อของรถ</label>
                        <select name="brand_car" id="brand" class="form-control" required>
                            <option value="">เลือกยี่ห้อที่ต้องการ</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="model">รุ่น</label>
                        <select name="model_car" id="model" class="form-control" required>
                            <option value="">เลือกรุ่นที่ต้องการ</option>
                        </select>
                    </div>
                    <div class="form-group col-md-5">
                        <button  type="submit" name="submit" id="submit" class="button1"><i class="fas fa-search" value="submit"></i>
                            ค้นหารายละเอียด
                        </button><br><br>
                    </div>
                </div>
            </form>

        </div>
            <?php 
             if(isset($_POST['submit'])) {

                $year = $_POST['year_car'];
                $brand = $_POST['brand_car'];
                $model = $_POST['model_car'];
                // echo $model;
                $sqls = "SELECT * FROM Cardetail WHERE Year_ID = $year AND Brand_ID = '$brand' AND Model_ID = '$model'";
                $querys = mysqli_query($conn1, $sqls);

                echo "<div class='container'>";
                echo "<div class='row'>";
                echo "<div class='col-md-12'>";
                echo "<table border='3' align='center' class='table '>";
                echo "<tr align='center' bgcolor='#CCCCCC' class='tr1'>
                      <td>ปี</td>
                      <td>ยี่ห้อรถ</td>
                      <td>รุ่นของรถ</td>
                      <td>ราคาเริ่มต้น</td>
                      </tr>";
                if (mysqli_num_rows($querys) == NULL) {
                    echo '<script language="javascript">';
                    echo 'alert("ไม่มีข้อมูลสำหรับรถที่คุณค้นหา");';
                    echo 'window.location.href="Home_3_Search.php";';
                    echo '</script>';
                } else {
    
    
                    foreach ($querys as $value) {
                        echo "<tr align='center'bgcolor='#FFFFFF'>";
                        echo "<td>" . $value["Year"] .  "</td> ";
                        echo "<td>" . $value["Brand"] .  "</td> ";
                        echo "<td>" . $value["Model"] .  "</td> ";
                        echo "<td>" . $value["Price"] .  "</td> ";
                        echo "</tr>";
                    }
                    echo "</table>";
                    echo '<hr>';
                }
                
            }
            ?>



    </div>


</body>

</html>

<?php
mysqli_close($conn);
?>