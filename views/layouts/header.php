<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<!-- SEO Parameters -->
<title><?php if (!isset($page_title)) { echo ('OK Builders | Your Trusted Construction Partner'); } else { echo ($page_title); } ?></title>
<meta name="description" content="<?php if (!isset($page_description)) { echo ('OK Builders offers top-tier construction, renovation, and design services tailored to your needs. Serving Ekpoma, Edo State, and beyond.'); } else { echo ($page_description); } ?>" />
<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
<link rel="canonical" href="<?php echo $_SERVER['REQUEST_URI']; ?>" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="<?php if (!isset($page_title)) { echo ('OK Builders | Your Trusted Construction Partner'); } else { echo ($page_title); } ?>" />
<meta property="og:url" content="<?php echo $_SERVER['REQUEST_URI']; ?>" />
<meta property="og:site_name" content="OK Builders" />
<meta property="og:description" content="<?php if (!isset($page_description)) { echo ('OK Builders offers top-tier construction, renovation, and design services tailored to your needs. Serving Ekpoma, Edo State, and beyond.'); } else { echo ($page_description); } ?>" />
<meta property="og:image" content="assets/images/media/ok-builders-logo.jpg" />
<link rel="icon" type="image/png" sizes="32x32" href="assets/image/fav.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/image/fav.png">



    <!-- =======Favicon============= -->

    <link rel="shortcut icon" href="assets/image/fav.png" type="image/png" sizes="16x16">
    <link rel="shortcut icon" href="assets/image/fav.png" type="image/png" sizes="32x32">


    <!-- =======font awesome============= -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- =======boxicon============= -->

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />

    <!-- --------------RemixIcon---------------- -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />

    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <link rel="stylesheet" href="assets/css/main.css">

</head>

<body>

    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="logo">
                <img src="assets/image/logo-ok.png" alt="Ok-Builders">
                <span>O.K Builders</span>
            </a>

            <div class="nav-menu" id="nav-menu">
                <ul class="nav-list">
                    <li><a href="#home" class="nav-link active-link">Home </a>
                    </li>
                    <li><a href="#about" class="nav-link"> About-Us</a>
                    </li>
                    <li><a href="#services" class="nav-link">Services</a>
                    </li>
                    <li><a href="#projects" class="nav-link">Projects</a>
                    </li>
                    <li><a href="#contact" class="nav-link button">Contact</a>
                    </li>
                </ul>

                <div class="nav_close" id="nav-close">
                    <i class="ri-close-large-line"></i>
                </div>
            </div>

            <div class="nav_toggle" id="nav-toggle">
                <i class="ri-apps-2-line"></i>
            </div>
        </nav>
    </header>