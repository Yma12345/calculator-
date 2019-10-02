<html>
<head>
<meta charset="UTF-8"/>

<meta name= "description" content="Calculator++">

<link rel="stylesheet" type="text/css" href="css/style.css"/>

<title>Calculator++</title>
</head>
<body>
    <?php
    $num1 = 0;
    $num2 = 0;
    $total= 0;
    $option = "";



    if (isset($_GET["submit"]))
    {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $option = $_GET['choice'];
    
    if(is_numeric($num1) && is_numeric($num2))
    {
        if ($option == 'plus')
        {
         $total = $num1 + $num2;
        }
        elseif ($option == "min")
        {
         $total = $num1 - $num2;
        }
        elseif ($option == "multiply")
        {
         $total = $num1 * $num2;
        }
        elseif ($option == "divide")
        {
         $total = $num1 / $num2;
        }
    }
    if(is_numeric($num1))
    {
        if ($option == 'root')
        {
         $total = sqrt($num1);
        }
        if ($option == 'power')
        {
         $total = pow($num1, $num2);
        }
    }
    

    }


    if(isset($_POST['reset']))
    {   
    
     $total = $num1;
        

    }
    echo $total;
    ?>
    <div class="container">
        <div class="top-part">
            0
        </div>
    <div class="bottom-part">
    <form methode="POST" action="">
        <ul>
            <li>
                <label>Number1</label>
                <input name="num1" class="input numbers" type="number" value="" placeholder="Your first number">
            </li>
            <li>
                <label>Operator</label>
                <select name="choice">
                <option value="plus">+</option>
                <option value="min">-</option>
                <option value="multiply">x</option>
                <option value="divide">:</option>
                <option value="root">√</option>
                <option value="power">^</option>
                </select>
            </li>
            <li>
                <label>Number2</label>
                <input name="num2" class="input numbers" type="number" value="" placeholder="Your second number">
            </li>
            <li>
                <input class="btn-calculate" name="submit" type="submit" value="Calculate">
                <input class="btn-reset" name="submit" type="reset" value="Reset">
            </li>
        </ul>
    </div>
    </div>
</body>
</html>