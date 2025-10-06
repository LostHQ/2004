<?php

function getPageContent() {
    global $meta_data, $siteOptStyle;
    ob_start();
    if (empty($_GET['skill'])) {
        $meta_data['title'] = 'Skill Guides';
        $meta_data['og:title'] = $meta_data['title'];
        $meta_data['og:image'] = 'img/skillicons/stats.webp';
        echo '<h3>Select the Skill you would like to view a guide for:</h3>';
        echo '<canvas data-skills="skillTree" data-width="188" data-style="'.$siteOptStyle.'"></canvas>';
        echo '<script src="js/skillgrid.js"></script><br>';
    } else {
        $currSkill = htmlspecialchars($_GET['skill']);
        $filePath = 'pages/skillguides/skills/' . $currSkill . '.php';

        if (file_exists($filePath)) {
            include $filePath;
            
            $meta_data['title'] = 'Skill Guides > ' . ucfirst($currSkill);
            $meta_data['og:title'] = $meta_data['title'];
            $meta_data['og:image'] = 'img/skillicons/'.$currSkill.'.webp';;

            echo getSkillContent(ucfirst($currSkill));
        } else {
            $stopload = true;
            redirect("404");
            exit;
        }
    }

    return ob_get_clean();
}