<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to bottom right, #6a11cb, #2575fc);
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: #fff;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        h1 {
            text-align: center;
            margin-bottom: 1.5rem;
            color: #444;
        }
        label {
            font-weight: bold;
            display: block;
            margin: 0.5rem 0 0.25rem;
        }
        input {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ccc;
            border-radius: 8px;
            margin-bottom: 1rem;
            font-size: 1rem;
        }
        button {
            width: 100%;
            padding: 0.75rem;
            background: #2575fc;
            color: #fff;
            font-size: 1rem;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        button:hover {
            background: #1e63d8;
        }
        .error {
            color: #f00;
            margin-bottom: 1rem;
            font-weight: bold;
        }
        .success {
            color: #0f0;
            margin-bottom: 1rem;
            font-weight: bold;
        }
        a {
            display: block;
            text-align: center;
            margin-top: 1rem;
            color: #2575fc;
            text-decoration: none;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Sign Up</h1>

        <?php if(isset($_GET['error'])){ ?>
            <div class="error"><?=$_GET['error']?></div>
        <?php } ?>
        
        <?php if(isset($_GET['success'])){ ?>
            <div class="success"><?=$_GET['success']?></div>
        <?php } ?>

        <form action="page/page.php" method="POST">
            <label>Name</label>
            <input type="text" name="name" required>

            <label>Email</label>
            <input type="email" name="email" required>

            <label>Password</label>
            <input type="password" name="password" required>

            <label>Confirm Password</label>
            <input type="password" name="confirm_password" required>

            <button type="submit">Sign Up</button>
        </form>
        <a href="login.php">Login</a>
    </div>
</body>
</html>
