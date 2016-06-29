<!-- templatemo 367 shoes -->
<!--
Shoes Template
http://www.templatemo.com/preview/templatemo_367_shoes
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>pacientes</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "top_nav", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

</head>

<body>

<div id="templatemo_body_wrapper">
<div id="templatemo_wrapper">

	<div id="templatemo_header">
    	<div id="site_title"><h1><a href="http://localhost/prova/home">HOME</a></h1></div>
        <div id="header_right">
        	<p>
			<a href="http://localhost/prova/login">My Account</a> | <a href="http://localhost/prova/checkOut">Checkout</a> | <a href="http://localhost/prova/login">Log In</a></p>
		</div>
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_header -->

    <div id="templatemo_menubar">
    	<div id="top_nav" class="ddsmoothmenu">
            <ul>
                <li><a href="http://localhost/prova/about">About</a>
                    <ul>
                        <li><a href="#submenu1">Sub menu 1</a></li>
                        <li><a href="#submenu2">Sub menu 2</a></li>
                        <li><a href="#submenu3">Sub menu 3</a></li>
                  </ul>
                </li>
                <li><a href="http://localhost/prova/faqs">FAQs</a></li>
                <li><a href="http://localhost/prova/checkOut">Checkout</a></li>
                <li><a href="http://localhost/prova/contactus">Contact Us</a></li>
            </ul>
            <br style="clear: left" />
        </div> <!-- end of ddsmoothmenu -->
        <div id="templatemo_search">
            <form action="#" method="get">
              <input type="text" value=" " name="keyword" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
              <input type="submit" name="Search" value=" " alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
            </form>
        </div>
    </div> <!-- END of templatemo_menubar -->

    <div id="templatemo_main">
    	<div id="sidebar" class="float_l">
        	<div class="sidebar_box"><span class="bottom"></span>
            	<h3>Categories</h3>
                <div class="content">
                	<ul class="sidebar_list">
                    	<li class="first"><a href="http://localhost/prova/pacientes">Submenu1</a></li>
                        <li class="last"><a href="http://localhost/prova/pacientes">Submenu2</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="content" class="float_r">
        	<h1> Pacientes</h1>
			<h3> ID-Nome-----Login</h3>
			<table>


			    <?php foreach ($pacientes as $e):?>
				<tr>
					<td><p><?php echo $e['Paciente']['id']; ?></p></td>
					<td><p><?php echo $e['Paciente']['nome']; ?></p></td>
					<td><p class="product_price">$ <?php echo $e['Paciente']['login']; ?></p></td>
				</tr>
				<?php endforeach; ?>
			</table>
        </div>
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->

    <div id="templatemo_footer">
    	<p><a href="http://localhost/prova/home">Home</a> | <a href="http://localhost/prova/pacientes">Products</a> | <a href="http://localhost/prova/about">About</a> | <a href="http://localhost/prova/faqs">FAQs</a> | <a href="http://localhost/prova/checkOut">Checkout</a> | <a href="http://localhost/prova/contactus">Contact Us</a>
		</p>

    	Copyright © 2076 <a href="https://www.facebook.com/leonardo.souza.94695">Leonardo's company</a> <!-- Credit: www.templatemo.com -->
	</div> <!-- END of templatemo_footer -->

</div> <!-- END of templatemo_wrapper -->
</div> <!-- END of templatemo_body_wrapper -->

</body>
</html>
