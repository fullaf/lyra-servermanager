<?php function getHeader($page_name) { ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>lyra</title>

<!-- CSS -->
<link href="style/css/transdmin.css" rel="stylesheet" type="text/css" media="screen" />
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="screen" href="style/css/ie6.css" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" type="text/css" media="screen" href="style/css/ie7.css" /><![endif]-->

<!-- JavaScripts-->
<script type="text/javascript" src="style/js/jquery.js"></script>
<script type="text/javascript" src="style/js/jNice.js"></script>
</head>

<body>
	<div id="wrapper">
    	<!-- h1 tag stays for the logo, you can use the a tag for linking the index page -->
    	<h1><a href="#"><span>lyra.fullaf.com</span></a></h1>
        
        <!-- You can name the links with lowercase, they will be transformed to uppercase by CSS, we prefered to name them with uppercase to have the same effect with disabled stylesheet -->
        <ul id="mainNav">
        	<li><a href="/" <? if (strcasecmp($page_name,"dashboard")) {echo 'class="active"'; }?>>DASHBOARD</a></li> <!-- Use the "active" class for the active menu item  -->
        	<li><a href="report.php" <? if (strcasecmp($page_name,"system report")) {echo 'class="active"'; }?>>SYSTEM REPORT</a></li>
        	<li><a href="actions.php" <? if (strcasecmp($page_name,"server actions")) {echo 'class="active"'; }?>>SERVER ACTIONS</a></li>
        	<li><a href="#" <? if (strcasecmp($page_name,"option")) {echo 'class="active"'; }?>>OPTION</a></li>
        	<li class="logout"><a href="http://logout@lyra.fullaf.com">LOGOUT</a></li>
        </ul>
        <!-- // #end mainNav -->
        
        <div id="containerHolder">
			<div id="container">
        		<div id="sidebar">
                	<!--<ul class="sideNav">
                    	<li><a href="#">A</a></li>
                    	<li><a href="#" class="active">B</a></li>
                    	<li><a href="#">C</a></li>
                    	<li><a href="#">D</a></li>
                    	<li><a href="#">E</a></li>
                    	<li><a href="#">F</a></li>
                    </ul>-->
                    <!-- // .sideNav -->
                </div>    
                <!-- // #sidebar -->
                
                <!-- h2 stays for breadcrumbs -->
                <h2><a href="#"><?=$page_name?></a></h2>
                
                <div id="main">
<? } ?>