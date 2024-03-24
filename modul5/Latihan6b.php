<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grid of squares</title>
    <style>
        .container {
            display: grid;
        }
        .square {
            width: 50px;
            height: 50px;
            background-color: white;
            border: 1px solid #000;
            text-align: center;
            line-height: 50px;
        }
        .blue {
            width: 50px;
            height: 50px;
            background-color: #8B93FF;
            border: 1px solid #000;
            text-align: center;
            line-height: 50px;
        }
        .line {
            display: flex;
        }
    </style>
</head>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input type="text" name="angka" placeholder="Masukkan Angka">
        <button type="submit">Submit</button>
    </form>
    <div class="container" style="margin-top: 2px;">
        
    <?php
    
    if(isset($_POST['angka'])) {
        $angka = $_POST['angka'];
    } else {
        $angka = 0;
    }
    
for ($i = $angka; $i >= 1; $i--) {
    echo '<div class="line">';
    for ($j = 1; $j <= $i; $j++) {
        if($i % 2 == 0){
            echo '<div class="blue">' . $i . '</div>';
        } else {
            echo '<div class="square">' . $i . '</div>';
        }
        
    }
    echo '</div>';
}
?>
       
    </div>  

</body>
</html>
