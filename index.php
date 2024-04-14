<html>
<head>
<title>Function</title>
</head>
<body>
<h4><u>FUNCTION</u></h4>
<h5>1. FUNCTION WITH NO RETURN TYPE(WITH ARGUMENT)</h5>
    <?php
    function mul($c, $d)
    {
        $e = $c * $d;
        echo "The multiplication of two numbers is:" . $e;
    }
    mul(4, 8);
    ?>

    <h5>2. FUNCTION WITH NO RETURN TYPE(WITHOUT ARGUMENT)</h5>
    <?php
    function add()
    {
        $a = 10;
        $b = 20;
        $c = $a + $b;
        echo "The addition of two numbers is:" . $c;
    }
    add();
    echo "<br>";
    ?>

    <h5>3. FUNCTION WITH RETURN TYPE(WITH ARGUMENT)</h5>
    <?php
    function sub($a, $b)
    {
        $c = $a - $b;
        return $c;
    }
    echo "The Subtraction of two numbers is :" . sub(18, 5);
    echo "<br>";
    ?>

    <h5>4. FUNCTION WITH RETURN TYPE(WITHOUT ARGUMENT)</h5>
    <?php
    function ad()
    {
        $a = 7;
        $b = 2;
        $c = $a + $b;
        return $c;
    }
    echo "The addition of two numbers is:" . ad();
    ?>

    <h5>5.ANONYMOUS FUNCTION</h5>
    <?php
    // 1st Method
    $name = function ($first, $last) {
        return $first . " " . $last;
    };
    echo $name("Aruna", "Sankari") . "<br><br>";
    ?>

    <?php
    // 2nd Method
    $name = function ($first, $last) {
        return ("$first $last");
    };
    echo $name("Vijaya", "Lakshmi") . "<br><br>";
    ?>

    <?php
    // 3rd Method
    $name = function ($first) {
        return $first;
    };
    echo $name("Ponraj  K.S");
    ?>

    <h5>6.REFERENCE FUNCTION</h5>
    <?php
    $n = 2;
    function mull(&$n)
    {
        $n *= 5;
    }
    mull($n);
    echo $n;
    echo "<br><br>";
    ?>

    <h5>7.OTHER FUNCTION</h5>
    <?php
    $name = 'John';
    function modifyName(&$name)
    {
        $name .= ' Doe';
    }
    modifyName($name);
    echo $name;
    echo "<br><br>";
    ?>

    <?php
    function info($name, $age, $role)
    {
        echo "Name : $name , Age : $age , Role: $role <br><br>";
    }
    info("Aruna", 22, "Developer");
    info("Priya", 28, "Designer");
    ?>
	</body>
	</html>