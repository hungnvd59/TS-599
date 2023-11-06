<?php get_header(); ?>
<section>
   <div id="vnt-content">
      <div id="vnt-slide-home" class="slick-init hidden-sm hidden-xs">
         <div class="item">
            <div class="img" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/images/banner/banner1.jpg'; ?>');"></div>
            <a href="tour-du-lich-mua-thu.html" class="a-link">&nbsp;</a>
         </div>
         <div class="item">
            <div class="img" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/images/banner/banner2.jpg'; ?>');"></div>
            <a href="tour-du-lich-mua-thu.html" class="a-link">&nbsp;</a>
         </div>
         <div class="item">
            <div class="img" data-style="background-image: url('<?php echo get_template_directory_uri() . '/assets/images/banner/banner3.jpg'; ?>');"></div>
            <a href="tour-du-lich-mua-thu.html" class="a-link">&nbsp;</a>
         </div>
      </div>
      <?php
      while (have_posts()) : the_post() ?>
         <?php the_content(); ?>
      <?php endwhile; ?>
      <div class="adsHome">
         <div class="wrapper">
            <div class="row">
               <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                  <a href="khach-san/index.html">
                     <div class="item" style="background-color: #ea5599">
                        <div class="img"><img class="lazyload" data-src="https://dulichviet.com.vn/images/main/i-ads-1.svg" width="40" height="57"></div>
                        <div class="t1">Khách sạn</div>
                        <div class="t2">Khách sạn tốt nhất tại các địa điểm du lịch nổi tiếng.</div>
                     </div>
                  </a>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                  <a href="xe-du-lich.html">
                     <div class="item" style="background-color: #0066b3">
                        <div class="img"><img class="lazyload" data-src="https://dulichviet.com.vn/images/main/i-ads-2.svg" width="40" height="57"></div>
                        <div class="t1">Thuê xe</div>
                        <div class="t2">Dịch vụ thuê xe giá tốt từ các nhà xe uy tín và chu đáo</div>
                     </div>
                  </a>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                  <a href="lam-visa.html">
                     <div class="item" style="background-color: #e28336 ">
                        <div class="img"><img class="lazyload" data-src="https://dulichviet.com.vn/images/main/i-ads-3.svg" width="40" height="57"></div>
                        <div class="t1">Visa</div>
                        <div class="t2">Dịch vụ Visa nhanh, rẻ. Visa trọn gói, thủ tục đơn giản</div>
                     </div>
                  </a>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                  <a href="ve-may-bay.html">
                     <div class="item" style="background-color: #149abc">
                        <div class="img"><img class="lazyload" data-src="https://dulichviet.com.vn/images/main/i-ads-4.svg" width="40" height="57"></div>
                        <div class="t1">Vé máy bay</div>
                        <div class="t2">Vé máy bay giá rẻ nhất, nhiều khuyến mãi hấp dẫn</div>
                     </div>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<?php get_footer(); ?>