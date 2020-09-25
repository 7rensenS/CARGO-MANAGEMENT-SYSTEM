<?php
    if(isset($_POST['Login']))
    {
        $username=$_POST['Username'];
        $password=$_POST['Password'];
        $district=$_POST['District'];

        $count1=0; $count2=0; $count3=0;
        $count1=substr_count($username, "'");
        $count2=substr_count($password, "'");
        $count3=substr_count($district, "'");

        $err=0;
        if ($count1>0 || $count2>0 || $count3>0)
            $err=1;

        $con = mysql_connect("localhost","root","");
        if (!$con)
        {
        die('Could not connect: ' . mysql_error());
        }
        mysql_select_db("dapp", $con);
        $result = mysql_query("SELECT * from login where username='".$username."' and password='".$password."' and place='".$district."' and flag='1'");
        $flagg=0;
        $type='';

        

            while($row = mysql_fetch_array($result))
            {
                $flagg=1;
                $type=$row['domain'];
                $_SESSION['user'] = $type; // store session data
                $_SESSION['username'] = $username;
            }


        // =======DAPP SECTION========
        session_start();  
    
        $_SESSION['A'] = $type; 
    
        $_SESSION['B'] = $_POST['District'];
        // =======DAPP SECTION========
        
        if($err>0)
            echo "<script>location.href='index.php?msg=Invalid Username or Password'</script>";
        else if($flagg==1 && $type=="warehouse")
            echo "<script>location.href='warehouse.php'</script>";
        else if($flagg==1 && $type=="staff")
            echo "<script>location.href='staff.php'</script>";
        else if($flagg==1 && $type=="branch")
            echo "<script>location.href='branch.php'</script>";
        else
            echo "<script>location.href='error.php?msg=Invalid Username or Password'</script>";

        mysql_close($con);

    }
?>
<?php
    
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/adminstyles.css">
    <style type="text/css">
        .FieldInfo
        {
            color: rgb(251, 174, 44);
            font-family: Bitter, Georgia, "Times New Roman", Times, serif;
            font-size: 1.2em;
        }

        body{
            background-color: #ffffff;
        }
    </style>
</head>
<body>
<div style="height: 10px; background: #27aae1;"></div>
<nav class="navbar navbar-inverse" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-tatget="#collapse">

                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="../index.html">
                <h4 style="color: #ffffff; text-decoration: none; margin-top: -1px;
                    margin-right: 20px; font-family:cursive; font-weight: bold;">Cargo Dapp</h4>
            </a>
        </div>
    </div>
</nav>

<div class="Line" style="height: 10px; background: #27aae1;"></div>
<div class="container-fluid">
    <div class="row">

        <div class="col-sm-offset-4 col-sm-4">


            <br>  <br>  <br>  <br>
            <i><h2>Welcome to CargoDapp!</h2></i>



            <div>
                <form action="" method="post">
                    <fieldset>
                        <div class="form-group">

                            <label for="Username"><span class="FieldInfo">UserName:</span> </label>

                            <div class="input-group input-group-lg">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-envelope text-primary"></span>
                                </span>
                                <input class="form-control" type="text" required=required autofocus name="Username" id="Username" placeholder="Username">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="Password"><span class="FieldInfo">Password:</span> </label>
                            <div class="input-group input-group-lg">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-lock text-primary"></span>
                                </span>
                                <input class="form-control" type="password" required=required name="Password" id="Password" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="District"><span class="FieldInfo">District:</span> </label>
                                <div>
                                    <select class="form-control" name="District" id="District">
                                        <option value="ALAPPUZHA">ALAPPUZHA</option>
                                        <option value="ERNAKULAM">ERNAKULAM</option>
                                        <option value="IDUKKI">IDUKKI</option>
                                        <option value="KANNUR">KANNUR</option>
                                        <option value="KASARAGOD">KASARAGOD</option>
                                        <option value="KOLLAM">KOLLAM</option>
                                        <option value="KOTTAYAM">KOTTAYAM</option>
                                        <option value="KOZHIKODE">KOZHIKODE</option>
                                        <option value="MALAPPURAM">MALAPPURAM</option>
                                        <option value="PALAKKAD">PALAKKAD</option>
                                        <option value="PATHANAMTHITTA">PATHANAMTHITTA</option>
                                        <option value="THIRUVANANTHAPURAM">THIRUVANANTHAPURAM</option>
                                        <option value="THRISSUR">THRISSUR</option>
                                        <option value="WAYANAD">WAYANAD</option>
                                    </select>
                                </div>
                    
                        </div>
                        
                        <br>
                        <input class="btn btn-info btn-block" type="Submit" name="Login" value="Login">
                        <br>
                    </fieldset>

                </form>
            </div>
        </div> <!-- Ending of main area-->

    </div> <!-- Ending of Row-->
</div> <!-- Ending of Container-->
</body>
</html>




