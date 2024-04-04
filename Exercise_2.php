<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Background Color Gradient</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            background: #4CAF50; /* Changed background color to green */
            /* Adjust the angle and colors as needed */
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .content {
            text-align: center;
            padding: 50px;
            color: black;
            border-radius: 8px;
            background-color: #f2f2f2; /* Change the background color here */
            box-shadow: 0 0 10px rgba(0,0,0,0.3);
            font-size: 24px; /* Adjusted font size */
        }
        .underscore {
            text-decoration: underline; /* Added underline */
        }
    </style>
</head>
<body>
    <div class="content">
        <?php
        // Function to calculate factorial using recursion
        function factorial($n) {
            if ($n <= 1) {
                return 1;
            } else {
                return $n * factorial($n - 1);
            }
        }
        
        // Example usage of factorial function
        $number = 5;
        $factorialResult = factorial($number);
        echo "<h1>The Factorial of 5 is: <span class='underscore'>120</span></h1>"; /* Added underscore to 120 */
        
        // Array of student names
        $students = array("Evan", "Pepel", "Pama", "Gene", "Taotao");
        
        // Loop to print each student's name
        echo "<h2>Student Names:</h2>"; /* Adjusted font size */
        foreach ($students as $student) {
            echo "<p>$student</p>"; /* Adjusted font size */
        }
        ?>
    </div>
</body>
</html>