<?php
include './inc/conn.php';
include './inc/userFORM.php';

$sql='SELECT * FROM users ORDER BY RAND() LIMIT 3';
$result=mysqli_query($conn,$sql);
$users=mysqli_fetch_all($result,MYSQLI_ASSOC);



?>

<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="./css/style.css">

    <title>Document</title>
</head>
<body>
<div style="color:black" class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 fw-normal">بطولة كلية علوم الحاسب</h1>
        <p class="lead fw-normal">قم بادخال بياناتك وكون فريقك للمنافسة الان!</p>
        <p class="lead fw-normal">التسجيل متاح حتى:</p>
        <p class="lead fw-normal" id="demo"></p>

        </div>
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
</div>

<div class="container">
    <form class="mb-3" action="index.php" method="POST">
  
        <div class="mb-3">
            لطلب الانضمام:<br>
            <label style="color:white" for="exampleInputEmail1" class="form-label">الاسم الاول</label>
            <input type="text" name="Fname" class="form-control" id="exampleInputEmail1" value="<?php echo $firstname; ?>" aria-describedby="emailHelp">
            <div style="color:red" id="emailHelp" class="form-text"><?php echo $errs['firstnameerr']; ?>
            </div>
        </div>

        
        <div class="mb-3">
                    <label style="color:white" for="exampleInputEmail1" class="form-label">الاسم الثاني</label>
                    <input type="text" name="Lname" class="form-control" id="exampleInputEmail1" value="<?php echo $lastname; ?>" aria-describedby="emailHelp">
                    <div style="color:red" id="emailHelp" class="form-text"><?php echo $errs['lastnameerr']; ?>
                </div>
        </div>

        <div class="mb-3">
            <label  style="color:white" for="exampleInputEmail1" class="form-label">الايميل</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="<?php echo $email; ?>" aria-describedby="emailHelp">
            <div style="color:red" id="emailHelp" class="form-text"><?php echo $errs['emailnameerr']; ?></div>
        </div>
          
        <button type="submit" name="submit" class="btn btn-primary">ارسال</button>
   
</form>          

<div class="loader-con">
<div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
</div>
</div>
<div class="d-grid gap-2 col-6 mx-auto my-5" id="serchbutt">
<button type="button" class="btn btn-primary" >
البحث عن فريق
</button>
</div> 
<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">تم ايجاد الفريق</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="dis" >
    <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo htmlspecialchars($firstname) .' '. htmlspecialchars($lastname) . '(انت) '; ?></h5>
                    <p class="card-text"><?php echo htmlspecialchars($email) ; ?></p>
                </div>
            </div>
        </div>
        <?php foreach($users as $user): ?> 
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title" id="modalLabel"><?php echo htmlspecialchars($user['fname']) .' '. htmlspecialchars($user['lname']); ?></h5>
                    <p class="card-text"><?php echo htmlspecialchars($user['email']) ; ?></p>
                </div>
            </div>
        </div>
        <?php endforeach; ?> 
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="refTeam">رفض</button>
        <button type="button" class="btn btn-primary">انضمام</button>
      </div>
    </div>
  </div>
</div>









   
</div>


    <script src="./js/bootstrap.bundle.min.js"></script>
<script src="./js/script.js"></script>

</body>
</html>