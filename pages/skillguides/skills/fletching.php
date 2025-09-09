<?php
function getSkillContent($skill) { return <<<HTML
<h2>$skill Skill Guide</h2>
<p>
    <b>Making Bows</b>
    <br><br>
    <table>
        <tr>
            <td>To make bows you first need to acquire some wood. Depending on the type of tree you chop down you can get different sorts of logs. Next use a knife with the logs to cut them into either a shortbow or a longbow. To make a bow string you need to find a flax plant and use it with a spinning wheel. Finally add the string to the bow to complete it.</td>
            <td><img src="img/skillguides/woodcutting/woodcutting.gif"></td>
        </tr>
    </table>
    <br>
    Rarer types of wood are harder to acquire, but make better bows which shoot more accurately. The table below lists the different types of bow you can make.
    <h3>Different types of bow</h3>
    <table width="100%" cellpadding="1" cellspacing="0" class="table">
        <tr>
            <th colspan="4">Bow type</th>
            <th>Fletching Level</th>
            <th>Ranged Level</th>
        </tr>
        <tr>
            <td>Bow</td>
            <td><canvas data-itemname="logs"></canvas></td>
            <td><canvas data-itemname="unstrung_shortbow"></canvas></td>
            <td><canvas data-itemname="shortbow"></canvas></td>
            <td>5</td>
            <td rowspan="2">1</td>
        </tr>
        <tr>
            <td>Long bow</td>
            <td><canvas data-itemname="logs"></canvas></td>
            <td><canvas data-itemname="unstrung_longbow"></canvas></td>
            <td><canvas data-itemname="longbow"></canvas></td>
            <td>10</td>
        </tr>
        <tr>
            <td>Oak shortbow</td>
            <td><canvas data-itemname="oak_logs"></canvas></td>
            <td><canvas data-itemname="unstrung_oak_shortbow"></canvas></td>
            <td><canvas data-itemname="oak_shortbow"></canvas></td>
            <td>20</td>
            <td rowspan="2">5</td>
        </tr>
        <tr>
            <td>Oak longbow</td>
            <td><canvas data-itemname="oak_logs"></canvas></td>
            <td><canvas data-itemname="unstrung_oak_longbow"></canvas></td>
            <td><canvas data-itemname="oak_longbow"></canvas></td>
            <td>25</td>
        </tr>
        <tr>
            <td>Willow shortbow</td>
            <td><canvas data-itemname="willow_logs"></canvas></td>
            <td><canvas data-itemname="unstrung_willow_shortbow"></canvas></td>
            <td><canvas data-itemname="willow_shortbow"></canvas></td>
            <td>35</td>
            <td rowspan="2">20</td>
        </tr>
        <tr>
            <td>Willow longbow</td>
            <td><canvas data-itemname="willow_logs"></canvas></td>
            <td><canvas data-itemname="unstrung_willow_longbow"></canvas></td>
            <td><canvas data-itemname="willow_longbow"></canvas></td>
            <td>40</td>
        </tr>
        <tr>
            <td>Maple shortbow</td>
            <td><canvas data-itemname="maple_logs"></canvas></td>
            <td><canvas data-itemname="unstrung_maple_shortbow"></canvas></td>
            <td><canvas data-itemname="maple_shortbow"></canvas></td>
            <td>50</td>
            <td rowspan="2">30</td>
        </tr>
        <tr>
            <td>Maple longbow</td>
            <td><canvas data-itemname="maple_logs"></canvas></td>
            <td><canvas data-itemname="unstrung_maple_longbow"></canvas></td>
            <td><canvas data-itemname="maple_longbow"></canvas></td>
            <td>55</td>
        </tr>
        <tr>
            <td>Yew shortbow</td>
            <td><canvas data-itemname="yew_logs"></canvas></td>
            <td><canvas data-itemname="unstrung_yew_shortbow"></canvas></td>
            <td><canvas data-itemname="yew_shortbow"></canvas></td>
            <td>65</td>
            <td rowspan="2">40</td>
        </tr>
        <tr>
            <td>Yew longbow</td>
            <td><canvas data-itemname="yew_logs"></canvas></td>
            <td><canvas data-itemname="unstrung_yew_longbow"></canvas></td>
            <td><canvas data-itemname="yew_longbow"></canvas></td>
            <td>70</td>
        </tr>
        <tr>
            <td>Magic shortbow</td>
            <td><canvas data-itemname="magic_logs"></canvas></td>
            <td><canvas data-itemname="unstrung_magic_shortbow"></canvas></td>
            <td><canvas data-itemname="magic_shortbow"></canvas></td>
            <td>80</td>
            <td rowspan="2">50</td>
        </tr>
        <tr>
            <td>Magic longbow</td>
            <td><canvas data-itemname="magic_logs"></canvas></td>
            <td><canvas data-itemname="unstrung_magic_longbow"></canvas></td>
            <td><canvas data-itemname="magic_longbow"></canvas></td>
            <td>85</td>
        </tr>
    </table>
    <h3>Making arrows</h3>
    To make an arrow-shaft just use a knife with some ordinary logs. Add a feather to the arrow shaft, and finally add an arrow-head to complete the arrow. Arrow heads can either be purchased from the member's archery shop, or smithed at an anvil. Better arrow heads will inflict more damage, but you will require a better bow to fire them. The table belows lists the different arrow types:
    <br><br>
    <table width="100%" cellpadding="1" cellspacing="0" class="table">
        <tr>
            <th>Arrow Type</th>
            <th>Fletching Level</th>
            <th>Minimum bow required</th>
        </tr>
        <tr>
            <td><canvas data-itemname="bronze_arrow" data-show-label="inline"></canvas></td>
            <td>1</td>
            <td><canvas data-itemname="shortbow"></canvas><canvas data-itemname="longbow"></canvas><br>Any</td>
        </tr>
        <tr>
            <td><canvas data-itemname="iron_arrow" data-show-label="inline"></canvas></td>
            <td>15</td>
            <td><canvas data-itemname="shortbow"></canvas><canvas data-itemname="longbow"></canvas><br>Any</td>
        </tr>
        <tr>
            <td><canvas data-itemname="steel_arrow" data-show-label="inline"></canvas></td>
            <td>30</td>
            <td><canvas data-itemname="oak_shortbow"></canvas><canvas data-itemname="oak_longbow"></canvas><br>Oak Bow</td>
        </tr>
        <tr>
            <td><canvas data-itemname="mithril_arrow" data-show-label="inline"></canvas></td>
            <td>45</td>
            <td><canvas data-itemname="willow_shortbow"></canvas><canvas data-itemname="willow_longbow"></canvas><br>Willow Bow</td>
        </tr>
        <tr>
            <td><canvas data-itemname="adamant_arrow" data-show-label="inline"></canvas></td>
            <td>60</td>
            <td><canvas data-itemname="maple_shortbow"></canvas><canvas data-itemname="maple_longbow"></canvas><br>Maple Bow</td>
        </tr>
        <tr>
            <td><canvas data-itemname="rune_arrow" data-show-label="inline"></canvas></td>
            <td>75</td>
            <td><canvas data-itemname="yew_shortbow"></canvas><canvas data-itemname="yew_longbow"></canvas><br>Yew Bow</td>
        </tr>
    </table>
    <h3>Crossbow Bolt Tips</h3>
    Players using crossbows can make their bolts stronger by adding tips to them.
    <br>
    To add tips to a bolt, select the tips in your inventory and then click on the bolt to create tipped bolts.
    <br>
    There are three types of bolt tips available in the game: Opal tips, Pearl tips and barb tips.
    <br><br>
    Opal and Pearl tips can be made by using a chisel on cut opals or on oyster pearls. Barbed tips can only be purchased from the Ranging Guild.
    <br>
    You can find opals by mining gem rocks and you can find oyster pearls while Big Net fishing.
    <br><br>
    Below is a table showing the level requirements to add tips to bolts.
    <br><br>
    <table cellpadding="1" cellspacing="0" class="table">
        <tr>
            <th>Bolt tip</th>
            <th>Fletching Level</th>
        </tr>
        <tr>
            <td><canvas data-itemname="opal_bolt" data-show-label="inline"></canvas></td>
            <td>17</td>
        </tr>
        <tr>
            <td><canvas data-itemname="pearl_bolt" data-show-label="inline"></canvas></td>
            <td>34</td>
        </tr>
        <tr>
            <td><canvas data-itemname="barbed_bolt" data-show-label="inline"></canvas></td>
            <td>51</td>
        </tr>
    </table>
    <h3>Throwing Darts</h3>
    Once you have completed the <a href="?p=questguides&quest=touristtrap">Tourist Trap</a> quest you will be able to fletch darts to throw at your enemies. Firstly use your <a href="?p=skillguides&skill=smithing">smithing skill</a> to make metal bars into dart tips. Then add a feather to each dart tip to complete the dart. Darts are not as powerful as arrows or throwing knives. Players may poison their darts to do more damage to their opponents. Each weapon poison vial contains enough poison for 5 darts.
    <br><br>
    Below is a table showing the level requirements to make and wield darts.
    <br><br>
    <table width="100%" cellpadding="1" cellspacing="0" class="table">
        <tr>
            <th>Dart Type</th>
            <th>Smithing level to make dart tips</th>
            <th>Fletching level to make</th>
            <th>Ranged level to wield</th>
        </tr>
        <tr>
            <td><canvas data-itemname="bronze_dart" data-show-label="inline"></canvas></td>
            <td>4</td>
            <td>1</td>
            <td>1</td>
        </tr>
        <tr>
            <td><canvas data-itemname="iron_dart" data-show-label="inline"></canvas></td>
            <td>19</td>
            <td>22</td>
            <td>1</td>
        </tr>
        <tr>
            <td><canvas data-itemname="steel_dart" data-show-label="inline"></canvas></td>
            <td>34</td>
            <td>37</td>
            <td>5</td>
        </tr>
        <tr>
            <td><canvas data-itemname="mithril_dart" data-show-label="inline"></canvas></td>
            <td>54</td>
            <td>52</td>
            <td>20</td>
        </tr>
        <tr>
            <td><canvas data-itemname="adamant_dart" data-show-label="inline"></canvas></td>
            <td>74</td>
            <td>67</td>
            <td>30</td>
        </tr>
        <tr>
            <td><canvas data-itemname="rune_dart" data-show-label="inline"></canvas></td>
            <td>89</td>
            <td>81</td>
            <td>40</td>
        </tr>
    </table>
</p>
HTML; }