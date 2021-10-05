<?php
/**
* Template Name: Home Page
*/

get_header();
?>
<div id="page_home" class="page-home">
    <section class="section-banner py-0">
        <div class="banner-fullwidth d-flex align-items-center position-relative d-none">
            <div class="bg-img" style="background-image:url(<?php echo get_home_url()?>/wp-content/uploads/2021/10/bg1.jpg);" ></div>
            <div class="container banner-contents align-items-center">
                <div class="row">
                    <div class="col-md-6 col-12 left">
                        <div class="contents">
                            <h1 class="banner-title mb-3">Title</h1>
                            <p class="banner-caption mb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <div class="d-flex flex-wrap banner-btns">
                                <button class="btn btn-primary me-3">Button 1</button>
                                <button class="btn btn-secondary">Button 2</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- half banner -->
        <div class="banner-halfwidth d-flex align-items-center position-relative d-none">
            <div class="container banner-contents align-items-center">
                <div class="row">
                    <div class="col-md-6 col-12 left">
                        <div class="contents">
                            <h1 class="banner-title mb-3">Title</h1>
                            <p class="banner-caption mb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <div class="d-flex flex-wrap banner-btns">
                                <button class="btn btn-primary me-3">Button 1</button>
                                <button class="btn btn-secondary">Button 2</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 right">
                        <img src="<?php echo get_home_url()?>/wp-content/uploads/2021/10/bg1.jpg);" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- half banner -->
        <div class="banner-halfwidth-1 d-flex align-items-center position-relative">
            <div class="container-fluid banner-contents p-0 overflow-hidden">
                <div class="row">
                    <div class="col-md-6 col-12 align-self-center left size-c left-c">
                        <div class="contents">
                            <h1 class="banner-title mb-3">Title</h1>
                            <p class="banner-caption mb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <div class="d-flex flex-wrap banner-btns">
                                <button class="btn btn-primary me-3">Button 1</button>
                                <button class="btn btn-secondary">Button 2</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 right">
                        <img src="<?php echo get_home_url()?>/wp-content/uploads/2021/10/bg1.jpg);" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php
get_footer();
?>
