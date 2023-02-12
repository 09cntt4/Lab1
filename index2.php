<!DOCTYPE html>
<html>
    <head>
        <title>Giải phương trình bậc hai</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">  
    </head>
    <body>
    <?php
// khai báo các biến toàn cầu
$a = "";
$b = "";
$c = "";
// đọc các hệ số từ FORM
if (isset($_POST['a'])) {
    $a = $_POST['a'];
}
if (isset($_POST['b'])) {
    $b = $_POST['b'];
}
if (isset($_POST['c'])) {
    $c = $_POST['c'];
}
/**
 * giải phương trình bậc 2 trong PHP
 *
 * @author: viettuts.vn
 * @param
 *            he so bac 2 $a
 * @param
 *            he so bac 1 $b
 * @param
 *            he so tu do $c
 */
function giaiPTB2($a, $b, $c)
{
    // kiểm tra biến đầu vào
    if ($a == "")
        $a = 0;
    if ($b == "")
        $b = 0;
    if ($c == "")
        $c = 0;
    // in phương trình ra màn hình
    echo "Phương trình: " . $a . "x2 + " . $b . "x + " . $c . " = 0";
    echo "<br>";
    // kiểm tra các hệ số
    if ($a == 0) {
        if ($b == 0) {
            echo ("Phương trình vô nghiệm!");
        } else {
            echo ("Phương trình có một nghiệm: " . "x = " . (-$c / $b));
        }
        return;
    }
    // tính delta
    $delta = $b * $b - 4 * $a * $c;
    $x1 = "";
    $x2 = "";
    // tính nghiệm
    if ($delta > 0) {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        echo ("Phương trình có 2 nghiệm là: " . "x1 = " . $x1 . " và x2 = " . $x2);
    } else if ($delta == 0) {
        $x1 = (-$b / (2 * $a));
        echo ("Phương trình có nghiệm kép: x1 = x2 = " . $x1);
    } else {
        echo ("Phương trình vô nghiệm!");
    }
}
?>
        
        <form method="post" action="">
            <div class="home">
            <h2>Giải phương trình bậc hai</h2>
            <input type="text" placeholder="Input a:" name="a" value=""/>
            <input type="text" placeholder="Input b:" name="b" value=""/>
             <input type="text" placeholder="Input c:" name="c" value=""/>
            <h3>công thức: ax2+bx+c=0</h3>
            <br/><br/>
            <input type="submit" name="calculate" value="Tính" />
            
            </div>
            
        <?php
// gọi hàm giải phương trình bậc 2
// Sử dụng từ kháo $GLOBALS để đọc các biến toàn cầu và truyền vào hàm
if (
    is_numeric($GLOBALS['a']) && is_numeric($GLOBALS['b'])
    && is_numeric($GLOBALS['c'])
) {
    giaiPTB2($GLOBALS['a'], $GLOBALS['b'], $GLOBALS['c']);
} else {
    echo ("Giá trị input không hợp lệ!");
}
?>
</form>
 
    </body>
</html>