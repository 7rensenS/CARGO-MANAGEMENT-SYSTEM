<?php include('header.php') ?>
<?php include('connection.php')?>
<?php
    if(isset($_POST['btnCargo']))
    {
            $sql="insert into cargo values('$_POST[odr]','$_POST[cid]','$_POST[date]','$_POST[mode]','$_POST[t1]','$_POST[t2]','$_POST[t3]','$_POST[t4]','$_POST[t5]','$_POST[t6]','$_POST[t7]','$_POST[t8]','$_POST[t9]','$_POST[t10]','$_POST[t11]','$_POST[t12]','$_POST[t13]','$_POST[t14]','$_POST[t15]')";
            mysql_query($sql,$con);
            $sql1="insert into cargoprocessing values('$_POST[odr]','$_POST[cid]','$_POST[mode]','$_POST[t1]','$_POST[t3]','$_POST[t7]','$_POST[t9]','$_POST[t13]','$_POST[t15]','Not Approved','Shipping Pending','Not Delivered')";
            mysql_query($sql1,$con);
            $sql2="insert into cargotodapp values('$_POST[odr]','$_POST[cid]','$_POST[date]','$_POST[mode]','$_POST[t1]','$_POST[t2]','$_POST[t3]','$_POST[t4]','$_POST[t5]','$_POST[t6]','$_POST[t7]','$_POST[t8]','$_POST[t9]','$_POST[t10]','$_POST[t11]','$_POST[t12]','$_POST[t13]','$_POST[t14]','$_POST[t15]','NotAdded')";
            mysql_query($sql2,$con);
            
            // echo $sql;
            // echo $sql1;
    }
?>                                
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

            <a class="navbar-brand" href="DashboardPagination.php">
                <h4 style="color: #ffffff; text-decoration: none; margin-top: -1px;
                    margin-right: 20px; font-family:cursive; font-weight: bold;">CargoDapp</h4>

            </a>
        </div>

        <div class="collapse navbar-collapse" id="collapse">

            <!-- <form action="DashboardSearch.php" class="navbar-form navbar-right">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search" name="Search">
                </div>
                <button class="btn btn-default" name="SearchButton">Go</button>
            </form> -->

        </div>
    </div>
</nav>
<div class="Line" style="height: 10px; background: #27aae1;"></div>


