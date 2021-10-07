    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="<?php echo get_home_url()?>">
                <?php 
                    the_custom_logo();
                    // No Custom Logo, just display the site's name
                    if (!has_custom_logo()) {
                        ?>
                            <h1><?php bloginfo('name'); ?></h1>
                        <?php
                    }
                ?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <!-- <ul class="navbar-nav me-auto my-2 my-lg-0"> -->
                    <!-- <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li> -->
                    <?php 
                        wp_nav_menu(array(
                            'theme_location' =>  'primary',
                            'menu_class' => 'navbar-nav ms-auto my-2 my-lg-0', 
                            'add_li_class' => 'nav-item',
                            "container" => false, 
                        ));
                    ?>
                    <?php 
                        //$args = array('theme_location' => 'primary');
                    ?>
                    <?php //wp_nav_menu( $args ); ?>
                <!-- </ul> -->
                <!-- <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->
            </div>
        </div>
    </nav>