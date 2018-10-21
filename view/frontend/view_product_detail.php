<div class="product-detail" itemscope itemtype="http://schema.org/Product">
          <meta itemprop="url" content="//dktstore-theme.bizwebvietnam.net/microsoft-lumia-950-xl-mau-den">
          <meta itemprop="image" content="public/frontend/images/msc.jpg?v=1469340617533">
          <meta itemprop="shop-currency" content="VND">
          <div class="top">
            <div class="row">
              <div class="col-xs-12 col-md-6 product-image">
                <div class="featured-image"> <img src="public/upload/product/<?php echo $arr->c_img; ?>" class="img-responsive" id="large-image" itemprop="image" data-zoom-image="public/upload/product/<?php echo $arr->c_img; ?>"
						 
					alt="<?php echo $arr->c_name; ?>"
					  /> </div>
              </div>
              <div class="col-xs-12 col-md-6 info">
                <h1 itemprop="name"><?php echo $arr->c_name; ?>L</h1>
                <p class="vendor">Nhà sản xuất:&nbsp; <span>
                  <?php 
                    //lay danh muc san pham
                    $category = $this->model->fetch_one("select * from tbl_category_product where pk_category_product_id=".$arr->fk_category_product_id);
                    echo $category->c_name;
                   ?>
                </span></p>
                <p itemprop="price" class="price-box product-price-box"> <span class="special-price"> <span class="price product-price"> <?php echo number_format($arr->c_price); ?>₫ </span> </span> </p>
                <p class="desc rte"> <?php echo $arr->c_description; ?></p>
                  </div>
                  <div class="action-btn" style="text-align: left;">
                    <button class="button product-add-to-cart" onclick="location.href='index.php?controller=cart&act=add&id=<?php echo $arr->pk_product_id; ?>';">Cho vào giỏ hàng</button>
                  </div>
              </div>
            </div>
          </div>
          <div class="middle">
            <ul class="list-unstyled navtabs">
              <li><a href="#tab1" class="head-tabs head-tab1 active" data-src=".head-tab1">Chi tiết sản phẩm</a></li>
            </ul>
            <div class="tab-container"> 
              <!-- chi tiet -->
              <div id="tab1" class="content-tabs">
                <div class="rte">
                  <?php echo $arr->c_content; ?>
                </div>
              </div>
              <!-- chi tiet --> 
            </div>
          </div>
        </div>