<?php
    ob_start();
    session_start();
    require_once '../../../Login/DaysWork/dbconnect.php';

    //if session is not set this will redirect to login page:
    if(!isset($_SESSION['user'])) {
        header("Location: ../../../Login/DaysWork/index.php");
        exit;
    }
    //select logged-in users details:
    $res = mysqli_query($conn, "SELECT * FROM users WHERE userId=".$_SESSION['user']);
    $userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);
?>

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