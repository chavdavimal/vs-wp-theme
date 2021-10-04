<?php
/**
* Template Name: Home Page
*/

get_header();
?>
<div id="page_home" class="page-home">
    <section class="section-banner">
        <div class="banner-fullwidth d-flex align-items-center">
            <div class="bg-banner" style="background-image:url(<?php echo get_home_url()?>/wp-content/uploads/2021/10/bg1.jpg);" ></div>
            <div class="container banner-contents align-items-center">
                <div class="row">
                    <div class="col-md-6 col-12 left">
                        <div class="contents">
                            <h1>Title</h1>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <div class="d-flex flex-wrap">
                                <button class="btn btn-primary me-3">Button 1</button>
                                <button class="btn btn-secondary">Button 2</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php
get_footer();
?>
