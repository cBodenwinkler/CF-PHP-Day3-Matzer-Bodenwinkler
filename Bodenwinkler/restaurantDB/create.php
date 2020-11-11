<!-- RESTAURANT -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Meal</title>
    <link 
        rel="stylesheet" 
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
    <div style="border:solid black 1px;background-color:lightgray;border-radius:50px;padding:50px;margin:150px">
    <form action="actions/a_create.php" method="post">
        <h4>Image:</h4>
        <input size="50" type="text" name="meal_image" placeholder="URL-Image">
    
        <h4>Name:</h4>
        <input size="50" type="text" name="meal_name" placeholder="Name of the Meal">
    
        <h4>Price:</h4>
        <input type="number" name="meal_price" placeholder="00.00€">
    
        <h4>Ingredients:</h4>
        <input size="50" type="text" name="meal_ingredients" placeholder="Ingredients">
    
        <h4>Allergens:</h4>
        <input size="50" type="text" name="meal_allergens" placeholder="Allergens">
    
        <h4>Submit the Meal:</h4>
        <button type="submit">Submit New Meal</button>
        <a href="index.php"> <button type="button">BACK</button> </a>
    </form>
    </div>
</body>
</html>


