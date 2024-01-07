<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

<?php
/**
 * ikki o'lchamli massiv uchun
 * Ro'yxatdan o'tish formasini yasang. Ismi, Familyasi, username, password, confirm password kiritish formalari bo'lsin.
 * Talablar:
 * -Barcha inputlar to'ldirilishi shart;
 * -Ism va Familya 3 ta harfdan kam bo'lmasligi kerak;
 * -username - email bo'lishi kerak;
 * -password - 8 ta harfdan kam bo'lmasligi va oxirgi 2 harfi son bo'lishi kerak;
 * -confirm_password - password bilan bir xil qiymatda bo'lishi kerak.
 *
 * Agar ushbu shartlarni birortasi bajarilmasa, ekranga massiv ko'rinishida qaysi input
 * polyada qayshi shart najarilmaganini xabari berilsin.
 */

$result = null;
if (isset($_POST['userName']) && !empty($_POST['userName']) &&
    isset($_POST['family']) && !empty($_POST['family']) &&
    isset($_POST['email']) && !empty($_POST['email']) &&
    isset($_POST['password']) && !empty($_POST['password']) &&
    isset($_POST['confirm']) && !empty($_POST['confirm']) &&
    isset($_POST['ok'])) {

    if (strlen($_POST['userName']) < 3) {
        echo "Ismingizni kiriting";
    } else {
        $user = array('userName'=>$_POST['userName']);
    }

    if (strlen($_POST['family']) < 3) {
        echo "Familyani kiriting";
    } else {
        $user = array('family' => $_POST['family']);
    }

    if (substr($_POST['email'], -8) === '@mail.ru' || substr($_POST['email'], -10) === '@gmail.com') {
        $user = array('email' => $_POST['email']);
    } else {
        echo "Email pachtangizni kiriting";
    }

    if (strlen($_POST['password']) === '10' && substr($_POST['password'], -2) == is_numeric($_POST['password'])) {
        echo "Parol 8 ta so'zdan kam bo'lmasin va oxirgi 2ta no'mer bo'lsin";
    } else {
        $user = array('password' => $_POST['password']);
    }

    if ($_POST['confirm'] == $_POST['password']) {
        $user = array('confirm' => $_POST['confirm']);
    } else {
        echo "Parol bir xil bo'lsin";
    }
} else {
    $result = "Formani to'ldiring";
}
?>

<div class="col-5" style="margin-top: 25px; padding-left: 200px">
    <form method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Ism</label>
            <input type="text" name="userName" class="form-control" id="exampleInputEmail1" placeholder="Ismingiz">
            <small id="emailHelp" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Familya</label>
            <input type="text" name="family" class="form-control" id="exampleInputEmail1" placeholder="Familyangiz">
            <small id="emailHelp" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email pochta">
            <small id="emailHelp" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                   placeholder="Password">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Confirm Password</label>
            <input type="password" name="confirm" class="form-control" id="exampleInputPassword1"
                   placeholder="Password">
        </div>
        <div class="form-check">
            <input type="checkbox" name="ok" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Sizni tekshirishga rozimisiz</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
