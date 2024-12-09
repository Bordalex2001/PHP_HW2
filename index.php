<?php
//Завдання 3
$width=50;
$height=50;
$border_radius=50;
$bg_color='blue';

echo "<div class='container' style='display: flex'>";
for($i=0;$i<10;$i++){
    echo "<div style='background-color: $bg_color; width: $width; height: $height; border-radius: $border_radius%'></div>";
}
echo "</div><br>";

//Завдання 4
$binary='110110';

function convertToDecimal($binary): int
{
    $sum=0;
    $weight=1;
    while ($binary > 0)
    {
        $remainder = $binary % 10;
        $sum += $remainder * $weight;
        $binary /= 10;
        $weight *= 2;
    }
    return $sum;
}

function convertToHexadecimal($decimal): string
{
    $hexadecimal='';
    $hex_digits=['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'A', 'B', 'C', 'D', 'E', 'F'];
    while ($decimal > 0)
    {
        $remainder = $decimal % 16;
        $hexadecimal = $hex_digits[$remainder].$hexadecimal;
        $decimal = floor($decimal / 16);
    }
    return $hexadecimal;
}

$decimal=convertToDecimal($binary);
$hexadecimal=convertToHexadecimal($decimal);

echo "\n<p>Binary: $binary</p>";
echo "\n<p>Decimal: $decimal</p>";
echo "\n<p>Hexadecimal: $hexadecimal</p>";