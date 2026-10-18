<!-- http://localhost:8080/Lab07-Part2/processbooking.html -->
<!-- I did needed a bit helps of ai and the w3school to understand -->
<!-- the use of isset() and to check the conditions works or not-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Rohirrim Booking Confirmation">
    <meta name="keywords" content="MiddleEarth, Tours, Rohan">
    <meta name="author" content="Grima Wormtongue">
    <title>Booking Confirmation</title>

    <style>
        body 
        { 
            font-family: "Times New Roman", Times, serif;
        }

        h1 
        {
            font-family: "Times New Roman", Times, serif;
            font-size: 2em;
            color: black;
        }
    </style>
</head>

<body>

    <h1>Rohirrim Tour Booking Confirmation</h1>

    <?php
        //first and last names
        $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : "";
        $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : "";

        //customer's name
        echo "<p>Welcome " . $firstname . " " . $lastname . " !</p>";

        //options
        $tours = array(); //this is empty array for the data under to go in
        // if user select on 

        if (isset($_POST['accom'])) 
        { 
            $tours[] = "Accommodation";
        }

        if (isset($_POST['1day'])) 
        {
            $tours[] = "One-day tour";
        }

        if (isset($_POST['4day'])) 
        {
            $tours[] = "Four-day tour";
        }

        if (isset($_POST['10day'])) {
            $tours[] = "Ten-day tour";
        }

        if (!empty($tours)) 
            // if there is a thing in array, then output
        {
            echo "<p>You are now booked on the " . implode(" and ", $tours) . "</p>";
        }

        $speciesList = array
        (
            "M" => "Human",
            "D" => "Dwarf",
            "E" => "Elf",
            "H" => "Hobbit"
        );

        $species = isset($_POST['species']) ? $_POST['species'] : "";

        // if slected species exists in array, show the name
        if (isset($speciesList[$species])) 
        {
            echo "<p>Species: " . $speciesList[$species] . "</p>";
        }

        //age. only when the user add age and is not empty.
        if (isset($_POST['age']) && $_POST['age'] !== "") 
        {
            echo "<p>Age: " . $_POST['age'] . "</p>";
        }

        // meal preference
        if (isset($_POST['food'])) 
        {
            echo "<p>Meal Preference: " . $_POST['food'] . "</p>";
        }

        //no. of travellers. the function same as the age
        if (isset($_POST['partysize']) && $_POST['partysize'] !== "") 
        {
            echo "<p>Number of travellers: " . $_POST['partysize'] . "</p>";
        }
    ?>
</body>
</html>
