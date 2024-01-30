<?php 

//checks to see if any of the parameters are empty, and if so, requests them to be filled
if(empty($_GET['first']) || empty($_GET['last']) || empty($_GET['age'])){
    echo "Please enter your name and age. <br>";
}
else //If this else is triggered, all parameters are filled.
{
    $firstName = filter_input(INPUT_GET, 'first', FILTER_SANITIZE_SPECIAL_CHARS);
    $lastName = filter_input(INPUT_GET, 'last', FILTER_SANITIZE_SPECIAL_CHARS);
    $age = intval(filter_input(INPUT_GET, 'age', FILTER_SANITIZE_SPECIAL_CHARS)); //intval gets the integer value
    
    echo "Hello, my name is " . $firstName . " " . $lastName . "<br>";
    echo "I am " . $age . " years old and ";
    if($age >= 18)
    {
        echo "I am old enough to vote in the United States <br>";
    }
    else //the brackets are unnessary, but helpful for clarification
    {
        echo "I am not old enough to vote in the United States. <br>";
    }
    echo "You could also say that I am " . ($age*365) . " days old <br>";
    echo "Todays date is: " . date("D, M d, Y"); //D for date name, M for month, d for number date, Y for year
} 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drayton's Get Parameter Assignment</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <h1>Inputs:</h1>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>">
    <label for="first">First Name:</label>
    <input type="text" id="first" name="first" autocomplete="off"> 
    <label for="last">Last Name:</label>
    <input type="text" id="last" name="last" autocomplete="off">
    <label for="age">Age:</label>
    <input type="text" id="age" name="age" autocomplete="off">
    <div>
        <button type="submit">Submit</button>
    </div>
    </form>   
</body>
</html>