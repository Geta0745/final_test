<?php
require 'conn.php';
$sql = "SELECT * FROM customer WHERE username='$_GET[username]'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Form</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <img src="logo.png" style="width: 40px;">
                </li>
            </ul>
        </div>
    </nav>

    <form method="get" action="editsuccess.php" class="container">
        <h1>Edit customer</h1>
        <hr>
        <input type="text" class="form-control" name="username" maxlength="10" placeholder="Username" value="<?php echo $row['username']?>"><br>

        <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo $row['password']?>"><br>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" value="1" id="flexRadioDefault1" <?php if($row['gender']=='1'){ echo 'checked';}?>>
            <label class="form-check-label" for="flexRadioDefault1">
              ชาย
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" value="0" id="flexRadioDefault2" <?php if($row['gender']=='0'){ echo 'checked';}?>>
            <label class="form-check-label" for="flexRadioDefault2">
              หญิง
            </label>
          </div><br>

        <select class="form-select" name="education">
            <option hidden value="">select Education</option>
            <option value="ป.ตรี" <?php if($row['education']=='ป.ตรี'){ echo 'selected';}?>>ป.ตรี</option>
            <option value="ป.โทร" <?php if($row['education']=='ป.โทร'){ echo 'selected';}?>>ป.โทร</option>
            <option value="ป.เอก" <?php if($row['education']=='ป.เอก'){ echo 'selected';}?>>ป.เอก</option>
        </select><br>

        <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $row['email']?>"><br>

        <select class="form-select" name="hobby" multiple value="<?php echo $row['hobby']?>">
            <option selected hidden value="">select Hobby</option>
            <option value="นั่ง">นั่ง</option>
            <option value="นอน">นอน</option>
            <option value="เล่นเกม">เล่นเกม</option>
            <option value="อ่านหนังสือ">อ่านหนังสือ</option>
        </select><br>
        <hr>

        <input type="submit" class="btn btn-primary" id="ตกลง">
        <input type="reset" class="btn btn-primary" id="ยกเลิก">
    </form><br>





    <footer class="bg-light text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-dark" href="#">chatty.CTM</a>
        </div>
        <!-- Copyright -->
    </footer>
</body>

</html>