<?php 
	class controller_add_edit_product extends controller{
		public function __construct(){
			parent::__construct();
			$act = isset($_GET["act"])?$_GET["act"]:"";
			$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
			switch($act){
				case "edit":
					$form_action = "admin.php?controller=add_edit_product&act=do_edit&id=$id";
					$arr = $this->model->fetch_one("select * from tbl_product where pk_product_id=$id");
					include "view/backend/view_add_edit_product.php";
				break;
				case "do_edit":
					global $conn;
					$c_name = mysqli_escape_string($conn,$_POST["c_name"]);
					$c_price = mysqli_escape_string($conn,$_POST["c_price"]);
					$c_hotproduct = isset($_POST["c_hotproduct"])?1:0;
					$c_description = mysqli_escape_string($conn,$_POST["c_description"]);
					$c_content = mysqli_escape_string($conn,$_POST["c_content"]);
					$fk_category_product_id=mysqli_escape_string($conn,$_POST["fk_category_product_id"]);
					//
					$this->model->execute("update tbl_product set c_name='$c_name',c_price='$c_price',c_hotproduct=$c_hotproduct,c_description='$c_description',c_content='$c_content',fk_category_product_id=$fk_category_product_id where pk_product_id=$id");
					if($_FILES["c_img"]["name"] != ""){
						//-------------
						//lay anh cu
						$arr_old_img = $this->model->fetch_one("select c_img from tbl_product where pk_product_id=$id");
						$old_img = isset($arr_old_img->c_img)?$arr_old_img->c_img:"";
						if($old_img != "")
							unlink("public/upload/product/$old_img");
						//-------------
						$c_img = time().$_FILES["c_img"]["name"];
						//upload image
						move_uploaded_file($_FILES["c_img"]["tmp_name"], "public/upload/product/$c_img");
						//update c_img
						$this->model->execute("update tbl_product set c_img='$c_img' where pk_product_id=$id");				
					}
					header("location:admin.php?controller=product");
				break;
				case "add":
					$form_action = "admin.php?controller=add_edit_product&act=do_add";
					include "view/backend/view_add_edit_product.php";
				break;
				case "do_add":
						global $conn;
					$c_name = mysqli_escape_string($conn,$_POST["c_name"]);
					$c_price = mysqli_escape_string($conn,$_POST["c_price"]);
					$c_hotproduct = isset($_POST["c_hotproduct"])?1:0;
					$c_description =  mysqli_escape_string($conn,$_POST["c_description"]);
					$c_content =  mysqli_escape_string($conn,$_POST["c_content"]);
					$fk_category_product_id= intval($_POST["fk_category_product_id"]);
					$c_img = "";
					if($_FILES["c_img"]["name"] != ""){
						$c_img = time().$_FILES["c_img"]["name"];
						//upload image
						move_uploaded_file($_FILES["c_img"]["tmp_name"], "public/upload/product/$c_img");
					}
					$this->model->execute("insert into tbl_product(c_name,c_price,c_hotproduct,c_description,c_content,c_img,fk_category_product_id) values('$c_name','$c_price',$c_hotproduct,'$c_description','$c_content','$c_img',$fk_category_product_id)");
					header("location:admin.php?controller=product");
				break;
			}
		}
	}
	new controller_add_edit_product();
 ?>