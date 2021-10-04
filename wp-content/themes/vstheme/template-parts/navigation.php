    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <?php 
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
 
                    if ( has_custom_logo() ) {
                        echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                    } else {
                        echo '<h1>' . get_bloginfo('name') . '</h1>';
                    }
            ?>
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
                            'menu_class' => 'navbar-nav me-auto my-2 my-lg-0', 
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