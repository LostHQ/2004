<?php
function getQuestGuide($questName, $questComplete) { return <<<HTML
<div id="narrowscroll">
    <h2>$questName</h2>
    <b>Description:</b> Mort Myre's south border has been breached, and a path towards a strange town called 'Mort'ton' has been found.<br>Strangers return from such visits with tales of the 'Afflicted' and shadowy creatures who jealously guard their tomb treasure.
    <br><br>
    <b>Difficulty: <font color="yellow">Medium</font></b>
    <br><br>
    <b>Length: <font color="green">Short</font></b>
    <br><br>
    <h3>Items & Skills Needed:</h3>
    <ul style="list-style-type: none;">
        <li><div data-progress>15 Herblore</div><br></li>
        <li><div data-progress>20 Crafting (Higher crafting is a bonus)</div><br></li>
        <li><div data-progress><canvas itemname="tarromin" show-label="inline"></canvas></div></li>
        <li><div data-progress><canvas itemname="iron_axe" show-label="inline" name-replace="Any woodcutting axe"></canvas></div></li>
        <li><div data-progress><canvas itemname="tinderbox" show-label="inline"></canvas></div></li>
        <li><div data-progress><canvas itemname="vial_water" show-label="inline" amount="2"></canvas></div></li>
        <li><div data-progress><canvas itemname="coins" show-label="inline" amount="10000" name-replace="About 10k Coins"></canvas></div></li>
        <li><div data-progress><canvas itemname="ashes" show-label="inline" amount="2" name-append=" (obtainable during quest)"></canvas></div></li>
        <li><div data-progress><canvas itemname="logs" show-label="inline" name-append=" (obtainable during quest)"></canvas></div></li>
        <li><div data-progress><canvas itemname="hammer" show-label="inline" name-append=" (obtainable during quest)"></canvas></div></li>
        <li><div data-progress><canvas itemname="oliveoil3" show-label="inline" name-append=" (obtainable during quest)"></canvas></div></li>
        <li><div data-progress><canvas itemname="limestonebrick" show-label="inline" name-append=" (obtainable during quest)" amount="5"></canvas></div></li>
        <li><div data-progress><canvas itemname="limestone" show-label="inline" name-append=" (obtainable during quest)" amount="5"></canvas></div></li>
        <li><div data-progress><canvas itemname="swamppaste" show-label="inline" name-append=" (obtainable during quest)" amount="10"></canvas></div></li>
        <li><div data-progress><canvas itemname="woodplank" show-label="inline" name-append=" (obtainable during quest)" amount="5"></canvas></div></li>
    </ul>
    <h3>Recommended:</h3>
    <ul style="list-style-type: none;">
        <li><div data-progress><canvas itemname="rune_scimitar" show-label="inline" name-replace="Weapon to fight level 40 shades"></canvas></div></li>
        <li><div data-progress><canvas itemname="rune_platebody" show-label="inline" name-replace="Armor to fight level 40 shades"></canvas></div></li>
        <li><div data-progress><canvas itemname="lobster" show-label="inline" name-replace="Food to heal during combat"></canvas></div></li>
    </ul>
    <b>Starting Location:</b> The town of Mort'ton to the South east of Filliman Tarlock's camp (South of Mort Myre, cross bridge near Nature Spirit Quest Starting Location)
    <br><br>
    <b>Reward:</b> 3 quest points, 2,000 Herblore XP, and the ability to go down into temple north of the General Shop.<br>Taking the Diary to the Apothecary in Varrock earns one-time additional herblore xp. Some people also get Crafting XP.
</div>
<h3>Instructions:</h3>
<br>
<div data-progress>
    Head into the Swamps of Mort Myre and Head South.
    <br>Once you have passed the Nature Spirit Quest island, continue heading south down and round the winding path.
    <br>When you first come into Mort'ton search the sign at the entrance, you will notice it has teeth marks on the sign.
</div>
<br><br>
<img src="img/questimages/shades/shades1.jpg">
<br><br>
<div data-progress>
    Head south-southeast from this and you will notice a house that has a broken table inside it.
    <br>Search this table and the shelf. You will then get three Herbs and a Diary. Click the Herbs to ID them, you will get two Tarromin and one Rogues purse (Rogues purse is a Herb used in Jungle Potion Quest).
</div>
<br><br>
<img src="img/questimages/shades/shades2.jpg">
<br><br>
<div data-progress>
    Read the Diary and you find out that the people of Mort'ton have been affected by the temple just north east of the house.
    <br>It also explains that Tarromin is used in a "temporary cure" that makes the Afflicted townspeople intelligible for a short period.
</div>
<br><br>
<div data-progress>
    Add Tarromin to the Vial of water.
</div>
<br><br>
<div data-progress>
    Cut down 3 trees and start 2 fires (using 2 Logs), keep the third Log for later. Let the fires go out and collect the Ashes and use them with the Tarromin Filled Vial to get Serum 207. (A word of warning: you need to speak to the General Store owner twice and the Priest twice, so do not use your Serum on other people unless you brought spare Tarromin.) Use your second Tarromin on a Vial of water and add Ashes to make a second vial of Serum 207.
</div>
<br><br>
<img src="img/questimages/shades/shades3.jpg">
<br><br>
<div data-progress>
    Once you have finished making the serum, go and use it in the General Store on Razmire Keelgan (1 used, 5 left). After a brief thank you, ask him all the options so you know what's going on. Then he'll ask you to go and kill five shades (you have to kill these yourself!) (you don't need to use his stores yet so don't worry.) Note that this quest 'keeps count' of how many shades you've killed after you accept this assignment, so the number of remains you already have (or pick up) don't matter: you must Kill Five Personally.
</div>
<br><br>
<img src="img/questimages/shades/shades4.jpg">
<br><br>
<div data-progress>
    Kill Five Shades and take the remains back to the General Store and use another dose of Serum 207 on Razmire (2 gone, 4 left).
</div>
<br><br>
<img src="img/questimages/shades/shades5.jpg">
<br><br>
<div data-progress>
    He'll take a corpse and examine it. He will then tell you to take a corpse to Ulsquire Shauncy.
</div>
<br><br>
<div data-progress>
    Go to the house with the water drop on the minimap and use a dose of potion on Ulsquire Shauncy (3 gone, 3 left). After showing him the corpse speak to him again before the potion wears off. After listening to every option head back to the shop (if you want you can do this option earlier) and use another dose on Razmire (4 Doses gone, 2 Left).
</div>
<br><br>
<img src="img/questimages/shades/shades6.jpg">
<br><br>
<div data-progress>
    Stock up on a Hammer, some Swamp paste (about 10 may be enough, it depends on amount of people), 5 Planks, 5 Limestone and 5 Limestone rocks and 1 Olive oil. Then head northeast of the shop to the temple. (You may want to switch to World 2 at this point in order to find enough people to repair the temple.) Click on a wall and your character will start repairing it, wait until it is at 100 percent repaired and your Sanctity is at least above 10
</div>
<br><br>
<img src="img/questimages/shades/shades7.jpg">
<br><br>
TIP: make sure there are several people repairing the temple and several attacking the shades, as shades CAN and WILL attack the temple and tear it down completely. Players defending the temple also accrue Sanctity.
<br><br>
<div data-progress>
    Once this is done the flame in the centre of the temple can be lit using a Tinderbox. Use the Olive oil (bought from the shop) on the flame and now you'll have Sacred oil. Keep working and get your Sanctity up to 20 percent, as this is also the best time to use your remaining Serum 207 on the flame to make it into the permanent cure, Serum 207(p). Now use the Sacred oil with the other Logs you chopped earlier to make Pyre logs. Kill another shade for Loar remains (or just pick up any from the ground) and head south.
</div>
<br><br>
<div data-progress>
    Scattered around the edges of the town are holy altars that are used for cremations.
    <br>Head to any one of these, it's not important which one. Use the Pyre logs on the altar, then use the remains on the altar, light these using your Tinderbox and a key will appear. Take the key (this is used for the doors north of the shop but isn't needed in the quest.)
</div>
<br><br>
<div data-progress>
    Once you have burned the remains and taken the key head back to Ulsquire and use another dose of potion on him (5 doses used, 1 left).
</div>
<br><br>
<div data-progress>
    He will congratulate you on setting the shade to rest
</div>
$questComplete
This quest guide was written by corbear007,jalech99, darksole17, and leaderofdarkness. Thanks to Weezy, DRAVAN, andro_girl, Demonichell, havoc_cat, mastersiosk, and pokemama for corrections.
<br><br>
This quest guide was entered into the RuneHQ.com database on Mon, Oct 18, 2004, at 12:05:32 PM by Weezy and was last updated on Sun, Nov 13, 2005, at 09:02:06 PM by DRAVAN.
HTML; }