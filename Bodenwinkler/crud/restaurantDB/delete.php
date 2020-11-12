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

    if($_GET['id']) {
        $id = $_GET['id'];

        $sql = "SELECT * FROM meals WHERE id = {$id}";
        $result = $connect->query($sql);
        $data = $result->fetch_assoc();

        $connect->close();
?>

<!DOCTYPE html>
<html>
<head>
   <title>Delete User</title>
   <link 
        rel="stylesheet" 
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>

<div style="border:solid black 1px;background-color:lightgray;border-radius:50px;padding:50px;margin:150px">

    <h3>Delete Meal?</h3>

    <form action ="actions/a_delete.php" method="post">
        <input type="hidden" name= "id" value="<?php echo $data['id'] ?>" />

        <button type="submit"  class="btn btn-primary">Yes, delete it!</button >
        
        <a href="index.php"><button type="button"  class="btn btn-secondary">No, go back!</button ></a>
    </form>
    <a href="../../Login/DaysWork/home.php"> <button class="btn btn-block btn-danger mt-5" type="submit">Logout</button> </a>
</div>

</body>
</html>

<?php
    }
?>