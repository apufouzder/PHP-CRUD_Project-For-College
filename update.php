<?php
include_once 'database.php';
// Display data from database
if ($_GET['code']) {
    $get_code = $_GET['code'];
    $sql = "SELECT * FROM information WHERE code = $get_code";
    $query = mysqli_query($connection, $sql);
    $data = mysqli_fetch_assoc($query);

    $file = $data['photo'];
    $code = $data['code'];
    $title = $data['title'];
    $description = $data['description'];
    $price = $data['price'];

    $img = '
        <div class="custom-card-img">
            <img src="data:image/jpg;base64,' . base64_encode($data['photo']) . '" alt="jacket">
        </div>
    ';
}
// Post/Update data or insert database.
if (isset($_POST['update'])) {
    $code = $_POST['code'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    // Data update query
    $update_sql = "UPDATE information SET title = '$title', description = '$description', price = '$price' WHERE code = '$code' ";

    $query = mysqli_query($connection, $update_sql);
    // if ($query == true) {
    //     echo "Data updated successfully";
    // } else {
    //     echo $update_sql . "Data not updated successfully";
    // }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update product!</title>
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
                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                        <h3 class="text-center titles">Update Products</h3>

                        <div class="mb-3">
                            <input type="number" value="<?php echo $code ?>" name="code" class="form-control" hidden>
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" value="<?php echo $title ?>" name="title" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <input type="text" value="<?php echo $description ?>" class="form-control" name="description"></input>
                            <!-- <textarea name="description" value="" cols="70" rows="4"></textarea> -->
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" value="<?php echo $price ?>" class="form-control" name="price"></input>
                        </div>
                        <div class="mb-3">
                            <?php echo $img ?>
                        </div>

                        <!-- <div class="mb-3">
                            <label for="photoUpload" class="form-label">Upload Image</label>
                            <div class="update-img-div">
                                <input type="file" class="form-control" class="form-control" name="photoUpload"></input>
                                
                            </div>
                        </div> -->

                        <div class="text-center">
                            <button type="submit" name="update" class="btn btn-success fs-5">Update</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </main>
    <script src="./js/script.js"></script>
</body>

</html>