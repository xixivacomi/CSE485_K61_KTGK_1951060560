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

    <div class="container">
        <h1 class="title">Hiển Thị Danh Sách</h1>
    </div>
    <div class="main">
        <div class="container">

            <?php

            if (isset($_SESSION['add'])) {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }
            if (isset($_SESSION['delete'])) {
                echo $_SESSION['delete'];
                unset($_SESSION['delete']);
            }
            ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tên thuốc</th>
                        <th scope="col">Trạng Thái HSD</th>
                        <th scope="col">Thông tin chi tiết</th>

                    </tr>
                </thead>
                <tbody>
                    <!-- Đoạn này thay đổi theo Dữ liệu trong CSDL -->
                    <?php
                    // Quy trình 4 bước
                    // Bước 01: Đã tạo sẵn, gọi lại thôi
                    include 'config.php';
                    // Bước 02: Thực hiện TRUY VẤN
                    $sql = "SELECT * FROM DRUGS";

                    $result = mysqli_query($conn, $sql); //Lưu kết quả trả về vào result
                    // Bước 03: Phân tích và xử lý kết quả
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {

                    ?>

                            <tr>
                                <th scope="row"><?php echo $row['id']; ?> </th>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['expiry']; ?></td>
                                <td><a href="chitiet.php"><button class="btn btn-success ">Chi Tiết</button></a></td>

                            </tr>
                    <?php
                        }
                    }
                    ?>

                    <!-- Đoạn này thay đổi theo Dữ liệu trong CSDL -->
                </tbody>
            </table>

        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>