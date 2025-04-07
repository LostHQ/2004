<?php
$ogurl = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER["REQUEST_URI"]) . '/' . $meta_data['og:url'];

if (substr($meta_data['og:image'], 0, 4) == "http") {
    $ogimage = $meta_data['og:image'];
} else {
    $ogimage = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER["REQUEST_URI"]) . '/' . $meta_data['og:image'];
}
?>

<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=0.7, shrink-to-fit=no" />
    <meta name="color-scheme" content="light only" />
    <meta property="og:title" content="2004HQ > <?php echo $meta_data['og:title']; ?>" />
    <meta property="og:description" content="<?php echo $meta_data['og:description']; ?>" />
    <meta property="og:url" content="<?php echo $ogurl; ?>" />
    <meta property="og:image" content="<?php echo $ogimage; ?>" />
    <meta property="og:type" content="article:2004scape" />
    <title>2004HQ > <?php echo $meta_data['title']; ?></title>
    <link rel="icon" type="image/x-icon" href="img/sword.png" />
    <style>
        
        .main-content {
            p, div, span, td, a {
                font-family: 'RSPlain12', sans-serif;
                font-size: 18px;
            }
            th {
                font-size: 24px;
            }
            .calculators {
                a { color: white; text-decoration: none; display: block; }
                body { text-align: center; background-color: black; color: white; font-family: Arial, sans-serif; }
                table { margin: 20px auto; border-collapse: collapse; align-items: }
                th, td { border: 1px solid gold; padding: 8px; vertical-align: top; text-align: center; }
                th { background-color: #222; color: gold; }
            }
        }
        body,
        p,
        td {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 13px;
        }

        .b {
            border-style: outset;
            border-width: 3pt;
            border-color: #373737
        }

        .b2 {
            border-style: outset;
            border-width: 3pt;
            border-color: #570700
        }

        .e {
            border: 2px solid #382418
        }

        .c {
            text-decoration: none
        }

        .white {
            text-decoration: none;
            color: #FFFFFF;
        }

        .red {
            text-decoration: none;
            color: #E10505;
        }

        .lblue {
            text-decoration: none;
            color: #9DB8C3;
        }

        .dblue {
            text-decoration: none;
            color: #0D6083;
        }

        .yellow {
            text-decoration: none;
            color: #FFE139;
        }

        .green {
            text-decoration: none;
            color: #04A800;
        }

        .purple {
            text-decoration: none;
            color: #C503FD;
        }

        .pink {
            text-decoration: none;
            color: #FAA8AA;
        }

        A.c:hover {
            text-decoration: underline
        }

        A.white:hover {
            text-decoration: underline
        }

        A.red:hover {
            text-decoration: underline
        }

        A.lblue:hover {
            text-decoration: underline
        }

        A.dblue:hover {
            text-decoration: underline
        }

        A.yellow:hover {
            text-decoration: underline
        }

        A.green:hover {
            text-decoration: underline
        }

        A.purple:hover {
            text-decoration: underline
        }

        A.pink:hover {
            text-decoration: underline
        }

        .whitelink {
            color: white;
            text-decoration: none
        }

        @font-face {
            font-family: RSBold12;
            src: url('assets/RuneScape-Bold-12.otf');
        }

        @font-face {
            font-family: RSPlain12;
            src: url('assets/RuneScape-Plain-12.otf');
        }

        @font-face {
            font-family: RSQuill8;
            src: url('assets/RuneScape-Quill-8.otf');
        }

        .rsbold12 {
            font-family: RSBold12;
        }

        .rsplain12 {
            font-family: RSPlain12;
        }

        .rsquill8 {
            font-family: RSQuill8;
        }
    </style>
    <link rel="stylesheet" href="css\messages.css" />
    <script type="text/javascript" src="js/spriteloader.js"></script>
    <?php if (function_exists('getExtraHeaderContent')) {
        echo getExtraHeaderContent();
    } ?>
</head>