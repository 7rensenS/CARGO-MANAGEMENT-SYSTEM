<?php include('header.php') ?>
<?php include('connection.php')?>
<?php
    if(isset($_POST['btnCargo']))
    {
            $sql="insert into cargo values('$_POST[odr]','$_POST[cid]','$_POST[date]','$_POST[mode]','$_POST[t1]','$_POST[t2]','$_POST[t3]','$_POST[t4]','$_POST[t5]','$_POST[t6]','$_POST[t7]','$_POST[t8]','$_POST[t9]','$_POST[t10]','$_POST[t11]','$_POST[t12]','$_POST[t13]','$_POST[t14]','$_POST[t15]')";
            mysql_query($sql,$con);
            $sql1="insert into cargoprocessing values('$_POST[odr]','$_POST[cid]','$_POST[mode]','$_POST[t1]','$_POST[t3]','$_POST[t7]','$_POST[t9]','$_POST[t13]','$_POST[t15]',0,0,'')";
            mysql_query($sql1,$con);
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

            <form action="DashboardSearch.php" class="navbar-form navbar-right">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search" name="Search">
                </div>
                <button class="btn btn-default" name="SearchButton">Go</button>
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
            <li><a href="warehouse.php">
                <span class="glyphicon glyphicon-th"></span> Home</a></li>
                <li class="active"><a href="AddNewEntry.php"><span class="glyphicon glyphicon-list-alt"></span> Add New Entry</a></li>
                <li><a href="../BranchRegistration.php"><span class="glyphicon glyphicon-list-alt"></span> Add Branch</a></li>
                <li><a href="../StaffRegistration.php"><span class="glyphicon glyphicon-list-alt"></span> Add Staff</a></li>
                <li><a href="Settings.php"><span class="glyphicon glyphicon-cog"></span> Cargo</a></li>
                <li><a href="Logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
        </div> <!-- Ending of side area-->

        <div class="col-sm-1" style="background-color: #fff; ">



        </div> <!-- Ending of Right Column-->

        <div class="col-sm-8" style="background-color: #fff">

            <!--<h2 style="font-family:times, serif; margin-bottom:40px;" class="text-center"><u>Add New Entry</u></h2>
            -->

            <div>
                <form role="form" action="" method="post" enctype="multipart/form-data">
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
                                <input id="id1" type=hidden name=odr value="<?php echo $id ; ?>" >
                                
                                <label for="sender"><span class="FieldInfo">Cargo ID:</span> </label>
                                
                                <input id="id2"  class="form-control" type="text" name="cid" value="<?php echo 'CRG'.$id ; ?>">     
                                <br>
                                <label for="date"><span class="FieldInfo">Date:</span> </label>
                                
                                <input id="id3" class="form-control" type="Date" name="date" placeholder="Date" value="<?php echo date("Y-m-d");?>">
                                <br>
                                <label for="mode"><span class="FieldInfo">Mode:</span> </label>
                                <br>
                                
                                <input type="radio" id="id4" class="radio-inline" autofocus name="mode"  value="train" >Train
                                
                                <input type="radio" id="id4" class="radio-inline" name="mode"  value="road" >Road
                                <br><br>
                                <label for="sender"><span class="FieldInfo"><h4>SENDER DETAILS:</h4> </span> </label>
                                <br>
                                <label for="sender"><span class="FieldInfo">Name:</span> </label>
                                
                                <input id="id5" class="form-control" type="text" required=required  name="t1" placeholder="Name">     
                                <br>
                                <label for="sender"><span class="FieldInfo">Address:</span> </label>
                               
                                <textarea id="id6" name="t2" required=required  cols="30" rows="5"></textarea>      
                                <br>
                                <br>
                                <label for="sender"><span class="FieldInfo">District:</span> </label>
                                
                                <select id="id7" required=required class="form-control" class="demo-input-box" name="t3">
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
                                
                                <input id="id8" class="form-control" type="text" name="t4" required=required  pattern="[0-9]{10,12}"placeholder="Mobile">     
                                <br>
                                <label for="sender"><span class="FieldInfo">Email:</span> </label>
                                
                                <input id="id9" class="form-control" type="email" required=required  name="t5" placeholder="email">     
                                <br>
                                <label for="sender"><span class="FieldInfo">Exact Place:</span> </label>
                                
                                <input id="id10" class="form-control" type="text" required=required name="t6" placeholder="Exact Place">     
                                <br>
                                <br>
                                <br>
                                <label for="sender"><span class="FieldInfo"><h4>RECEIVER DETAILS:</h4> </span> </label>
                                <br>
                                <label for="sender"><span class="FieldInfo">Name:</span> </label>
                                
                                <input id="id11" class="form-control" type="text" required=required name="t7" placeholder="Name">     
                                <br>
                                <label for="sender"><span class="FieldInfo">Address:</span> </label>
                                <textarea id="id12" name="t8" cols="30" rows="5" required=required ></textarea>      
                                <br>
                                <br>
                                <label for="sender"><span class="FieldInfo">District:</span> </label>
                                
                                <select id="id13" required=required class="form-control" class="demo-input-box" name="t9">
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
                                
                                <input id="id14" class="form-control" type="text" required=required name="t10" pattern="[0-9]{10,12}" placeholder="Mobile">     
                                <br>
                                <label for="sender"><span class="FieldInfo">Email:</span> </label>
                                
                                <input id="id15" class="form-control" type="email" name="t11" placeholder="email">     
                                <br>
                                <label for="sender"><span class="FieldInfo">Exact Place:</span> </label>
                                
                                <input id="id16" class="form-control" type="text" required=required name="t12" placeholder="Exact Place">     
                                <br>
                                <label for="sender"><span class="FieldInfo">Product:</span> </label>
                                
                                <input id="id17" class="form-control" type="text" required=required name="t13" placeholder="Product">     
                                <br>
                                <label for="sender"><span class="FieldInfo">Weight Kgm:</span> </label>
                                
                                <input id="id18" class="form-control" type="text" required=required name="t14" placeholder="Weight">     
                                <br>
                                <label for="sender"><span class="FieldInfo">Total Cost:</span> </label>
                                <input id="id19" class="form-control" type="text" required=required name="t15" placeholder="Cost">     
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
<!-- ******$$$$$$$$--FOR BLOCKCHAIN CONNECTION--$$$$$$$$******* -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/web3.min.js"></script>
    <script>
      // Initialize Web3
      if (typeof web3 !== 'undefined') {
        web3 = new Web3(web3.currentProvider);
      } else {
        web3 = new Web3(new Web3.providers.HttpProvider('http://localhost:7545'));
      }

      // Set Account
      web3.eth.defaultAccount = web3.eth.accounts[0];

      // Set Contract Abi
      var contractAbi =[
    {
        "inputs": [
            {
                "internalType": "uint256",
                "name": "_id",
                "type": "uint256"
            },
            {
                "internalType": "string",
                "name": "_num",
                "type": "string"
            },
            {
                "internalType": "string",
                "name": "_Date",
                "type": "string"
            },
            {
                "internalType": "string",
                "name": "_Mode",
                "type": "string"
            }
        ],
        "name": "addCargo",
        "outputs": [],
        "stateMutability": "nonpayable",
        "type": "function"
    },
    {
        "inputs": [
            {
                "internalType": "uint256",
                "name": "_id",
                "type": "uint256"
            },
            {
                "internalType": "string",
                "name": "_Product",
                "type": "string"
            },
            {
                "internalType": "uint256",
                "name": "_Weight",
                "type": "uint256"
            },
            {
                "internalType": "uint256",
                "name": "_Cost",
                "type": "uint256"
            }
        ],
        "name": "addCargoData",
        "outputs": [],
        "stateMutability": "nonpayable",
        "type": "function"
    },
    {
        "inputs": [
            {
                "internalType": "uint256",
                "name": "_id",
                "type": "uint256"
            },
            {
                "internalType": "string",
                "name": "_RName",
                "type": "string"
            },
            {
                "internalType": "string",
                "name": "_RAddress",
                "type": "string"
            },
            {
                "internalType": "string",
                "name": "_RDistrict",
                "type": "string"
            }
        ],
        "name": "addReceiver",
        "outputs": [],
        "stateMutability": "nonpayable",
        "type": "function"
    },
    {
        "inputs": [
            {
                "internalType": "uint256",
                "name": "_id",
                "type": "uint256"
            },
            {
                "internalType": "uint256",
                "name": "_RMobile",
                "type": "uint256"
            },
            {
                "internalType": "string",
                "name": "_REmail",
                "type": "string"
            },
            {
                "internalType": "string",
                "name": "_RExactPlace",
                "type": "string"
            }
        ],
        "name": "addReceivers",
        "outputs": [],
        "stateMutability": "nonpayable",
        "type": "function"
    },
    {
        "inputs": [
            {
                "internalType": "uint256",
                "name": "_id",
                "type": "uint256"
            },
            {
                "internalType": "string",
                "name": "_SName",
                "type": "string"
            },
            {
                "internalType": "string",
                "name": "_SAddress",
                "type": "string"
            },
            {
                "internalType": "string",
                "name": "_SDistrict",
                "type": "string"
            }
        ],
        "name": "addSender",
        "outputs": [],
        "stateMutability": "nonpayable",
        "type": "function"
    },
    {
        "inputs": [
            {
                "internalType": "uint256",
                "name": "_id",
                "type": "uint256"
            },
            {
                "internalType": "uint256",
                "name": "_SMobile",
                "type": "uint256"
            },
            {
                "internalType": "string",
                "name": "_SEmail",
                "type": "string"
            },
            {
                "internalType": "string",
                "name": "_SExactPlace",
                "type": "string"
            }
        ],
        "name": "addSenders",
        "outputs": [],
        "stateMutability": "nonpayable",
        "type": "function"
    },
    {
        "inputs": [
            {
                "internalType": "uint256",
                "name": "",
                "type": "uint256"
            }
        ],
        "name": "cargodatas",
        "outputs": [
            {
                "internalType": "string",
                "name": "Product",
                "type": "string"
            },
            {
                "internalType": "uint256",
                "name": "Weight",
                "type": "uint256"
            },
            {
                "internalType": "uint256",
                "name": "Cost",
                "type": "uint256"
            }
        ],
        "stateMutability": "view",
        "type": "function"
    },
    {
        "inputs": [
            {
                "internalType": "uint256",
                "name": "",
                "type": "uint256"
            }
        ],
        "name": "cargos",
        "outputs": [
            {
                "internalType": "string",
                "name": "num",
                "type": "string"
            },
            {
                "internalType": "string",
                "name": "Date",
                "type": "string"
            },
            {
                "internalType": "string",
                "name": "Mode",
                "type": "string"
            }
        ],
        "stateMutability": "view",
        "type": "function"
    },
    {
        "inputs": [
            {
                "internalType": "uint256",
                "name": "",
                "type": "uint256"
            }
        ],
        "name": "receivers",
        "outputs": [
            {
                "internalType": "string",
                "name": "RName",
                "type": "string"
            },
            {
                "internalType": "string",
                "name": "RAddress",
                "type": "string"
            },
            {
                "internalType": "string",
                "name": "RDistrict",
                "type": "string"
            }
        ],
        "stateMutability": "view",
        "type": "function"
    },
    {
        "inputs": [
            {
                "internalType": "uint256",
                "name": "",
                "type": "uint256"
            }
        ],
        "name": "receiverss",
        "outputs": [
            {
                "internalType": "uint256",
                "name": "RMobile",
                "type": "uint256"
            },
            {
                "internalType": "string",
                "name": "REmail",
                "type": "string"
            },
            {
                "internalType": "string",
                "name": "RExactPlace",
                "type": "string"
            }
        ],
        "stateMutability": "view",
        "type": "function"
    },
    {
        "inputs": [
            {
                "internalType": "uint256",
                "name": "",
                "type": "uint256"
            }
        ],
        "name": "senders",
        "outputs": [
            {
                "internalType": "string",
                "name": "SName",
                "type": "string"
            },
            {
                "internalType": "string",
                "name": "SAddress",
                "type": "string"
            },
            {
                "internalType": "string",
                "name": "SDistrict",
                "type": "string"
            }
        ],
        "stateMutability": "view",
        "type": "function"
    },
    {
        "inputs": [
            {
                "internalType": "uint256",
                "name": "",
                "type": "uint256"
            }
        ],
        "name": "senderss",
        "outputs": [
            {
                "internalType": "uint256",
                "name": "SMobile",
                "type": "uint256"
            },
            {
                "internalType": "string",
                "name": "SEmail",
                "type": "string"
            },
            {
                "internalType": "string",
                "name": "SExactPlace",
                "type": "string"
            }
        ],
        "stateMutability": "view",
        "type": "function"
    }
]; // Add Your Contract ABI here!!!

      // Set Contract Address
      var contractAddress = '0x8f234208Ca0BfABB366818630Ed8339C626D13F0'; // Add Your Contract address here!!! {its available run remix}

      // Set the Contract
      var contract = web3.eth.contract(contractAbi).at(contractAddress);
        
      $('form').on('submit', function(event) {
        event.preventDefault();

        contract.addCargo($('#id1').val(),$('#id2').val(),$('#id3').val(),$('#id4').val());
        contract.addSender($('#id1').val(),$('#id5').val(),$('#id6').val(),$('#id7').val());
        contract.addSenders($('#id1').val(),$('#id8').val(),$('#id9').val(),$('#id10').val());
        contract.addReceiver($('#id1').val(),$('#id11').val(),$('#id12').val(),$('#id13').val());
        contract.addReceivers($('#id1').val(),$('#id14').val(),$('#id15').val(),$('#id16').val());
        contract.addCargoData($('#id1').val(),$('#id17').val(),$('#id18').val(),$('#id19').val());
      })

</script>

<?php include('footer.php') ?>

