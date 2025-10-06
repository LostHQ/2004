<?php
function getSkillContent($skill) { return <<<HTML
<h2>$skill Skill Guide</h2>
<p>
    Runecraft is used to make different sorts of Runes, for use in <a href="?p=skillguides&skill=magic">Magic</a>.
    Before you can use runecraft you will need to complete the <a href="?p=questguides&quest=runemysteries">Rune Mysteries</a> quest.
    <h3>Mining rune essences</h3>
    The location of the source of Rune essence is a closely guarded secret, so you will need to find various NPCs around the game world to take you to it.
    <br><br>
    <table>
        <tr>
            <td><canvas data-itemname="blankrune"></canvas></td>
            <td>Once there, you can click on the large essence stones to mine them with a pickaxe (see <a href="?p=skillguides&skill=mining">Mining</a>). You then need to take the essences you have mined to an elemental temple to turn these essences into magical runes.</td>
        </tr>
    </table>
    <br>
    These temples are hidden throughout RuneScape, but you can locate them with the help of a runecraft talisman. Some examples of talismans are shown in the table below.
    <br><br>
    These first talismans can be found as fairly common drops from various NPCs, but the whereabouts of the higher levelled talismans will need to be discovered by those wishing to use them...
    <h3>Locating rune temples</h3>
    <table>
        <tr>
            <td>To locate each temple, take the talisman and select the locate option. The talisman will pull in the direction where the rune temple is located.<br>Because runecraft is an ancient skill that has been forgotten until recently, the elemental temples have become ruined. When you find the ruins of the temple you are looking for, use your talisman on these ruins.</td>
            <td><img src="img/skillguides/runecraft/locate.gif"></td>
        </tr>
    </table>
    <br>
    <table>
        <tr>
            <td><img src="img/skillguides/runecraft/craftingrune.gif"></td>
            <td>
                This will magically teleport you to a restored version of the temple, where you will be able to convert your rune essences into rune stones.
                <br><br>
                When you have finished crafting your runes, click on the glowing portal to return to the ruins where you entered the temple.
            </td>
        </tr>
    </table>
    <br>
    The following table shows what levels are required to runecraft various runes.<!-- (not implmented yet) A similar table to the one below can be opened in the game by clicking the runecraft skill icon in the stats menu. -->
    <br><br>
    <table width="100%" cellpadding="1" cellspacing="0" class="table">
        <tr>
            <th>Level</th>
            <th>Rune</th>
            <th>Talisman</th>
            <th>Altar Location</th>
        </tr>
        <tr>
            <td>1</td>
            <td><canvas data-itemname="airrune" data-show-label="true"></canvas></td>
            <td><canvas data-itemname="air_talisman" data-show-label="true"></canvas></td>
            <td>South of Falador</td>
        </tr>
        <tr>
            <td>2</td>
            <td><canvas data-itemname="mindrune" data-show-label="true"></canvas></td>
            <td><canvas data-itemname="mind_talisman" data-show-label="true"></canvas></td>
            <td>Between Ice Moutain and Goblin Village</td>
        </tr>
        <tr>
            <td>5</td>
            <td><canvas data-itemname="waterrune" data-show-label="true"></canvas></td>
            <td><canvas data-itemname="water_talisman" data-show-label="true"></canvas></td>
            <td>In Lumbridge Swamp</td>
        </tr>
        <tr>
            <td>9</td>
            <td><canvas data-itemname="earthrune" data-show-label="true"></canvas></td>
            <td><canvas data-itemname="earth_talisman" data-show-label="true"></canvas></td>
            <td>North-east of Varrock</td>
        </tr>
        <tr>
            <td>14</td>
            <td><canvas data-itemname="firerune" data-show-label="true"></canvas></td>
            <td><canvas data-itemname="fire_talisman" data-show-label="true"></canvas></td>
            <td>North-east of Al Kharik, outside the Duel Arena entrance</td>
        </tr>
        <tr>
            <td>20</td>
            <td><canvas data-itemname="bodyrune" data-show-label="true"></canvas></td>
            <td><canvas data-itemname="body_talisman" data-show-label="true"></canvas></td>
            <td>Between Ice Moutain and Barbarian Village</td>
        </tr>
        <tr>
            <td>27</td>
            <td><canvas data-itemname="cosmicrune" data-show-label="true"></canvas></td>
            <td><canvas data-itemname="cosmic_talisman" data-show-label="true"></canvas></td>
            <td>Southern part of Zanaris. Requires completing <a href="?p=questguides&quest=lostcity">Lost City</a></td>
        </tr>
        <tr>
            <td>35</td>
            <td><canvas data-itemname="chaosrune" data-show-label="true"></canvas></td>
            <td><canvas data-itemname="chaos_talisman" data-show-label="true"></canvas></td>
            <td>Level 9 wilderness, south-east of the Dark Warrior's Fortress</td>
        </tr>
        <tr>
            <td>44</td>
            <td><canvas data-itemname="naturerune" data-show-label="true"></canvas></td>
            <td><canvas data-itemname="nature_talisman" data-show-label="true"></canvas></td>
            <td>On Karamja, North of Shilo Village</td>
        </tr>
    </table>
    <br>
    As you advance through the levels of runecraft, you will become more adept at turning the raw materials of rune essence into runes. What this means is that as your increases you will be able to make more than one rune from each essence you bind.
    <br><br>
    At higher levels you can make up to 10 runes from a single essence, depending on the rune you are crafting.
    <br><br>
    <table width="100%" cellpadding="1" cellspacing="0" class="table">
        <thead>
            <tr>
                <th rowspan=2>Rune</th>
                <th colspan=10>Level required for:</th>
            </tr>
            <tr>
                <th>1x</th>
                <th>2x</th>
                <th>3x</th>
                <th>4x</th>
                <th>5x</th>
                <th>6x</th>
                <th>7x</th>
                <th>8x</th>
                <th>9x</th>
                <th>10x</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><canvas data-itemname="airrune" data-show-label="inline"></canvas></td>
                <td>1</td><td>11</td><td>22</td><td>33</td><td>44</td><td>55</td><td>66</td><td>77</td><td>88</td><td>99</td>
            </tr>
            <tr>
                <td><canvas data-itemname="mindrune" data-show-label="inline"></canvas></td>
                <td>2</td><td>14</td><td>28</td><td>42</td><td>56</td><td>70</td><td>84</td><td>98</td><td></td><td></td>
            </tr>
            <tr>
                <td><canvas data-itemname="waterrune" data-show-label="inline"></canvas></td>
                <td>5</td><td>19</td><td>38</td><td>57</td><td>76</td><td>95</td><td></td><td></td><td></td><td></td>
            </tr>
            <tr>
                <td><canvas data-itemname="earthrune" data-show-label="inline"></canvas></td>
                <td>9</td><td>26</td><td>52</td><td>78</td><td></td><td></td><td></td><td></td><td></td><td></td>
            </tr>
            <tr>
                <td><canvas data-itemname="firerune" data-show-label="inline"></canvas></td>
                <td>14</td><td>35</td><td>70</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            </tr>
            <tr>
                <td><canvas data-itemname="bodyrune" data-show-label="inline"></canvas></td>
                <td>20</td><td>46</td><td>92</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            </tr>
            <tr>
                <td><canvas data-itemname="cosmicrune" data-show-label="inline"></canvas></td>
                <td>27</td><td>59</td><td>92</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            </tr>
            <tr>
                <td><canvas data-itemname="chaosrune" data-show-label="inline"></canvas></td>
                <td>35</td><td>74</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            </tr>
            <tr>
                <td><canvas data-itemname="naturerune" data-show-label="inline"></canvas></td>
                <td>44</td><td>91</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            </tr>
        </tbody>
    </table>
</p>
HTML; }