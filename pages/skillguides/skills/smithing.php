<?php
function getSkillContent($skill) { return <<<HTML
<h2>$skill Skill Guide</h2>
<p>
    The smithing skill is used to convert ores, obtained by mining, into weapons and armour.
    Many players find that making equipment and selling it to shops and other players is a good way to make money.
    <br>
    <table>
        <tr>
            <td valign="top">
                
                Smithing has two stages: smelting and smithing.
                <br>
                Smelting converts your ores into bars. This is done at furnaces.
                To convert your ore into bars select an ore in your inventory then left click on a furnace. If you want to smelt several lots of ore at once, left clicking on the furnace will bring up a list of metals.  Right click on a metal to select the quantity you want to make.
            </td>
            <td>
                <img src="img/skillguides/smithing/smithingfurnace.gif">
            </td>
        </tr>
    </table>
    <hr>
    <h3>Ores / Smelting Chart</h3>
    You will need different combinations of ores and different smithing levels to make each bar.
    Some of these requirements are shown below. There are even more bars to make at higher levels.
    <br><br>
    <table class="calculators">
        <tr>
            <th>Bar</th>
            <th>Ores required per bar</th>
            <th>Level<br>required</th>
        </tr>
        <tr>
        <td>
            <canvas data-itemname="bronze_bar" data-size="28px"></canvas><br>
            Bronze
        </td>
        <td>
            <canvas data-itemname="tin_ore" data-size="28px"></canvas>
            <canvas data-itemname="copper_ore" data-size="28px"></canvas><br>
            1 Tin ore, 1 Copper ore
        </td>
        <td>1</td>
        </tr>
        <tr>
        <td>
            <canvas data-itemname="iron_bar" data-size="28px"></canvas><br>
            Iron
        </td>
        <td>
            <canvas data-itemname="iron_ore" data-size="28px"></canvas><br>
            1 Iron ore (50% chance of success)
        </td>
        <td>15</td>
        </tr>
        <tr>
        <td>
            <canvas data-itemname="silver_bar" data-size="28px"></canvas><br>
            Silver
        </td>
        <td>
            <canvas data-itemname="silver_ore" data-size="28px"></canvas><br>
            1 Silver ore
        </td>
        <td>20</td>
        </tr>
        <tr>
        <td>
            <canvas data-itemname="steel_bar" data-size="28px"></canvas><br>
            Steel
        </td>
        <td>
            <canvas data-itemname="coal" data-size="28px"></canvas>
            <canvas data-itemname="coal" data-size="28px"></canvas>
            <canvas data-itemname="iron_ore" data-size="28px"></canvas><br>
            2 Coal, 1 Iron ore
        </td>
        <td>30</td>
        </tr>
        <tr>
        <td>
            <canvas data-itemname="gold_bar" data-size="28px"></canvas><br>
            Gold
        </td>
        <td>
            <canvas data-itemname="gold_ore" data-size="28px"></canvas><br>
            1 Gold ore
        </td>
        <td>40</td>
        </tr>
        <tr>
        <td>
            <canvas data-itemname="mithril_bar" data-size="28px"></canvas><br>
            Mithril
        </td>
        <td>
            <canvas data-itemname="coal" data-size="28px"></canvas>
            <canvas data-itemname="coal" data-size="28px"></canvas>
            <canvas data-itemname="coal" data-size="28px"></canvas>
            <canvas data-itemname="coal" data-size="28px"></canvas>
            <canvas data-itemname="mithril_ore" data-size="28px"></canvas><br>
            4 Coal, 1 Mithril ore
        </td>
        <td>50</td>
        </tr>
        <tr>
        <td>
            <canvas data-itemname="adamantite_bar" data-size="28px"></canvas><br>
            Adamant</td>
        <td>
            <canvas data-itemname="coal" data-size="28px"></canvas>
            <canvas data-itemname="coal" data-size="28px"></canvas>
            <canvas data-itemname="coal" data-size="28px"></canvas>
            <canvas data-itemname="coal" data-size="28px"></canvas>
            <canvas data-itemname="coal" data-size="28px"></canvas>
            <canvas data-itemname="coal" data-size="28px"></canvas>
            <canvas data-itemname="adamantite_ore" data-size="28px"></canvas><br>
            6 Coal, 1 Adamantite ore
        </td>
        <td>70</td>
        </tr>
        <tr>
        <td>
            <canvas data-itemname="runite_bar" data-size="28px"></canvas><br>
            Runite
        </td>
        <td>
            <canvas data-itemname="coal" data-size="28px"></canvas>
            <canvas data-itemname="coal" data-size="28px"></canvas>
            <canvas data-itemname="coal" data-size="28px"></canvas>
            <canvas data-itemname="coal" data-size="28px"></canvas>
            <canvas data-itemname="coal" data-size="28px"></canvas>
            <canvas data-itemname="coal" data-size="28px"></canvas>
            <canvas data-itemname="coal" data-size="28px"></canvas>
            <canvas data-itemname="coal" data-size="28px"></canvas>
            <canvas data-itemname="runite_ore" data-size="28px"></canvas><br>
            8 Coal, 1 Runite ore
        </td>
        <td>85</td>
        </tr>
    </table>
    <br><br>
    <hr>
    <h3>Smithing/Forging items</h3>
    You will need a hammer which can be bought from any general store.
    <br>
    To convert your bars into armour and weapons you must forge them at an anvil.
    <br><br>
    Select a bar from your inventory, then select an anvil. You will be given a screen to decide what sort of equipment you would like to make. You will  be shown how many bars are needed to make types of object. If this is written in green then you have enough bars to make the item, if it is written in red then you do not.
    <img src="img/skillguides/smithing/smithinginterface.gif">
    <br><br>
    The name of the objects will be written in black or white. If the name is written in white then you have the smithing level required to make it. If it is written in black then you do not.
    <br>    <br>
    Select what you would like to make and provided you have the required smithing levels and number of bars, your object will be made.
    <br><br>
    <table>
        <tr>
            <td valign="top">
                <img src="img/skillguides/smithing/smithinganvil.gif">
            </td>
            <td valign="top">
                The smithing levels required to forge a metal type are the same as those required to smelt it.
                However at the levels given you will only be able to forge the most basic items in that metal (mostly daggers). A few levels past these base smithing levels you will be able to make a wider variety of things. For example at smithing level 4 you will be able to make bronze short swords.
                <br>
                The gold and silver bars are not used to smith weapons instead they are used in the crafting skill</a>.
            </td>
        </tr>
    </table>
    <br><br>
    The following is a table showing at what level you can forge various items. A similar table to the one below can be opened in the game by clicking the smithing skill icon in the stats menu.
    <table class="calculators">
        <tr>
            <th rowspan=2>Item</th>
            <th colspan=6>Level Requirement to Smith</th>
        </tr>
        <tr>
            <th>Bronze</td>
            <th>Iron</td>
            <th>Steel</td>
            <th>Mithril</td>
            <th>Adamant</td>
            <th>Rune</td>
        </tr>
        <tr>
            <td>Dagger</td>
            <td><canvas data-itemname="bronze_dagger" data-size="28px"></canvas><br>1</td>
            <td><canvas data-itemname="iron_dagger" data-size="28px"></canvas><br>15</td>
            <td><canvas data-itemname="steel_dagger" data-size="28px"></canvas><br>30</td>
            <td><canvas data-itemname="mithril_dagger" data-size="28px"></canvas><br>50</td>
            <td><canvas data-itemname="adamant_dagger" data-size="28px"></canvas><br>70</td>
            <td><canvas data-itemname="rune_dagger" data-size="28px"></canvas><br>85</td>
        </tr>
        <tr>
            <td>Axe</td>
            <td><canvas data-itemname="bronze_axe" data-size="28px"></canvas><br>1</td>
            <td><canvas data-itemname="iron_axe" data-size="28px"></canvas><br>16</td>
            <td><canvas data-itemname="steel_axe" data-size="28px"></canvas><br>31</td>
            <td><canvas data-itemname="mithril_axe" data-size="28px"></canvas><br>51</td>
            <td><canvas data-itemname="adamant_axe" data-size="28px"></canvas><br>71</td>
            <td><canvas data-itemname="rune_axe" data-size="28px"></canvas><br>86</td>
        </tr>
        <tr>
            <td>Mace</td>
            <td><canvas data-itemname="bronze_mace" data-size="28px"></canvas><br>2</td>
            <td><canvas data-itemname="iron_mace" data-size="28px"></canvas><br>17</td>
            <td><canvas data-itemname="steel_mace" data-size="28px"></canvas><br>32</td>
            <td><canvas data-itemname="mithril_mace" data-size="28px"></canvas><br>52</td>
            <td><canvas data-itemname="adamant_mace" data-size="28px"></canvas><br>72</td>
            <td><canvas data-itemname="rune_mace" data-size="28px"></canvas><br>87</td>
        </tr>
        <tr>
            <td>Medium helm</td>
            <td><canvas data-itemname="bronze_med_helm" data-size="28px"></canvas><br>3</td>
            <td><canvas data-itemname="iron_med_helm" data-size="28px"></canvas><br>18</td>
            <td><canvas data-itemname="steel_med_helm" data-size="28px"></canvas><br>33</td>
            <td><canvas data-itemname="mithril_med_helm" data-size="28px"></canvas><br>53</td>
            <td><canvas data-itemname="adamant_med_helm" data-size="28px"></canvas><br>73</td>
            <td><canvas data-itemname="rune_med_helm" data-size="28px"></canvas><br>88</td>
        </tr>
        <tr>
            <td>Short sword</td>
            <td><canvas data-itemname="bronze_sword" data-size="28px"></canvas><br>4</td>
            <td><canvas data-itemname="iron_sword" data-size="28px"></canvas><br>19</td>
            <td><canvas data-itemname="steel_sword" data-size="28px"></canvas><br>34</td>
            <td><canvas data-itemname="mithril_sword" data-size="28px"></canvas><br>54</td>
            <td><canvas data-itemname="adamant_sword" data-size="28px"></canvas><br>74</td>
            <td><canvas data-itemname="rune_sword" data-size="28px"></canvas><br>89</td>
        </tr>
        <tr>
            <td>Nails</td>
            <td>-</td>
            <td>-</td>
            <td><canvas data-itemname="nails" data-size="28px"></canvas><br>34<br></td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>Throwing dart tips</td>
            <td><canvas data-itemname="bronze_dart_tip" data-size="28px"></canvas><br>4<br></td>
            <td><canvas data-itemname="iron_dart_tip" data-size="28px"></canvas><br>19<br></td>
            <td><canvas data-itemname="steel_dart_tip" data-size="28px"></canvas><br>34<br></td>
            <td><canvas data-itemname="mithril_dart_tip" data-size="28px"></canvas><br>54<br></td>
            <td><canvas data-itemname="adamant_dart_tip" data-size="28px"></canvas><br>74<br></td>
            <td><canvas data-itemname="rune_dart_tip" data-size="28px"></canvas><br>89</td>
        </tr>
        <tr>
            <td>Wire</td>
            <td><canvas data-itemname="bronzecraftwire" data-size="28px"></canvas><br>4</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>Cannonball</td>
            <td>-</td>
            <td>-</td>
            <td><canvas data-itemname="mcannonball" data-size="28px"></canvas><br>35</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>Arrowheads</td>
            <td><canvas data-itemname="bronze_arrowheads" data-size="28px"></canvas><br>5</td>
            <td><canvas data-itemname="iron_arrowheads" data-size="28px"></canvas><br>20</td>
            <td><canvas data-itemname="steel_arrowheads" data-size="28px"></canvas><br>35</td>
            <td><canvas data-itemname="mithril_arrowheads" data-size="28px"></canvas><br>55</td>
            <td><canvas data-itemname="adamant_arrowheads" data-size="28px"></canvas><br>75</td>
            <td><canvas data-itemname="rune_arrowheads" data-size="28px"></canvas><br>90</td>
        </tr>
        <tr>
            <td>Scimitar</td>
            <td><canvas data-itemname="bronze_scimitar" data-size="28px"></canvas><br>5</td>
            <td><canvas data-itemname="iron_scimitar" data-size="28px"></canvas><br>20</td>
            <td><canvas data-itemname="steel_scimitar" data-size="28px"></canvas><br>35</td>
            <td><canvas data-itemname="mithril_scimitar" data-size="28px"></canvas><br>55</td>
            <td><canvas data-itemname="adamant_scimitar" data-size="28px"></canvas><br>75</td>
            <td><canvas data-itemname="rune_scimitar" data-size="28px"></canvas><br>90</td>
        </tr>
        <tr>
            <td>Longsword</td>
            <td><canvas data-itemname="bronze_longsword" data-size="28px"></canvas><br>6</td>
            <td><canvas data-itemname="iron_longsword" data-size="28px"></canvas><br>21</td>
            <td><canvas data-itemname="steel_longsword" data-size="28px"></canvas><br>36</td>
            <td><canvas data-itemname="mithril_longsword" data-size="28px"></canvas><br>56</td>
            <td><canvas data-itemname="adamant_longsword" data-size="28px"></canvas><br>76</td>
            <td><canvas data-itemname="rune_longsword" data-size="28px"></canvas><br>91</td>
        </tr>
        <tr>
            <th rowspan=2>Item</th>
            <th colspan=6>Level Requirement to Smith</th>
        </tr>
        <tr>
            <th>Bronze</td>
            <th>Iron</td>
            <th>Steel</td>
            <th>Mithril</td>
            <th>Adamant</td>
            <th>Rune</td>
        </tr>
        <tr>
        <td>Studs</td>
            <td>-</td>
            <td>-</td>
            <td><canvas data-itemname="studs" data-size="28px"></canvas><br>36</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>Full helm</td>
            <td><canvas data-itemname="bronze_full_helm" data-size="28px"></canvas><br>7</td>
            <td><canvas data-itemname="iron_full_helm" data-size="28px"></canvas><br>22</td>
            <td><canvas data-itemname="steel_full_helm" data-size="28px"></canvas><br>37</td>
            <td><canvas data-itemname="mithril_full_helm" data-size="28px"></canvas><br>57</td>
            <td><canvas data-itemname="adamant_full_helm" data-size="28px"></canvas><br>77</td>
            <td><canvas data-itemname="rune_full_helm" data-size="28px"></canvas><br>92</td>
        </tr>
        <tr>
        <td>Throwing knives<br></td>
            <td><canvas data-itemname="bronze_knife" data-size="28px"></canvas><br>7<br></td>
            <td><canvas data-itemname="iron_knife" data-size="28px"></canvas><br>22<br></td>
            <td><canvas data-itemname="steel_knife" data-size="28px"></canvas><br>37<br></td>
            <td><canvas data-itemname="mithril_knife" data-size="28px"></canvas><br>57<br></td>
            <td><canvas data-itemname="adamant_knife" data-size="28px"></canvas><br>77</td>
            <td><canvas data-itemname="rune_knife" data-size="28px"></canvas><br>92</td>
        </tr>
        <tr>
            <td>Square shield</td>
            <td><canvas data-itemname="bronze_sq_shield" data-size="28px"></canvas><br>8</td>
            <td><canvas data-itemname="iron_sq_shield" data-size="28px"></canvas><br>23</td>
            <td><canvas data-itemname="steel_sq_shield" data-size="28px"></canvas><br>38</td>
            <td><canvas data-itemname="mithril_sq_shield" data-size="28px"></canvas><br>58</td>
            <td><canvas data-itemname="adamant_sq_shield" data-size="28px"></canvas><br>78</td>
            <td><canvas data-itemname="rune_sq_shield" data-size="28px"></canvas><br>93</td>
        </tr>
        <tr>
            <td>Warhammer</td>
            <td><canvas data-itemname="bronze_warhammer" data-size="28px"></canvas><br>9</td>
            <td><canvas data-itemname="iron_warhammer" data-size="28px"></canvas><br>24</td>
            <td><canvas data-itemname="steel_warhammer" data-size="28px"></canvas><br>39</td>
            <td><canvas data-itemname="mithril_warhammer" data-size="28px"></canvas><br>59</td>
            <td><canvas data-itemname="adamnt_warhammer" data-size="28px"></canvas><br>79</td>
            <td><canvas data-itemname="rune_warhammer" data-size="28px"></canvas><br>94</td>
        </tr>
        <tr>
            <td>Battle axe</td>
            <td><canvas data-itemname="bronze_battleaxe" data-size="28px"></canvas><br>10</td>
            <td><canvas data-itemname="iron_battleaxe" data-size="28px"></canvas><br>25</td>
            <td><canvas data-itemname="steel_battleaxe" data-size="28px"></canvas><br>40</td>
            <td><canvas data-itemname="mithril_battleaxe" data-size="28px"></canvas><br>60</td>
            <td><canvas data-itemname="adamant_battleaxe" data-size="28px"></canvas><br>80</td>
            <td><canvas data-itemname="rune_battleaxe" data-size="28px"></canvas><br>95</td>
        </tr>
        <tr>
            <td>Chainbody</td>
            <td><canvas data-itemname="bronze_chainbody" data-size="28px"></canvas><br>11</td>
            <td><canvas data-itemname="iron_chainbody" data-size="28px"></canvas><br>26</td>
            <td><canvas data-itemname="steel_chainbody" data-size="28px"></canvas><br>41</td>
            <td><canvas data-itemname="mithril_chainbody" data-size="28px"></canvas><br>61</td>
            <td><canvas data-itemname="adamant_chainbody" data-size="28px"></canvas><br>81</td>
            <td><canvas data-itemname="rune_chainbody" data-size="28px"></canvas><br>96</td>
        </tr>
        <tr>
            <td>Kiteshield</td>
            <td><canvas data-itemname="bronze_kiteshield" data-size="28px"></canvas><br>12</td>
            <td><canvas data-itemname="iron_kiteshield" data-size="28px"></canvas><br>27</td>
            <td><canvas data-itemname="steel_kiteshield" data-size="28px"></canvas><br>42</td>
            <td><canvas data-itemname="mithril_kiteshield" data-size="28px"></canvas><br>62</td>
            <td><canvas data-itemname="adamant_kiteshield" data-size="28px"></canvas><br>82</td>
            <td><canvas data-itemname="rune_kiteshield" data-size="28px"></canvas><br>97</td>
        </tr><!--
        <tr>
            <td>Claws<br></td>
            <td><canvas data-itemname="bronze_claws" data-size="28px"></canvas><br>13</td>
            <td><canvas data-itemname="iron_claws" data-size="28px"></canvas><br>28</td>
            <td><canvas data-itemname="steel_claws" data-size="28px"></canvas><br>43</td>
            <td><canvas data-itemname="mithril_claws" data-size="28px"></canvas><br>63</td>
            <td><canvas data-itemname="adamant_claws" data-size="28px"></canvas><br>83</td>
            <td><canvas data-itemname="rune_claws" data-size="28px"></canvas><br>98</td>
        </tr>
        --><tr>
            <td>Two-handed sword</td>
            <td><canvas data-itemname="bronze_2h_sword" data-size="28px"></canvas><br>14</td>
            <td><canvas data-itemname="iron_2h_sword" data-size="28px"></canvas><br>29</td>
            <td><canvas data-itemname="steel_2h_sword" data-size="28px"></canvas><br>44</td>
            <td><canvas data-itemname="mithril_2h_sword" data-size="28px"></canvas><br>64</td>
            <td><canvas data-itemname="adamant_2h_sword" data-size="28px"></canvas><br>84</td>
            <td><canvas data-itemname="rune_2h_sword" data-size="28px"></canvas><br>99</td>
        </tr>
        <tr>
            <td>Platelegs</td>
            <td><canvas data-itemname="bronze_platelegs" data-size="28px"></canvas><br>16</td>
            <td><canvas data-itemname="iron_platelegs" data-size="28px"></canvas><br>31</td>
            <td><canvas data-itemname="steel_platelegs" data-size="28px"></canvas><br>46</td>
            <td><canvas data-itemname="mithril_platelegs" data-size="28px"></canvas><br>66</td>
            <td><canvas data-itemname="adamant_platelegs" data-size="28px"></canvas><br>86</td>
            <td><canvas data-itemname="rune_platelegs" data-size="28px"></canvas><br>99</td>
        </tr>
        <tr>
            <td>Plateskirt</td>
            <td><canvas data-itemname="bronze_plateskirt" data-size="28px"></canvas><br>16</td>
            <td><canvas data-itemname="iron_plateskirt" data-size="28px"></canvas><br>31</td>
            <td><canvas data-itemname="steel_plateskirt" data-size="28px"></canvas><br>46</td>
            <td><canvas data-itemname="mithril_plateskirt" data-size="28px"></canvas><br>66</td>
            <td><canvas data-itemname="adamant_plateskirt" data-size="28px"></canvas><br>86</td>
            <td><canvas data-itemname="rune_plateskirt" data-size="28px"></canvas><br>99</td>
        </tr>
        <tr>
            <td>Platebody</td>
            <td><canvas data-itemname="bronze_platebody" data-size="28px"></canvas><br>18</td>
            <td><canvas data-itemname="iron_platebody" data-size="28px"></canvas><br>33</td>
            <td><canvas data-itemname="steel_platebody" data-size="28px"></canvas><br>48</td>
            <td><canvas data-itemname="mithril_platebody" data-size="28px"></canvas><br>68</td>
            <td><canvas data-itemname="adamant_platebody" data-size="28px"></canvas><br>88</td>
            <td><canvas data-itemname="rune_platebody" data-size="28px"></canvas><br>99</td>
        </tr>
    </table>
</p>
HTML; }