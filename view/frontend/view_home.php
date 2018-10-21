<div class="owl-slider">
        <div class="item"> 
          <!-- ============================ -->
          <?php include "controller/frontend/controller_slide.php"; ?>
          <!-- ============================ --> 
        </div>
        </div>


      <div class="special-collection">
        <div class="tabs-container">
        <div class="clearfix">
          <h2>Sản phẩm nổi bật</h2>
        </div>
        </div>
        <div class="tabs-content row">
        <div id="content-tabb1" class="content-tab content-tab-proindex" style="display:none">
          <div class="clearfix"> 
        <?php 
            foreach($arr_hot as $rows_hot)
            {
         ?>
          <!-- box product -->
          <div class="col-xs-6 col-md-3 col-sm-6 ">
            <div class="product-grid" id="product-1168979">
            <div class="image"> <a href="index.php?controller=product_detail&id=<?php echo $rows_hot->pk_product_id; ?>"><img src="public/upload/product/<?php echo $rows_hot->c_img; ?>" title="<?php echo $rows_hot->c_name; ?>" alt="<?php echo $rows_hot->c_name; ?>" class="img-responsive"></a> </div>
            <div class="info">
              <h3 class="name"><a href="index.php?controller=product_detail&id=<?php echo $rows_hot->pk_product_id; ?>"><?php echo $rows_hot->c_name; ?></a></h3>
              <p class="price-box"> <span class="special-price"> <span class="price product-price"> <?php echo number_format($rows_hot->c_price); ?> đ</span> </span> </p>
              <div class="action-btn">
              <form action="cart/add" method="post" enctype="multipart/form-data" id="product-actions-1168979">
                <a href="index.php?controller=cart&act=add&id=<?php echo $rows_hot->pk_product_id; ?>" class="button">Chọn sản phẩm</a>
              </form>
              </div>
            </div>
            </div>
          </div>
          <!-- end box product --> 
        <?php } ?>
          

          </div>
        </div>
        </div>
      </div>
   
      <div class="wrapper-tab-collections" style="margin-top:0px;">
        <div class="tabs-container">
        <ul class="list-unstyled">
          <li><a href="#content-taba1" class="head-tabs head-tab1" data-src=".head-tab1">
          <h2>SẢN PHẨM KHÁC</h2>
          </a></li>
        </ul>
        </div>
        <div class="tabs-content row">
        <div id="content-taba4" class="content-tab content-tab-proindex"> 
        <?php 
            $arr_product = $this->model->fetch("select * from tbl_product order by pk_product_id asc limit 0,8");
         ?>
          <?php 
            foreach($arr_product as $rows_product)
            {
         ?>
          <!-- box product -->
          <div class="col-xs-6 col-md-3 col-sm-6 ">
            <div class="product-grid" id="product-1168979">
            <div class="image"> <a href="index.php?controller=product_detail&id=<?php echo $rows_product->pk_product_id; ?>"><img src="public/upload/product/<?php echo $rows_product->c_img; ?>" title="<?php echo $rows_product->c_name; ?>" alt="<?php echo $rows_product->c_name; ?>" class="img-responsive"></a> </div>
            <div class="info">
              <h3 class="name"><a href="index.php?controller=product_detail&id=<?php echo $rows_product->pk_product_id; ?>"><?php echo $rows_product->c_name; ?></a></h3>
              <p class="price-box"> <span class="special-price"> <span class="price product-price"> <?php echo number_format($rows_product->c_price); ?> đ</span> </span> </p>
              <div class="action-btn">
              <form action="cart/add" method="post" enctype="multipart/form-data" id="product-actions-1168979">
                <a href="index.php?controller=cart&act=add&id=<?php echo $rows_product->pk_product_id; ?>" class="button">Chọn sản phẩm</a>
              </form>
              </div>
            </div>
            </div>
          </div>
          <!-- end box product --> 
        <?php } ?> 



        </div>
        </div>
      </div>
