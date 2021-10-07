<?php
/**
* Template Name: Home Page
*/

get_header();
?>
<div id="page_home" class="page-home">
    <section class="section-banner p-0">
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
                    <div class="col-md-6 right mt-md-0 mt-4">
                        <img src="<?php echo get_home_url()?>/wp-content/uploads/2021/10/bg1.jpg);" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- half banner -->
        <div class="banner-halfwidth-1 d-flex align-items-center position-relative">
            <div class="container-fluid banner-contents p-md-0 overflow-hidden">
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
        <!-- slider -->
        <div class="banner-full-slider d-none">
            <div id="carouselExampleDark" class="carousel carousel-dark slide">
                <div class="carousel-indicators">
                    <button class="active" type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <div class="figure">
                            <img src="<?php echo get_home_url()?>/wp-content/uploads/2021/10/bg1.jpg);" class="" alt="..." />
                        </div>
                        <div class="carousel-caption">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <div class="figure">
                            <img src="<?php echo get_home_url()?>/wp-content/uploads/2021/10/logo_round.png);" class="" alt="..." />
                        </div>
                        <div class="carousel-caption">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="figure">
                            <img src="<?php echo get_home_url()?>/wp-content/uploads/2021/10/bg1.jpg);" class=""  alt="..." />
                        </div>
                        <div class="carousel-caption">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="visually-hidden">Previous</span> </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="visually-hidden">Next</span> </button>
            </div>
        </div>
    </section>
</div>
<?php
get_footer();
?>
