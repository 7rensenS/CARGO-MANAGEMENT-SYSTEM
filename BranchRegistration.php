<?php include('connection.php'); ?>

<?php
if(isset($_POST['btnsubmit']))
{
        $sql="insert into branch values('$_POST[odr]','$_POST[t1]','$_POST[p1]','$_POST[t2]','$_POST[d1]','$_POST[t3]','$_POST[t4]','$_POST[t5]','$_POST[t6]')";
        $sql1="insert into login values('$_POST[t1]','$_POST[p1]','$_POST[d1]','branch','0')";
        
        mysql_query($sql,$con);
        mysql_query($sql1,$con);
}
?>
<html>
<head>
<title>Branch Registration</title>
<link href="./css/style1.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <form name="frmRegistration" method="post" action="">
        <div class="demo-table">
        <div class="form-head">Branch Registration</div>
<?php
    $sql="select max(num) as roll from branch";
    $data=mysql_query($sql);
    $id=0;
    while($row=mysql_fetch_array($data))
    {
        $id=$row['roll'];
    }
    $id=$id+1;
?>
            <div class="field-column">
                <label>Branch ID</label>
                <div>
                    <input type=hidden name=odr value="<?php echo $id ; ?>" > 
                    <input type="text" class="demo-input-box" name="t1"  value="<?php echo 'B'.$id ; ?>">
                </div>
            </div>
            
            <div class="field-column">
                <label>Password</label>
                <div><input type="password" autofocus required=required class="demo-input-box" name="p1" value=""></div>
            </div>
        
            <div class="field-column">
                <label>Warehouse id</label>
                <div>
                    <input type="text" required=required class="demo-input-box" name="t2" value="">
                </div>

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
                <label>Branch Name</label>
                <div><input type="text" required=required class="demo-input-box" name="t3" value=""></div>
            </div>
            <div class="field-column">
                <label>Branch Address</label>
                <div><textarea name="t4" required=required  id="" cols="30" rows="10"></textarea></div>
            </div>
            <div class="field-column">
                <label>Place</label>
                <div><input type="text" required=required class="demo-input-box" name="t5" value=""></div>
                    
            </div>
            <div class="field-column">
                <label>Email</label>
                <div>
                    <input type="email" required=required class="demo-input-box" name="t6"value="">
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