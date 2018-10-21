<?php
	class controller_introduce extends controller{
		public function __construct(){
			parent::__construct();
			//--------
			//san pham noi bat
			$arr_hot=$this->model->fetch("select * from tbl_introduce where c_hotintroduce=1 order by pk_introduce_id desc limit 0,4");
			//--------
			include "view/frontend/view_introduce.php";
		}
	}
	new controller_introduce();
 ?>
