<!DOCTYPE html>
<html>

<head>
    <title>Group Members</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            background-image: url('bg.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 50px;
        }

        a {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color:rgb(255, 229, 211);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 30px;
            max-width: 600px;
            width: 100%;
            border-radius: 20px;
        }

        .member {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: rgb(255, 229, 211);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 30px;
            max-width: 600px;
            width: 100%;
            border-radius: 8px;
        }

        .member img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
        }

        .member h2 {
            font-size: 24px;
            color: #333333;
            margin: 0;
        }

        .member p {
            font-size: 18px;
            color: #666666;
            margin: 0;
        }
    </style>
</head>

<body>
    <div class="container">
            
        <div class="member">
            <img src="ea.png" alt="Mihretab">
            <h2>Mihretab Nigatu</h2>
            <p>Role Number: 31</p>
        </div>
        <div class="member">
            <img src="ea.png" alt="Pinel">
            <h2>Pinel Alemayehu</h2>
            <p>Role Number: 35</p>
        </div>
        <div class="member">
            <img src="ea.png" alt="Eyosias">
            <h2>Eyosias Abayneh</h2>
            <p>Role Number: 18</p>
        </div>
        <a href="login.php">Back to login Page</a>
    </div>
</body>

</html>