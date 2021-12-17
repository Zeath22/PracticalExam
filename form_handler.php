<html>
<head>
    <title>Exam2</title>
    <style>
        body{
            background-color: lightblue;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 25px;
        }
    </style>
</head>
<body>
<?php

    function passwordChecker($pass){
        if (strlen($pass) > 16 or strlen($pass) < 8){
            return false;
        }else{
            return true;
        }
    }
    if (!(isset($_POST['Register']))) {
        header("Location: form.html");
    }elseif(isset($_POST['Register'])) {
        $pass = $_POST["pass"];
        if (!(passwordChecker($pass))) {
            echo "password must be more than 8 or lesser than 16 <br>";
        } else {
            $mail = $_POST["mail"];
            echo "$mail <br>";
            $gender = $_POST["gender"];
            echo "$gender <br>";
            if (isset($_POST["color"])) {
                $color = $_POST['color'];
                foreach ($color as $key) {
                    echo "$key <br>";
                }
            }else{
                    echo "No favorite color!<br>";
                }
            echo "Regitered Successfully! <br>";
            }
        }
?>
</body>
</html>


