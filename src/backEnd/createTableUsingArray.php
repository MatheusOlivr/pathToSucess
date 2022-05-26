<link rel = "stylesheet" href = "../style/table.css">
<body>
    <table>
        <?php 
        require("createArrayUsingContent.php");
        foreach(createArrayUsingContent(searchFile("a.txt")) as $key => $value)
        {
            if ($key%2 == 0)
            {
                require("../frontEnd/leftContent.php");
            }
            else if ($key)
            {
                require("../frontEnd/rightContent.php");
            }
        }
        ?>
    </table>
</body>
