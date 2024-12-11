<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country Capitals and Temperatures</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            line-height: 1.6;
            margin: 20px;
        }
        h1 {
            color: #5a5aed;
            text-align: center;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .section {
            margin-bottom: 20px;
        }
        .section h2 {
            color: #444;
            border-bottom: 2px solid #ddd;
            padding-bottom: 5px;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        ul li {
            background: #f9f9f9;
            margin: 5px 0;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ddd;
        }
        .highlight {
            font-weight: bold;
            color: #5a5aed;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Country Capitals and Temperature Analysis</h1>

        <div class="section">
            <h2>Country Capitals</h2>
            <ul>
                <?php
                $ceu = array(
                    "Italy" => "Rome",
                    "Luxembourg" => "Luxembourg",
                    "Belgium" => "Brussels",
                    "Denmark" => "Copenhagen",
                    "Finland" => "Helsinki",
                    "France" => "Paris",
                    "Slovakia" => "Bratislava",
                    "Slovenia" => "Ljubljana",
                    "Germany" => "Berlin",
                    "Greece" => "Athens",
                    "Ireland" => "Dublin",
                    "Netherlands" => "Amsterdam",
                    "Portugal" => "Lisbon",
                    "Spain" => "Madrid",
                    "Sweden" => "Stockholm",
                    "United Kingdom" => "London",
                    "Cyprus" => "Nicosia",
                    "Lithuania" => "Vilnius",
                    "Czech Republic" => "Prague",
                    "Estonia" => "Tallin",
                    "Hungary" => "Budapest",
                    "Latvia" => "Riga",
                    "Malta" => "Valetta",
                    "Austria" => "Vienna",
                    "Poland" => "Warsaw"
                );

                ksort($ceu); // Sort by country name

                foreach ($ceu as $country => $capital) {
                    echo "<li>The capital of <span class='highlight'>$country</span> is <span class='highlight'>$capital</span></li>";
                }
                ?>
            </ul>
        </div>

        <div class="section">
            <h2>Temperature Analysis</h2>
            <?php
            $temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

            // Calculate the average temperature
            $total = array_sum($temperatures);
            $count = count($temperatures);
            $average = $total / $count;

            // Get unique temperatures and sort them
            $unique_temps = array_unique($temperatures);
            sort($unique_temps);

            // Get the 5 lowest and 5 highest temperatures
            $lowest = array_slice($unique_temps, 0, 5);
            $highest = array_slice($unique_temps, -5);
            ?>
            <p><strong>Average Temperature:</strong> <span class="highlight"><?php echo number_format($average, 1); ?>°F</span></p>
            <p><strong>5 Lowest Temperatures:</strong> <span class="highlight"><?php echo implode(", ", $lowest); ?>°F</span></p>
            <p><strong>5 Highest Temperatures:</strong> <span class="highlight"><?php echo implode(", ", $highest); ?>°F</span></p>
        </div>
    </div>
</body>
</html>
