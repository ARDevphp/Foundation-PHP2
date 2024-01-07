<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<?php
$name = $_POST['name'];
$password = $_POST['password'];
$number = $_POST['number'];

if (isset($name) && !empty($name) && isset($password) && !empty($password) && isset($number) && !empty($number)) {
    if (strlen($name) < 6) {
        echo "ismingizni qayta kiriting 6 ta begidan kam bo'lmasin";
    }
    if (strlen($password) < 6) {
        echo "Parol 6 tadan kam bo'lmasin";
    }
    if (substr($number, 0, 1) != '+') {
        echo "Telefon raqam + bilan boshlanishi shart";
    }
    if (is_numeric($number) || strlen($number) < 12){
        echo "Telefon no'mer xato kiritildi";
    }
}
?>

<div class="container mt-5">
    <div class="row mt-5">
            <div class="col-md-4">
            <form action="from1.php" name="regiter" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">UsarName</label>
                    <input type="text" class="form-control" name="name" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Phone number</label>
                    <input type="text" class="form-control" name="number" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>