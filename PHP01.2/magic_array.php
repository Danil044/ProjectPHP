<html>
    <body>
        <form method="POST" action="<?=$_SERVER['PHP_SELF']?>?myGetVar=MyGetVal">
            <input name="varName" value="varValue">
            <input name="login" value="varValue">
            <input name="password" value="varValue">
            <input type="submit" value="send">
        </form>

        <footer>

            <h1>This have my Response</h1>

            <pre>
            <?php
                echo "<p>" . __DIR__ . " " . __FILE__ . " " . __LINE__ . "</p>";
                echo "<p>login: " . $_POST['login'] . "</p>";

                //echo "And this too";

                // технические массивы, содержащие данные из форм
                print_r($_GET);
                print_r($_POST);

                // Переменные кукес (в современном мире желательно обходиться без них)
                // print_r($_COOKIE);

                // Состояние сервера
                //print_r($_SERVER);

                // Переменные запроса собраны в отдельный массив
                 print_r($_REQUEST)
            ?>
            </pre>

        </footer>
    </body>
</html>