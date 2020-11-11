// ######### Does not work on e.target.database.id ##########
// ######### Do not know why atm! ##########

// let editbtn = document.querySelector("#btnedit");

// editbtn.addEventListener("click", (e) => displayData());

// ##########################################################



$(".btnedit").click(e => {
    let textvalues = displayData(e);
    // uncommend for to understand
    // console.log(textvalues)

    let id = $("input[name*='id']");
    let mealImg = $("input[name*='meal_img']");
    let mealName = $("input[name*='meal_name']");
    let mealIngredients = $("input[name*='meal_ingredients']");
    let mealAllergenes = $("input[name*='meal_allergenes']");
    let mealPrice = $("input[name*='meal_price']");

    console.log(id);
    console.log(mealImg);
    console.log(mealName);
    console.log(mealIngredients);
    console.log(mealAllergenes);
    console.log(mealPrice);
    mealImg.val(textvalues[0]);
    mealName.val(textvalues[1]);
    mealIngredients.val(textvalues[2]);
    mealAllergenes.val(textvalues[3]);
    mealPrice.val(textvalues[4]);

});


// ######## Got this from the Internet no clue whats going on here #######
function displayData(e) {
    let id = 0;
    const td = $("#tbody tr td");
    let textvalues = [];

for (const value of td) {
    if (value.dataset.id == e.target.dataset.id) {
        // console.log(e.target.dataset.id); 
        textvalues[id++] = value.textContent;
    }
    }
    return textvalues;
}