<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <?php wp_head(); ?>
</head>
<body>
    <div class="top-header">
        <div class="container">
            <div class="top-header-wrap">
                <a href="#">For Advisors</a>
                <div class="top-header-break"></div>
                <a href="#">Find 401(k) Advisors</a>
                <div class="top-header-break"></div>
                <div class="top-header-copy"><img src="/wp-content/uploads/2023/12/phone-logo.png" alt="#"><a href="#">877.401.5100</a></div>
                <div class="top-header-break"></div>
                <div class="top-header-copy"><img src="/wp-content/uploads/2023/12/login-logo.png" alt="#"><a href="#">Login</a></div>
            </div>
        </div>
    </div>
    <header>
        <div class="container">
            <div class="header-wrap">
                <div class="header-logo">
                    <img src="/wp-content/uploads/2023/12/logo.png" alt="image">
                </div>
                <div class="header-navigation">
                    <nav>
                        <?php 
                            wp_nav_menu( array( 'theme_location' => 'header-menu' ) );
                        ?>
                    </nav>
                </div>
                <div class="header-nav-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.8096 12.1039L11.0832 9.37799C10.9602 9.25496 10.7934 9.1866 10.6184 9.1866H10.1726C10.9274 8.22146 11.3758 7.00752 11.3758 5.68694C11.3758 2.54545 8.82994 0 5.68792 0C2.54589 0 0 2.54545 0 5.68694C0 8.82843 2.54589 11.3739 5.68792 11.3739C7.00872 11.3739 8.22287 10.9255 9.18817 10.1709V10.6165C9.18817 10.7915 9.25654 10.9583 9.37959 11.0813L12.106 13.8072C12.363 14.0643 12.7787 14.0643 13.033 13.8072L13.8069 13.0335C14.0639 12.7765 14.0639 12.3609 13.8096 12.1039ZM5.83333 9.33333C3.90013 9.33333 2.33333 7.76927 2.33333 5.83333C2.33333 3.90013 3.8974 2.33333 5.83333 2.33333C7.76654 2.33333 9.33333 3.8974 9.33333 5.83333C9.33333 7.76654 7.76927 9.33333 5.83333 9.33333Z" fill="#313155"/>
                    </svg>
                    <a class="btn-primary" href="#">Request a Proposal</a>
                </div>
            </div>
        </div>

        <?php if(wp_is_mobile()): ?>
            <!-- Hamburger (burger) for the navigation beyond 1024px - Mobile and Tablet -->
            <div class="header-logo">
                <img src="/wp-content/uploads/2023/12/logo.png" alt="image">
            </div>
            <div style="display: none;" id="hamburger">
                <div class="burger burger-squeeze">
                    <div class="burger-lines"></div>
                </div>
            </div>

            <!-- Mobile Navigation -- toggles on hamburger click -->
            <div class="nav-mobile-modal">
                <nav>
                    <?php 
                        wp_nav_menu( array( 'theme_location' => 'header-menu' ) );
                    ?>
                </nav>
            </div>

            <?php endif; ?>
    </header>
