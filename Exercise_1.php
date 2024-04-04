<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Age Classifier</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #4CAF50; 
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
            max-width: 800px; 
            width: 100%; 
        }
        h2 {
            margin-bottom: 20px;
            font-family: 'Arial Black', sans-serif;
            color: #333;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        label {
            margin-bottom: 10px;
            font-family: 'Times New Roman', Times, serif;
            color: #555;
        }
        input[type="number"] {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 10px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-family: 'Arial', sans-serif;
        }
        button:hover {
            background: linear-gradient(45deg, #5cb85c, #4CAF50); 
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>User Age Classifier</h2>
        <form method="post">
            <label for="age">Enter your age:</label>
            <input type="number" id="age" name="age" required>
            <button type="submit">Submit</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $age = $_POST['age'];
            
            
            if ($age < 18) {
                $classification = "minor";
            } elseif ($age >= 18 && $age < 65) {
                $classification = "adult";
            } else {
                $classification = "senior citizen";
            }
            
            
            echo "<p>Your age is $age years old. You are classified as a $classification.</p>";
        }
        ?>
    </div>
</body>
</html>
