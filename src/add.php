<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Admin</title>
</head>

<body>
    <div class="main">
        <div class="container">
            <h4>Thêm dữ liệu </h4>

            <form action="" method="POST">
                <div class="row">
                    <div class="col-md-2">
                        <label for="name">Tên thuốc</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                </div>

                <form action="" method="POST">
                    <div class="row">
                        <div class="col-md-2">
                            <label for="type">Loại thuốc</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="type" name="type">
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-2">
                            <label for="barcode">Mã vạch</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="barcode" name="barcode">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2">
                            <label for="dose">Liều lượng</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="dose" name="dose">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2">
                            <label for="code">Mã</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="code" name="code">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2">
                            <label for="cost_price">Giá nhập</label>
                        </div>
                        <div class="col-md-10">
                            <input type="number" class="form-control" id="cost_price" name="cost_price">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2">
                            <label for="selling_price">Giá bán</label>
                        </div>
                        <div class="col-md-10">
                            <input type="number" class="form-control" id="selling_price" name="selling_price">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2">
                            <label for="expiry">Trạng thái HSD</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="expiry" name="expiry">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2">
                            <label for="company_name">Công ty</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="company_name" name="company_name">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2">
                            <label for="production_date">Ngày sản xuất</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="production_date" name="production_date">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2">
                            <label for="expiration_date">Ngày hết hạn</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="expiration_date" name="expiration_date">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2">
                            <label for="place">Nơi sản xuất</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="place" name="place">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2">
                            <label for="quantity">Số lượng</label>
                        </div>
                        <div class="col-md-10">
                            <input type="number" class="form-control" id="quantity" name="quantity">
                        </div>
                    </div>

                    </select>
        </div>
    </div>



    <div class="row">
        <div class="col-md-2">
            <label for=""></label>
        </div>
        <div class="col-md-10">
            <button type="submit" name="submit" class="btn btn-success">Lưu Lại</button>
        </div>
    </div>
    </form>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>



</body>

</html>


<!-- phần xử lý -->

<?php
if (isset($_POST['submit'])) {


    $name = $_POST['name'];
    $type = $_POST['type'];
    $barcode = $_POST['barcode'];
    $dose = $_POST['dose'];
    $code = $_POST['code'];

    $cost_price = $_POST['cost_price'];
    $selling_price = $_POST['selling_price'];
    $expiry = $_POST['expiry'];
    $company_name = $_POST['company_name'];
    $production_date = $_POST['production_date'];
    $expiration_date = $_POST['expiration_date'];
    $place = $_POST['place'];
    $quantity = $_POST['quantity'];




    $sql = "INSERT INTO blood_donor (bd_name,bd_sex,bd_age,bd_group,bd_phone)
        VALUES ('$name','$type','$barcode','$dose','$code','$cost_price','$code','$selling_price','$expiry','$company_name','$production_date','$expiration_date','$place','$quantity')";

    $_result = mysqli_query($conn, $sql);

    if ($_result > 0) {
        $_SESSION['add'] = "<div class='text-success'>Thêm Thành Công</div>";
        header("Location:chitiet.php");
    } 
    // else {
    //     $_SESSION['add'] = "<div class='text-danger'>Thêm Thất Bại</div>";
    //     header("Location:index.php");
    // }
}
mysqli_close($conn);
?>