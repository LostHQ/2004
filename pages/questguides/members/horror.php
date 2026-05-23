<?php
function getQuestGuide($questName, $questComplete) { return <<<HTML
<div id="narrowscroll">
    <h2>$questName</h2>
    <b>Description:</b> The lighthouse protecting Kandarins North Western coastline has mysteriously stopped operating, and contact with the lighthouse keeper Jossik has been lost. The Council would greatly appreciate it if somebody could discover for them what has happened to this most vital landscape feature.
    <br><br>
    <b>Difficulty: <font color="yellow">Medium</font></b>
    <br><br>
    <b>Length: <font color="yellow">Short/Medium</font></b>
    <br><br>
    <h3>Required Quests:</h3>
    <ul style="list-style-type: none;">
        <li><div data-progress>Barcrawl (Miniquest)</div></li>
    </ul>
    <h3>Items & Skills Needed:</h3>
    <ul style="list-style-type: none;">
        <li><div data-progress>35 Agility</div><br></li>
        <li><div data-progress>15 Agility</div><br></li>
        <li><div data-progress><canvas itemname="molten_glass" show-label="inline"></canvas></div></li>
        <li><div data-progress><canvas itemname="tinderbox" show-label="inline"></canvas></div></li>
        <li><div data-progress><canvas itemname="airrune" show-label="inline"></canvas></div></li>
        <li><div data-progress><canvas itemname="waterrune" show-label="inline"></canvas></div></li>
        <li><div data-progress><canvas itemname="firerune" show-label="inline"></canvas></div></li>
        <li><div data-progress><canvas itemname="earthrune" show-label="inline"></canvas></div></li>
        <li><div data-progress><canvas itemname="nails" show-label="inline" amount="8"></canvas></div></li>
        <li><div data-progress><canvas itemname="woodplank" show-label="inline" amount="2"></canvas></div></li>
        <li><div data-progress><canvas itemname="swamp_tar" show-label="inline" name-append=" (not paste!)"></canvas></div></li>
        <li><div data-progress><canvas itemname="hammer" show-label="inline"></canvas></div></li>
        <li><div data-progress><canvas itemname="iron_arrow" show-label="inline" name-append=" (any single arrow except Ogre)"></canvas></div></li>
        <li><div data-progress><canvas itemname="iron_sword" show-label="inline" name-append=" (any kind but you won't get it back)"></canvas></div></li>
    </ul>
    <h3>Recommended:</h3>
    <ul style="list-style-type: none;">
        <li><div data-progress>Ability to defeat a tough level 100 monster</div></li>
        <li><div data-progress><canvas itemname="firerune" show-label="inline" amount="100" name-replace="Runes to cast elemental spells of all types"></canvas></div></li>
        <li><div data-progress><canvas itemname="steel_arrow" show-label="inline" amount="100" name-replace="Ranged weapon & arrows"></canvas></div></li>
        <li><div data-progress><canvas itemname="rune_scimitar" show-label="inline" name-replace="Melee weapon & armor"></canvas></div></li>
        <li><div data-progress><canvas itemname="lobster" show-label="inline" name-replace="Food for the fight"></canvas></div></li>
        <li><div data-progress><canvas itemname="ring_of_recoil" show-label="inline"></canvas></div></li>
    </ul>
    <b>Starting Location:</b> Lighthouse north of Barbarian Outpost
    <br><br>
    <b>Reward:</b> 2 Quest Points, a Damaged prayer book of your choice; 4662 Range, Magic and Strength experience
</div>
<h3>Part 1: Fix the Lighthouse</h3>
<br>
<div data-progress>
    Go to the Lighthouse area (located in the farthest northwest corner of Runescape) and talk to Larissa.
</div>
<br><br>
<div data-progress>
    Go down south of her across the jumping platforms and into the Barbarian Outpost to talk to Gunnjorn and get the Lighthouse key. (If you don't already have Planks, get them here.)
</div>
<br><br>
<div data-progress>
    Use the two Planks on the broken bridge east of Larissa (automatically uses your Hammer and Steel nails).
</div>
<br><br>
<div data-progress>
    Go back and talk to Larissa. After talking to her go into the Lighthouse.
</div>
<br><br>
<div data-progress>
    Go up one level and search the book case; take the books. Read the lighthouse manual and the diary.
</div>
<br><br>
<div data-progress>
    Go up one more level. Use the Swamp tar with the lighting mechanism and then use your Tinderbox on it. Then use your Molten glass on the lighting mechanism.
</div>
<br><br>
<img src="/img/questimages/horror/horror1.jpg">
<br><br>
<div data-progress>
    Go back down and talk to Larissa
</div>
<hr>
<h3>Part 2: The Door</h3>
<br>
<img src="/img/questimages/horror/horror2.png">
<br><br>
<img src="/img/questimages/horror/horror3.png">
<br><br>
<div data-progress>
    Have the runes, arrow, and the sword in your inventory and go down the ladder and walk over to the strange wall.
</div>
<br><br>
<div data-progress>
    Use your arrow, sword, air rune, earth rune, water rune, and fire rune on the strange wall.
    <br>
    <b>Note: You will not get any of this stuff back.</b>
</div>
<br><br>
<div data-progress>
    Open the strange wall, climb down the ladder, and talk to Jossik.
</div>
<hr>
<h3>Part 3: The Monster from the Greyish-Green Lagoon</h3>
<br>
<div data-progress>
    Fight and kill the baby level 100 monster that attacks you (quite easy with protect from melee).
</div>
<br><br>
<div data-progress>
    After the first baby is killed another level 100 monster attacks you.
</div>
<br><br>
<img src="/img/questimages/horror/horror4.png">
<br><br>
It uses a form of the prayers and changes colors to show what it is weak to:
<ul>
    <li><font color="orange">Orange means you can melee.</font></li>
    <li><font color="green">Green means you can range.</font></li>
    <li><font color="red">Red means you can use fire spells.</font></li>
    <li><font color="brown">Brown means you can use earth spells.</font></li>
    <li><font color="blue">Blue means you can use water spells.</font></li>
    <li><font color="white">White means you can use air spells.</font></li>
</ul>
If you need help on colors they show up in the chat box.
<br><br>
It also attacks with both range and melee attacks, the range attack is weak so always use protect from melee.
<br><br>
<div data-progress>
    Switch between melee, range and magic as the monster switches colors. Just keep your prayer up and keep an eye on your hits. Some people recommend hiding behind the nearby rocks as it changes to forms you can't attack, then rushing back out to continue the battle.
</div>
$questComplete
Quest finished! When you kill the second monster you will be automatically transported out of the room and you will see the Quest Completed picture. You will get your exp, quest points and a Rusty casket.
<br><br>
Go up to the second story of the Lighthouse; Jossik is now there. You can buy most ales and some other stuff off him. But for now talk to him. He tells you to read what the Rusty casket says; pick the same god twice to receive a Damaged book of that god (Guthix, Saradomin or Zamorak).
<br><br>
<img src="/img/questimages/horror/horror5.jpg">
<br><br>
I picked Zamorak and got an unholy book of Zamorak. All Damaged books give a +5 prayer bonus and are wielded in the shield spot.
<br><br>
<img src="/img/questimages/horror/horror6.jpg">
<hr>
This quest guide was written by Im4eversmart. Thanks to DRAVAN, Dracon, Brenden, alex200599, Headbiter, Demonichell, Agamemnus, Eq_S_Guy, and Ghoulies for corrections.
<br><br>
This quest guide was entered into the RuneHQ.com database on Tue, Sep 14, 2004, at 09:50:55 PM by DRAVAN and was last updated on Wed, Nov 02, 2005, at 08:56:14 PM by DRAVAN.
HTML; }