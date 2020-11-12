<!-- RESTAURANT -->
<?php
    require_once 'db_connect.php';

    if($_POST) {
        //Fetching Values from create.php and assigning them to their respective VAR:
        $mimage = $_POST['meal_image'];
        $mname = $_POST['meal_name'];
        $mprice = $_POST['meal_price'];
        $mingredients = $_POST['meal_ingredients'];
        $mallergens = $_POST['meal_allergens'];

        //SQL-Query for inserting fetched Values into DB:
        $sql = "INSERT INTO meals (meal_image, meal_name, meal_price, meal_ingredients, meal_allergens) VALUES ('$mimage','$mname','$mprice','$mingredients','$mallergens')";
        
        if($connect->query($sql) === TRUE) {
            echo "<p>Created new Meal $mname</p>";
            echo "<a href='../create.php'><button type='button'>Back</button></a>";
            echo "<a href='../index.php'><button type='button'>Home</button></a>";

        } else {
            echo "Error Creating Meal $mname" . sql . ' ' . $connect->connect_error;
        }

        $connect->close();
    }
    
?>