<div class="container-fluid">
    <div class="row" style="display:flex; margin-bottom: -15px;">
        <br>
        <div class="col-sm-2" style="color: #ff0000; ">
            <br>
            <br>
            <ul id="Side_Menu" class="nav nav-pills nav-stacked">
                <li class="active"><a href="warehouse.php"><span class="glyphicon glyphicon-list-alt"></span> Warehouse</a></li>
                <li class="active"><a href="AddNewEntry.php"><span class="glyphicon glyphicon-list-alt"></span> Add New Entry</a></li>
            </ul>
        </div> <!-- Ending of side area-->

        <div class="col-sm-1" style="background-color: #fff; ">



        </div> <!-- Ending of Right Column-->

        <div class="col-sm-8" style="background-color: #fff">

            <!--<h2 style="font-family:times, serif; margin-bottom:40px;" class="text-center"><u>Add New Entry</u></h2>
            -->

            <div>
                <form action="AddNewEntry.php" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <div class="col-xs-4"><br><br><br></div>
                        <div class="col-xs-4"><br><br><br></div>
                        <div class="col-xs-4"><br><br><br></div>
                            <?php
                                $sql="select max(num) as roll from cargo";
                                $data=mysql_query($sql);
                                $id=0;
                                while($row=mysql_fetch_array($data))
                                {
                                    $id=$row['roll'];
                                }
                                $id=$id+1;
                            ?>

                        <div class="col-xs-4">
                            <div class="form-group">
                                <br>
                                <input type=hidden name=odr value="<?php echo $id ; ?>" >
                                <label for="sender"><span class="FieldInfo">Cargo ID:</span> </label>
                                <input class="form-control" type="text" name="cid" value="<?php echo 'CRG'.$id ; ?>">     
                                <br>
                                <label for="date"><span class="FieldInfo">Date:</span> </label>
                                <input class="form-control" type="Date" name="date" placeholder="Date" value="<?php echo date("Y-m-d");?>">
                                <br>
                                <label for="mode"><span class="FieldInfo">Mode:</span> </label>
                                <br>
                                <input class="radio-inline" type="radio" autofocus name="mode"  value="train" >Train
                                <input class="radio-inline" type="radio" name="mode"  value="road" >Road
                                <br><br>
                                <label for="sender"><span class="FieldInfo"><h4>SENDER DETAILS:</h4> </span> </label>
                                <br>
                                <label for="sender"><span class="FieldInfo">Name:</span> </label>
                                <input class="form-control" type="text" required=required  name="t1" placeholder="Name">     
                                <br>
                                <label for="sender"><span class="FieldInfo">Address:</span> </label>
                                <textarea name="t2" id="" required=required  cols="30" rows="5"></textarea>      
                                <br>
                                <br>
                                <label for="sender"><span class="FieldInfo">District:</span> </label>
                                <select required=required class="form-control" class="demo-input-box" name="t3">
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
                                <br>
                                <label for="sender"><span class="FieldInfo">Mobile:</span> </label>
                                <input class="form-control" type="text" name="t4" required=required id="" pattern="[0-9]{10,12}"placeholder="Mobile">     
                                <br>
                                <label for="sender"><span class="FieldInfo">Email:</span> </label>
                                <input class="form-control" type="email" required=required  name="t5" placeholder="email">     
                                <br>
                                <label for="sender"><span class="FieldInfo">Exact Place:</span> </label>
                                <input class="form-control" type="text" required=required name="t6" placeholder="Exact Place">     
                                <br>
                                <br>
                                <br>
                                <label for="sender"><span class="FieldInfo"><h4>RECEIVER DETAILS:</h4> </span> </label>
                                <br>
                                <label for="sender"><span class="FieldInfo">Name:</span> </label>
                                <input class="form-control" type="text" required=required name="t7" placeholder="Name">     
                                <br>
                                <label for="sender"><span class="FieldInfo">Address:</span> </label>
                                <textarea name="t8" cols="30" rows="5" required=required ></textarea>      
                                <br>
                                <br>
                                <label for="sender"><span class="FieldInfo">District:</span> </label>
                                <select required=required class="form-control" class="demo-input-box" name="t9">
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
                                <br>
                                
                                
                                
                                <br>
                                <label for="sender"><span class="FieldInfo">Mobile:</span> </label>
                                <input class="form-control" type="text" required=required name="t10" pattern="[0-9]{10,12}" placeholder="Mobile">     
                                <br>
                                <label for="sender"><span class="FieldInfo">Email:</span> </label>
                                <input class="form-control" type="email" name="t11" placeholder="email">     
                                <br>
                                <label for="sender"><span class="FieldInfo">Exact Place:</span> </label>
                                <input class="form-control" type="text" required=required name="t12" placeholder="Exact Place">     
                                <br>
                                <label for="sender"><span class="FieldInfo">Product:</span> </label>
                                <input class="form-control" type="text" required=required name="t13" placeholder="Product">     
                                <br>
                                <label for="sender"><span class="FieldInfo">Weight Kgm:</span> </label>
                                <input class="form-control" type="text" required=required name="t14" placeholder="Weight">     
                                <br>
                                <label for="sender"><span class="FieldInfo">Total Cost:</span> </label>
                                <input class="form-control" type="text" required=required name="t15" placeholder="Cost">     
                                <br>
                                
                                <input class="btn btn-success btn-block" type="Submit" name="btnCargo" value="ADD NEW ENTRY">
                                <br>
                            </div>
                        </div>
                        <div class="col-xs-4" style="margin-bottom:-20px;">
                            <br>
                        </div>
                        <div class="col-xs-4 pull-right">  
                            <br>
                            <br>
                        </div>
                     <br>
                    </fieldset>

                </form>

            </div>
        </div> <!-- Ending of main area-->


        <div class="col-sm-1" style="background-color: #fff; ">
        </div> <!-- Ending of Right Column-->
    </div> <!-- Ending of Row-->
</div> <!-- Ending of Container-->>

<?php include('footer.php') ?>

