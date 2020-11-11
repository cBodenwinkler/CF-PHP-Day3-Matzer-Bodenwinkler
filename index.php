<?php

require_once("../phpDay3/php/component.php");
// require_once("../phpDay3/php/db.php");
require_once("../phpDay3/php/operation.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <link rel="stylesheet" href="./scss/style.css">
    <title>Restaurant</title>
</head>

<body>

    <main>
        <div class="container text-center">
            <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-hamburger"></i> Meals</h1>

            <div class="d-flex justify-content-center">
                <form action="" method="post" class="w-50">
                    <div class="py-2">
                        <?php inputElement("<i class='fas fa-image col-2'></i>", "Picture", "food_picture", "") ?>
                    </div>
                    <div class="py-2">
                        <?php inputElement("<i class='fas fa-plus-square col-2'></i>", "Name", "food_name", "") ?>
                    </div>
                    <div class="py-2">
                        <?php inputElement("<i class='fas fa-euro-sign col-2'></i>", "Price", "food_price", "") ?>
                    </div>
                    <div class="py-2">
                        <?php inputElement("<i class='fas fa-blender col-2'></i>", "Ingredients", "food_ingridiant", "") ?>
                    </div>
                    <div class="py-2">
                        <?php inputElement("<i class='fas fa-book-medical col-2'></i>", "Allergenes", "food_allergen", "") ?>
                    </div>
                    <div class="d-flex justify-content-around mt-4">
                        <?php buttonElement("btn-create", "btn btn-success", "<i class='fas fa-plus'></i>", "create", "dat-toggle='tooltip' data-placement='bottom' title='create'") ?>
                        <?php buttonElement("btn-read", "btn btn-primary", "<i class='fas fa-sync'></i>", "read", "dat-toggle='tooltip' data-placement='bottom' title='read'") ?>
                        <?php buttonElement("btn-update", "btn btn-light border", "<i class='fas fa-pen-alt'></i>", "update", "dat-toggle='tooltip' data-placement='bottom' title='update'") ?>
                        <?php buttonElement("btn-delete", "btn btn-danger", "<i class='fas fa-trash-alt'></i>", "delete", "dat-toggle='tooltip' data-placement='bottom' title='delete'") ?>
                    </div>
                </form>
            </div>
            <!-- Bootstrap Table -->
            <div class="d-flex table-data ">
                <table class="table table-striped table-dark customTable">
                    <thead class="thead-dark">
                        <tr>
                            <th>Picture</th>
                            <th>Name</th>
                            <th>Ingredients</th>
                            <th>Allergenes</th>
                            <th>Price</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                        <tr>
                            <td class="align-middle"><img src="./img/pizza-salami.jpg" alt=""></td>
                            <td class="align-middle">Pizza Salami</td>
                            <td class="align-middle">Salami, Oregano, Basil, Parmesan, Mozzarella, Tomato, Onion</td>
                            <td class="align-middle">Gluten, Eggs, Celery, Soybeans</td>
                            <td class="align-middle">14</td>
                            <td class="align-middle"><i class="fas fa-edit btnedit"></i></td>
                        </tr>
                        <?php 
                        // Get Data button click
                        if(isset($_POST['read'])){
                        $result = getData();
                        if($result){
                        while($row = mysqli_fetch_assoc($result)){
                        echo tableRowElement($row['meal_img'], $row['meal_name'], $row['meal_ingredients'], $row['meal_allergenes'], $row['meal_price'], $row['id']);
                        } 
                        }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="./php/main.js"></script>
</body>

</html>