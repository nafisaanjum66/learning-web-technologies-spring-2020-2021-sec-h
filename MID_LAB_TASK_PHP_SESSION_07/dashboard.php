 <?php 
    session_start();
    $user = $_SESSION['current_user'];
    if(isset($_SESSION['flag'])){
        ?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
</head>
<body>
        <table border="1" cellspacing="0" style="width: 60%; margin: auto;">
            <tr>
                <td colspan="2">


                    <table style="width: 100%">
                    <tr>
                        <td>
                            <img style="height: 50px;" src="logo.png" alt="logo">
                        </td>
                        <td style=" float: right; margin-top: 0px">
                            <p style="padding: 5px;">Logged in as <a href="viewprofile.php"><?php echo $user['name'];?></a> |
                            <a style="padding: 5px;" href="logout.php">Logout</a></p>
                        </td>
                    </tr>
                </table>
                </td>
                
            </tr>
            <tr>
                <td style="width: 30%; height: 250px;" >
                    <label style="padding-left: 15px;">Account</label>
                    <hr>
                    <ul style="padding-bottom: 60px;">
                        <li><a href="dashboard.php">Dashboard</a></li>
                        <li><a href="viewprofile.php">View Profile</a></li>
                        <li><a href="editprofile.php">Edit Profile</a></li>
                        <li><a href="changepropic.php">Change Profile Picture</a></li>
                        <li><a href="changepass.php">Change Password</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </td>
                <td>
                    <h3 style="padding-left: 20px;">Welcome <?php 
                    echo $user['name'];
                ?></h3>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <p>Copyright &copy; 2017</p>
                </td>
            </tr>
        </table>
    </form>     
</body>
</html>
<?php 
    }
    else{
        header("location:login.php");
    }
?>