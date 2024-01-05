<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Sharing Site</title>
    <style media="screen">
        body{
            background-color: azure;
        }
        .div1{
            border: 2px solid black;
            width:470px;
            float: left;
            margin-left: 10px;
            padding-bottom: 15px;
        }
        .div2{
            width: 200px;
            border: 1px solid white;
            max-height: 150px;
            overflow: hidden;
            float: left;
            margin-top: 10px;
            margin-left: 10px;
            padding: 1px;
            font-size:23px;
            font-weight: bold;
        }
        img{
            width: 220px;
            height: 160px;
            float: left;
            margin-left: 20px;
            margin-top:10px;
        }
        .divmain{
            margin-left:80px;
        }
        .div3{
            float: left;
           
            margin-top: 20px;
            margin-right: 200px;
           
        }
        #label1{
            font-size: 20px;
            font-weight: bold;
            margin-left: 60px;
        }
        #label2{
            font-size: 20px;
            font-weight: bold;
            margin-left: 14px;
            

        }
        form{
            margin-top: -70px;
            float:right;
            margin-right: 55px;
        }
        #readfullnew{
            font-size: 20px;
            font-weight: bold;
        }
    </style>

</head>
<body>
    <br><br>
    <div class="divmain">
        <?php
        include 'navbar1.php';
        include 'db.php';

        $sql="SELECT *from news order by id desc";
        $query=mysqli_query($conn,$sql);

        while($info=mysqli_fetch_array($query)){
            ?>
            <div class="div1">
                <img src="image/<?php echo $info['image'];?>" alt="">
                <div class="div2">
                <?php echo $info['news'];?>
                </div>
                <div class="div3"> 
                    <label id="label1"><?php echo formatDate3($info['date']);?></label><br><br>
                    <label id="label2"><?php echo formatDate1($info['date']);?></label>
                    <label id="label2"><?php echo formatDate2($info['date']);?></label>
                </div>

                <form action="fullnews.php" method="post">
                    <input type="text" name="id" value="<?php echo $info['id'];?>" hidden>
                    <input id="readfullnews" type="submit" name="fullnews" value="Read Full News">
                </form>
            </div>

            <?php
        }
        ?>

    </div>
</body>
</html>