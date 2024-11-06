<!-- /**
    * Header
    * 
    * Contains the opening HTML markup, the <head> section, and the opening body tag.
    * 
*/ -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../css/global.css">
    <link rel="shortcut icon" type="image/x-icon" sizes="32x32" href="../../gfx/volkswagen-logo.png" />
    <title>VW: Volkswagen | Home</title>
</head>
<body>
    <header>
        <div class="HeaderContainer">
            <div class="logo-header">
                <a href="../pages/homePage.php">
                    <image src="../../gfx/volkswagen-logoW.png" alt="White logo">
                </a>
            </div>
            <div class="menu-header">
                <div class="searchHeader">
                    <image src="../../gfx/magnifyingGlassIcon.png" alt="Search Icon">
                </div>
                <div class="SideBarHeader">
                    <image src="../../gfx/sidebarIcon.png" alt="sidebar Icon">
                </div>
                <div class="SideBarHeader2">
                    <image src="../../gfx/sidebarIcon2.png" alt="sidebar Icon">
                </div>
            </div>
        </div>
        <div class="bottomHeader">
            <div class="LineBefore"></div>
                <div class="LogoReduced">
                    <image src="../../gfx/volkswagen-logoW.png" alt="White logo">
                </div>
            <div class="LineAfter"></div>
        </div>
    </header>
    <?php include 'menu.php'; ?>