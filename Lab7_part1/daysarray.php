<!-- http://localhost:8080/Lab7_part1/daysarray.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Days of the Week</title>
</head>
<body>
    <h1>PHP Variables, Arrays and operators</h1>

    <?php
        $days = array(
            "Sunday",
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday",
            "Saturday"
        );
        
        echo "<p>The days of the weehhk in English are:</p>";
        echo implode(", ", $days) . "."; //separated by commas and spaces
    ?>

    <?php
        $daysFrench = array(
            "Dimanche",
            "Lundi",
            "Mardi",
            "Mercredi",
            "Jeudi",
            "Vendredi",
            "Samedi"
        );
        echo "<p>The days of the week in French are:</p>";
        echo implode(", ", $daysFrench) . "."; //separated by commas and spaces
    ?>
</body>
</html>
