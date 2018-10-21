 <div class="owl-home-blog owl-home-blog-bottompage">
        
            <?php 
            foreach($arr as $rows_product)
            {
         ?>

          <div class="item">
            <div class="article"> <a href="index.php?controller=product_detail&id=<?php echo $rows_product->pk_product_id; ?>" class="image"> <img src="public/upload/product/<?php echo $rows_product->c_img; ?>"  class="img-responsive"> </a>
              <div id="not_image" class="info">
                <h3><?php echo $rows_product->c_name; ?></a></h3>
              </div>
              <div style="clear:both"></div>
            </div>
          </div>

        <?php } ?>
         
        </div>