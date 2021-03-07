<?php
    if ((isset($_GET['page'])) && ($_GET['page']==="controller_bike") ){
		include("view/inc/top_page_bike.php");

	}else if ((isset($_GET['page'])) && ($_GET['page']==="controller_home") ){
		include("view/inc/top_page_home.php");

	}else if ((isset($_GET['page'])) && ($_GET['page']==="controller_shop") ){
		include("view/inc/top_page_shop.php");
		
	}else if ((isset($_GET['page'])) && ($_GET['page']==="controller_shop_detail") ){
		include("view/inc/top_page_shop_detail.php");	
	}else{
		include("view/inc/top_page.php");
	}
	//session_start();
?>
<div id="wrapper">		
    <div id="header">    	
    	<?php
			// include("view/inc/header.php");
			include("view/inc/header.html")
    	?>        
    </div>  
    <div id="menu">
		<?php
			//include("view/inc/menu.php");
			include("view/inc/menu.html");
		?>
    </div>	
    <div id="">
    	<?php 
		    include("view/inc/pages.php"); 
		?>        
        <br style="clear:both;" />
    </div>
    <div id="footer">   	   
	    <?php
			// include("view/inc/footer.php");
			include("view/inc/footer.html");
	    ?>        
    </div>
</div>
<?php
	// include("view/inc/bottom_page.php");
	include("view/inc/bottom_page.html");
?>
    