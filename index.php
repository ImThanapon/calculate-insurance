<?php 

  require ('calculate.php');

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

    <style>
      body{
        font-family: 'Kanit', sans-serif;
      }
    </style>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>

      function alert_sweet(){
        Swal.fire({
          title: 'รายละเอียด',
          text: 'เงินทุนประกันภัยของคุณคือ XXX,XXX บาท',
          imageUrl: 'https://unsplash.it/400/200',
          imageWidth: 400,
          imageHeight: 200,
          imageAlt: 'Custom image',
        })
      }

      function alert_delay(){
        let timerInterval
          Swal.fire({
            title: 'กำลังคำนวณเงินทุนประกันภัย',
            html: 'กรุณารอสักครู่',
            timer: 1500,
            timerProgressBar: true,
            didOpen: () => {
              Swal.showLoading()
              const b = Swal.getHtmlContainer().querySelector('b')
              timerInterval = setInterval(() => {
                b.textContent = Swal.getTimerLeft()
              }, 100)
            },
            willClose: () => {
              clearInterval(timerInterval),
              alert_sweet();
            }
          }).then((result) => {
            /* Read more about handling dismissals below */
            if (result.dismiss === Swal.DismissReason.timer) {
              console.log('I was closed by the timer')
            }
          })
          
      }
    </script>
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
      
    
      <form action="" method="post">
        <div class="text-center">
          <div class="row">
              <div class="col pt-2 text-end">
                  <h5>ยี่ห้อรถยนต์</h5>
              </div>
              <div class="col">
                  <select style="width: 200px" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                      <option selected>กรุณาเลือกยี่ห้อ</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                  </select>
              </div>
          </div>
          

          <div class="row">
              <div class="col pt-2 text-end">
                  <h5>รุ่นรถยนต์</h5>
              </div>
              <div class="col">
                  <select style="width: 200px" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                      <option selected>กรุณาเลือกรุ่น</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                  </select>
              </div>
          </div>

          <div class="row">
              <div class="col pt-2 text-end">
                  <h5>ปีรถยนต์</h5>
              </div>
              <div class="col">
                  <select style="width: 200px" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                      <option selected>กรุณาเลือกปี</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                  </select>
              </div>
          </div>

      </div>
        <!-- <button onclick="alert()"  type="submit" class="btn btn-block btn-primary mt-3">
          คำนวณเงินทุนประกันภัย <i class="fas fa-calculator"></i>
        </button> -->
      </form>
      <button onclick="alert_delay()"  type="submit" class="btn btn-block btn-primary mt-3">
          คำนวณเงินทุนประกันภัย <i class="fas fa-calculator"></i>
      </button>

      
      <div class="social-auth-links text-center mb-1">
        <p>- OR -</p>
        
        <a class="btn btn-block btn-danger">
        <i class="fas fa-trash-alt"></i> ล้างข้อมูล
        </a>
      </div>
      <!-- /.social-auth-links -->

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

</body>
</html>
