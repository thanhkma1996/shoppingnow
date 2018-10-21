<?php
	class controller_hotproduct extends controller{
		public function __construct(){
			parent::__construct();
			//--------
			//san pham noi bat
			$arr_hot=$this->model->fetch("SELECT * FROM `tbl_product` order by c_price asc limit 0,8");
			//--------
			include "view/frontend/view_hotproduct.php";
		}
	}
	new controller_hotproduct();
 ?>
