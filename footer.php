
    <!--Footer-->
    <div class="footer mt-10">
      <div class="bg-stone-900 pt-110 pb-5">
        <div class="container p-47">
          <div class="position-relative">
            <div class="row position-absolute w-100 bg-yellow rounded10 py-3 px-5 top--30 d-flex align-items-center justify-content-between">
              <p class="col-3 m-0">دریافت پشتیبانی و مشاوره</p>
              <div class="col-7">
                <input type="text" class="rounded50 border-0 w-100 h-50 p-2 px-4" placeholder="ایمیل یا شماره تلفن"/>
              </div>
              <div class="col-2">
                <button class="col-2 btn bg-stone-900 w-100 rounded50 text-white">
                  دریافت مشاوره
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-6 d-flex text-white f12">
              <?php
$locations = get_nav_menu_locations();
if(isset($locations["footer"])){
    $menu = wp_get_nav_menu_object($locations["footer"]);
    if($menu){
        $items = wp_get_nav_menu_items( $menu->term_id, array( 'update_post_term_cache' => false ) );
        $c = 0;
        foreach($items as $i){
            if($c % 3 == 0){ echo '<div class="col-4 d-flex flex-column justify-content-start">'; }
            echo '<a class="text-white text-decoration-none" href="'.$i->url.'">'.$i->title.'</a>';
            $c+=1;
            if($c % 3 == 0){ echo '</div>'; }
            
        }
        if($c % 3 != 0){ echo '</div>'; }
    }
}
?>
              </div>
              <div class="col-6 justify-content-end align-items-center d-flex flex-column">
                <img src="images/icons/footer logo.png" alt="footer logo" />
                <p class="f10 text-white mt-3 text-center">
                  هلدینگ «ولکام دبی» از سال 2005 فعالیت خود را در دبی آغاز کرده
                  است. فعالیت این مجموعه هم در<br />
                  ایران و هم دردبی کاملاً قانونی است. دفاتر معتبر این هلدینگ در
                  تهران و دبی همواره آمادۀ پاسخگویی <br />و ارائۀ مشاوره دربارۀ
                  خدمات و فعالیت‌های این مجموعه هستند.
                </p>
              </div>
            </div>
            <div class="footer_line"></div>
            <div class="row">
              <div class="col-6 text-white f12">
                <p>© 1402 تمامی حقوق محفوظ است</p>
              </div>
              <div class="d-flex col-6 justify-content-center">
                <a class="circle d-flex align-items-center justify-content-center" href="<?=get_option("wb_fb","#"); ?>">
                  <img class="w-100" src="<?php bloginfo("template_directory"); ?>/images/icons/facebook(1).png" alt=""/>
                </a>
                <a class="circle d-flex align-items-center justify-content-center" href="<?=get_option("wb_insta","#"); ?>">
                  <img class="w-100" src="<?php bloginfo("template_directory"); ?>/images/icons/instagram(2).png" alt="" />
                </a>
                <a class="circle d-flex align-items-center justify-content-center" href="<?=get_option("wb_wa","#"); ?>">
                  <img class="w-100" src="<?php bloginfo("template_directory"); ?>/images/icons/whatsapp(1).png" alt="" />
                </a>
                <a class="circle d-flex align-items-center justify-content-center" href="<?=get_option("wb_linkdin","#"); ?>">
                  <img class="w-100" src="<?php bloginfo("template_directory"); ?>/images/icons/linkedin(2).png" alt=""/>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Footer-->

    <script src="<?php bloginfo("template_directory"); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo("template_directory"); ?>/assets/js/jquery.min.js"></script>
    <script src="<?php bloginfo("template_directory"); ?>/assets/js/swiper-bundle.min.js"></script>
    <script src="<?php bloginfo("template_directory"); ?>/assets/js/custom.js"></script>
  </body>
</html>