<?php
/*
template name: About
*/
get_header();
?>
    <!--section one-->
    <section id="aboutOne" class="my-3 rounded10 position-relative zIndex-0">
      <div class="w-100 m-auto">
        <img class="d-block m-auto w-100 h-auto" src="<?php bloginfo("template_directory"); ?>/images/AboutUs/Slider.jpg" alt=""/>
      </div>
      <div class="container">
        <div class="container position-absolute zIndex-1  text-center margin-auto left-0 right-0 px-5 bottom-0">
          <p class="title f72">درباره ما</p>
          <p class="f12">
            <?=str_replace("\n","<br>",get_the_content()); ?>
          </p>
        </div>
      </div>
    </section>
    <!--section one-->

    <!--section two-->
    <section id="aboutSectionTwo" class="my-3 rounded10 overflow-hidden position-relative zIndex-0 mt-5">
      <div class="container">
        <p class="f16 text-center fw-bold mb-4 mt-5">
          مهم‌ترین خدمات هلدینگ ولکام دبی
        </p>
        <div class="row d-flex px-10">
          <div class="col-4 mt-3">
            <div class="image__box">
              <img class="w-100" src="<?php bloginfo("template_directory"); ?>/images/AboutUs/04.jpg" alt="" />
            </div>
            <div class="text_box d-flex align-items-center justify-content-center mt-1">
              <p class="f14 m-0 fw-bold">اخذ اقامت قانونی دبی</p>
            </div>
          </div>
          <div class="col-4 mt-3">
            <div class="image__box">
              <img class="w-100" src="<?php bloginfo("template_directory"); ?>/images/AboutUs/01.jpg" alt="" />
            </div>
            <div
              class="text_box d-flex align-items-center justify-content-center mt-1"
            >
              <p class="f14 m-0 fw-bold">سرمایه‌گذاری مطمئن در دبی</p>
            </div>
          </div>
          <div class="col-4 mt-3">
            <div class="image__box">
              <img class="w-100" src="<?php bloginfo("template_directory"); ?>/images/AboutUs/02.jpg" alt="" />
            </div>
            <div class="text_box d-flex align-items-center justify-content-center mt-1">
              <p class="f14 m-0 fw-bold">خرید خانه در دبی</p>
            </div>
          </div>
          <div class="col-4 mt-3">
            <div class="image__box">
              <img class="w-100" src="<?php bloginfo("template_directory"); ?>/images/AboutUs/05.jpg" alt="" />
            </div>
            <div class="text_box d-flex align-items-center justify-content-center mt-1">
              <p class="f14 m-0 fw-bold">ثبت شرکت در دبی</p>
            </div>
          </div>
          <div class="col-4 mt-3">
            <div class="image__box">
              <img class="w-100" src="<?php bloginfo("template_directory"); ?>/images/AboutUs/02.jpg" alt="" />
            </div>
            <div class="text_box d-flex align-items-center justify-content-center mt-1">
              <p class="f14 m-0 fw-bold">اجارۀ ماشین در دبی</p>
            </div>
          </div>
          <div class="col-4 mt-3">
            <div class="image__box">
              <img class="w-100" src="<?php bloginfo("template_directory"); ?>/images/AboutUs/06.jpg" alt="" />
            </div>
            <div class="text_box d-flex align-items-center justify-content-center mt-1">
              <p class="f14 m-0 fw-bold">ثبت شرکت در دبی</p>
            </div>
          </div>
        </div>
    
      </div>
    </section>

    <!--section two-->

    <!--section three-->

    <section id="aboutSectionThree" class="my-3 rounded10 overflow-hidden position-relative zIndex-0 mt-5">
      <div class="image__box">
        <img class="w-100" class="m-auto" src="<?php bloginfo("template_directory"); ?>/images/AboutUs/000.jpg" alt="" />
        <div class="position-absolute title__box">
          <p class="f45 zIndex-1 title">هلدینگ «ولکام دبی»</p>
          <p class="f33 sub_title">18سابقه سال در تهران و دبی</p>
        </div>
      </div>
    </section>
    <!--section three-->
    <!--section Team-->
    <section id="contactUsSection" class="my-3 overflow-hidden position-relative zIndex-0 mt-5">
      <p class="f18 text-center mb-4 fw-bold">تیم ولکام دبی</p>
      <div class="container px-5">
        <div class="row px-5">
