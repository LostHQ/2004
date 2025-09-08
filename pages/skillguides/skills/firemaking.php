<?php
function getSkillContent($skill) { return <<<HTML
<h2>$skill Skill Guide</h2>
<p>
    Making a fire is useful for cooking food without having to go and find a range.
    <table>
        <tr>
            <td>To make a fire, left-click on the tinderbox in your inventory so that it is outlined in white, then left-click on the logs to use them with the tinderbox. You will then place the logs on the ground and attempt to light the fire.</td>
            <td><img src="img/skillguides/firemaking/lightingafire.gif" alt="[image]"></td>
        </tr>
    </table>
    <table>
        <tr>
            <td><img src="img/skillguides/firemaking/firemaking_options.gif" alt="[image]"></td>
            <td>Alternatively, you can drop the logs on the ground and right-click the logs then select 'Light logs'.<br><br>Your chances of lighting the fire quickly, will depend on your firemaking level.</td>
        </tr>
    </table>
    <br>
    Tinderboxes can be bought from General Stores. Occasionally, so can logs if other players have sold them to the stores. However, for a more reliable way to secure logs, please refer to the <a href="?p=skillguides&skill=woodcutting" class="c">woodcutting</a> section of the manual.
    <br><br>
    The following table shows what wood types are available in RuneScape, as well as the level required to light them and the experience gained from doing so.<br>
    <br>
    <table class="table">
        <tr>
            <th>Wood Type</th>
            <th>Level required</th>
            <th>Experience Gained</th>
            <th>Members Only?</th>
        </tr>
        <tr>
            <td><canvas data-itemname="logs" data-show-label="true"></canvas></td>
            <td>1</td>
            <td>40</td>
            <td>No</td>
        </tr>
        <tr>
            <td><canvas data-itemname="achey_tree_logs" data-show-label="true"></canvas></td>
            <td>1</td>
            <td>40</td>
            <td>Yes</td>
        </tr>
        <tr>
            <td><canvas data-itemname="oak_logs" data-show-label="true"></canvas></td>
            <td>15</td>
            <td>60</td>
            <td>No</td>
        </tr>
        <tr>
            <td><canvas data-itemname="willow_logs" data-show-label="true"></canvas></td>
            <td>30</td>
            <td>90</td>
            <td>No</td>
        </tr>
        <!-- disabled till 2005
        <tr>
            <td><canvas data-itemname="teak_logs data-show-label="true""></canvas></td>
            <td>35</td>
            <td>105</td>
            <td>Yes</td>
        </tr>
        -->
        <tr>
            <td><canvas data-itemname="maple_logs" data-show-label="true"></canvas></td>
            <td>45</td>
            <td>135</td>
            <td>No</td>
        </tr>
        <!-- disabled till 2005
        <tr>
            <td><canvas data-itemname="mahogany_logs" data-show-label="true"></canvas></td>
            <td>50</td>
            <td>157.5</td>
            <td>Yes</td>
        </tr>
        -->
        <tr>
            <td><canvas data-itemname="yew_logs" data-show-label="true"></canvas></td>
            <td>60</td>
            <td>202.5</td>
            <td>No</td>
        </tr>
        <tr>
            <td><canvas data-itemname="magic_logs" data-show-label="true"></canvas></td>
            <td>75</td>
            <td>303.8</td>
            <td>Yes</td>
        </tr>
    </table>
    <span style="text-align: center; display: block;">Maple logs are only available on a members server however, you can burn them on any server.</span>
</p>
HTML; }