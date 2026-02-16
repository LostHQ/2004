<?php
function getPageContent() {
    global $meta_data;

    $meta_data['title'] = 'LostHQ Offline';
    $meta_data['og:title'] = $meta_data['title'];
    return <<<HTML
Below is a statement from BigShot on <a href="https://lostcity.markets/">Lost City Markets</a>:
<div id="narrowscroll">
Some information has come out regarding allegations of the Lost City owner taking payments in exchange for favors in-game. I refuse to join the discussion or delve deeper, but I do want to make it clear that I do not support what was allegedly done, and I am heavily disappointed to learn about it.<br>
I understand that nothing is free and that game server costs add up, but if what was leaked is true, it was done in a corrupt way that ruins the game's integrity.<br>
I have built and hosted Lost City Markets for over a year now and have not once accepted a penny. I loved Lost City and what it stood for. Developing and hosting the Markets was my way of showing my love for the project.<br>
</div>
<hr>
<div id="narrowscroll">
The team behind LostHQ stands with the community and condemns any actions that compromise the integrity of the game.<br>
Until further notice, LostHQ will be offline. We will be monitoring the situation and will provide updates as necessary. We hope for a resolution that restores trust and integrity to the community.<br>
</div>
HTML; }
