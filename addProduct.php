<?php
include_once 'database.php';

if (isset($_POST['submit'])) {
    $file = addslashes(file_get_contents($_FILES["photoUpload"]["tmp_name"]));
    $code = $_POST['code'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $sql = "INSERT INTO information (`photo`, `title`, `description`, `price`, `code`) VALUES('$file', '$title', '$description', '$price', '$code')";

    $postQuery = mysqli_query($connection, $sql);
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Product!</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/admin.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <main>

        <div class="containers">
            <div class="navigation" onclick="toggleMenu()">
                <ul>
                    <li>
                        <a href="index.php">
                            <span class="title">
                                <img width="200" src="./images/icon/logo.png" alt="logo">
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="addProduct.php">
                            <span class="icon"><img src="./images/icon/add.png" alt=""></span>
                            <span class="title">Add Product</span>
                        </a>
                    </li>
                    <li>
                        <a href="admin.php">
                            <span class="icon"><img src="./images/icon/dashboard.png" alt=""></span>
                            <span class="title">Manage Product</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="main">
                <div class="topBar">
                    <div class="toggle" onclick="toggleMenu()"></div>
                    <div class="search">
                        <label>
                            <input type="text" placeholder="Search here">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </label>
                    </div>
                    <div class="user">
                        <img src="./images/icon/pic-1.png" alt="User">
                    </div>
                </div>

                <div style="width: 70%;" class="m-auto mt-4 shadow-sm bg-white rounded-3 p-3 w-70">
                    <form action="addProduct.php" method="post" enctype="multipart/form-data">
                        <h3 class="text-center titles">Add New Product!</h3>

                        <div class="mb-3">
                            <label for="roll" class="form-label">Code</label>
                            <input type="number" name="code" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="firstName" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="lastName" class="form-label">Description</label>
                            <input type="text" class="form-control" name="description"></input>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Price</label>
                            <input type="number" class="form-control" name="price"></input>
                        </div>
                        <div class="mb-3">
                            <label for="photoUpload" class="form-label">Upload Image</label>
                            <input type="file" class="form-control" class="form-control" name="photoUpload"></input>
                            <span class="text-secondary mt-2">👉Maximum file size 100 KB</span>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-success" name="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <script src="./js/script.js"></script>
</body>

</html>