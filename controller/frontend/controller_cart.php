<?php
	class controller_cart extends controller{
		public function __construct(){
			parent::__construct();
			if(!isset($_SESSION['cart'])) $_SESSION['cart'] = array();
			//===========	
			$act = isset($_GET["act"])?$_GET["act"]:"";
			$id = isset($_GET["id"])?$_GET["id"]:0;
			switch($act){
				case "add":
					$this->cart_add($id);
					echo "<script language='javascript'>location.href='index.php?controller=cart';</script>";
				break;
				case "delete":
					$this->cart_delete($id);
					echo "<script language='javascript'>location.href='index.php?controller=cart';</script>";
				break;
				case "update":
					foreach($_SESSION["cart"] as $value){
						$product_id = $value["pk_product_id"];
						$qty = $_POST["product_".$product_id];
						$this->cart_update($product_id,$qty);
					}
					echo "<script language='javascript'>location.href='index.php?controller=cart';</script>";
				break;
				case "destroy":
					$this->cart_destroy();
					echo "<script language='javascript'>location.href='index.php?controller=cart';</script>";
				break;
			}
			//===========
			include "view/frontend/view_cart.php";
			//=================
		}

		public function cart_add($pk_product_id){
		    if(isset($_SESSION['cart'][$pk_product_id])){
		        $_SESSION['cart'][$pk_product_id]['number']++;
		    } else {
		        $product = $this->model->fetch_one_array("select * from tbl_product where pk_product_id=$pk_product_id");
		        
		        $_SESSION['cart'][$pk_product_id] = array(
		            'pk_product_id' => $pk_product_id,
		            'c_name' => $product['c_name'],
		            'c_img' => $product['c_img'],
		            'number' => 1,
		            'c_price' => $product['c_price']
		        );
		    }
		}
		
		public function cart_update($pk_product_id, $number){
		    if($number==0){
		        unset($_SESSION['cart'][$pk_product_id]);
		    } else {
		        $_SESSION['cart'][$pk_product_id]['number'] = $number;
		    }
		}
		

		public function cart_delete($pk_product_id){
		    unset($_SESSION['cart'][$pk_product_id]);
		}
		
		
		public function cart_total(){
		    $total = 0;
		    foreach($_SESSION['cart'] as $product){
		        $total += $product['c_price'] * $product['number'];
		    }
		    return $total;
		}
		
		public function cart_number(){
		    $number = 0;
		    foreach($_SESSION['cart'] as $product){
		        $number += $product['number'];
		    }
		    return $number;
		}
		
		public function cart_list(){
		    return $_SESSION['cart'];
		}
		
		public function cart_destroy(){
		    $_SESSION['cart'] = array();
		}

	}
	new controller_cart();
?>