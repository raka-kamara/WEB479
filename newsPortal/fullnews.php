<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full News</title>
    <style media="screen">
        img{
            width: 750px;
            height: 300px;
        }
        .div2{
            width: 750px;
            margin-top: 20px;
            font-size: 20px;
        }
        .div1{
            margin-left:400px;
            margin-top: 30px;
        }
        p{
            font-size: 20px;
            font-weight: bold;
            margin-left: 290px;
        }

    </style>
</head>
<body>
    <?php
    
    include'navbar1.php';
    include'db.php';
    
    $id=$_POST['id'];

    $sql="SELECT *from news where id='$id'";
    $query=mysqli_query($conn,$sql);

    while($info=mysqli_fetch_array($query)){
        ?>
            <div class="div1">
                <p><?php echo $info['date']; ?></p>
                <img src="image/<?php echo $info['image']; ?>" alt="">
                <div class="div2">
                    <?php echo $info['news'];?>
                </div>
            </div>
        <?php
    }
    
    
    ?>

    

</html>