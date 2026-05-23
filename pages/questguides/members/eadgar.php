<?php
function getQuestGuide($questName, $questComplete) { return <<<HTML
<div id="narrowscroll">
    <h2>$questName</h2>
    <b>Description:</b> Sanfew requires a rare herb for the next part of the purifying ritual. Travel back to the Troll Stronghold to find this herb that the trolls use as an ingredient for their favourite dish.
    <br><br>
    <b>Difficulty: <font color="green">Easy</font></b>
    <br><br>
    <b>Length: <font color="red">Long</font></b>
    <br><br>
    <h3>Required Quests:</h3>
    <ul style="list-style-type: none;">
        <li><div data-progress>Druidic Ritual</div></li>
        <li><div data-progress>Troll Stronghold</div></li>
    </ul>
    <h3>Items & Skills Needed:</h3>
    <ul style="list-style-type: none;">
        <li><div data-progress>31 Herblore</div><br></li>
        <li><div data-progress><canvas itemname="death_climbingboots" show-label="inline"></canvas></div></li>
        <li><div data-progress><canvas itemname="grain" show-label="inline" amount="10"></canvas></div></li>
        <li><div data-progress><canvas itemname="raw_chicken" show-label="inline" amount="5"></canvas></div></li>
        <li><div data-progress><canvas itemname="pineapple_chunks" show-label="inline"></canvas></div></li>
        <li><div data-progress><canvas itemname="vodka" show-label="inline" name-append=" (Gin, Brandy, Whiskey, etc. also works)"></canvas></div></li>
        <li><div data-progress><canvas itemname="logs" show-label="inline"></canvas></div></li>
        <li><div data-progress><canvas itemname="vial_water" show-label="inline"></canvas></div></li>
        <li><div data-progress><canvas itemname="ranarr_weed" show-label="inline"></canvas></div></li>
        <li><div data-progress><canvas itemname="pestle_and_mortar" show-label="inline"></canvas></div></li>
    </ul>
    <h3>Recommended:</h3>
    <ul style="list-style-type: none;">
        <li><div data-progress><canvas itemname="tinderbox" show-label="inline"></canvas></div></li>
        <li><div data-progress><canvas itemname="lawrune" show-label="inline" amount="10" name-replace="Teleport to Falador Runes"></canvas></div></li>
        <li><div data-progress><canvas itemname="lawrune" show-label="inline" amount="10" name-replace="Teleport to Ardougne Runes"></canvas></div></li>
        <li><div data-progress><canvas itemname="logs" show-label="inline" name-replace="Additional logs"></canvas></div></li>
    </ul>
    <b>Starting Location:</b> Speak to Sanfew in Taverly
    <br><br>
    <b>Reward:</b> 11k Herblore Experience, ability to Teleport to Trollheim (Lvl 61 to use and requires 2 Law and 2 Fire Runes) and 1 Quest Point.
</div>
<h3>Instructions:</h3>
<br><br>
<div data-progress>
    Go Speak to Sanfew, He will tell you about a herb called goutweed that is needed for the next part of the ritual, unfortunately he doesn't know exactly where it is but he knows its near the trolls somewhere, he tells you that Mad Eadgar might know more and to go see him.
</div>
<br><br>
<div data-progress>
    Mad Edgar lives in a cave near the dungeons you rescued him from in the Troll Stronghold quest, near the top of the giant mountain spiral. See red circle on image below. To get there, make your way to Tenzing's hut, then follow the path through the arena and past Dad, until you get to the stronghold in the picture below. You can just click on the spiral to run through the maze and get to the top. Beware of the Troll Throwers when running past them, turning on Protect from Missiles is helpful.
</div>
<div style="display: flex; align-items: center;">
    <img src="img/questimages/eadgar/eadgar1.jpg" width="60%"><img src="img/questimages/eadgar/eadgar2.png" width="40%">
</div>
<br><br>
<div data-progress>
    Go Speak to Edgar and he will tell you to speak to a troll cook (Burntmeat) as he'll know where it is.
</div>
<br><br>
<div data-progress>
    Go Speak to Burntmeat inside the Troll Stronghold (go in the main entrance, then head south and go down the stairs), he'll say he'll only tell you in exchange for some tasty human meat as he's getting bored of goat.
</div>
<br><br>
<img src="img/questimages/eadgar/eadgar3.png">
<br><br>
<div data-progress>
    Go back and speak To Eadgar again, he'll tell you he has a cunning plan but you'll need a parrot first.<br>He tells you where else would you get a parrot except for the zoo?
</div>
<br><br>
<div data-progress>
    Head To Ardrougne Zoo and talk to Parroty Pete, find out about the mix up with the vodka and that his favorite food is Pinapple Chunks.
    <br>
    (If you don't have Pineapple Chunks or Vodka, head to the Grand Tree in Tree Gnome Stronghold. Speak to the shop owner Heckel Funch on the second floor to the east of the pub/bar and buy some.)
</div>
<br><br>
<img src="img/questimages/eadgar/eadgar4.png">
<br><br>
<div data-progress>
    Dice the pinapple into chunks and use the vodka on them to make alcho-chunks. Then feed these to the parrot by using the alcho-chunks on the hatch on the side of the cage, if you don't use the vodka on the chunks then the parrot will be too quick for you.
</div>
<br><br>
<img src="img/questimages/eadgar/eadgar5.png">
<br><br>
<img src="img/questimages/eadgar/eadgar6.png">
<br><br>
<div data-progress>
    Take the Parrot to Eadgar, and he'll tell you he's going to make a scarecrow. For this you'll need something that talk's like a human, taste's like a human, smell's like a human and also that look's like a human. To make this you'll need: 10 grain, 1 log to make a body so it looks human, 5 raw chickens so it taste's human (coz everything tastes like chicken), some dirty robes so it smells like a human, and you'll need to teach the parrot words the trolls would expect to here from a human.
</div>
<br><br>
<div data-progress>
    Follow the map below to get to the prison where you rescued Eadgar from in the Troll Stronghold quest. You want to get to F3 where the cells are. Hide the parrot in the torture racks just north of the prison cells. This will teach the parrot to talk. Leave it there and continue on with your quest.
</div>
<br><br>
<img src="img/questimages/eadgar/eadgar7.png">
<br><br>
<div data-progress>
    Head to Taverly and speak to the Druid washing the robes, ask him for some dirty one's and when he says he won't give them to you, tell him Sanfew would be ashamed or threaten to cut down some trees.
</div>
<br><br>
<img src="img/questimages/eadgar/eadgar8.png">
<br><br>
<div data-progress>
    Now take the Dirty robes and the other items back to Eadgar.
</div>
<br><br>
<img src="img/questimages/eadgar/eadgar9.png">
<br><br>
<div data-progress>
    He'll Explain that it's better if we make a potion so we know the troll is telling the truth as the troll might lie to us. For this you'll need a Ranarr Weed, a Water Filled Vial, and some Troll Thistle (this grows by the back of Eadgar's cave - east and one level below cave entrance).
</div>
<br><br>
<div data-progress>
    Go to the top of the mountain just outside Eadgar's house and pick the thistle, then burn it on a fire (There are some near the entance to the Stronghold in the troll camp) and grind it down, then put it in a vial with the Ranarr Weed to get a Troll Potion.
</div>
<br><br>
<img src="img/questimages/eadgar/eadgar10.png">
<br><br>
<div data-progress>
    Go give the Potion to Eadgar and he'll tell you to go get the parrot. Head back to the torture rack, and after listening to the parrot about his spleen head back to Eadgar.
</div>
<br><br>
<div data-progress>
    Eadgar will use the Parrot on the scarecrow and give you a fake human. Now take this to Burntmeat.
</div>
<br><br>
<img src="img/questimages/eadgar/eadgar11.png">
<br><br>
<div data-progress>
    Burntmeat will take the fake human and give you the first thing he ever cooked...burntmeat, now ask him about the Goutweed, and he explains that its in a fake drawer in the bottom of the kitchen drawers. Search the closest set of drawers and find a key.
</div>
<br><br>
<img src="img/questimages/eadgar/eadgar12.png">
<br><br>
<div data-progress>
    Head down the stairs to the storeroom. Once inside the store room, you need to get from one side to the other without getting caught by the trolls, this is easier then it seems as the trolls will only throw you out of the store room if they hit you, so don't worry about them seeing you.
</div>
<br><br>
<div data-progress>
    Once you are over the other side of the storeroom, grab the Goutweed and a troll will throw you out of the store room.
</div>
<br><br>
<img src="img/questimages/eadgar/eadgar13.png">
<br><br>
<img src="img/questimages/eadgar/eadgar14.jpg">
<br><br>
<div data-progress>
    Take the Goutweed back to Sanfew to collect your reward.
</div>
$questComplete
This quest guide was written by Im4eversmart and Leader of Darkness (Davidsp), and map by engekomkomme. Thanks to DRAVAN, DownStrike, Nitr021, seanj50 and Infy102 for corrections.
<br><br>
This quest guide was entered into the RuneHQ.com database on Wed, Oct 06, 2004, at 09:33:10 PM by Monkeymatt and was last updated on Tue, Nov 15, 2005, at 09:05:35 PM by DRAVAN.
HTML; }