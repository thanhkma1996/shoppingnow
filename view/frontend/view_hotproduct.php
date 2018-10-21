
            <!-- FLASH SALE -->
          <div class="home-blog">
            <div class="row">
              <div class="container">
      <h2 class="title"> 
        <span style="color: red;">Flash sale</span>
        <span>
          <iframe src="http://free.timeanddate.com/countdown/i6fydquc/n95/cf12/cm0/cu4/ct0/cs0/ca0/cr0/ss0/cac000/cpcf00/pcfff/tcfff/fs100/szw320/szh135/tac000/tpc000/mac000/mpc000/iso2018-10-04T00:00:00" allowTransparency="true" frameborder="0" width="120" height="35"></iframe>                        
         </span>
       </div>
     </div>
      </h2>
      <div class="container">
      <div class="row">
        <div class="owl-home-blog owl-home-blog-bottompage">
        
            <?php 
            foreach($arr_hot as $rows_product)
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
      </div>
      </div>
    </div>
    <!-- eend FLASH SALE --> 