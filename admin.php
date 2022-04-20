<?php
include_once 'database.php';

if (isset($_GET['delete_code'])) {
    $delete_code = $_GET['delete_code'];
    //Delete query
    $sql = "DELETE FROM information WHERE code = $delete_code";
    $delete_query = mysqli_query($connection, $sql);
    if ($delete_query) {
        header('location:admin.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard!</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/admin.css">
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

                <!-- Details box -->
                <div class="details">
                    <div class="recentOrders">
                        <div class="cardHeader">
                            <h4>Show All Products</h4>
                            <a href="#" class="btn">View All <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>Code</th>
                                    <th>Title</th>
                                    <th>Price</th>
                                    <th>Photo</th>
                                    <th class="text-end">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "SELECT * FROM information";
                                $query = mysqli_query($connection, $sql);

                                while ($data = mysqli_fetch_assoc($query)) {
                                    $file = $data['photo'];
                                    $code = $data['code'];
                                    $title = $data['title'];
                                    $description = $data['description'];
                                    $price = $data['price'];

                                    $img = '<img src="data:image/jpg;base64,' . base64_encode($data['photo']) . '" class="card-img-top custom-main-image" alt="woman jacket">';

                                    echo "
                                    <tr>
                                        <td>$code</td>
                                        <td class='text-start'>$title</td>
                                        <td class='text-start'>$price</td>
                                        <td class='img-td'>
                                        $img
                                        </td>
                                        <td>
                                            <span class='status delete me-1'>
                                                <a class='delete text-decoration-none text-white fw-bold' href='admin.php?delete_code=$code'>Delete</a>
                                            </span>
                                            <span class='status edit'>
                                                <a class='text-decoration-none  text-white fw-bold' href='update.php?code=$code'>Edit</a>
                                            </span>
                                        </td>
                                    </tr>
                                    ";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <script src="./js/script.js"></script>
</body>

</html>