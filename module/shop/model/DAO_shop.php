<?php 
	$path = $_SERVER['DOCUMENT_ROOT'] . '/8_MVC_CRUD';
    include($path . "/model/connect.php");
    
	class DAO_shop{
		function select_shop(){
			$sql = "SELECT * FROM bike ORDER BY more_visited DESC LIMIT 6";
			$connection = connect::con();
			$res = mysqli_query($connection, $sql);
			connect::close($connection);
			return $res;
		}
		function select_single($id){
			$sql = "SELECT * FROM bike WHERE idbike='$id'";
			$connection = connect::con();
			// $res = mysqli_query($connection, $sql);
			$res = mysqli_query($connection, $sql)->fetch_object();
			connect::close($connection);
			return $res;
		}
		function select_categoria($categoria){
			$sql = "SELECT * FROM bike WHERE category='$categoria'";
			$connection = connect::con();
			$res = mysqli_query($connection, $sql);
			connect::close($connection);
			return $res;
		}
		function select_carousel($carousel){
			$sql = "SELECT * FROM bike WHERE category='$carousel'";
			$connection = connect::con();
			$res = mysqli_query($connection, $sql);
			connect::close($connection);
			return $res;
		}
		function select_filter($checks){
			$sql = "SELECT * FROM bike WHERE $checks ";
			$connection = connect::con();
			$res = mysqli_query($connection, $sql);
			connect::close($connection);
			return $res;
		}
		function select_search($forsearch){
			 $sql = "SELECT * FROM bike WHERE brand LIKE '".$forsearch."%'";
			// $sql = "SELECT * FROM bike WHERE brand LIKE 'mo%'";
			$connection = connect::con();
			$res = mysqli_query($connection, $sql);
			connect::close($connection);
			return $res;
		}
		function select_count_cat($category){
			$sql = "UPDATE categoria SET more_visited = (more_visited+1) WHERE categoria = '$category' ";
			$connection = connect::con();
			$res = mysqli_query($connection, $sql);
			connect::close($connection);
			return $res;
		}
		function select_count_prod($id){
			$sql = "UPDATE bike SET more_visited = (more_visited+1) WHERE idbike = '$id' ";
			$connection = connect::con();
			$res = mysqli_query($connection, $sql);
			connect::close($connection);
			return $res;
		}
		function select_count_all(){
			$sql = "SELECT brand FROM bike";
			$connection = connect::con();
			$res = mysqli_query($connection, $sql);
			connect::close($connection);
			return $res;
		}

		function select_pagination($offset){
			$sql = "SELECT * FROM bike ORDER BY more_visited DESC LIMIT 6 OFFSET $offset";
			$connection = connect::con();
			$res = mysqli_query($connection, $sql);
			connect::close($connection);
			return $res;
		}
	}
?>