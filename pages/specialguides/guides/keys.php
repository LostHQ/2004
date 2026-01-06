<?php
function getSpecialGuide($currSpecialGuide) { return <<<HTML
<h2>$currSpecialGuide</h2>
This guide will tell you all you need to know about the different keys in Runescape. It will tell you where to find them, what quest they are from, and whether or not you should keep them after you have completed the quest.
<br><br>
If you are having troubles identifying a key, hover the cursor over the icon to preview its examine text and compare it to the examine text of a key in game. Dashes under "Keep?" means it's up to you whether you want to keep the key or not.
<br><br>
<table class="table">
    <tr>
        <th width="20%">Key Name</th>
        <th>How it's Used</th>
        <th>Where to Obtain</th>
        <th>Keep?</th>
    </tr>
    <tr>
        <td><canvas itemname="baxtorian_key_waterfall_quest" show-label="true"></canvas></td>
        <td>Opens a cage to get Glarial's Pebble. (Waterfall Quest)</td>
        <td>Search a crate in the dungeon under Tree Gnome Village.</td>
        <td>❌</td>
    </tr>
    <tr>
        <td><canvas itemname="elenakey" show-label="true"></canvas></td>
        <td>Freeing Elena from a basement in West Ardougne.</td>
        <td>Searching in a crate upstairs of a boarded up building in West Ardogune.</td>
        <td>❌</td>
    </tr>
    <tr>
        <td><canvas itemname="elemental_workshop_key" show-label="true"></canvas></td>
        <td>Opens the false wall in Seers Village. Allows access to the Elemental Workshop.</td>
        <td>Using a knife on a battered book.</td>
        <td>➖</td>
    </tr>
    <tr>
        <td><canvas itemname="thbedobinkey" show-label="true"></canvas></td>
        <td>Used in the Tourist Trap Quest to steal blueprints from Captain Siad.</td>
        <td>Obtained from Al Shabim.</td>
        <td>❌</td>
    </tr>
    <tr>
        <td><canvas itemname="zqbonekey" show-label="true"></canvas></td>
        <td>To obtain a Golden Bowl in the Legends Quest, or to open Rashiliyia's dungeon in the Shilo Village Quest.</td>
        <td>Use a chisel with a bone shard.</td>
        <td>➖</td>
    </tr>
    <!-- Bone key for Ghosts Ahoy [be sure to check debug name]
    <tr>
        <td><canvas itemname="bonekey" show-label="true"></canvas></td>
        <td>Opens the gate upstairs in the Ectofuntus.</td>
        <td>Dropped by Necrovarus when you show him the petition.</td>
        <td>❌</td>
    </tr>
    -->
    <tr>
        <td><canvas itemname="edgevilledungeonkey" show-label="true"></canvas></td>
        <td>Open the door of a hut west of the Cooking Guild. The hut is the second entrance to Edgville Dungeon.</td>
        <td>Respawns near the giants in Edgeville dungeon.</td>
        <td>✔️</td>
    </tr>
    <!-- Cavern key for Creature of Fenkenstrain [be sure to check debug name]
    <tr>
        <td><canvas itemname="cavernkey" show-label="true"></canvas></td>
        <td>Opens a gate in Creature of Fenkenstrain Quest.</td>
        <td>Kill the Level 51 Experiment with a girls head.</td>
        <td>❌</td>
    </tr>
    -->
    <tr>
        <td><canvas itemname="thcelldoorkey" show-label="true"></canvas></td>
        <td>Opens a cell door in the Tourist Trap Quest.</td>
        <td>Steal it from the room upstairs of the cell.</td>
        <td>❌</td>
    </tr>
    <tr>
        <td><canvas itemname="chest_key" show-label="true"></canvas></td>
        <td>Opens Red Beard Frank's chest.</td>
        <td>Pirate's Treasure Quest.</td>
        <td>❌</td>
    </tr>
    <tr>
        <td><canvas itemname="digchestkey" show-label="true"></canvas></td>
        <td>Opens the chest in the Dig Site. Loot is unidentified powder.</td>
        <td>A worker in a winch shaft.</td>
        <td>❌</td>
    </tr>
    <!-- Chest key for Ghosts Ahoy [be sure to check debug name]
    <tr>
        <td><canvas itemname="ghostchestkey" show-label="true"></canvas></td>
        <td>Opens chests in the pirate ship.</td>
        <td>Get it from old man on the pirate ship after giving him a toy ship.</td>
        <td>❌</td>
    </tr>
    -->
    <!-- Closet key for Ernest the Chicken [be sure to check debug name]
    <tr>
        <td><canvas itemname="closetkey" show-label="true"></canvas></td>
        <td>Opens the door that contains the Rubber Tube used in the Ernest the Chicken Quest.</td>
        <td>Dig on the compost pile in Draynor Manor.</td>
        <td>❌</td>
    </tr>
    -->
    <tr>
        <td><canvas itemname="crystal_key" show-label="true"></canvas></td>
        <td>Opens a chest in Taverly. Loot is uncut dragon stone and another random item(s).</td>
        <td>Connect the two halves of a key together.</td>
        <td>✔️</td>
    </tr>
    <!-- Crystal-mine key for Haunted Mine [be sure to check debug name]
    <tr>
        <td><canvas itemname="crystalminekey" show-label="true"></canvas></td>
        <td>Used in the Haunted Mine Quest.</td>
        <td>Kill Treus Dayth in the Haunted Mine.</td>
        <td>✔️</td>
    </tr>
    -->
    <!-- Display cabinet key for The Golem [be sure to check debug name]
    <tr>
        <td><canvas itemname="displaykey" show-label="true"></canvas></td>
        <td>Opens the cabinet in the museum.</td>
        <td>The Golem Quest.</td>
        <td>❌</td>
    </tr>
    -->
    <tr>
        <td><canvas itemname="witches_doorkey" show-label="true"></canvas></td>
        <td>Opens the door in the Witch's House Quest.</td>
        <td>Found under a flower pot in Taverly, out side the witches house.</td>
        <td>❌</td>
    </tr>
    <tr>
        <td><canvas itemname="dusty_key" show-label="true"></canvas></td>
        <td>Opens the gate in Taverly Dungeon.</td>
        <td>Buy in the Legends guild or from a man in the jail in Taverly Dungeon.</td>
        <td>✔️</td>
    </tr>
    <!-- Frozen key for The Fremennik Trials [be sure to check debug name]
    <tr>
        <td><canvas itemname="frozen_key" show-label="true"></canvas></td>
        <td>Use with a range to defrost.</td>
        <td>In Rellekka, in the Seer's house.</td>
        <td>❌</td>
    </tr>
    -->
    <tr>
        <td><canvas itemname="grandtree_gloughskey" show-label="true"></canvas></td>
        <td>Opens Glough's chest in his tree house.</td>
        <td>From Anita in the Tree Gnome Stronghold during The Grand Tree Quest.</td>
        <td>❌</td>
    </tr>
    <!-- Golden key for Priest in Peril [be sure to check debug name]
    <tr>
        <td><canvas itemname="golden_key" show-label="true"></canvas></td>
        <td>To exchange for a key that will open a cell door.</td>
        <td>Kill a Monk of Zamorak during the Priest in Peril Quest.</td>
        <td>❌</td>
    </tr>
    -->
    <tr>
        <td><canvas itemname="keyhalf1" show-label="true"></canvas></td>
        <td>Use with Half a key (Teeth) to get a crystal key.</td>
        <td>Rare monster drop and obtained from a strange old man random event.</td>
        <td>✔️</td>
    </tr>
    <tr>
        <td><canvas itemname="keyhalf2" show-label="true"></canvas></td>
        <td>Use with Half a key (Loop) to get a crystal key.</td>
        <td>Rare monster drop and obtained from a strange old man random event.</td>
        <td>✔️</td>
    </tr>
    <!-- Iron key for Priest in Peril [be sure to check debug name]
    <tr>
        <td><canvas itemname="iron_key" show-label="true"></canvas></td>
        <td>To free the priest from the Priest in Peril Quest.</td>
        <td>Swapping with a golden key.</td>
        <td>❌</td>
    </tr>
    -->
    <tr>
        <td><canvas itemname="jail_key" show-label="true"></canvas></td>
        <td>Opens a jail in Taverly dungeon to a man that has the dusty key.</td>
        <td>Kill the Jailer in Taverly Dungeon.</td>
        <td>❌</td>
    </tr>
    <tr>
        <td><canvas itemname="keep_key" show-label="true"></canvas></td>
        <td>Opens the gate in the dungeon below the Observatory.</td>
        <td>In a chest in the dungeon below the Observatory.</td>
        <td>❌</td>
    </tr>
    <tr>
        <td><canvas itemname="mournerkeytw" show-label="true"></canvas></td>
        <td>Opens a cage with a distiller inside. (Biohazard Quest)</td>
        <td>Kill a mourner.</td>
        <td>❌</td>
    </tr>
    <tr>
        <td><canvas itemname="carnilleanchestkey" show-label="true"></canvas></td>
        <td>To enter the false wall in the attic in the Carnillean Mansion.</td>
        <td>In the basement of the Carnillean mansion.</td>
        <td>❌</td>
    </tr>
    <tr>
        <td><canvas itemname="phoenixkey2" show-label="true"></canvas></td>
        <td>To get into the Phoenix Gang's weapon store.</td>
        <td>From Straven at the Phoenix Gang HQ.</td>
        <td>➖</td>
    </tr>
    <!-- Keys for The Feud [be sure to check debug name]
    <tr>
        <td><canvas itemname="keys" show-label="true"></canvas></td>
        <td>To break into the Mayor's House.</td>
        <td>Given by Ali the Operator in the Feud Quest.</td>
        <td>❌</td>
    </tr>
    -->
    <tr>
        <td><canvas itemname="witches_shedkey" show-label="true"></canvas></td>
        <td>To open the door to the witches shed.</td>
        <td>From the fountain in the witches garden.</td>
        <td>❌</td>
    </tr>
    <tr>
        <td><canvas itemname="silverlight_key_1" show-label="true"></canvas></td>
        <td>There are three, used to get the Silverlight Sword.</td>
        <td>Demon Slayer quest. See the Quest Guide for details.</td>
        <td>❌</td>
    </tr>
    <tr>
        <td><canvas itemname="redkey" show-label="true"></canvas></td>
        <td>Melzars Maze. There are a number of different colored ones.</td>
        <td>Kill the enemies in Melzars Maze.</td>
        <td>❌</td>
    </tr>
    <tr>
        <td><canvas itemname="khazard_cellkeys" show-label="true"></canvas></td>
        <td>Open the cells in the Khazard Arena.</td>
        <td>From a Khazard Guard during the Fight Arena Quest.</td>
        <td>❌</td>
    </tr>
    <!-- Lighthouse key for Horror in the Deep [be sure to check debug name]
    <tr>
        <td><canvas itemname="lighthouse_key" show-label="true"></canvas></td>
        <td>Opens the Lighthouse.</td>
        <td>From a Barbarian in the Barbarian Outpost.</td>
        <td>❌</td>
    </tr>
    -->
    <tr>
        <td><canvas itemname="melzarkey" show-label="true"></canvas></td>
        <td>To gain access to Melzar's Maze.</td>
        <td>Given by the Guildmaster in the Champions' Guild during Dragon Slayer.</td>
        <td>➖</td>
    </tr>
    <tr>
        <td><canvas itemname="muddy_key" show-label="true"></canvas></td>
        <td>Opens a chest in the lava maze, Wilderness. Loot is: Mithril bar, Mithril dagger, Anchovy pizza, Uncut ruby, 2 Law runes, 10 Chaos runes, 2 Death runes and 50gp.</td>
        <td>Random drop from Chaos Dwarves.</td>
        <td>✔️</td>
    </tr>
    <!-- Seers' key for The Fremennik Trials [be sure to check debug name]
    <tr>
        <td><canvas itemname="seers_key" show-label="true"></canvas></td>
        <td>To leave the Seers' house in Rellekka.</td>
        <td>Defrost the frozen key.</td>
        <td>❌</td>
    </tr>
    -->
    <!-- Shed key for Creature of Fenkenstrain [be sure to check debug name]
    <tr>
        <td><canvas itemname="shed_key" show-label="true"></canvas></td>
        <td>Opens the shed in Fenkenstrain's Castle.</td>
        <td>Fenkenstrain's Gardener.</td>
        <td>❌</td>
    </tr>
    -->
    <tr>
        <td><canvas itemname="ikov_shinykey" show-label="true"></canvas></td>
        <td>Allows access to the Ikov dungeon shortcut in McGrubor's Wood.</td>
        <td>Found at the end of the Temple of Ikov dungeon during the quest.</td>
        <td>✔️</td>
    </tr>
    <tr>
        <td><canvas itemname="sinister_key" show-label="true"></canvas></td>
        <td>Opens a chest containing 9 herbs.</td>
        <td>Kill Salarin the Twisted in the Yanille Agility Dungeon.</td>
        <td>✔️</td>
    </tr>
    <!-- Shade keys for Shades of Mort'ton [be sure to check debug name]
    <tr>
        <td><canvas itemname="shade_keys" show-label="true"></canvas></td>
        <td>Opens chests which have a random prize inside. They come in different Metal and Color conbinations. The higher the type of metal the better the prize.</td>
        <td>Get the remains of special Shades found in Mort'ton. With the remains, you burn them using special Pyre Logs and in return you get money or a shade key.</td>
        <td>❌</td>
    </tr>
    -->
    <!-- Storeroom key for Eadgar's Ruse [be sure to check debug name]
    <tr>
        <td><canvas itemname="storeroom_key" show-label="true"></canvas></td>
        <td>To enter the troll Storeroom to obtain the goutweed.</td>
        <td>Get it from a drawer in the troll kitchen.</td>
        <td>❌</td>
    </tr>
    -->
    <tr>
        <td><canvas itemname="thgoodminekey" show-label="true"></canvas></td>
        <td>Grants access to the mine located at the Desert Mining camp.</td>
        <td>Quest reward from Tourist Trap.</td>
        <td>✔️</td>
    </tr>
    <!-- Zealot's key for Haunted Mine [be sure to check debug name]
    <tr>
        <td><canvas itemname="zealots_key" show-label="true"></canvas></td>
        <td>From the Haunted Mine Quest, used to start the water valve.</td>
        <td>Pickpocket the Zealot.</td>
        <td>❌</td>
    </tr>
    -->
</table>
<hr>
This special report was written by Hampster_Hat. Thanks to Im4eversmart, Obi-Wan, TheFrugle, Fireball0236, Beepem, and Overloser for corrections.
<br><br>
This special report was entered into the database on Thu, Aug 04, 2005, at 03:24:43 PM by Im4eversmart and was last updated on Sun, Aug 07, 2005, at 07:03:12 AM by Fireball0236.
HTML; }