<html>
    <head>
        <style>
            body {
                background-image: url('sbimage.jpg');
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
                color:rgb(28, 61, 13);
                font-style: italic;
                font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
                font-size: 16px;

            }
            input[type=submit] {
                background-color: #2eb935;
                color: white;
            
            }
            input[type=email]:focus {
                background-color: rgb(171, 177, 114);
                box-sizing:inherit;
            }
            input[type=password]:focus {
                background-color: rgb(171, 177, 114);
                box-sizing:inherit;
            }

        </style>
        <title>seller login page</title>
    </head>
    <body>
        <br><br><h1>Join Store(login)</h1>
        <form action="slogin_acc.php" method='POST'>

        <h4>Email:  <input type="email" name="email" id="email" placeholder="enter your email" required><h4>
    
        <h4>Password:  <input type="password" name="password" id="password" placeholder="enter your password" required><br></h4>

        <h4><input type="submit" value="Login"></h4>

        </form>

    </body>
</html>