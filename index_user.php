<?php
session_start();
$user_username=$_SESSION["user_username"];
	include("Connections/connect.php");
	$result=mysql_query("SELECT * from banner where ban_id='1'");
	$row=mysql_fetch_assoc($result);
	$ban_name=$row["ban_name"];

	//echo "<img src='images/$ban_name' width='800'>";
?>
<?php

//	echo ">> $username";


//	echo ">> $name";

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="http://www.jacklmoore.com/colorbox/jquery.colorbox.js"></script>
	<link rel="stylesheet" href="http://www.jacklmoore.com/colorbox/example1/colorbox.css" />
	<link rel="shortcut icon" href="images/12494896_922368304483308_7093255501030668154_n.jpg" />
<title>ITSAREADEE</title>

<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
	h1
	{
		color:<?php echo $prof_color ?>;
		font-family: Trivial;
		font-size: 85px;
	}
	h2
	{
		color:<?php echo $prof_color ?>;
		font-family: Trivial;
		font-size: 20px;
	}
	h3
	{
		color:#555;
		font-family: Trivial;
		font-size: 25px;
	}
	h4{
		font-size: 15px;
		font-family: Trivial;
		color: #FFF;
	}
.container {

	position: relative;

}

.image {
  opacity: 1;
  transition: .5s ease;

}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
	 top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.container:hover .image {
  opacity: 0.3;
}

.container:hover .middle {
  opacity: 1;
}

.text {
  background-color: #FF4253;
  color: white;
  font-size: 30px;
  padding: 24px 52px;
}
	<?php
	$result2= mysql_query("SELECT * from picslide");
	while($row2=mysql_fetch_assoc($result2))
	{
	$spic_id=$row2["spic_id"];
	$spic_name=$row2["spic_name"];
	$spic_time=$row2["spic_time"];

	?>
	div.animation<?php echo"$spic_id";?>{
	    width:100%;
	    height: 100%;
	    background-color: #F9F9F9;
	    position: relative;
	    -webkit-animation-name: animation<?php echo"$spic_id";?>; /* Chrome, Safari, Opera */
	    -webkit-animation-duration: <?php echo"$spic_time";?>s; /* Chrome, Safari, Opera */
	    -webkit-animation-iteration-count: infinite; /* Chrome, Safari, Opera */
	    animation-name: animation<?php echo"$spic_id";?>;
	    animation-duration: <?php echo"$spic_time";?>s;
	    animation-iteration-count: infinite;
	}
	@-webkit-keyframes animation<?php echo"$spic_id";?> {
	    0%   {background-image: url(<?php echo"$spic_name";?>);}
	    50% {background-image:url(photobanner/0.jpg );}
	    100%   {background-image: url(<?php echo"$spic_name";?>);}
	  }
	/* --------------------------------------------------------------------------------------------------------------------------------------------*/
	<?php } ?>

  </style>
	<script language="javascript">
function js_popup(theURL,width,height) { //v2.0
	leftpos = (screen.availWidth - width) / 2;
			toppos = (screen.availHeight - height) / 2;
		window.open(theURL, "viewdetails","width=" + width + ",height=" + height + ",left=" + leftpos + ",top=" + toppos);
}

function register_box(){
	$.colorbox({iframe:true, width:"500px", height:"600px", href: "register.php"});
}
</script>
</head>

<body>

<table width="100%" border="0">
	<tr align="right" bgcolor="#252525" >
			<td><nav class="navbar-inverse"   style="background-color:#6ECFD2">
						<div class="container-fluid">
							<ul class="nav navbar-nav navbar-right">
			        <li class="deopdown">
							<?php	$result12=mysql_query("SELECT * from user where user_username='$user_username'");
									$row12=mysql_fetch_assoc($result12);

										$user_name=$row12["user_name"];
								    $user_picture=$row12["user_picture"];
									 ?>
			        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $user_name; ?>
			          <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
			     		 <li role="presentation"><a role="menuitem" tabindex="-1" href="user_picture.php"><?php echo"<img src='picture/$user_picture' width='140'><br>?????????????????????????????????"?></a></li>
			     		 <li role="divider">
			     		 <li role="presentation"><a role="menuitem" tabindex="-1" href="user_edit.php">?????????????????????????????????</a></li>
			      		<li role="presentation" class="divider"></li>
			     		 <li role="presentation"><a role="menuitem" tabindex="-1" href="user_password.php">?????????????????????????????????????????????</a></li>
			    </ul></a></li></lu >
			          <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
			        </ul>
				</div></nav></td>

	</tr>
  <tr>
    <td height="149" background="images/<?php echo $ban_name; ?>" colspan="2">&nbsp;</td>
  </tr>
	<tr><td>
		<nav class="navbar navbar"   style="background-color:#6ECFD2">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="index_user.php">?????????????????????</a>
				</div>
				<ul class="nav navbar-nav">

					<?php
					$result1= mysql_query("SELECT * from group_menu where gmenu_status='N'");
					while($row1=mysql_fetch_assoc($result1))
					{
						$gmenu_id=$row1["gmenu_id"];
						$gmenu_name=$row1["gmenu_name"];

					?>



					<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $gmenu_name ?>
				<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<?php
								$result2= mysql_query("SELECT * from menu where gmenu_id='$gmenu_id' and menu_status='N'");
								while($row2=mysql_fetch_assoc($result2))
								{
									$menu_name=$row2["menu_name"];
									$menu_link=$row2["menu_link"];
								?>
								<li><a href="<?php echo $menu_link ?>"><?php echo $menu_name ?></a></li>
									<?php } ?>
							</ul>
						</li>
					<?php } ?>
				</ul>
			</div></nav>
	</td></tr>

	</table>
