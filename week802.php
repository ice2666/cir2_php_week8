<?php
    function add($a,$b)
    {
        $a = 10;
        $b = 5;
        $add = $a + $b;
        print("<h1>$a + $b = $add</h1>");
    }
    function sub($a,$b)
    {
        $a = 10;
        $b = 5;
        $sub = $a - $b;
        print("<h1>$a - $b = $sub</h1>");             
    }                
    function mod($a,$b)
    {
        $a = 10;
        $b = 5;
        $mod = $a % $b;
        print("<h1>$a % $b = $mod</h1>");
    }
    function divison($a,$b)
    {
        $a = 10;
        $b = 5;
        $divison = $a / $b;
       print("<h1>$a / $b = $divison</h1>");
    }
    function multi($a,$b)
    {
        $a = 10;
        $b = 5;
        $mulit = $a * $b;
        print("<h1>$a * $b = $mulit</h1>");
    }  
    add(10,5);
    print("<hr />");
    sub(10,5);
    print("<hr />");
    mod(10,5);
    print("<hr />");
    divison(10,5);
    print("<hr />");
    multi(10,5);

?>