<html>
<head>
</head>
<link rel = "stylesheet" type = "text/css" href = "cataloguepage.css" >
</head>
<style type="text/css">

ul.card li{
	width:380px;
	
 display:inline-block;
 
 
 
text-align:center;

font-family:arial;

 vertical-align:center;

}

.price{
	color:grey;
	font-size:22px;
	
}
.card button{
	border:none;
	outline:0;padding:12px;
	color:white;
	background-color:#000;
	text-align:center;
	cursor:pointer;
	width:100%;
	font-size:18px;
}
.card button:hover{
	opacity:0.7;
}

.logo img 
{
	margin-top:10px;
	width: 100px;
	height: auto;
	float: left;
}


.navigation
{
	
	
	list-style: none;
	margin-top: 10px;
 float:right;
}

.navigation li
{
	display: inline-block;
	font-size:18px;
	font-family: arial;
	font-weight:bold;
}
.navigation button
{
opacity:0.7;
	color: black;
	
	padding: 4px 8px;
background-color:white;
	
font-family: arial;
font-weight:bold;
	font-size: 20px;
	text-transform: uppercase;
}
.navigation li.active a
{
	border: 1px solid black;
}
label
{
	color: black;
	
	font-size: 30px;
opacity:0.6;
	
font-family: arial;
font-weight:bold;
}
	.main
	{
		
		margin-top:10px;
		opacity:0.7;
	color: white;
	
	
background-color:black;
	
font-family: arial;
font-weight:bold;
	
	
	text-align:center;
	}
	
	
		.main h1{
			font-size:40;
		}
		.main h2{
			font-size:18;
		}
		.footer 
{
	
	opacity:0.7;
	background-color:black;
	


font-family: arial;
color: white;
font-size: 15px;

font-weight:bold;
background-position:cover;
height:35vh;
}
		
		
		
		
		
		
		

</style>
<body>


<div class="logo">
			
			<img src= "<?php echo base_url("assets/wetulogo.png");?>"/><label><br>Wetu Shopping</label><br>
			
			
				
<ul class = "navigation">
			
		
		
		
		<li><a href = "cataloguemen."></li>
			<li>Men</a></li>
			
			               
						   
		<li><a href = ""></li>
			<li>Women</a></li>                                                                                                                                                                                  
		
		<li><a href = ""></li>
			<li>Kids</a></li>
			
			
		<li><a href = ""></li></a>
			<li><button>CONTACT US</button></a></li>
		</ul>
		<BR><BR><br>
		
			</div>
			
			<div class="main">
			<h1>Catalog<h1><h2>Home/Available Products<h2>
			</div>
	
<?php
       
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wetu";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql="SELECT* FROM admin";
$result = $conn->query($sql);
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
			
			
?>
        <head>
            <style type="text/css">
 .columns {
  font-family: Times New Roman;
  margin-top: 20px;
  float: left;
  width: 25%;
  padding: 0 20px;
  margin-bottom: 20px;
}
.rows{
     font-family: Times New Roman;
 float: right;
 left: 50%;
    max-width: 1300px;
    margin: auto;
    background: white;

}
.rows:after {
  font-family: Times New Roman;
  content: "";
  display: table;
  clear: both;
}
@media screen and (max-width: 600px) {
  .columns {
    font-family: Times New Roman;
    width: 100%;
    display: block;
    margin-bottom: 40px;
  }
}
.cardy{
  font-size: 18px;
  font-family: Times New Roman;
  color: black;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  background-color: white;
  text-align:center;

font-family:arial;
}

.cardy button{
	border:none;
	outline:0;padding:12px;
	color:white;
	background-color:#000;
	text-align:center;
	cursor:pointer;
	width:100%;
	font-size:18px;
}
            </style>
        </head>
        <div class="columns">
                    <img src=<?php echo ($row["picture"]); ?> style="width:100%; height: 200px;"/>
                        <div class="cardy">
                            <h3><?php echo $row["item"]; ?></h3>
                            <p>Ksh<?php echo $row["price"]; ?></p>
                            <a href="#" name="add"><button>Add To Cart</button></a>
                        </div>
                    </div>
<?php
        
	}
       
        mysqli_free_result($result);

    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}


?>

