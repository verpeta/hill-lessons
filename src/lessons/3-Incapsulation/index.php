<?php



class Color{
    //setNumbers

    //MixColor(Color) - середне арифметичне

    //getColor

    //getStringColor -> n1,n2,n3
}

$color1 = new Color(10, 20, 30);
$color2 = new Color("90, 200,80");

$mixedColor = $color2->mixColor($color1);

?>

<body style="background-color: rgb(<?php echo $mixedColor->getTextValue() ?>)">

</body>
