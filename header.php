<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <?php 
        wp_head();
    ?>
    <title><?php bloginfo('name'); ?></title>
</head>
<body>
    
    <!-- HEADER -->
    <header class="header">
        <div class="container">
            <div class="header__wrapper">
                <ul class="header__items">
                    <li class="header__item">
                        <a href="./sponsors.html" class="header__link">sponsors</a> 
                        <div class="header__menu">
                            <div class="header__menu-item">
                                <a href="#" class="header__menu-link">
                                    <span class="header__menu-title">General Sponsor</span>
                                </a>
                            </div>
                            <div class="header__menu-item">
                                <a href="#" class="header__menu-link">
                                    <span class="header__menu-title">Platinum Sponsor</span>
                                </a>
                            </div>
                            <div class="header__menu-item">
                                <a href="#" class="header__menu-link">
                                    <span class="header__menu-title">High-Tech Sponsor</span>
                                </a>
                            </div>
                            <div class="header__menu-item">
                                <a href="#" class="header__menu-link">
                                    <span class="header__menu-title">Gold Sponsor</span>
                                </a>
                            </div>
                            <div class="header__menu-item">
                                <a href="#" class="header__menu-link">
                                    <span class="header__menu-title">Silver Night Sponsor</span>
                                </a>
                            </div>
                        </div>   
                    </li>
                    <li class="header__item">
                        <a href="./exhibitors.html" class="header__link">Exhibitors</a>
                        <div class="header__menu">
                            <div class="header__menu-item">
                                <a href="#" class="header__menu-link">
                                    <span class="header__menu-title">Wealth TOP FORUM Israel 2016</span>
                                </a>
                            </div>
                            <div class="header__menu-item">
                                <a href="#" class="header__menu-link">
                                    <span class="header__menu-title">Another name of the conference</span>
                                </a>
                            </div>
                            <div class="header__menu-item">
                                <a href="#" class="header__menu-link">
                                    <span class="header__menu-title">Another name of the conference 2016</span>
                                </a>
                            </div>
                        </div>    
                    </li>
                    <li class="header__item">
                        <a href="./speakers.html" class="header__link">speakers</a>  
                        <div class="header__menu">
                            <div class="header__menu-item">
                                <a href="#" class="header__menu-link">
                                    <span class="header__menu-title">Wealth TOP FORUM Israel 2016</span>
                                </a>
                            </div>
                            <div class="header__menu-item">
                                <a href="#" class="header__menu-link">
                                    <span class="header__menu-title">Another name of the conference</span>
                                </a>
                            </div>
                            <div class="header__menu-item">
                                <a href="#" class="header__menu-link">
                                    <span class="header__menu-title">Another name of the conference 2016</span>
                                </a>
                            </div>
                        </div>  
                    </li>
                    <li class="header__item">
                        <a href="./media.html" class="header__link">Media</a>    
                    </li>
                </ul>
                <div class="header__hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                
                <div class="header__button btn">top forum club</div>
            </div>
        </div>
    </header>
    <!-- /HEADER -->

    <!-- SUBHEADER -->
    <div class="subheader">
        <div class="container">
            <div class="subheader__wrapper">
                <ul class="subheader__items">
                    <li class="subheader__item">
                        <?php the_custom_logo(); ?>
                    </li>
                    <li class="subheader__item">
                        <div class="subheader__square" data-events></div>
                        <a href="./events.html" class="subheader__link">UPCOMING EVENTS</a>
                    </li>
                    <li class="subheader__item">
                        <div class="subheader__square" data-contacts></div>
                        <a href="./contacts.html" class="subheader__link">CONTACTS</a>
                    </li>
                </ul>
                <a href="./registration.html" class="subheader__button btn">REGISTER NOW</a>
            </div>
        </div>
    </div>
    <!-- /SUBHEADER -->