<!-- RESTAURANT -->
<?php
    ob_start();
    session_start();
    require_once '../../Login/DaysWork/dbconnect.php';

    //if session is not set this will redirect to login page:
    if(!isset($_SESSION['user'])) {
        header("Location: ../../Login/DaysWork/index.php");
        exit;
    }
    //select logged-in users details:
    $res = mysqli_query($conn, "SELECT * FROM users WHERE userId=".$_SESSION['user']);
    $userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);
?>

<?php
    require_once 'actions/db_connect.php';

    if($_GET['id']){
        $id = $_GET['id'];

    $sql = "SELECT * FROM meals WHERE id = {$id}";
    $result = $connect->query($sql);

    $data = $result->fetch_assoc();

    $connect->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Meals</title>
    <link 
        rel="stylesheet" 
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
</head>
<body>
<div style="border:solid black 1px;background-color:lightgray;border-radius:50px;padding:50px;margin:150px">
    <form action="actions/a_update.php" method="post">
        <table>
            <tr>
                <th>Meal Image</th>
                <td><input type="text" name="meal_image" placeholder="Meal Image" value="<?php echo $data['meal_image'] ?>" /> </td>
            </tr>
            <tr>
                <th>Meal Name</th>
                <td><input type="text" name="meal_name" placeholder="Meal Name" value="<?php echo $data['meal_name'] ?>" /> </td>
            </tr>
            <tr>
                <th>Meal Price</th>
                <td><input type="number" name="meal_price" placeholder="Meal Price" value="<?php echo $data['meal_price'] ?>" /> </td>
            </tr>
            <tr>
                <th>Meal Ingredients</th>
                <td><input type="text" name="meal_ingredients" placeholder="Meal Ingredients" value="<?php echo $data['meal_ingredients'] ?>" /> </td>
            </tr>
            <tr>
                <th>Meal Allergens</th>
                <td><input type="text" name="meal_allergens" placeholder="Meal Allergens" value="<?php echo $data['meal_allergens'] ?>" /> </td>
            </tr>
            <tr>
               <input type="hidden" name= "id" value="<?php echo $data['id']?>"/>
               <td><button class="btn btn-primary" type="submit">Save Changes</button></td>
               <td><a href="index.php"><button class="btn btn-secondary" type="button">Back</button ></a></td>
           </tr>
        </table>
    </form>
    <a href="../../Login/DaysWork/home.php"> <button class="btn btn-block btn-danger mt-5" type="submit">Logout</button> </a>
</div>
</body>
</html>

<?php
    }
?>