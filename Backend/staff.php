<?php include('header.php') ?>
<?php include('connection.php')?>
<?php
session_start();
if (!isset($_SESSION['A'])) {
	header('Location: error.php');
	exit;
}
else {
    $type  = $_SESSION['A']; 
    
    $District  = $_SESSION['B'];
}
?>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>                           
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

            <form action="DashboardSearch.php" class="navbar-form navbar-right">
                <div class="form-group">
                    <input type="text" disabled=disabled class="form-control" value="<?php echo $type ; ?>">
                    <input type="text" disabled=disabled class="form-control" value="<?php echo $District ; ?>">

                </div>
                <!-- <button class="btn btn-default" name="SearchButton">Go</button> -->
            </form>

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
                <li class='active'><a href="staff.php">
                <span class="glyphicon glyphicon-th"></span> Home</a></li>
                <li><a href="Logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
        </div> <!-- Ending of side area-->

        <div class="col-sm-1" style="background-color: #fff; ">



        </div> <!-- Ending of Right Column-->

        <div class="col-sm-8" style="background-color: #fff">

            <!--<h2 style="font-family:times, serif; margin-bottom:40px;" class="text-center"><u>Add New Entry</u></h2>
            -->

            <div>
                <!-- add content -->
                <h2>Cargo Status</h2>
                <?php
                        include('connection.php');

                        $query = "select * from cargoprocessing where Approve='Approved' and Ship='Shipping' and status='Not Delivered' and RDistrict='$District'";
                        $result = mysql_query($query);
                        if (!$result)
                        {
                        $message = 'ERROR:' . mysql_error();
                        return $message;
                        }
                        else
                        {
                        $i = 0;
                        echo '<table id="customers" border=1 align=center><tr>';
                        while ($i < mysql_num_fields($result))
                        {
                          $meta = mysql_fetch_field($result, $i);
                          echo '<th>' . ucfirst($meta->name) . '</th>';
                          $i = $i + 1;
                        }
                        echo '<th>Delivered</th><th>Return</th></tr>';
                        $i = 0;
                        while ($row = mysql_fetch_row($result))
                        {
                          echo '<tr>';
                          $count = count($row);
                          $y = 0;
                          $idval='1';
                          while ($y < $count)
                          {
                          $c_row = current($row);
                          if($y==0)
                            $idval=$c_row;
                          // if($y==1)
                          //   $c_row="****";
                          echo '<td>' . $c_row . '</td>';
                          next($row);
                          $y = $y + 1;
                          }
                          echo '<td><a href=cargoDelivery11.php?id='.$idval.'>Approve</a></td><td><a href=cargoDelivery22.php?id='.$idval.'>Return</a></td>';
                          echo '</tr>';
                          $i = $i + 1;
                        }
                        echo '</table>';
                        mysql_free_result($result);
                        }
                        mysql_close ($con);

                     ?>
            </div>
        </div> <!-- Ending of main area-->


        <div class="col-sm-1" style="background-color: #fff; ">
        </div> <!-- Ending of Right Column-->
    </div> <!-- Ending of Row-->
</div> <!-- Ending of Container-->>

<?php include('footer.php') ?>

