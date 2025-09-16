<?php
function getSkillContent($skill) { return <<<HTML
<h2>$skill Skill Guide</h2>
<p>
    The thieving skill is used for a number of different activities. The main uses of the thieving skill are pickpocketing, lock picking, trap disarming, and stealing from market stalls.
    <h3>Pickpocketing</h3>
    <table>
        <tr>
            <td>It is possible to steal from various npcs in the game, it is not possible to steal from other players. To start off with you can only steal from men, later on you can steal from farmers, warriors, guards and more. To pickpocket an npc right click on it and select the pickpocket option. There is a chance that the npc you are stealing from will notice and will attack you. As your thieving skill increases, you will get noticed less often.</td>
            <!-- Enable if pickpocking.gif is ever found
            <td><img src="img/skillguides/thieving/pickpocket.gif"></td>
            -->
        </tr>
    </table>
    <table>
        <tr>
            <td><h3>Levels required to pick the pockets of various npcs</h3>
                <table class="table" width="175">
                    <tr>
                        <th>Character</th>
                        <th>Level required</th>
                    </tr>
                    <tr>
                        <td>Man</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Farmer</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>Warrior</td>
                        <td>25</td>
                    </tr>
                    <tr>
                        <td>Guard</td>
                        <td>40</td>
                    </tr>
                    <tr>
                        <td>Knight</td>
                        <td>55</td>
                    </tr>
                    <tr>
                        <td>Paladin</td>
                        <td>70</td>
                    </tr>
                    <tr>
                        <td>Hero</td>
                        <td>80</td>
                    </tr>
                </table>
            </td>
            <td valign="top">
                <h3>Lockpicking</h3>
                <!-- an image named picklock.gif goes here. Don't forget to colspan="2" all previous parts to add a division here -->
                Certain doors in the game can only be opened by picking their locks. To pick the lock on a door right click on it and select the picklock option.
                <br><br>
                A low level thief will only be able to pick the locks on 1 or 2 doors, as your thieving level increases you will be a able to get into a greater variety of new areas.
                <br><br>
                Players can get lockpicks as a random reward from pickpocketing Rogues.
            </td>
        </tr>
    </table>
    <h3>Trap disarming</h3>
    Certain objects in the game such as chests have traps on them. If you don't disarm a trap on an item, you could receive damage or other penalties when trying to use it. If there is a trap to disarm you will find an option to disarm the trap when you right click on the item. If you are a high enough thieving level you will then be able to disarm the trap. Remember traps will become re-enabled again later.
    <h3>Stealing from market stalls</h3>
    <table>
        <tr>
            <td>You can use your thieving skill to take goods from the various market stalls in Ardougne. To steal from a market stall right click on it and select the "steal from" option. If you are a high enough level your character will attempt to steal something from it. Certain characters will try to stop you stealing from market stalls, so wait until these npcs do not have a line of sight to you or are otherwise distracted/dead.</td>
            <!-- Enable if stealmarket.gif is ever found
            <td><img src="img/skillguides/thieving/stealmarket.gif"></td>
            -->
        </tr>
    </table>
    <h3>Thieving levels needed to be able to<br>steal from the various market stalls.</h3>
    <table class="table" width="210">
        <tr>
            <th>Stall</th>
            <th>Level required</th>
        </tr>
        <tr>
            <td>Cake stall</td>
            <td>5</td>
        </tr>
        <tr>
            <td>Tea stall</td>
            <td>5</td>
        </tr>
        <tr>
            <td>Silk stall</td>
            <td>20</td>
        </tr>
        <tr>
            <td>Fur stall</td>
            <td>35</td>
        </tr>
        <tr>
            <td>Silver stall</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Spices stall</td>
            <td>65</td>
        </tr>
        <tr>
            <td>Gems stall</td>
            <td>75</td>
        </tr>
    </table>
    <br><br>
    <h3>Thieving levels needed to be able to<br>steal from the various chests.</h3>
    <table class="table" width="100%">
        <tr>
            <th>Chest</th>
            <th>Level required</th>
            <th>Location(s)</th>
        </tr>
        <tr>
            <td>10 Coin chest</td>
            <td>1</td>
            <td>East Ardougne<br>Magic Axe Hut<br>Pirates' Hideout</td>
        </tr>
        <tr>
            <td>Nature rune chest</td>
            <td>28</td>
            <td>East Ardougne<br>Pirates' Hideout</td>
        </tr>
        <tr>
            <td>50 Coin chest</td>
            <td>43</td>
            <td>Ardougne<br>Pirates' Hideout</td>
        </tr>
        <tr>
            <td>Steel arrowtips chest</td>
            <td>47</td>
            <td>Hemenster</td>
        </tr>
        <tr>
            <td>Blood rune chest</td>
            <td>59</td>
            <td>Chaos Druid Tower</td>
        </tr>
        <tr>
            <td>Ardougne castle chest</td>
            <td>72</td>
            <td>Ardougne Castle</td>
        </tr>
    </table>
</p>
HTML; }