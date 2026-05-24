<?php
function getSpecialGuide($currSpecialGuide) { return <<<HTML
<div class="lightbox-overlay" id="lightbox" onclick="closeLightbox()">
    <img id="lightbox-img" src="">
</div>
<h2>$currSpecialGuide</h2>
<h3>Introduction</h3>
Random events are a feature Jagex have placed in Runescape to stop cheaters. They can occur at any time and any place - while you are doing anything! There are two types. Firstly, there are general events that can occur while you are doing anything - such as a genie appearing - and all you have to do is respond to them. Secondly, there are skill specific events which occur when you have been training that skill for a while. Again, all you have to do is respond to them.
<br><br>
Below, all the different random events are explained with details of when they appear, what they do and what you should do.
<hr>
<h3>General Random Events</h3>
General Random events are not skill limited, they can happen anywhere and anytime and are there to make sure you are awake and at the keyboard.
<br><br>
<h4>Drunken Dwarf</h4>
<table>
    <tr>
        <td><img src="img/special_guides/randomevents/drunkendwarf.gif"></td>    
        <td>A drunken dwarf will appear anywhere and give you a beer and a kebab. Talk to him straight away and recieve a kebab and a beer! If you ignore him he will start attacking you weakly with badly aimed rocks, you cannot attack him back. He will attack you indefinitely until you talk to him or climb a ladder/teleport.</td>
    </tr>
</table>
<br>
<h4>Genie</h4>
<table>
    <tr>
        <td>He appears and gives you a magic lamp, when you rub the magic lamp you get an options screen like the one below where you can get free xp for a any skill of your choice, the amount of xp you get if given below the picture: (Note: you cannot bank or trade the lamp) Answer him and recieve your lamp. If you don't, <!-- [in 225] he will scatter your inventory across the floor or -->he will teleport you somewhere else.</td>
        <td><img src="img/special_guides/randomevents/geni.gif"></td>
    </tr>
    <tr>
        <td colspan="2">
            <img src="img/special_guides/randomevents/genielamp.gif">
        </td>
    </tr>
</table>
Lamp Interface
<br>
<img src="img/special_guides/randomevents/geniechoice.png">
<br>
XP given = Level in that skill * 10
<br>
<h4>Swarm</h4>
<table>
    <tr>
        <td><img src="img/special_guides/randomevents/swarm.gif"></td>
        <td>This annoying swarm will attack you hitting ticklish 1's and 2's while you are doing anything. You cannot attack them so run away until they stop chasing you - insect repellent doesn't work.</td>
    </tr>
</table>
<br>
<h4>Strange Plant</h4>
<table>
    <tr>
        <td>While doing anything a strangle plant will start growing next to you. It will be fully grown in about a minute or so. When its fully grown 'pick' the plant to get a 'strange fruit' which when eaten replenishes <!-- 10% [in 225] -->30% of your energy and cures poison. If you don't pick it, the plant will attack and could poison you.</td>
        <td><img src="img/special_guides/randomevents/strangeflower.gif"></td>
    </tr>
</table>
<br>
<h4>Mysterious Old Man</h4>
<table>
    <tr>
        <td><img src="img/special_guides/randomevents/oldman.gif"></td>
        <td>The Mysterious Old Man (MOM) appears and interrupts whatever it is that you were doing. Some say he's just lonely, so if he talks to you, you should talk back. By talking to the old man, he may also either give you a Strange Box, or teleport you to a Maze or Mime Stage. These events are covered below.</td>
    </tr>
</table>
<hr>
<h3>Mysterious Old Man Events</h3>
<h4>Maze</h4>
<table>
    <tr>
        <td>You just need to manage to find your way to the center of the maze, in which time you'll be rewarded. The quicker you get there, the better your prize will be.</td>
        <td><img src="img/special_guides/randomevents/mazemap.png" width="125" onclick="openLightbox(this.src)"><br>Click to expand</td>
    </tr>
</table>
<br>
<h4>Mime</h4>
<table>
    <tr>
        <td><img src="img/special_guides/randomevents/mime28ap.png"></td>
        <td>Both you and a Mime will be up on stage, and you'll need to watch the Mime and see what he does for an action. Then repeat it when you're in the spotlight by clicking on the action in the chat box. Continue doing this until you are teleported out. You could get a Mime Mask, Robe, Pants, Gloves or an extra emotion to use.</td>
    </tr>
</table>
Rewards
<table width=100%>
    <tr>
        <th><canvas itemname="macro_mime_mask" show-label="true"></canvas></th>
        <th><canvas itemname="macro_mime_top" show-label="true"></canvas></th>
        <th><canvas itemname="macro_mime_legs" show-label="true"></canvas></th>
        <th><canvas itemname="macro_mime_gloves" show-label="true"></canvas></th>
        <th><canvas itemname="macro_mime_boots" show-label="true"></canvas></th>
        <th><img src="img/wip.png" height="35px"><br><span class="tooltip">Mime Emote<span class="tooltip-text">Glass wall, glass box, lean, and climb rope</span></span><th>
        <th><canvas itemname="coins_250"></canvas><br><span class="tooltip">500 Coins<span class="tooltip-text">If you have all mime rewards</span></span></th>
    </tr>
</table>
<h4>Strange Box</h4>
<table>
    <tr>
        <td>You must solve the puzzle by opening it and answering the simple question it gives. If you wait too long, the box will continue duplicating until it fills your inventory. You'll need to answer all of the boxes to be rewarded.</td>
        <td><img src="/img/special_guides/randomevents/strangebox.png" height="100px"></td>
    </tr>
</table>
Strange boxes have the following drops:
<br>
<table width=100%>
    <tr>
        <th><canvas itemname="coins_250"></canvas><br><span class="tooltip">Coins<span class="tooltip-text">Coins: 20, 40, 80, 160, 320, 640</span></span></th>
        <th><canvas itemname="uncut_sapphire" show-label="true"></canvas></th>
        <th><canvas itemname="uncut_emerald" show-label="true"></canvas></th>
        <th><canvas itemname="uncut_ruby" show-label="true"></canvas></th>
        <th><canvas itemname="cosmic_talisman" show-label="true"></canvas></th>
        <th><canvas itemname="uncut_diamond" show-label="true"></canvas></th>
        <th><canvas itemname="keyhalf1" show-label="true"></canvas></th>
        <th><canvas itemname="keyhalf2" show-label="true"></canvas></th>
    </tr>
    <tr>
        <td>5/64</td>
        <td>1/4</td>
        <td>1/8</td>
        <td>1/16</td>
        <td>1/16</td>
        <td>1/64</td>
        <td>1/128</td>
        <td>1/128</td>
    </tr>
</table>
<hr>
<h3>Mining Random Events</h3>
<h4>Rock Golem</h4>
<table>
    <tr>
        <td><img src="img/special_guides/randomevents/golem.gif"></td>
        <td>The Rock Golem will appear and attack you while you are mining. Its combat level depends on your combat level so its not always fixed, varies from 14 - 170. You can run away for 3 or 4 seconds until it stops chasing you - unless you want to kill it. It can drop ores, stouts, or pickaxes.</td>
    </tr>
</table>
<br>
<h4>Smoking Rocks</h4>
<table>
    <tr>
        <td><img src="img/special_guides/randomevents/pregasexpl.gif"></td>
        <td>If you mine the rock too long it will eventually start smoking - if you hit it you will cause an explosions hitting you 10hp and breaking your pickaxe. Don't hit it!!! If you did, you can fix your pickaxe at the Pick Salesman Nurof (in the Dwarven Mine) for a small fee.</td>
        <td><img src="img/special_guides/randomevents/rockexplosion.gif"></td>
    </tr>
</table>
<br>
<h4>Pickaxe Splitting</h4>
<table>
    <tr>
        <td>Your pickaxe head will fly off from its handle a few squares away. Pick it up and re-attach it to the pickaxe handle by 'using' them together.</td>
        <td><img src="img/special_guides/randomevents/pickaxe_head.png"></td>
    </tr>
</table>
<hr>
<h3>Fishing Random Events</h3>
<h4>River Troll</h4>
<table>
    <tr>
        <td><img src="img/special_guides/randomevents/rivertroll.gif"></td>
        <td>The River Troll will attack you if you have been fishing on the same spot too long. Its level also varies according to yours. Varies between 14 - 170. Just run away until it stops chasing you - unless you want to kill it. It can drop bait, raw fish, oysters, or junk.</td>
    </tr>
</table>
<br>
<h4>Big Fish</h4>
<table>
    <tr>
        <td>This sneaky fish will appear to snatch your fishing equipment, sending it flying nearby, and temporarily disables the fishing spot for a while. Pick up your equipment and wait for the fishing spot to come back or move onto another spot.</td>
        <td><img src="img/special_guides/randomevents/bigfish.gif"></td>
    </tr>
</table>
<br>
<h4>Whirlpool</h4>
<table>
    <tr>
        <td><img src="img/special_guides/randomevents/whirpool.gif"></td>
        <td>A whirlpool will engluf the fishing spot disabling you from fishing in it until it goes away minutes later. If you try to fish in the whirlpool, unless you are level 76 or above, you will lose your equipment. Wait for the spot to return or move to another spot.</td>
    </tr>
</table>
<hr>
<h3>Woodcutting Random Events</h3>
<h4>Tree Spirit</h4>
<table>
    <tr>
        <td>The Tree Spirit will attack you if you have been woodcutting for some time, their levels vary according to yours; varies between 14 - 170. Just run away until it stops chasing you - unless you want to kill it. It can drop nature runes or woodcutting axes from steel to rune. It is one of the two only NPCs that can drop a rune axe, with the other being the King Black Dragon.</td>
        <td><img src="img/special_guides/randomevents/treespirit.gif"></td>
    </tr>
</table>
<br>
<h4>Ent</h4>
<table>
    <tr>
        <td><img src="img/special_guides/randomevents/elk.gif" height="125px"></td>
        <td>Sometimes you will find your tree you are cutting has turned into an Ent. If you continue chopping the Ent, your axe will break. You can fix your axe at Bob's axes in Lumbridge, for a small fee.</td>
    </tr>
</table>
<br>
<h4>Axe Splitting</h4>
<table>
    <tr>
        <td>Your axe head will fly off a few squares away when you are woodcutting. Pick up the head and re-attach it to the axe handle by 'using' them together.</td>
        <td><img src="img/special_guides/randomevents/axe_head.png"></td>
    </tr>
</table>
<hr>
<h3>Thieving Random Events</h3>
<h4>Watchman</h4>
<table>
    <tr>
        <td><img src="img/special_guides/randomevents/watchman.gif"></td>
        <td>A watchmen can appear if you've been thieving too long and attack you, its level varies according to yours, the highest seen is 170. Just run away until it stops chasing you - unless you want to kill it. It can drop coins, nature runes, water runes, herbs, and steel bars.</td>
    </tr>
</table>
<br>
<h4>Poison Cloud</h4>
<table>
    <tr>
        <td>When you are thieving chests you will be surrounded by a green gas cloud poisoning you!. Get away and drink a antipoison as soon as possible.</td>
        <td><img src="img/special_guides/randomevents/gas.gif"></td>
    </tr>
</table>
<hr>
<h3>Prayer Random Events</h3>
<h4>Zombie</h4>
<table>
    <tr>
        <td><img src="img/special_guides/randomevents/zombie.gif"></td>
        <td>When fighting or burying bones they will appear and attack you, their level varies on yours but the highest seen is 170. Just run away until it stops chasing you - unless you want to kill it. It can drop bait, chaos runes, nature talisman, and all types of bones.</td>
    </tr>
</table>
<br>
<h4>Shade</h4>
<table>
    <tr>
        <td>While burying all types of bones a shade might appear, its level depends on yours but the highest is 170. Just run away until it stops chasing you - unless you want to kill it, can drop top and bottom black robes.</td>
        <td><img src="img/special_guides/randomevents/shade.gif"></td>
    </tr>
</table>
HTML; }