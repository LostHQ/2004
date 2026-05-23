<?php
function getQuestGuide($questName, $questComplete) { return <<<HTML
<div id="narrowscroll">
    <h2>$questName</h2>
    <b>Description:</b> Council workmen have at last found the time to make repairs to the footbridge that connects Kandarin with the Barbarian town of Rellekka. Do you have what it takes to impress the barbarians who live there, and perhaps be welcomed as an honorary member of their clan? (Complete seven tasks to be granted admittance into the Fremennik clan.)
    <br><br>
    <b>Difficulty: <font color="yellow">Medium</font></b>
    <br><br>
    <b>Length: <font color="red">Long</font></b>
    <br><br>
    <h3>Items & Skills Needed:</h3>
    <ul style="list-style-type: none;">
        <li><div data-progress>40 Crafting</div><br></li>
        <li><div data-progress>25 Fletching</div><br></li>
        <li><div data-progress>40 Woodcutting</div><br></li>
        <li><div data-progress><canvas itemname="coins" show-label="inline" amount="5250"></canvas></div></li>
        <li><div data-progress><canvas itemname="tinderbox" show-label="inline"></canvas></div></li>
        <li><div data-progress><canvas itemname="knife" show-label="inline"></canvas></div></li>
        <li><div data-progress><canvas itemname="raw_shark" show-label="inline"></canvas></div></li>
        <li><div data-progress><canvas itemname="iron_axe" show-label="inline" name-replace="Any woodcutting axe"></canvas></div></li>
        <li><div data-progress><canvas itemname="beer" show-label="inline" name-append=" (purchasable during quest)"></canvas></div></li>
        <li><div data-progress><canvas itemname="cabbage" show-label="inline" name-append=" (obtainable during quest)"></canvas></div></li>
        <li><div data-progress><canvas itemname="potato" show-label="inline" name-append=" (obtainable during quest)"></canvas></div></li>
        <li><div data-progress><canvas itemname="onion" show-label="inline" name-append=" (obtainable during quest)"></canvas></div></li>
    </ul>
    <h3>Recommended:</h3>
    <ul style="list-style-type: none;">
        <li><div data-progress>Medium/High combat level (Mage or Range optional)</div></li>
    </ul>
    <b>Starting Location:</b> Talk to Brundt in the Rellekka main hall.
    <br><br>
    <b>Reward:</b> 3 Quest Points, 2813 experience in Strength, Attack, Defence, Hitpoints, Crafting, Agility, Thieving, Fletching, Woodcutting, and Fishing. Ability to speak and trade with Fremennik villagers and steal from stalls. You keep the lyre you make, which can be re-enchanted to teleport you to Rellekka (one teleport per enchantment).
</div>
<h3>Instructions:</h3>
<br>
<img src="img/questimages/fremtrials/fremtrials1.jpg">
<br><br>
<div data-progress>
    Talk to Brundt in the main building with the quest icon. Ask him how to get into the Fremennik clan. He'll tell you that you need a majority vote from the 12 members of the council (7 Votes). You can do the below 7 tasks to get the 7 votes in any order you choose.
</div>
<hr>
<h3>Manni the Reveller</h3>
<br><br>
<div data-progress>
    Talk to Manni in the bar, he'll offer his vote if you can manage to defeat him in a drinking contest.
</div>
<br><br>
<div data-progress>
    Grab a keg and a beer off the table just north of him and challenge him, you'll lose.
</div>
<br><br>
<div data-progress>
    Now head down to Seer's Village. Make sure you have 250 gp with you and talk to the Poison salesman just west of Camelot.
</div>
<br><br>
<div data-progress>
    After a long and boring speech about his new product, ask to purchase some.
</div>
<br><br>
<div data-progress>
    You now have low alcohol beer. Head to the Second bridge (beside the lvl 64 Wolf) and use your regular beer on the Council workman. He'll give you a Strange object (a cherry bomb).
</div>
<br><br>
<div data-progress>
    Head outside to the east of the Longhall (quest start building). You'll see a pipe.
</div>
<br><br>
<div data-progress>
    Use your cherry bomb with your tinderbox and then use the lit bomb on the pipe.
</div>
<br><br>
<div data-progress>
    Now run back into the building and use your low alcohol keg on a regular keg. Challenge Manni again and you'll win.
</div>
<hr>
<h3>Swensen the Navigator</h3>
<br><br>
<div data-progress>
    Now talk to Swensen in the building just a bit south west of the quest start. He'll tell you to complete his maze for a vote.
</div>
<br><br>
<div data-progress>
    Head down the ladder into the maze, you'll be in a room with four portals in each direction.
</div>
<br><br>
<div data-progress>
    Take the portals from room to room in this direction and order: South, West, East, North, South, East, North (They spell out Swensen, in case you haven't noticed.)
</div>
<br><br>
<div data-progress>
    Head up the ladder and you've finished his challenge.
</div>
<hr>
<h3>Sigli the Huntsman</h3>
<br><br>
<div data-progress>
    Now speak with Sigli, just a bit south east of the last building. He'll tell you that you'll need to defeat the Draugen for his vote.
</div>
<br><br>
<div data-progress>
    Accept his challenge and receive the Hunter's talisman.
</div>
<br><br>
<div data-progress>
    Head just south of the village towards the woods and click your talisman to begin the long, boring process of finding the Draugen.
</div>
<br><br>
<div data-progress>
    Keep following the directions til he finally appears and attacks you. A tip for those who're a bit lazy. Just stand along the riverbed until he appears. He'll be level 69, so be ready.
</div>
<br><br>
<img src="img/questimages/fremtrials/fremtrials2.jpg">
<br><br>
<div data-progress>
    After you defeat him, it will automatically collect his essence in the Hunter's talisman. Bring this back to Sigli and you've gotten one more vote.
</div>
<hr>
<h3>Olaf the Bard</h3>
<br><br>
<div data-progress>
    Now head north east from Sigli and talk to Olaf.
</div>
<br><br>
<div data-progress>
    Talk to him once more; you'll now need to create your lyre. (You can also just kill Lanzig until he drops a lyre.)
</div>
<br><br>
<div data-progress>
    Head east-southeast of the village and east to a hill with a tree icon.
</div>
<br><br>
<div data-progress>
    Cut the Swaying tree and fletch the branch.
</div>
<br><br>
<div data-progress>
    Southeast of the tree, talk to Lalli the troll. Ask him about the other human.
</div>
<br><br>
<div data-progress>
    Now you must find Askeladden back in the village, just south of the quest start. Get the pet rock from him. Stop at the garden near the gate to get an Onion, Potato and Cabbage.
</div>
<br><br>
<div data-progress>
    Talk to Lalli again, and you'll offer to make him some rock soup.
</div>
<br><br>
<div data-progress>
    Use on the cauldron, in this order, your rock, onion, potato, and cabbage (which can be obtained near the entrance to the village).
</div>
<br><br>
<div data-progress>
    After, talk to him again to get your golden fleece.
</div>
<br><br>
<div data-progress>
    Now spin your fleece and attach it to the lyre. The closest spinning wheel is in Seers' Village. You can't use the one in Rellekka yet, since you aren't accepted into the clan.
</div>
<br><br>
<div data-progress>
    Now head to the Fossegrimen, south west of the entrance to the village (just go west after you cross the second bridge on your way back from Seers'.)
</div>
<br><br>
<div data-progress>
    Place your Raw shark on the strange altar and she'll appear to enchant your lyre.
</div>
<br><br>
<img src="img/questimages/fremtrials/fremtrials3.jpg">
<br><br>
<div data-progress>
    Head back to the Longhall (quest start location), just on its' east wall is a smaller building, head inside and walk past the bouncer onto the stage.
</div>
<br><br>
<div data-progress>
    Now play your lyre and after the cheesy lyrics are over, you'll receive one more vote.
</div>
<hr>
<h3>Sigmund the Merchant</h3>
<br><br>
<div data-progress>
    Now speak with Sigmund in the market area, just west of where the quest start is. He'll ask you to find a rare flower for him.
</div>
<br><br>
<div data-progress>
    Now run a bit north west towards the larger dock and talk with the sailor, he'll want a romantic ballad.
</div>
<br><br>
<div data-progress>
    You'll need to visit Olaf, ask him to compose you a ballad and he'll say he needs sturdy boots.
</div>
<br><br>
<div data-progress>
    Speak with Yrsa in the clothing shop, then head back to the main hall.
</div>
<br><br>
<div data-progress>
    Speak with Brundt and proceed on to Sigli.
</div>
<br><br>
<div data-progress>
    Sigli will request a special bowstring.
</div>
<br><br>
<div data-progress>
    Now head to the helmet shop and talk to Skulgrimen, he'll request a rare fish for the string.
</div>
<br><br>
<div data-progress>
    Head towards the smaller dock, just west of there and speak with the Fisherman, he'll request a map from the Navigator, who's just south.
</div>
<br><br>
<div data-progress>
    After speaking with the Navigator, proceed on to the Seer for the weather forecast.
</div>
<br><br>
<div data-progress>
    The Seer will ask for a body guard.
</div>
<br><br>
<div data-progress>
    Head to the helmet shop and speak to Thorvald, he'll want a seat in the Longhall. You'll now want to talk to Manni.
</div>
<br><br>
<div data-progress>
    After Manni requests the cocktail speak with Thora.
</div>
<br><br>
<div data-progress>
    Thora will request a contract from Askeladden, he's just outside.
</div>
<br><br>
<div data-progress>
    He'll request 5000 gp; pay him.
</div>
<br><br>
<div data-progress>
    Once you have the paper, head back through the people in this order Thora, Manni, Thorvald, Seer, Navigator, Fisherman, Skulgrimen, Sigli, Brundt, Yrsa, Olaf, Sailor, and then back to Sigmund. Now you have another vote!
</div>
<hr>
<h3>Thorvald the Warrior</h3>
<br><br>
<div data-progress>
    Now remove all weapons and armor, stash them in the Seer's bank and Speak to Thorvald in the helmet shop. He'll ask you to defeat his warrior 4 times in a battle to the death without weapons or armor.
</div>
<br><br>
<div data-progress>
    Use food for the first two fights and prayer on the 3rd, if you have it. As the fourth battle begins your prayer will be drained to 0, don't bother wasting anymore food.
</div>
<br><br>
<img src="img/questimages/fremtrials/fremtrials4.jpg">
<br><br>
<div data-progress>
    Let Koschei defeat you and you'll be teleported upstairs. If you choose to fight him, bring prayer pots, food, and use several rings of recoil as he only hits 1's, but 3-4 hits per second. It is not required to defeat him in order to complete the quest. If you use Protect from Melee prayer and do not kill him fast enough (within 20 minutes), he gets bored with you and leaves. Congratulations, one more vote.
</div>
<hr>
<h3>Peer the Seer</h3>
<br><br>
<div data-progress>
    Talk to Peer who is located south of the stalls. To get this guy's vote, you need to simply make it through his house!
</div>
<br><br>
<div data-progress>
    Yet again, you'll need no armor or weapons for this part.
</div>
<br><br>
<div data-progress>
    Once you have disrobed, try to open the door. You'll find that you need to solve a riddle.
</div>
<br><br>
<div data-progress>
    After reading through the riddle, choose the option to solve it.
</div>
<br><br>
<div data-progress>
    The possible answers for this riddle are Wind, Fire, Mind, Mage, Tree, Life, or Time.
</div>
<br><br>
<div data-progress>
    Now go inside and up the ladder.
</div>
<br><br>
<div data-progress>
    You're now in a room filled with many boxes which has a range, bookcase, cupboard, frozen table, etc.
</div>
<br><br>
<div data-progress>
    Search everything in the room to gather materials for this puzzle. The only materials you'll need are: the red disk, the wooden disk (eyes of head on the wall upstairs), red herring, bucket, jug.
</div>
<br><br>
<div data-progress>
    Cook the herring on the range to get sticky red goop.
</div>
<br><br>
<div data-progress>
    Use the goop on the wooden disk to make it match the red disk.
</div>
<br><br>
<div data-progress>
    Next, go downstairs and use them on a strange mural.
</div>
<br><br>
<div data-progress>
    This should give you the lid to a vase.
</div>
<br><br>
<div data-progress>
    Now you need something not too heavy and not too light for the balance on the chest.
</div>
<br><br>
Using a bucket (gathered from the cupboard) and a jug try to get a bucket that's 4/5ths filled with water. (To get the water for the bucket, use the bucket on the tap which is above the drain).
<br><br>
1 jug = 3/5 bucket
<br>Aim: 4/5 bucket
<ul>
    <li><div data-progress>Use the bucket with tap</div></li>
    <li><div data-progress>Use bucket on jug</div></li>
    <li><div data-progress>Empty jug down drain</div></li>
    <li><div data-progress>Use bucket on jug again you now have an empty bucket and a 2/3 full jug</div></li>
    <li><div data-progress>Use the bucket with tap</div></li>
    <li><div data-progress>Use full bucket on 2/3 full jug to get 4/5 bucket of water.</div></li>
</ul>
<br><br>
<div data-progress>
    Once you have a bucket 4/5ths filled with water, use the bucket on the scale on the chect to open the chest.
</div>
<br><br>
<div data-progress>
    You'll get a vase.
</div>
<br><br>
<div data-progress>
    Use the vase on the tap to fill it with water.
</div>
<br><br>
<div data-progress>
    Close the vase by using the lid on it.
</div>
<br><br>
<div data-progress>
    Now use the closed vase on the frozen table.
</div>
<br><br>
<div data-progress>
    It will shatter and give you a frozen key.
</div>
<br><br>
<div data-progress>
    Use the key on the range to melt the ice.
</div>
<br><br>
<div data-progress>
    Now use the key downstairs to exit the house! Congratulations, you have just received another vote!
</div>
<hr>
<h3>Finishing Up</h3>
<div data-progress>
    Once you have the 7 votes, head back to Brundt and claim your reward.
</div>
<br><br>
Note: Talk to Olaf after finishing the quest and he will tell you a secret: The Enchanted Lyre teleports to Rellekka have been slightly tweaked: offerings of raw shark will now give you 2 teleports to Rellekka before your lyre needs re-enchanting, but offerings of sea turtles and manta rays will allow you 3 or 4 teleports before you need to re-enchant your lyre.
$questComplete
This quest guide was written by Zancross, Pequ, Broodgamerdx, Monkeymatt, Shakeshaft, trekkie, darkgade, and Nalian. Thanks to DRAVAN, Monkeymatt, Slow Cheetah, flatlander20, TheRulnig, drunk_faerie, odedex, Ponteaus, Broken Darkness05, fireball0236, run the walk, slamball, Albel111, xiaoweiqiang, and RPMemperor for corrections.
<br><br>
This quest guide was entered into the RuneHQ.com database on Wed, Nov 03, 2004, at 04:04:18 PM by MrStormy and Monkeymatt and was last updated on Tue, Nov 15, 2005, at 09:22:34 PM by DRAVAN.
HTML; }