<?php
function getSkillContent($skill) { return <<<HTML
<h2>$skill Skill Guide</h2>
<p>
    Your Strength level dictates how much damage you deal with melee attacks. The higher your Strength, the higher your maximum hit.
    <br><br>
    To advance your Strength level, you must fight with the style Aggressive. When fighting in Aggressive mode, you will be given 4 experience in Strength for every hit you deal to the enemy.
    <br><br>
    Temporary boosts to Strength can be gained through potions, prayers, and certain special attacks. Drinking a Strength potion raises your Strength level by a few points, while prayers such as Burst of Strength and Ultimate Strength increase your hitting power as long as they remain active. The Dragon battleaxe special attack can also temporarily raise your Strength, though it lowers your other combat stats in exchange.
    <br><br>
    Weapons are what you will use in the game to damage your enemies. Higher Strength allows you to wield stronger weapons and reach higher maximum hits. To see the stats of individual weapons, please use the <a href="?p=itemdb">Items DB</a>.
</p>
HTML; }