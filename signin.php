<!-- signin.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <style>/* styles.css */

body {
    font-family: 'Roboto', sans-serif;
    background-color: #f8f8f8;
    margin: 0;
    padding: 0;
    color: #333;
}

.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.form-container {
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    width: 300px;
}

h2 {
    text-align: center;
    color: #e44d26;
}

label {
    display: block;
    margin: 10px 0;
    font-weight: bold;
}

input {
    width: 85%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button {
    background-color: #e44d26;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    width: 100%;
    transition: background-color 0.3s ease-in-out;
}

button:hover {
    background-color: #333;
}

.link-container {
    text-align: center;
    margin-top: 15px;
}

.link-container a {
    color: white;
    text-decoration: none;
    margin-left: 5px;
}

.link-container a:hover {
    text-decoration: underline;
}

/* Add more styles as needed */
</style>
</head>
<body>

<div class="container">
 <div class="form-container">
    <h2>Sign In</h2>
    <form action="signin_process.php" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
 <div class="link-container">
        <button type="submit">Sign In</button>
    </form>
</div>
</div>
</div>

</body>
</html>
