<body<?= function_exists('onBodyLoad') ? ' onload="'.onBodyLoad().'"': '' ?>>
<table width="100%" height="100%" cellpadding="0" cellspacing="0"><tbody><tr>
<td style="display:flex;justify-content:center;align-items:center;">
  <div style="LEFT: 0px; TOP: 0px; WIDTH: 600px; POSITION: relative;">
    <?php if ($holiday) { ?>
      <table cellpadding="0" cellspacing="0"><tbody><tr></tr>
        <td><img src="<?= $edge_a ?>" width="100" height="43" hspace="0" vspace="0"></td>
        <td><img src="img/edge_c.jpg" width="400" height="42" hspace="0" vspace="0"></td>
        <td><img src="<?= $edge_d ?>" width="100" height="43" hspace="0" vspace="0"></td>
      </tr></tbody></table>
      <table width="600" cellpadding="0" cellspacing="0" background="<?= $background ?>">
    <?php } else { ?>
      <table cellpadding="0" cellspacing="0"><tbody><tr></tr>
        <td><img src="img/edge_a.jpg" width="100" height="43" hspace="0" vspace="0"></td>
        <td><img src="img/edge_c.jpg" width="400" height="42" hspace="0" vspace="0"></td>
        <td><img src="img/edge_d.jpg" width="100" height="43" hspace="0" vspace="0"></td>
      </tr></tbody></table>
      <table width="600" cellpadding="0" cellspacing="0" background="img/background2.jpg">
    <?php } ?>

      <tbody>
        <tr>
          <td style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
            <a href="?"><img src="img/losthq.png" width="256" height="141"></a>
            <?php include 'template/oldurl.php'; ?>
            <?php include 'template/menu.php'; ?>
            <?php include 'template/breadcrumbs.php'; ?>
            <table style="background-color:black;" cellpadding="0" cellspacing="0"><tbody><tr><td><img src="img/fm_top.gif"></td></tr></tbody></table>
            <table width="500px" cellpadding="0" cellspacing="0" background="img/fm_middle.gif">
              <tbody>
                <tr>
                  <td width=7></td>
                  <td valign="bottom" style="align-items:center;text-align:center;background-color:black;">
                    <img src="img/blank.gif" height="7" width="1">
                    <div class="main-content">
                      