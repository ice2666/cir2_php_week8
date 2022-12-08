<?php   
    function add($a,$b)
    {
        return $a + $b;
    }
    function sub($a,$b)
    {
        return $a - $b;
    }
    function mod($a,$b)
    {
        return $a % $b;  
    }
    function divison($a,$b)
    {
        return $a / $b;
    }
    function multi($a,$b)
    {
        return $a * $b;
    }
    $total = add(10,5);
    print("<h1>$total</h1>");
    $total = sub(10,5);
    print("<h1>$total</h1>");
    $total = mod(10,5);
    print("<h1>$total</h1>");
    $total = divison(10,5);
    print("<h1>$total</h1>");
    $total = multi(10,5);
    print("<h1>$total</h1>");
    
?>