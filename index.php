<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Registration</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="logo">
        <h1>Beast Mode</h1>
    </div>
    <div class="container">
        <h2>GYM Registration</h2>
        <form id="registrationForm" method="post" action="/action.php">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="">Select</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select><br><br>
    
            <label for="height">Height (cm):</label>
            <input type="number" id="height" name="height" required><br><br>
    
            <label for="weight">Weight (kg):</label>
            <input type="number" id="weight" name="weight" required><br><br>
    
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" required><br><br>


            <label for="package">package:</label>
            <select id="package" name="package" required>
                <option value="Basic">Basic</option>
                <option value="Standard">Standard</option>
                <option value="Premium">Premium</option>
            </select><br><br>
    
            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" required><br><br>
    
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
    
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
