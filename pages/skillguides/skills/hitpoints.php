<?php
function getSkillContent($skill) { return <<<HTML
<h2>$skill Skill Guide</h2>
<p>
    Your Hitpoints level dictates how much damage you can take before dying. The higher your Hitpoints, the longer you can survive in battle.
    <br><br>
    Unlike other combat skills, Hitpoints experience is gained automatically whenever you deal damage to an enemy. For every point of damage you inflict, you will receive 1.33 experience in Hitpoints.
    <br><br>
    If your Hitpoints ever reach 0, you will die and respawn in Lumbridge, losing most of your carried items.
    <br><br>
    Hitpoints can be restored by eating food. Different types of food heal different amounts of Hitpoints. To see the stats of individual foods, please use the <a href="?p=itemdb">Items DB</a>.
    <br><br>
    Beware of poison: some monsters and weapons can poison you, causing your Hitpoints to drain over time until cured. Antipoison potions and curing prayers can remove poison.
    <br><br>
    Hitpoints is an essential skill for all players, as it determines your survivability in both combat training and dangerous encounters.
</p>
HTML; }