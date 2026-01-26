<?php
function getBaseUrl(): string {
    $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
    $path = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
    return ($scheme.'://'.$host.$path);
}
function getFullUrl(): string {
    $query = isset($_SERVER['QUERY_STRING']) && $_SERVER['QUERY_STRING'] !== '' ? '?' . $_SERVER['QUERY_STRING'] : '';
    return (getBaseUrl().'/'.$query);
}

if (substr($meta_data['og:image'], 0, 4) == "http") {
    $ogimage = $meta_data['og:image'];
} else {
    $ogimage = getBaseUrl().'/'.$meta_data['og:image'];
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="color-scheme" content="light only">
    <meta property="og:title" content="LostHQ > <?php echo $meta_data['og:title']; ?>">
    <meta property="og:description" content="<?php echo $meta_data['og:description']; ?>">
    <meta property="og:url" content="<?php echo getFullUrl(); ?>">
    <meta property="og:image" content="<?php echo $ogimage; ?>">
    <meta property="og:type" content="article:2004scape">
    <title>LostHQ > <?php echo $meta_data['title']; ?></title>
    <link rel="icon" type="image/x-icon" href="img/sword.png">
    <?php
    echo getCSS('css/main.css');
    echo getJS('js/main.js');
    echo getJS('js/fonts.js');
    echo getJS('js/site_options.js');
    echo getJS('js/floor_selector.js');
    echo getJS('js/sprite_loader.js');
    if (function_exists('getExtraHeaderContent')) { echo getExtraHeaderContent(); }
    ?>
</head>