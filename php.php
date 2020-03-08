<?php
    $potega=2**10;
    echo $potega, "<br>";
    //systemy liczbowe 

    $int=10;
    $hex=0xA;
    $oct=012; // 2*8^ + 1*8^1 = 10 
    $bin=0b1011; // 11(10)

    echo $int,"<br>";
    echo $hex,"<br>";
    echo $oct,"<br>";
    echo $bin,"<br>";

    //operatory bitowe 
    $x=0b1010
    echo $x; // 10 

    $x=$x>>1;
    echo $x; //5

    $x=$x<<2;
    echo$x; //20

    //równe / identyczne
     
    $x=1;
    $y=1.0;
}
    if ($x===$y) {
  echo "identyczne<br>";      
    } else{
        echo "nieidentyczne<br>";
    }
}
 echo gettype ($x); //integer
 echo gettype ($y), "<hr>"; //double

 //operatory rzutowania danych

 $text="123ssd";
 $x = (int)$text;
 echo $x; ///123
 echo gettype ($x); //integer


?>