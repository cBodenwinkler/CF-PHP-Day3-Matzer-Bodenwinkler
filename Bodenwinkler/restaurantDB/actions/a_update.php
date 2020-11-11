<?php 
    require_once 'db_connect.php';

    if($_POST){
        $mimage = $_POST['meal_image'];
        $mname = $_POST['meal_name'];
        $mprice = $_POST['meal_price'];
        $mingredients = $_POST['meal_ingredients'];
        $mallergens = $_POST['meal_allergens'];

        //Assigning id from DB to variable:
        $id = $_POST['id'];

    $sql = "UPDATE meals SET meal_image='$mimage', meal_name='$mname', meal_price='$mprice', meal_ingredients='$mingredients', meal_allergens='$mallergens' WHERE id={$id}";

    if($connect->query($sql) === TRUE) {
        echo "<p>Successfully Updated</p>";
        echo "<a href='../update.php?id=" .$id."'><button type='button'>Back</button></a>";
        echo "<a href='../index.php'><button type='button'>Home</button></a>";
    } else {
        echo "Error while updating record : ". $connect->error;
    }

    $connect->close();
    
}


?>