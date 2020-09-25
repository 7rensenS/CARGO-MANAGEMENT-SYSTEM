<?php include('connection.php')?>
<?php
if(isset($_POST['btnsubmit']))
{
        $sql="insert into staff values('$_POST[odr]','$_POST[t1]','$_POST[t2]','$_POST[p1]','$_POST[d1]','$_POST[t4]')";
        $sql1="insert into login values('$_POST[t1]','$_POST[p1]','$_POST[d1]','staff','0')";
        
        mysql_query($sql,$con);
        mysql_query($sql1,$con);
}
?>

<html>
<head>
<title>Staff Registration</title>
<link href="./css/style1.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <form name="frmRegistration" method="post" action="">
        <div class="demo-table">
        <div class="form-head">Staff Registration</div>
<?php
    $sql="select max(num) as roll from staff";
    $data=mysql_query($sql);
    $id=0;
    while($row=mysql_fetch_array($data))
    {
        $id=$row['roll'];
    }
    $id=$id+1;
?>

            <div class="field-column">
                <label>Staff ID</label>
                <div>
                    <input type=hidden name=odr value="<?php echo $id ; ?>" >
                    <input type="text" class="demo-input-box" name="t1"  value="<?php echo 'STAFF'.$id ; ?>">
                </div>
            </div>
            <div class="field-column">
                <label>Staff Name</label>
                <div>
                    <input type="text" autofocus required=required class="demo-input-box" name="t2" value="">
                </div>
            </div>
            <div class="field-column">
                <label>Password</label>
                <div><input type="password" class="demo-input-box" name="p1" value="0987654321"></div>
            </div>
            
            <div class="field-column">
                <label>Warehouse District</label>
                <div>
                    <select required=required class="demo-input-box" name="d1">
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
            <div class="field-column">
                <label>Email</label>
                <div>
                    <input type="email" required=required class="demo-input-box" name="t4" value="">
                </div>
            </div>
            <div class="field-column">
                <div>
                    <input type="submit" name="btnsubmit" value="Register" class="btnRegister">
                </div>
            </div>
        </div>
    </form>
</body>
</html>