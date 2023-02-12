<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">    
    <title>Bài 1</title>
</head>
<body>
<form action="index.php" method="POST">
    <div class="home">
        <h2>CHÀO THEO GIỜ</h2>
        <input type="text" placeholder="Input time" name="txtGio" /><br>
        <?php 
    if(isset($_POST["txtGio"]))
    {
        $gio = $_POST["txtGio"];

        if($gio<12)
            $chao ="Chào buổi sáng";
        else if ($gio<17)
            $chao="Chào buổi chiều";
        else
            $chao="Chào buổi tối";
        echo $chao;
    }

?>
 
<br>
    <button input type ="submit">Chào</button>
    </div>
</form>

</body>
</html>