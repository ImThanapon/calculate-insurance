<?php
    include('connect.php');
    $price = 0;
    $sql = "SELECT * FROM car_brand";
    $query1 = mysqli_query($conn, $sql);
    

    if(isset($_POST['submit'])){
      $y = $_POST['year'];
      $m = $_POST['model'];
      $b = $_POST['brand'];

      if($y == 0 || $m == 0 || $b == 0 ){
        echo "<script>";         
        echo "alert('กรุณากรอกข้อมูลให้ครบถ้วน')";     
        echo "</script>";
      }else{
        $nowYear = date("Y");
        $year = ($nowYear - $y ) +1;
        $strMinYaer = 'min'.((string)$year);
        $strMaxYaer = 'max'.((string)$year);
  
  
        $sqlCallData = "SELECT * FROM car_info WHERE model = '$m' ";
        $resultData = mysqli_query($conn, $sqlCallData);

        foreach ($resultData as $value) {
          $min = $value[$strMinYaer];
          $max = $value[$strMaxYaer];

          $min = str_replace(',', '', $min);
          $max = str_replace(',', '', $max);    
          $price =  ((int)$min+(int)$max)/2;
        }
        
      }

    }
    if($price != 0){
      echo "เงินทุนประกันของคุณคือ ";
      echo "<h2><span class='badge badge-danger'>", number_format($price), "</span></h2>" ;
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0-rc/css/adminlte.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&display=swap" rel="stylesheet">

    <script src="assets/jquery.min.js"></script>
    <script src="assets/script-car.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


    <style>
      body{
        font-family: 'Kanit', sans-serif;
      }
    </style>


  </head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">คำนวณเงินทุนประกันภัยรถยนต์</p>
      <?php
      
      ?>
    
      <form action="" method="post">
        <div class="text-center">
          <div class="row">
              <div class="col pt-2 text-end">
                  <h5>ยี่ห้อรถยนต์</h5>
              </div>
              <div class="col">
                  <select name="brand" id="brand" style="width: 200px" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                      <option value="0" selected>กรุณาเลือกยี่ห้อ</option>
                      <?php while ($result = mysqli_fetch_assoc($query1)) : ?>
                                <option value="<?= $result["brand_id"] ?>"><?= $result["brand"] ?></option>
                      <?php endwhile; ?>
                  </select>
              </div>
          </div>
          

          <div class="row">
              <div class="col pt-2 text-end">
                  <h5>รุ่นรถยนต์</h5>
              </div>
              <div class="col">
                  <select name="model" id="model" style="width: 200px" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                  <option value="0" >เลือกรุ่นที่ต้องการ</option>
                  </select>
          
              </div>
          </div>

          <div class="row">
              <div class="col pt-2 text-end">
                  <h5>ปีรถยนต์</h5>
              </div>
              <div class="col">
                  <select name="year" id="year" style="width: 200px" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                      <option value="0" selected>กรุณาเลือกปี</option>
                      <option value="2021">พ.ศ.2564 / ค.ศ.2021</option>
                      <option value="2020">พ.ศ.2563 / ค.ศ.2020</option>
                      <option value="2019">พ.ศ.2562 / ค.ศ.2019</option>
                      <option value="2018">พ.ศ.2561 / ค.ศ.2018</option>
                      <option value="2017">พ.ศ.2560 / ค.ศ.2017</option>
                      <option value="2016">พ.ศ.2559 / ค.ศ.2016</option>
                      <option value="2015">พ.ศ.2558 / ค.ศ.2015</option>
                      <option value="2014">พ.ศ.2557 / ค.ศ.2014</option>
                      <option value="2013">พ.ศ.2556 / ค.ศ.2013</option>
                      <option value="2012">พ.ศ.2555 / ค.ศ.2012</option>
                      <option value="2011">พ.ศ.2554 / ค.ศ.2011</option>
                      <option value="2010">พ.ศ.2553 / ค.ศ.2010</option>
                      <option value="2009">พ.ศ.2552 / ค.ศ.2009</option>
                      <option value="2008">พ.ศ.2551 / ค.ศ.2008</option>
                      <option value="2007">พ.ศ.2550 / ค.ศ.2007</option>
                      <option value="2006">พ.ศ.2549 / ค.ศ.2006</option>
                  </select>
              </div>
          </div>

      </div>
      <div class="text-center">
         <button type="submit" name="submit" class="btn btn-primary mt-3">
            คำนวณ <i class="fas fa-calculator"></i>
        </button>
      </div>
      </form>
      

      


    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

</body>
</html>
