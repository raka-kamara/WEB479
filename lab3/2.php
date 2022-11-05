<body>
    <?php
        for($i = 1; $i<=5; $i++)
        {
            for($j = 1; $j <= $i; $j++){
               echo"* "; 
            }
            echo"<br>";
        }
        
        for($i = 5; $i >= 1; $i--)
        {
            for($j = 5-$i; $j > 0; $j--){
            
                echo "&nbsp;&nbsp;";
            }
                for($k = $i; $k > 0; $k--){
                    echo" *";
                }
                echo"<br>";
            }
            
           
    ?>

</body>