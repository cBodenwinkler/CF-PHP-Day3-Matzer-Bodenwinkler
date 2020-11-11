<?php

require_once("db.php");
require_once("component.php");

// because we return connection in db.php we save here the con-string in $con ### IT IS GLOBAL ----> $GLOBALS['con'] ###
$con = createdb();

// messages
function textNode($classname, $msg){
    $element = "<h6 class='$classname'>$msg</h6>";
    echo $element;
}

// ########## Insert Data to DataBase Start ##########
// create button click
if(isset($_POST['create'])){
    createData();
}
// Get Data button click
// if(isset($_POST['read'])){
//     getData();
// }

// Post Data ---- if empty = fasle
function textboxValue($value) {
    $textbox = mysqli_real_escape_string($GLOBALS['con'], trim($_POST[$value]));
    if(empty($textbox)) {
        return false;
    } else {
        return $textbox;
    }
}

// Insert Data in SQL
function createData(){
    $mealimg = textboxValue('food_picture');
    $mealname = textboxValue('food_name');
    $mealprice = textboxValue('food_price');
    $mealingredient = textboxValue('food_ingridiant');
    $mealallergene = textboxValue('food_allergen');

    if($mealimg && $mealname && $mealprice && $mealingredient && $mealallergene){
        $sql = "insert into meal(meal_img, meal_name, meal_ingredients, meal_allergenes, meal_price) values ('$mealimg','$mealname','$mealprice','$mealingredient', '$mealallergene')";
        
        if(mysqli_query($GLOBALS['con'], $sql)){
             textNode("succsess", "Successfully inserted!");
         } else {
             echo "Error!";
         }
    } else {
       textNode("error", "Fill the text box!");
    }
}
// ########## Insert Data to DataBase End ##########

// ########## Print Rows Start ##########
function getData(){
    $sql = "select * from meal";
    // $result = $connect->query($sql);

    $result = mysqli_query($GLOBALS['con'], $sql);

    if(mysqli_num_rows($result) > 0){
        return $result;
        // while($row = mysqli_fetch_assoc($result)){
        //     echo tableRowElement($row['meal_img'], $row['meal_name'], $row['meal_ingredients'], $row['meal_allergenes'], $row['meal_price']);
        // }
    }
}





// ########## Print Rows End ##########