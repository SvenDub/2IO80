<?php
function getData($id) {
    switch ($id) {
        case 1:
            $title = 'Home';
            $file = 'pages/home.php';
            $parent = array();
            $right_col = array();
            break;
        case 3:
            $title = 'Bachelor College';
            $file = 'pages/bachelor_college.php';
            $parent = array(
                1
            );
            $right_col = array(
                4, 16, 5, 6
            );
            break;
        case 4:
            $title = 'Electives';
            $file = 'pages/electives.php';
            $parent = array(
                1, 3
            );
            $right_col = array(
                3, 16, 5, 6
            );
            break;
        case 5:
            $title = 'USE';
            $file = 'pages/use.php';
            $parent = array(
                1, 3
            );
            $right_col = array(
                3, 4, 16, 6
            );
            break;
        case 6:
            $title = 'Major';
            $file = 'pages/major.php';
            $parent = array(
                1, 3
            );
            $right_col = array(
                3, 4, 16, 5
            );
            break;
        case 7:
            $title = 'Curriculum';
            $file = 'pages/curriculum.php';
            $parent = array(
                1
            );
            $right_col = array(
                8, 9
            );
            break;
        case 8:
            $title = 'Year Overview';
            $file = 'pages/year_overview.php';
            $parent = array(
                1, 7
            );
            $right_col = array(
                7, 9
            );
            break;
        case 9:
            $title = 'Course Contents';
            $file = 'pages/course_contents.php';
            $parent = array(
                1, 7
            );
            $right_col = array(
                7, 8
            );
            break;
        case 10:
            $title = 'Future Outlook';
            $file = 'pages/future_outlook.php';
            $parent = array(
                1
            );
            $right_col = array();
            break;
        case 11:
            $title = 'Admission';
            $file = 'pages/admission.php';
            $parent = array(
                1
            );
            $right_col = array();
            break;
        case 12:
            $title = 'Links';
            $file = 'pages/links.php';
            $parent = array(
                1
            );
            $right_col = array();
            break;
        case 13:
            $title = 'Glossary';
            $file = 'pages/glossary.php';
            $parent = array(
                1
            );
            $right_col = array();
            break;
        case 14:
            $title = 'Contact';
            $file = 'pages/contact.php';
            $parent = array(
                1
            );
            $right_col = array();
            break;
        case 15:
            $title = 'Sitemap';
            $file = 'pages/sitemap.php';
            $parent = array();
            $right_col = array();
            break;
        case 16:
            $title = 'Basic Courses';
            $file = 'pages/basic_courses.php';
            $parent = array(
                1, 3
            );
            $right_col = array(
                3, 4, 5, 6
            );
            break;
        default:
            $title = 'Page not found';
            $file = 'pages/404.php';
            $parent = array(
                1
            );
            $right_col = array();
    }

    $data['title'] = $title;
    $data['file'] = $file;
    $data['parent'] = $parent;
    $data['right_col'] = $right_col;

    return $data;
}

$id = (isset($_GET['id'])) ? $_GET['id'] : 1;

$data = getData($id);

?>
<!doctype html>
<!--
 $$$$$$\  $$$$$$\  $$$$$$\   $$$$$$\   $$$$$$\
$$  __$$\ \_$$  _|$$  __$$\ $$  __$$\ $$$ __$$\
\__/  $$ |  $$ |  $$ /  $$ |$$ /  $$ |$$$$\ $$ |
 $$$$$$  |  $$ |  $$ |  $$ | $$$$$$  |$$\$$\$$ |
$$  ____/   $$ |  $$ |  $$ |$$  __$$< $$ \$$$$ |
$$ |        $$ |  $$ |  $$ |$$ /  $$ |$$ |\$$$ |
$$$$$$$$\ $$$$$$\  $$$$$$  |\$$$$$$  |\$$$$$$  /
\________|\______| \______/  \______/  \______/



 $$$$$$\                                                $$$$$$$\
