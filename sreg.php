<html>
    <head>        <style>
        body {
            background-image: url('images/rbimage1.gif');
            background-repeat: no-repeat;
            background-attachment: fixd;
            background-size: 100% 100%;
        }
        h1 {
            text-align: center;
            color: #1c1ca3;
            font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: 50px;
        }
        h4 {
            text-align: center;
            color:rgb(12, 16, 73);
            font-style: italic;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            font-size: 25px;

        }
        input[type=submit] {
            background-color: #2eb935;
            color: white;
            align-content: center;
        
        }
        input[type=text]:focus {
            background-color: rgb(150, 208, 216);
            box-sizing:inherit;
        }
        input[type=email]:focus {
            background-color: rgb(150, 208, 216);
            box-sizing:inherit;
        }
        input[type=tel]:focus {
            background-color: rgb(150, 208, 216);
            box-sizing:inherit;
        }
        input[type=password]:focus {
            background-color: rgb(150, 208, 216);
            box-sizing:inherit;
        }
        input[type=text] {
            width: 25%;
            padding: 10px 10px;
            margin: 3px 0;
            box-sizing:border-box;
            border:3px solid green;
            outline:none;
        }
        input[type=email] {
            width: 25%;
            padding: 10px 10px;
            margin: 3px 0;
            box-sizing: border-box;
            border:3px solid green;
            outline: none;
        }
        input[type=tel] {
            width: 25%;
            padding: 10px 10px;
            margin: 2px 0;
            box-sizing: border-box;
            border:3px solid green;
            outline: none;
        }
        input[type=password] {
            width: 25%;
            padding: 10px 10px;
            margin: 2px 0;
            box-sizing: border-box;
            border:3px solid green;
            outline: none;
        }

    </style>

        <title>Supplier registration page</title>
    </head>
    <body>
        <form action="sreg_acc.php" method="POST">
        <h1>Join Store(Registration)</h1>
        <h4>Name:  <input type="text" name="name" id="name" placeholder="enter your name" required></h4>
        <h4>Email:  <input type="email" name="email" id="email" placeholder="enter your email" required></h4>
        <h4>Phone No.:  <input type="tel" name="phno" id="phno" placeholder="enter your phone number" required><h4>
        <h4>Photo: <input type="file" name="image" id="image" placeholder="pic"></h4>
        <h4>Password:  <input type="password" name="password" id="password" placeholder="enter your password" required></h4>

        <h4><input type="submit" value="Register"></h4>

        </form>

    </body>
</html>