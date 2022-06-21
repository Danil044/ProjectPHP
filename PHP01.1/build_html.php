<html>
    <title>php + html</title>
<body>

    <?php
        if(2 > 3){
    ?>

    <p>True 2 > 3</p>

    <?php
        }else{
    ?>

    <p>False 2 > 3</p>

    <?php
        }
    ?>

    <?php
        $arrName = ["Ivanov", "Petrov"];

        echo "<h3> Building code php  </h3>";

        echo "<ul>";
        for($i = 0; $i < 2; $i++){
            echo "<li>" . $arrName[$i] . "</li>";
        }
        echo "</ul>"
    ?>

    <h3>code html</h3>
    <ul>
        <li>Ivanov</li>
        <li>Petrov</li>
    </ul>
</body>
</html>
