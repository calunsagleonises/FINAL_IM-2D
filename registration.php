 <?php
        include 'views/header.php';
       ?>
       <div></div>
        <form id="loginform" action="models/register_user.php" method="POST">
            <div class="header">REGISTRATION</div>
            <?php
            if(isset($_GET['uname_error'])){
                if($_GET['uname_error']==1){
                    echo "<div class='error_message'> Invalid username </div>";
                }
            }
        ?>
    <label for="uname">Username</label>
    <input type="text" name="uname" id="uname" placeholder="username" required>
    <?php
            if(isset($_GET['email_error'])){
                if($_GET['email_error']==1){
                    echo "<div class='error_message'>Invalid email</div>";
                }
            }
        ?>
    <label for="uname">Email</label>
    <input type="text" name="email" id="email" placeholder="email" required>
    <label for="uname">First name</label>
    <input type="text" name="fname" id="fname" placeholder="First name" required>
    <label for="uname">Last name</label>
    <input type="text" name="lname" id="lname" placeholder="First name" required>
    <div>
    <label for="gender">gender</label>
    <select name="gender" id="gender">
    <option value="male">Male</option>
    <option value="female">Female</option>
    </select>
    </div>
        <label for="bdate">Birthdate</label>
        <input type="date" name="bdate" id="bdate" required>
    <label for="uname">Password</label>
    <input type="password" name="pass" id="pass"placeholder="password" required>
    <label for="uname">Confirm Password</label>
    <input type="password" name="conpass" id="conpass"placeholder=" confirm password" required>
    <div id="eula"></div>
    <input type="checkbox" name="eulabox" id="euloabox" placeholder="eulabox"/>
    <label for="eulabox"> <a href="">terms and conditions</a></label>
    
    
    <input type="submit" value="Register">
    
    
</form>
        <?php include 'views/footer.php';
?>
   
