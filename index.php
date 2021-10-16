//Post
//Request

<html>

<body>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Name: <input type="text" name="fname"><br>
        Email: <input type="email" name="email"><br>
        <input type="submit">

    </form>


    <?php
    $arr = ['arifmahmudaj6@gmail.com', 'abc@gmail.com'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        // $name = $_REQUEST['fname'];
        // $email = $_REQUEST["email"];
        // $name = $_GET['fname'];
        // $email = $_GET["email"];
        $name = $_POST['fname'];
        $email = $_POST["email"];
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo $name;
            echo "<br>" . $email;
        }
        //check in database
        if (emailExitsOrNot($email)) {
            echo "<br>valid user";
        } else {
            echo "<br>Invalid user";
        }
    }
    function emailExitsOrNot($email)
    {
        foreach ($GLOBALS['arr'] as $arry) {
            if ($arry == $email) {
                return true;
            } else {
                return false;
            }
        }
    }
    ?>


</body>

</html>
