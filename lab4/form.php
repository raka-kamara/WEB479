<html>
   
   <head>
      <style>
         .error {color: #FF0000;}
      </style>
   </head>
   
   <body>
    <?php
    // define variables and set to empty values
    $nameErr = $emailErr = $passwordErr = $ipAddresErr = $DOBErr = $genderErr = $mobileErr = $infoErr  = $websiteErr = "";
    $name = $email = $password = $ipAddress = $DOB = $gender =  $mobile = $info = $website = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
         }
         else {
            $name = test_input($_POST["name"]);

            if(!preg_match("/^[a-zA-Z-\s]*$/", $name)){
               $nameErr = "Only letters and white spaces allowed";
            }
         }



         if (empty($_POST["email"])) {
            $emailErr = "Email is required";
         }
         else {
            $email = test_input($_POST["email"]);
            
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
               $emailErr = "Invalid email format"; 
            }
         }

  


    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
     }
     else {
        $password = test_input($_POST["password"]);

        if(!preg_match("/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/", $password)){
           $passwordErr = "Invalid password";
        }
     }

    if (empty($_POST["ipAddress"])) {
        $ipAddresErr = "IP address is required";
     }

     else {
        $ipAddress = test_input($_POST["ipAddress"]);

        if(!preg_match("/^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/ ", $ipAddress)){
           $ipAddresErr = "Invalid IP address";
        }
     }

    

    if (empty($_POST["dob"])) {
        $DOBErr = "Date of birth address is required";
     }
     else {
        $DOB = test_input($_POST["dob"]);

        if(!preg_match("/\d{4}\-\d{2}-\d{2}/", $DOB)){
           $DOBErr = "Invalid date of birth";
        }
     } 


     if (empty($_POST["mobile"])) {
        $mobileErr = "Mobile number is required";
     }
     else {
        $mobile = test_input($_POST["mobile"]);

        if(!preg_match("/(^(\+88|0088)?(01){1}[3456789]{1}(\d){8})$/", $mobile)){
           $mobileErr = "Invalid mobile number";
        }
     }


     if (empty($_POST["website"])) {
        $websiteErr = "Website is required";
     }
     else {
        $website = test_input($_POST["website"]);

        if(!filter_var( $website,  FILTER_VALIDATE_URL)){
           $websiteErr = "Invalid Website";
        }
     }


     if (empty($_POST["info"])) {
        $infoErr = "Info is required";
     }
     
     else {
        $info = test_input($_POST["info"]);
     }

     if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
     }
     else {
        $gender = test_input($_POST["gender"]);
     }
     
}



    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
     }
    ?>
      
   <h2>Classes registration</h2>
     
     <p><span class = "error">* required field.</span></p>
    
     <form method = "post" action = "<?php 
        echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <table>
           <tr>
              <td>Name:</td>
              <td><input type = "text" name = "name">
                 <span class = "error">* <?php echo $nameErr;?></span>
              </td>
           </tr>
          
           <tr>
              <td>E-mail: </td>
              <td><input type = "text" name = "email">
                 <span class = "error">* <?php echo $emailErr;?></span>
              </td>
           </tr>
          
          

           <tr>
              <td>Password: </td>
              <td><input type="password" name = "password">
                 <span class = "error">* <?php echo $passwordErr;?></span>
              </td>
           </tr>
           
           <tr>
              <td>IP Address: </Address>:</td>
              <td><input type = "text" name = "ipAddress">
                 <span class = "error">* <?php echo $ipAddresErr;?></span>
              </td>
           </tr>

           <tr>
              <td>Date of birth: </Address>:</td>
              <td><input type = "text" name = "dob">
                 <span class = "error">* <?php echo $DOBErr;?></span>
              </td>
           </tr>

           <tr>
              <td>Mobile number: </Address>:</td>
              <td><input type = "text" name = "mobile">
                 <span class = "error">* <?php echo $mobileErr;?></span>
              </td>
           </tr>


           <tr>
              <td>Website: </Address>:</td>
              <td><input type = "text" name = "website">
                 <span class = "error">* <?php echo $websiteErr;?></span>
              </td>
           </tr>

           <tr>
              <td>Brief info: </Address>:</td>
              <td><textarea name="info" id="" cols="40" rows="5"></textarea>
                 <span class = "error">* <?php echo $infoErr;?></span>
              </td>
           </tr>

            <tr>

              <td>Gender:</td>
              <td>
                 <input type = "radio" name = "gender" value = "female">Female
                 <input type = "radio" name = "gender" value = "male">Male
                 <span class = "error">* <?php echo $genderErr;?></span>
              </td>
           </tr>
               
           <td>
              <input type = "submit" name = "submit" value = "Submit"> 
           </td>
               
        </table>
           
     </form>
   <?php
         echo "<h2>Your given values are as:</h2>";
         echo "Name: ". $name;
         echo "<br>";
         
         echo "Email: " . $email;
         echo "<br>";

         echo "Password: " . $password;
         echo "<br>";

         echo "IP Address: ". $ipAddress;
         echo "<br>";

         echo "Date of Birth: ". $DOB;
         echo "<br>";

         echo "Mobile Number: ". $mobile;
         echo "<br>";

         echo "Website: ". $website;
         echo "<br>";

         echo "Info: ". $info;
         echo "<br>";
        
         
         echo "Gender: ". $gender;

      ?>
   
   </body>
</html>
