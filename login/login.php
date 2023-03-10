<html>
    <head>
        <title> User Login </title>
    </head>
    <body>
        <h1> Login </h1>
    <form action="log.php" method="POST">
    <?php
                if($_GET['message'] == true)
                {
                    echo $_GET['message'];
                }
            ?>
            <?php
                if($_GET['invalid'] == true)
                {
                    echo $_GET['invalid'];
                }
            ?>
            <div>
                <input type="text" class="textbox" name="txt_uname" placeholder="Username" />
            </div>
            <div>
                <input type="password" class="textbox" name="txt_pwd" placeholder="Password"/>
            </div>
            <div>
                <button type="submit" name="submit">Login</button>
            </div>
        </div>
    </form>
    </body>
</html>