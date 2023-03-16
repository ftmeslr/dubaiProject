<?php 
/*
template name: Index
*/
get_header(); ?>
    <!--section one-->
    <section id="heroSection" class="my-3 rounded10 overflow-hidden">
      <div class="ps-0">
        <div class="row position-relative">
          <div class="container d-flex justify-content-between position-absolute title__Home">
            <div class="d-flex flex-column justify-content-start align-items-center col-6">
              <p class="f90 fw-bold m-0">DUBAI</p>
              <p class="f14 mt--20">
                با بیش از بیست سال تحربه و فعالیت در این<br />حوزه در امارات
                متحده
              </p>
            </div>
            <div class="d-flex flex-column justify-content-start align-items-center col-6 pe-10">
              <p class="f90 fw-bold m-0">WELCOME</p>
              <p class="f14 mt--20">
                هـلدینگ ولـکام دبـی صفـر تا صـد اخذ اقامـت قـانونـی دبی برای
                همسر
                <br />و فرزندان شما را انجام می‌دهد.
              </p>
              <a href="#" class="text-black showServiceBut">مشاهده خدمات</a>
            </div>
          </div>
          <div style="margin: auto; width: 1400px; height: 1200px">
            <img class="w-100" src="<?php bloginfo("template_directory"); ?>/images/Home/slider.jpg" alt="" />
          </div>

          <div class="position-absolute d-flex flex-column align-items-center justify-content-center start-0 end-0 m-auto bottom-0 w-380 top-600 w-500">
            <p class="f24 fw-bold mb-2">هلدینگ «ولکام دبی»</p>
            <p class="f16 mb-2">
              <?php the_field("about"); ?>
            </p>
            <a href="<?php the_field("about_url"); ?>" class="f12 text-yellow mt-2">بیشتر بخوانید</a>
            <p class="f24 m-0">دریافت پشتیبانی و مشاوره</p>
            <input class="w-380 h-50 rounded50 border text-center my-3 py-2 h-50 bg-transparent" type="text" placeholder="phone/Email"/>
            <button class="btn custom-btn rounded50">submit</button>
            <a href="<?php the_field("contact_us"); ?>" class="f12 mt-4 text-black cursor-pointer">تماس با ما</a>
          </div>
        </div>
      </div>
    </section>
    <!--section one-->
    <div class="yellow_line mt-5"></div>

    <!--section 2-->
    <section class="my-3 rounded10 overflow-hidden">
      <div class="container ps-0">
        <div class="row position-relative p-68 justify-content-between align-items-center">
          <div class="col-7 ps-5 d-flex flex-column align-items-end">
            <div>
              <p class="f24 fw-bold mb-2">خرید خانه در دبی</p>
              <p class="f14 text-justify">
                <?php the_field("buy_house"); ?>
              </p>
            </div>
            <button class="btn custom-mini-btn bg-yellow rounded50 f12 py-2 border">
              <a href="<?php the_field("buy_house_url"); ?>"><span class="d-block -mt-2">بیشتر ببینید </span></a>
            </button>
          </div>
          <div class="col-5 d-flex justify-content-end">
            <div class="img_box">
              <img class="w-100" src="<?php bloginfo("template_directory"); ?>/images/Home/01.png" alt="" />
            </div>
          </div>
        </div>
      </div>
      <div class="bg-gray">
        <div class="container row position-relative p-68 justify-content-between align-items-center m-auto">
          <div class="col-5 d-flex justify-content-start">
            <div class="img_box">
              <img class="w-100" src="<?php bloginfo("template_directory"); ?>/images/Home/03.png" alt="" />
            </div>
          </div>
          <div class="col-7 ps-5 d-flex flex-column align-items-end">
            <div>
              <p class="f24 fw-bold mb-2">اجاره‌ی ماشین در دبی</p>
              <p class="f14 text-justify">
                <?php the_field("rent_car"); ?>
              </p>
            </div>
            <button class="btn custom-mini-btn bg-yellow rounded50 f12 py-2 border">
              <a href="<?php the_field("rent_car_url"); ?><span class="d-block -mt-2">بیشتر ببینید </span></a>
            </button>
          </div>
        </div>
      </div>
      <div class="container ps-0">
        <div class="row position-relative p-68 justify-content-between align-items-center">
          <div class="col-7 ps-5 d-flex flex-column align-items-end">
            <div>
              <p class="f24 fw-bold mb-2">ثبت شرکت در دبی</p>
              <p class="f14 text-justify">
                <?php the_field("company"); ?>
              </p>
            </div>
            <button class="btn custom-mini-btn bg-yellow rounded50 f12 py-2 border">
              <a href="<?php the_field("company_url"); ?>"><span class="d-block -mt-2">بیشتر ببینید </span></a>
            </button>
          </div>
          <div class="col-5 d-flex justify-content-end">
            <div class="img_box">
              <img class="w-100" src="<?php bloginfo("template_directory"); ?>/images/Home/02.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--section 2-->
    <div class="yellow_line mt-5"></div>

    <!--section 3-->
    <section class="my-3 rounded10 overflow-hidden">
      <div class="container ps-0">
        <p class="text-center fw-bold f24 mb-4">سایر خدمات هلدنیگ ولکام دبی</p>
        <div class="row position-relative p-90 justify-content-between align-items-center">
          <div class="col-4 px-4">
            <div class="d-flex flex-column">
              <div class="blog_img_box">
                <img class="w-100" src="<?php bloginfo("template_directory"); ?>/images/Home/04.jpg" alt="" />
              </div>
              <p class="f14 fw-bold text-center mt-3 mb-2">
                اخذ اقامت قانونی دبی
              </p>
              <p class="f11 text-justify l20-35 text-center">
                یکی از مهم‌ترین خدماتی که هلدینگ ولکام دبی به هموطنان ایرانی خود
                ارائه می‌دهد، اخذ اقامت قانونی دبی است. روش‌های گوناگونی برای
                این منظور در قانون امارات متحده عربی در نظر گرفته شده است که
                مهم‌ترین آنها عبارتند از: سرمایه‌گذاری، خرید ملک و ثبت شرکت. ما
                با در نظر گرفتن تمام شرایط شما، بهترین گزینه را به شما پیشنهاد
                می‌دهیم و در تمام طول این مسیر تا صدور کارت اقامت برای شما و
                تمام اعضای خانواده‌تان در کنارتان خواهیم بود.
              </p>
            </div>
          </div>
          <div class="col-4 px-4">
            <div class="d-flex flex-column">
              <div class="blog_img_box">
                <img class="w-100" src="<?php bloginfo("template_directory"); ?>/images/Home/05.jpg" alt="" />
              </div>
              <p class="f14 fw-bold text-center mt-3 mb-2">
                سرمایه‌گذاری مطمئن در دبی
              </p>
              <p class="f11 text-justify l20-35 text-center">
                دبی پرجمعیت‌ترین شهر امارات متحده عربی است. واحد پولی آن درهم
                امارات است و رشد اقتصادی آن در سال‌های اخیر همواره مثبت و پایدار
                بوده است. به همین دلیل دبی یکی از مطمئن‌ترین نقاط دنیا برای
                سرمایه‌گذاری پربازده محسوب می‌شود. همچنین دبی شهری گردشگرمحور
                است و به پایتخت خرید خاورمیانه مشهور است. همین امر موجب شده که
                این شهر مرکزی برای شکل‌گیری انواع کسب‌وکارها به ویژه در بخش
                خدمات باشد.
              </p>
            </div>
          </div>
          <div class="col-4 px-4">
            <div class="d-flex flex-column">
              <div class="blog_img_box">
                <img class="w-100" src="<?php bloginfo("template_directory"); ?>/images/Home/06.jpg" alt="" />
              </div>
              <p class="f14 fw-bold text-center mt-3 mb-2">
                باز کردن حساب بانکی در دبی
              </p>
              <p class="f11 text-justify l20-35 text-center">
                باز کردن حساب بانکی در دبی دریچه‌ای برای ورود به تجارت جهانی
                است. در واقع داشتن حساب بانکی در دبی به معنی وصل شدن به جامعهٔ
                جهانی ارتباطات مالی بین بانکی (سوئیفت) است. بانک‌های دبی همچنین
                تسهیلات و وام‌های گوناگونی را به افرادی که آنجا حساب باز می‌کنند
                ارائه می‌دهند. وام‌های گسترش کسب‌وکار و تعمیر خانه از این
                جمله‌اند. گفتنی است که ثبات اقتصادی دبی موجب شده است که محاسبۀ
                هزینه‌ها با درهم بدون نوسان باشد.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--section 3-->

    <!--section 4-->
    <section class="my-3 rounded10 overflow-hidden">
      <div class="background_section">
        <div class="title_box">
          <p class="title">هلدینگ ولکام دبی</p>
          <p class="f14">
            هلدینگ ولکام دبی صفر تا صد اخذ اقامت قانونی دبی برای همسر و فرزندان
            شما<br />
            را انجام می‌دهد با بیش از بیست سال تحربه و فعالیت در این حوزه در
            امارات متحده
          </p>
        </div>
        <img class="w-100" src="<?php bloginfo("template_directory"); ?>/images/Home/07.jpg" alt="" />
      </div>
    </section>
    <!--section 4-->
    <div class="yellow_line"></div>
    <!--section Fag-->
    <section class="my-3 overflow-hidden">
      <p class="text-center fw-bold f24 mb-5">سوالات متداول</p>

      <div class="container">
        <div class="p-150">
<?php while(have_rows("faqs")){ the_row(); ?>
          <a class="rounded10 d-flex justify-content-between align-items-center w-100 d-block f13 text-black bg-gray p-3 border-warning my-1 text-decoration-none" data-bs-toggle="collapse" href="#collapseExample<?=get_row_index();?>" role="button" aria-expanded="false" aria-controls="collapseExample<?=get_row_index();?>">
            <span><?php the_sub_field("title"); ?></span>
            <img src="<?php bloginfo("template_directory"); ?>/images/icons/down-arrow.png" class="w-18" />
          </a>
          <div class="collapse" id="collapseExample<?=get_row_index();?>">
            <div class="card card-body f12 border-0">
              <?php the_sub_field("text"); ?>
            </div>
          </div>
<?php }  ?>
          

          

        </div>
      </div>
    </section>
    <!--section Faq-->
<?php get_footer(); ?>