<?php while(have_rows("ours")){ the_row(); ?>
          <div class="col-3 d-flex align-items-center justify-content-center flex-column">
            <img src="<?php the_sub_field("avatar"); ?>" alt="<?php the_sub_field("name"); ?>" />
            <p class="f16 fw-bold text-center mt-2 mb-1"><?php the_sub_field("name"); ?></p>
            <p class="f12 fw-bold text-center"><?php the_sub_field("semat"); ?></p>
          </div>
<?php } ?>

        </div>
      </div>
    </section>
    <!--section Team-->

    <!--section contact us-->
    <section id="contactUsSection" class="my-3 overflow-hidden position-relative zIndex-0 mt-5">
      <p class="sub_title">تماس با ما</p>
      <div class="row">
        <div class="col-6 d-flex flex-column justify-content-end align-items-end ps-5">
          <div class="d-flex flex-column justify-content-end align-items-start">
            <p class="fw-bold">با ما در ارتباط باشید</p>
            <p>
              هلدینگ ولکام دبی با سابقه‌ای درخشان در زمینۀ ارائۀ خدمات اخذ اقامت
              کشور <br />امارات آماده پاسخگویی به سوالات شما عزیزان می‌یاشد.
            </p>

            <div class="d-flex mt-5">
              <img class="icon" src="<?php bloginfo("template_directory"); ?>/images/icons/email(2).png" />
              <p><?php the_field("email"); ?></p>
            </div>
            <div class="d-flex">
              <img class="icon" src="<?php bloginfo("template_directory"); ?>/images/icons/phone-call(1).png" />
              <p>
                <span><?php the_field("phone"); ?></span>
              </p>
            </div>
            <div class="d-flex">
              <img class="icon" src="<?php bloginfo("template_directory"); ?>/images/icons/location(1).png" />
              <p><?php the_field("adr"); ?></p>
            </div>
            <div class="d-flex">
              <img class="icon" src="<?php bloginfo("template_directory"); ?>/images/icons/instagramBlack(2).png" />
              <p><?php the_field("insta"); ?></p>
            </div>
          </div>
        </div>
        <div class="col-6 bg-gray justify-content-end align-items-strat p-4">
          <div class="col-8">
            <div class="d-flex flex-column my-1">
              <label class="f12 text-subtitle" for="name">نام و نام خانوادگی:</label>
              <input class="border border-warning" type="text" id="name" name="name" placeholder=""/>
            </div>
            <div class="d-flex row">
              <div class="col-6">
                <div class="d-flex flex-column my-1">
                  <label class="f12 text-subtitle" for="name">
                    آدرس ایمیل:</label>
                  <input type="text" class="border border-warning" />
                </div>
              </div>
              <div class="col-6">
                <div class="d-flex flex-column my-1">
                  <label class="f12 text-subtitle" for="name"
                    >شماره تلفن:</label>
                  <input type="text" class="border border-warning" />
                </div>
              </div>
            </div>
            <div class="d-flex flex-column my-1">
              <label class="f12 text-subtitle" for="name"> موضوع پیام:</label>
              <input type="text" class="border border-warning" />
            </div>
            <div class="d-flex flex-column my-1">
              <label class="f12 text-subtitle" for="name"> متن پیام:</label>
              <textarea type="text" class="border border-warning p-2">
              </textarea>
            </div>
            <button class="btn custom-mini-btn bg-yellow rounded10 f12 border">
              ثبت بیام
            </button>
          </div>
        </div>
      </div>
    </section>
    <!--section contact us-->
<?php get_footer(); ?>