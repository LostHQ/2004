<?php
function getQuestGuide($questName, $questComplete) { return <<<HTML
<a href="#zombiemusiq">ZombieMusiq Video Guide at bottom of page!</a>
<div id="narrowscroll">
    <h2>$questName</h2>
    <b>Description:</b> Second part of an ongoing adventure. Help Elena discover the truth about the infamous ardounge plague. Smuggle test samples across ardounge to Elena's old mentor.
    <br><br>
    <b>Difficulty: <font color="Green">Novice</font></b>
    <br><br>
    <b>Length: <font color="Red">Long</font></b>
    <br><br>
    <h3>Required Quests:</h3>
    <ul style="list-style-type: none;">
    <li><div data-progress>Plague City</div><br></li>
    </ul>
    <h3>Items & Skills Needed:</h3>
    <ul style="list-style-type: none;">
    <li><div data-progress><canvas itemname="coins_5" icon-size="25" show-label="inline" name-replace="12 coins"></canvas></div></li>
    <li><div data-progress><canvas itemname="priest_gown" icon-size="25" show-label="inline"></canvas></div></li>
    <li><div data-progress><canvas itemname="priest_robe" icon-size="25" show-label="inline"></canvas></div></li>
    </ul>
    <b>Starting Location:</b> Talk with Elena in Ardougne. She lives just across the street (east) of where her parents live
    <br><br>
    <b>Reward:</b> 3 Quest points, 1,250 Thieving XP, the ability to use King Lathas' training field
</div>
<h3>Instructions:</h3>
<br>
<div data-progress>Talk to Elena; she will say that her distillator has been stolen by the Mourner, and the tunnel is blocked. Accept the quest, and she will tell you to find a man called Jerico.</div>
<br><br>
<div data-progress>Jerico is located in the house south of the bank in East Ardougne. After you have found him, talk to him, and he will ask you to find Omart. Before you leave, pick up one Pigeon Cage and search his cupboards to find some bird feed.</div>
<br><br>
<div data-progress>Omart is located in the southwest of West Ardougne, west of the Carnilleans' house. After you have found him, talk to him, and he will say everything is ready, but you and Omart can't risk it with the watchtower so close. He will say that you should go back and talk to Jerico again. You can, but if you don't want to waste time, <font color="red">DON'T</font>.</div>
<br><br>
<div data-progress>Remember that you took a Pigeon Cage and some bird feed? Go to the watchtower, which is located north of Omart, and use the bird feed on the watchtower. Then open the pigeon cage. The mourners will focus on the pigeons now, not you. Talk to Omart and go to West Ardougne by using a rope.</div>
<br><br>
<div data-progress>Go to the northeast building in West Ardougne. Take a rotten apple, which is just a little northwest of the house. Climb over the fence and use the rotten apple on the cauldron. Try to open the door, and a mourner will say that some mourners are ill and they need a doctor.</div>
<br><br>
<div data-progress>Now it's your time to be a doctor. Head southwest and find a house that Nurse Sarah is inside. Go in and search the cupboard. You will find a doctor's gown. Put it on and go back to the house.</div>
<br><br>
<div data-progress>Open the door in front of the mourner's house. The mourners will let you in. Open the door in the house and climb up the staircase. Open the door and tell the mourner whatever you like. He will attack you. Kill him and do the same to the other mourner. After you have killed both mourners, you should get a key. Use it on the gate to open it. Search all the crates until you find the distillator. Get out of the house.</div>
<br><br>
<div data-progress>Go to the southeast part of the city. Talk to Kilron and tell him that you want to go back.</div>
<br><br>
<div data-progress>When you reach West Ardougne, go to Elena's house and talk to her. She will give you some filled vials. She will also ask you to get some touch paper from the chemist, use the chemist's children to smuggle the vials to Varrock, collect some samples, and take them to Guidor in Varrock. <font color="red">DON'T TELEPORT OR THE VIALS WILL BREAK</font>, although you can put the vials in your bank, then teleport.</div>
<br><br>
<div data-progress>The chemist is located just west of Rimmington. After you reach there, talk to the chemist; just say you are Elena's friend. <font color="red">DO NOT SAY ANYTHING ABOUT PLAGUE</font>. Say that you need the touch paper for Guidor. He will give you the paper.</div>
<br><br>
<div data-progress>Now it's time to give the vials to the three children. Give Hops the Sulphuric Broline, Chancy the honey, and DeVinci the Ethena. They will say that they will meet you in the Dancing Donkey Inn.</div>
<br><br>
<div data-progress>The Dancing Donkey Inn is located in the southeast of Varrock. Before you reach there, a guard should search you. That's why you need the children to smuggle the vials. Talk to the children in the Dancing Donkey Inn to get back the vials.</div>
<br><br>
<div data-progress>Guidor's house is just southeast of the inn. Talk to his wife; she will say that she needs a priest. If you have the priest robes and gown here, put them on and talk to his wife again. She will allow you to go in.</div>
<br><br>
<div data-progress>Now it is time to realize the truth. Talk to Guidor and tell him you're here because of Elena. Give all the vials to him, and he will tell you that there is no plague.</div>
<br><br>
<div data-progress>Go back to Elena's house and tell her there is no plague. She will tell you to see the King of Ardougne.</div>
<br><br>
<div data-progress>The king is on the <span data-floors="US">2nd floor</span> of the palace in Ardougne. The palace is located in the southwest of Ardougne. Talk to King Lathas, and he will tell you about his brother, King Tyras, and reward you.</div>
$questComplete
<span id="zombiemusiq"></span>
<iframe width="450" height="253" src="https://www.youtube.com/embed/pyQ_gkfuGMk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
<hr>
This quest guide was written on RuneHQ by henry-x. Thanks to Weezy, Shaw, stormer, bowman_1990, Eric2203, bmx 768, and Halfling_hopperston for corrections.
<br><br>
This quest guide was entered into the database on Mon, Feb 09, 2004, at 05:46:58 PM by Sand Scape and was last updated on Sun, May 23, 2004, at 07:27:03 PM.
HTML; }