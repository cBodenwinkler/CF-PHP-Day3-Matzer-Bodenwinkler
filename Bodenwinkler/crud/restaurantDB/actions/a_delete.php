<!-- RESTAURANT -->
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

    if($_POST) {
        $id = $_POST['id'];

        $sql = "DELETE FROM meals WHERE id={$id}";

        if($connect->query($sql) === TRUE) {
            echo "<p>Successfully deleted!</p>";
            echo "<a href='../index.php'><button type='button'>Back</button></a>";
        } else {
            echo "Error deleting Meal: " . $connect->error;
        }

        $connect->close();
    }

?>