<table width="95%" align="center"><tr><td>


		  </td>
		  </tr>

		  <tr>
		  <td align="center">
								<!--........................alert...................................................-->

				<!--.......................................................................................................-->

</td>
	</tr>
  <tr>
    <td colspan="2">
			<div class="panel panel-info">
		 	<div class="panel-heading"> ??????????????????????????????????????????????????? </div>
		 	<div class="panel-body">

			<table class="table table-striped">
				<tr align="center"><td>???????????????</td>
						<td>?????????????????????</td>
						<td>?????????</td>
						<td>????????????</td>
				</tr>
			<?php
						 $result6=mysql_query("SELECT * from event order by event_id DESC");
						 while($row6=mysql_fetch_assoc($result6))
						 {
							 	$event_id=$row6["event_id"];
								$game_name=$row6["game_name"];
								$event_place=$row6["event_place"];
								$event_date=$row6["event_date"];
								$event_time=$row6["event_time"];
								$event_memo=$row6["event_memo"];

								$result7=mysql_query("SELECT * from boardgame where game_name='$game_name'");
								$row7=mysql_fetch_assoc($result7);
								$game_rate=$row7["game_rate"];
								$game_picture=$row7["game_picture"];

							 echo"
							 <tr align='center'>
							 <td width='25%' height='50'>
									<img src='$game_picture' width='10%' height='100%' class='img-rounded' ><br>
									$game_name
									</td>
											<td width='50%'>$event_place</td>
											<td>$event_date </td>
											<td>$event_time </td>
											</tr>";
						 }
						?>
					</table>
				</div>
						</div>

		</td>
  </tr>
	<tr>
    <td colspan="2" width="100">
  </tr>
</table>
<table width="100%" border="0">
	<tr><td>
		<table width="95%" height="90%" align="center" border="0">
				<!--.......................................................................................................-->
		<tr><td rowspan="2" height="745" width="40%" align="right" valign="middle"  class="container">
			<?php
				$result5=mysql_query("SELECT * from mainmenu where mmenu_id='1'");
				$row5=mysql_fetch_assoc($result5);
				$mmenu_name1=$row5["mmenu_name"];
			?>
			<a href="user_board_game.php" target="_blank">
				<img src="<?php echo"$mmenu_name1"; ?>" class="image" height="95%" width="90%">
				<div class="middle">
					<div class="text">Board Game</div>
				</div>
			</a>
</td>
		<!--.......................................................................................................-->
		<?php
			$result3=mysql_query("SELECT * from mainmenu where mmenu_id='2'");
			$row3=mysql_fetch_assoc($result3);
			$mmenu_name2=$row3["mmenu_name"];
		?>
				<td height="372" width="60%" align="center" valign="middle"  class="container">
					<a href="user_cafe.php" target="_blank">
					<img src="<?php echo"$mmenu_name2"; ?>" class="image" height="90%" width="90%" class="img-thumbnail">
					<div class="middle">
						<div class="text">Cafe</div>
					</div>
					</a>
	</td>
		</tr>
		<!--.......................................................................................................-->
		<?php
			$result4=mysql_query("SELECT * from mainmenu where mmenu_id='3'");
			$row4=mysql_fetch_assoc($result4);
			$mmenu_name3=$row4["mmenu_name"];
		?>
		<tr><td height="372" align="center" valign="middle" class="container">
			<a href="user_co_space.php" target="_blank">
			<img src="<?php echo"$mmenu_name3"; ?>" class="image" height="90%" width="90%" >
			<div class="middle">
				<div class="text">Co Space Working</div>
			</div>
			</a>
</td>
			<!--.......................................................................................................-->
		</tr>
	</table>
	</td></tr>
</table>
<table width="100%">
<tr align="center" bgcolor="#2F2F2F" width="100%">
	<td><h4><br><br><br>Tel :<br>08-9755-0707 (Mon-Sat  9:00-17:00)<br><br>Copyright ?? 2018 ITSARADEE.tawee All Rights Reserved</h4><br><br><br></td>
</tr>
</table>
</body>
</html>
