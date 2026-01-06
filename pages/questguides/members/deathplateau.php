<?php
function getQuestGuide($questName, $questComplete) { return <<<HTML
<h2>$questName</h2>
<b>Description:</b> Trolls have come down from the north and are camped on Death Plateau. They are using this base to launch attacks on the principality of Burthorpe! The Imperial Guard is taking heavy losses. They need your help!
<br><br>
<b>Difficulty: <font color="Green">Novice</font></b>
<br><br>
<b>Length: <font color="yellow">Medium</font></b><br>
<h3>Items & Skills Needed:</h3>
<ul style="list-style-type: none;">
<li><div data-progress><canvas itemname="asgarnian_ale" icon-size="25" show-label="inline"></canvas></div><br></li>
<li><div data-progress><canvas itemname="coins" icon-size="25"></canvas>&nbsp;&nbsp;About 1,000 coins</div><br></li>
<li><div data-progress><canvas itemname="trout" icon-size="25"></canvas>&nbsp;&nbsp;10 Cooked Trout</div><br></li>
<li><div data-progress><canvas itemname="bread" icon-size="25"></canvas>&nbsp;&nbsp;10 Bread</div><br></li>
<li><div data-progress><canvas itemname="iron_bar" icon-size="25" show-label="inline"></canvas></div><br></li>
<li><div data-progress><canvas itemname="blurberry_special" icon-size="25" show-label="inline"></canvas> (Premade works)</div><br></li>
</ul>
<h3>Recommended:</h3>
<ul style="list-style-type: none;">
<li><div data-progress>Able to hold your own against trolls, Protect from Missiles if you wish to fight the trolls</div><br></li>
</ul>
<b>Starting Location:</b> Imperial Guard training camp in Burthorpe, North of the Hero's Guild
<br><br>
<b>Reward:</b> 1 quest point, 3k attack exp, the ability to make claws depending on your smithing level, a pair of steel claws, and membership to the Imperial Forces
<br><br>
<hr>
<h3>Instructions:</h3>
<br>
<div data-progress>
    Speak to Denulth and begin the quest.<br>
    He asks you to help find another way up the Death Plateau and to find the combination the guard lost.
</div>
<br><br>
<div data-progress>
    Head to the nearby castle to the north and go upstairs.<br>
    Talk to Eohric, the person in the purple clothes, and ask him "Where is the guard that was on last night staying?"<br>
    He tells you his name is Harold and he is at the Toad and Chicken Inn.
</div>
<br><br>
<div data-progress>
    Go back outside the castle and head south and a little east to the inn.<br>
    Head upstairs and go to the west most room and enter it.
    Speak to Harold about the lost combination but he will tell you he doesn't want to talk about it.
</div>
<br><br>
<div data-progress>
    Go back and speak to Eohric in the castle and he tells you that Harold will open up a bit if you give him a drink and that he also likes gambling.<br>
    If you havent already, go buy some Asgarnian Ales at the inn and give them to Harold (He might ask for the Blurberry Special but he didn't for me).<br>
</div>
<br><br>
<div data-progress>
    Now gamble a few times with him until he gives you an IOU (I wagered 200gp each time and won twice to get it).<br>
    Read the IOU and find out that on the back of it is the combination!<br>
</div>
<br><br>
This is what it says:<br>
<img src="/img/questimages/death_plateau_1.png"><br><br>
This is the solution:<br>
<img src="/img/questimages/death_plateau_2.png"><br><br>
<br><br>
<div data-progress>
    Go back and speak to Denulth so you know what you need to do for the rest of the quest.<br>
    He says now you need to find the way to the plateau.<br>
</div>
<br><br>
<div data-progress>
    Head over to the west and you will see a cave. Enter it and talk to Saba.<br>
    He tells you to find the Sherpa.
</div>
<hr>
<h3>To find the the Sherpa:</h3>
<div data-progress>
    Journey up to the Death Plateau until you see a wounded soldier.<br>
    As soon as you see him walk west on the southern path.
</div>
<br><br>
<div data-progress>
    There is a door at the end, knock on it, and Tenzing the Sherpa will let you in if you tell him that you are not the milkman.<br>
    Ask him about the path leading up the plateau and he will say that there is one but he will not tell you until you run an errand for him.<br>
    He will then request that you bring him 10 cooked trout and 10 bread and that you also must fix his climbing boots at the the blacksmith, Dunstan.
</div>
<br><br>
<div data-progress>
    Head over to the blacksmith and speak with Dunstan.<br>
    He refuses to fix the boots since Tenzing has not yet given him the payment for the previous pair of boots.<br>
    He eventually says he will fix them if you get his son into the army.
</div>
<br><br>
<div data-progress>
    Talk to Denulth and you will receive a certificate which will allow Dunstan's son to be in the army.<br>
</div>
<br><br>
<div data-progress>
    Head back to Dunstan and give him the certificate.<br>
    He will say that he will fix the boots if you bring him a iron bar.<br>
    Give him the iron bar and the boots and he will give you the fixed boots.<br>
</div>
<br><br>
<div data-progress>
    Go back to Tenzing with the 10 bread, 10 cooked trout, and the repaired boots.<br>
    He will then give you a map which shows the secret path up the plateau.
</div>
<hr>
<div data-progress>
    Exit the back of his house to the North and then follow the path straight.<br>
    After a tedious amount of walking you will receive a message that you have walked far enough and that you should go back to Denulth.
</div>
<br><br>
<div data-progress>
    Speak with Denulth, and give him the Secret Way Map and the combination for your reward.
</div>
$questComplete
This quest guide was written by Im4eversmart and leaderofdarkness . Thanks to Henry_n and EverettP for corrections.
<br><br>
This quest guide was entered into the database on Mon, Aug 09, 2004, at 10:33:21 PM by xxtigurxx and was last updated on Mon, Dec 13, 2004, at 04:44:07 AM by MrStormy.
HTML; }