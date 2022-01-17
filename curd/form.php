<?php
    if(isset($_POST['submit'])){
        $arry['name']=$_POST['name'];
        $arry['class']=$_POST['class'];
        $arry['city']=$_POST['city'];
    $url="http://localhost/apis/curd/program/ix-form.php?key=sjjklfjafaw4994asdklf";
    $ch=curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_POSTFIELDS,$arry);
    $result=curl_exec($ch);
    curl_close($ch);

    $result=json_decode($result,true);
        //echo $result['data'];
    }

?>

<!DOCTYPE html>
<html>
<head>
<title>Add New Employee</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Custom Theme files -->
<link href="form.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Add New Employee</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="#" method="post">
					<input class="text" type="text" name="name" placeholder="Name" required="">
					<input class="text" type="text" name="class" placeholder="Class" required="">
					<input class="text" type="text" name="city" placeholder="City" required="">

						<div class="clear"> </div>
					</div>
					<input type="submit" name="submit" value="submit">
                    
                    <a href="api-index.php"><span class="add"><-Back</span></a>
                    
				</form>
                

		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
    <?php //echo $result['data']; ?>
</body>
</html>