$$  __$$\                                               $$  ____|
$$ /  \__| $$$$$$\   $$$$$$\  $$\   $$\  $$$$$$\        $$ |
$$ |$$$$\ $$  __$$\ $$  __$$\ $$ |  $$ |$$  __$$\       $$$$$$$\
$$ |\_$$ |$$ |  \__|$$ /  $$ |$$ |  $$ |$$ /  $$ |      \_____$$\
$$ |  $$ |$$ |      $$ |  $$ |$$ |  $$ |$$ |  $$ |      $$\   $$ |
\$$$$$$  |$$ |      \$$$$$$  |\$$$$$$  |$$$$$$$  |      \$$$$$$  |
 \______/ \__|       \______/  \______/ $$  ____/        \______/
                                        $$ |
                                        $$ |
                                        \__|
-->
<html lang="en">
<head>
    <title><?php echo $data['title']; ?> - Data Science TU/e</title>

    <link rel="stylesheet" type="text/css" href="style.min.css">
    <meta name="theme-color" content="#13285d">
    <link href="images/favicon.ico" rel="icon"/>
    <?php if (strpos($_SERVER['HTTP_USER_AGENT'], "Mobi")): ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php endif; ?>
    <script src="jquery-2.1.3.min.js" type="text/javascript"></script>
    <script async src="jquery.pin.min.js" type="text/javascript"></script>
    <script async src="list-filter.min.js" type="text/javascript"></script>

    <script type="text/javascript">
        window.onload = function () {
            $(".pinned").pin();
        }
    </script>

    <!--<link rel="stylesheet" type="text/css" href="slick/slick.css">-->
    <!--<link rel="stylesheet" type="text/css" href="slick/slick-theme.css">-->
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.carousel').slick({
                autoplay: true,
                autoplaySpeed: 4000,
                dots: true
            });
        });
    </script>
</head>
<body>

<div class="html-mobile-background"></div>

<div id="header">
    <h1><a href="?id=1">DATA SCIENCE</a></h1>
</div>


<div id="header-sticky" class="pinned">

    <div id="navigation">
        <div id="navigation-overflow" onclick="$('#navigation-menu-mobile').toggle('display')"></div>
        <ul id="navigation-menu">
            <?php include 'menu.php'; ?>
        </ul>
        <div id="navigation-menu-mobile-container">
            <ul id="navigation-menu-mobile">
                <?php include 'menu.php'; ?>
            </ul>
        </div>
    </div>

    <div id="breadcrumbs">
        <p>
            You are here:
            <?php
            foreach ($data['parent'] as $id) {
                echo '<a href="?id=' . $id . '">' . getData($id)['title'] . '</a> \ ';
            }

            echo $data['title'];
            ?>
        </p>
    </div>
</div>

<div id="body">
    <?php

    if (count($data['right_col']) > 0) {
        echo '<div id="col-left">';
    }

    if ((@include_once $data['file']) === false) {
        include_once 'pages/404.php';
    }

    if (count($data['right_col']) > 0) {
        echo '</div>';
        echo '<div id="col-right">';

        $i = 1;
        foreach ($data['right_col'] as $id) {
            echo '<a class="related-link related-link-' . $i . '" href="?id=' . $id . '">' . getData($id)['title'] . '</a>';
            $i++;
        }

        echo '</div>';
    }

    ?>

</div>

<div id="bottom">
    <a href="?id=15">Sitemap</a>
</div>
<script>
    var cb = function () {
        var h = document.getElementsByTagName('head')[0];

        var l = document.createElement('link');
        l.rel = 'stylesheet';
        l.href = 'slick/slick.css';
        h.parentNode.insertBefore(l, h);

        var l = document.createElement('link');
        l.rel = 'stylesheet';
        l.href = 'slick/slick-theme.css';
        h.parentNode.insertBefore(l, h);
    };
    var raf = requestAnimationFrame || mozRequestAnimationFrame ||
        webkitRequestAnimationFrame || msRequestAnimationFrame;
    if (raf) raf(cb);
    else window.addEventListener('load', cb);
</script>
</body>
</html>
