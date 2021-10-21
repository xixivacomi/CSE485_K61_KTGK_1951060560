<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Admin</title>
</head>

<body>

    <div class="container">
        <h1 class="title">Danh Sách Chi Tiết</h1>
    </div>
    <div class="main">
        <div class="container">
        <a href="add.php"> <button class="btn btn-success"><i class="fas fa-user-plus">Thêm dữ
                    liệu</button></a>
            <?php

                     if(isset($_SESSION['add']))
                    {
                        echo $_SESSION['add'];
                        unset($_SESSION['add']);
                    }
                    if(isset($_SESSION['delete']))
                    {
                        echo $_SESSION['delete'];
                        unset($_SESSION['delete']);
                    }
         ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tên thuốc</th>
                        <th scope="col">Loại thuốc</th>
                        <th scope="col">Mã vạch</th>
                        <th scope="col">Liều lượng</th>
                        <th scope="col">Mã</th>
                        <th scope="col">Giá nhập</th>

                        <th scope="col">Giá bán</th>
                        <th scope="col">Trạng thái HSD</th>
                        <th scope="col">Công ty</th>
                        <th scope="col">Ngày sản xuất</th>
                        <th scope="col">Ngày hết hạn</th>
                        <th scope="col">Nơi sản xuất</th>
                        <th scope="col">Số lượng</th>

                        <th scope="col">Sửa</th>
                        <th scope="col">Xóa</th>




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
                   
                    $result = mysqli_query($conn,$sql); //Lưu kết quả trả về vào result
                    // Bước 03: Phân tích và xử lý kết quả
                    if(mysqli_num_rows($result)>0){
                        while($row=mysqli_fetch_assoc($result)){
                            
                ?>

                    <tr>
                        <th scope="row"><?php echo $row['id']; ?> </th>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['type']; ?></td>
                        <td><?php echo $row['barcode']; ?></td>
                        <td><?php echo $row['dose']; ?></td>
                        <td><?php echo $row['code']; ?></td>
                        <td><?php echo $row['cost_price']; ?></td>
                        <td><?php echo $row['selling_price']; ?></td>
                        <td><?php echo $row['expiry']; ?></td>
                        <td><?php echo $row['company_name']; ?></td>
                        <td><?php echo $row['production_date']; ?></td>
                        <td><?php echo $row['expiration_date']; ?></td>
                        <td><?php echo $row['place']; ?></td>
                        <td><?php echo $row['quantity']; ?></td>
                      


                        <td><a href="edit.php?id=<?php echo $row['id']; ?>"><button
                                    class="btn btn-secondary">Sửa</button></a></td>
                        <td><a href="delete.php?id=<?php echo $row['id']; ?>"><button
                                    class="btn btn-danger">Xóa</button</a>
                        </td>

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



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>



</body>

</html>