<?php
function getSpecialGuide($currSpecialGuide) { return <<<HTML
<h2>$currSpecialGuide</h2>
In RuneScape, it's possible to change the color or effect of your text. Whether you're trying to buy a new weapon, or asking for help on a quest, the best way to make your message stand out is with colored text.
<h3>Colors</h3>
Note: All the color names must be typed in lower case or they will not work.
<table class="table" width="100%">
    <tr>
        <th colspan="4">Color Codes</th>
    </tr>
    <tr>
        <td><b>Code</b></td>
        <td><b>Effect</b></td>
        <td><b>Example</b></td>
        <td><b>Result</b></td>
    </tr>
    <tr>
        <td>cyan:</td><td>Bright Blue Text</td><td>cyan:this is cyan</td><td><img src="img/special_guides/chat_effects/cyan.gif.png"></td>
    </tr>
    <tr>
        <td>green:</td><td>Green Text</td><td>green:this is green</td><td><img src="img/special_guides/chat_effects/green.gif.png"></td>
    </tr>
    <tr>
        <td>purple:</td><td>Purple Text</td><td>purple:this is purple</td><td><img src="img/special_guides/chat_effects/purple.gif.png"></td>
    </tr>
    <tr>
        <td>red:</td><td>Red Text</td><td>red:this is red</td><td><img src="img/special_guides/chat_effects/red.gif.png"></td>
    </tr>
    <tr>
        <td>white:</td><td>White Text</td><td>white:this is white</td><td><img src="img/special_guides/chat_effects/white.gif.png"></td>
    </tr>
</table>
<h3>Effects</h3>
Note: All the effect names must be typed in lower case or they will not work.
<table class="table" width="100%">
    <tr>
        <th colspan="4">Effect Codes</th>
    </tr>
    <tr>
        <td><b>Code</b></td>
        <td><b>Effect</b></td>
        <td><b>Result</b></td>
    </tr>
    <tr>
        <td>flash1:</td><td>Text cycles red to yellow quickly.</td><td><img src="img/special_guides/chat_effects/flash1.gif"></td>
    </tr>
    <tr>
        <td>flash2:</td><td>Text cycles blue to cyan quickly.</td><td><img src="img/special_guides/chat_effects/flash2.gif"></td>
    </tr>
    <tr>
        <td>flash3:</td><td>Text cycles green to light green quickly.</td><td><img src="img/special_guides/chat_effects/flash3.gif"></td>
    </tr>
    <tr>
        <td>glow1:</td><td>Text fades red to blue.</td><td><img src="img/special_guides/chat_effects/glow1.gif"></td>
    </tr>
    <tr>
        <td>glow2:</td><td>Text fades red to purple to blue.</td><td><img src="img/special_guides/chat_effects/glow2.gif"></td>
    </tr>
    <tr>
        <td>glow3:</td><td>Text fades white to green to blue.</td><td><img src="img/special_guides/chat_effects/glow3.gif"></td>
    </tr>
    <tr>
        <td>scroll:</td><td>Text scrolls right to left.</td><td><img src="img/special_guides/chat_effects/scroll.gif"></td>
    </tr>
    <tr>
        <td>shake:</td><td>Text shakes up and down.</td><td><img src="img/special_guides/chat_effects/shake.gif"></td>
    </tr>
    <tr>
        <td>slide:</td><td>Text slides from top to bottom.</td><td><img src="img/special_guides/chat_effects/slide.gif"></td>
    </tr>
    <tr>
        <td>wave:</td><td>Text waves up and down.</td><td><img src="img/special_guides/chat_effects/wave.gif"></td>
    </tr>
    <tr>
        <td>wave2:</td><td>Text waves slowly from left to right.</td><td><img src="img/special_guides/chat_effects/wave2.gif"></td>
    </tr>
</table>
<h3>Combinations</h3>
You can have combinations of colors and text effects in your messages too. Colored text (cyan, green, purple, red, and white) can scroll, shake, slide, or wave. Flashing and glowing text effects may also have a scroll or wave effect added to them. When combining colors and effects, always have the color before the effect and do not put a space between the color colon and the first letter of the effect.
<table class="table" width="100%">
    <tr>
        <th colspan="4">Combination Codes</th>
    </tr>
    <tr>
        <td><b>Code</b></td>
        <td><b>Result</b></td>
    </tr>
    <tr>
        <td>cyan:scroll:</td><td><img src="img/special_guides/chat_effects/cyan_scroll.gif"></td>
    </tr>
    <tr>
        <td>cyan:shake:</td><td><img src="img/special_guides/chat_effects/cyan_shake.gif"></td>
    </tr>
    <tr>
        <td>cyan:slide:</td><td><img src="img/special_guides/chat_effects/cyan_slide.gif"></td>
    </tr>
    <tr>
        <td>cyan:wave:</td><td><img src="img/special_guides/chat_effects/cyan_wave.gif"></td>
    </tr>
    <tr>
        <td>cyan:wave2:</td><td><img src="img/special_guides/chat_effects/cyan_wave2.gif"></td>
    </tr>
    <tr>
        <td>flash1:wave:</td><td><img src="img/special_guides/chat_effects/flash1_wave.gif"></td>
    </tr>
    <tr>
        <td>flash1:scroll:</td><td><img src="img/special_guides/chat_effects/flash1_scroll.gif"></td>
    </tr>
    <tr>
        <td>flash2:wave:</td><td><img src="img/special_guides/chat_effects/flash2_wave.gif"></td>
    </tr>
    <tr>
        <td>flash2:scroll:</td><td><img src="img/special_guides/chat_effects/flash2_scroll.gif"></td>
    </tr>
    <tr>
        <td>flash3:wave:</td><td><img src="img/special_guides/chat_effects/flash3_wave.gif"></td>
    </tr>
    <tr>
        <td>flash3:scroll:</td><td><img src="img/special_guides/chat_effects/flash3_scroll.gif"></td>
    </tr>
    <tr>
        <td>glow1:wave:</td><td><img src="img/special_guides/chat_effects/glow1_wave.gif"></td>
    </tr>
    <tr>
        <td>glow1:scroll:</td><td><img src="img/special_guides/chat_effects/glow1_scroll.gif"></td>
    </tr>
    <tr>
        <td>glow2:wave:</td><td><img src="img/special_guides/chat_effects/glow2_wave.gif"></td>
    </tr>
    <tr>
        <td>glow2:scroll:</td><td><img src="img/special_guides/chat_effects/glow2_scroll.gif"></td>
    </tr>
    <tr>
        <td>glow3:wave:</td><td><img src="img/special_guides/chat_effects/glow3_wave.gif"></td>
    </tr>
    <tr>
        <td>glow3:scroll:</td><td><img src="img/special_guides/chat_effects/glow3_scroll.gif"></td>
    </tr>
    <tr>
        <td>green:scroll:</td><td><img src="img/special_guides/chat_effects/green_scroll.gif"></td>
    </tr>
    <tr>
        <td>green:shake:</td><td><img src="img/special_guides/chat_effects/green_shake.gif"></td>
    </tr>
    <tr>
        <td>green:slide:</td><td><img src="img/special_guides/chat_effects/green_slide.gif"></td>
    </tr>
    <tr>
        <td>green:wave:</td><td><img src="img/special_guides/chat_effects/green_wave.gif"></td>
    </tr>
    <tr>
        <td>green:wave2:</td><td><img src="img/special_guides/chat_effects/green_wave2.gif"></td>
    </tr>
    <tr>
        <td>purple:scroll:</td><td><img src="img/special_guides/chat_effects/purple_scroll.gif"></td>
    </tr>
    <tr>
        <td>purple:shake:</td><td><img src="img/special_guides/chat_effects/purple_shake.gif"></td>
    </tr>
    <tr>
        <td>purple:slide:</td><td><img src="img/special_guides/chat_effects/purple_slide.gif"></td>
    </tr>
    <tr>
        <td>purple:wave:</td><td><img src="img/special_guides/chat_effects/purple_wave.gif"></td>
    </tr>
    <tr>
        <td>purple:wave2:</td><td><img src="img/special_guides/chat_effects/purple_wave2.gif"></td>
    </tr>
    <tr>
        <td>red:scroll:</td><td><img src="img/special_guides/chat_effects/red_scroll.gif"></td>
    </tr>
    <tr>
        <td>red:shake:</td><td><img src="img/special_guides/chat_effects/red_shake.gif"></td>
    </tr>
    <tr>
        <td>red:slide:</td><td><img src="img/special_guides/chat_effects/red_slide.gif"></td>
    </tr>
    <tr>
        <td>red:wave:</td><td><img src="img/special_guides/chat_effects/red_wave.gif"></td>
    </tr>
    <tr>
        <td>red:wave2:</td><td><img src="img/special_guides/chat_effects/red_wave2.gif"></td>
    </tr>
    <tr>
        <td>white:scroll:</td><td><img src="img/special_guides/chat_effects/white_scroll.gif"></td>
    </tr>
    <tr>
        <td>white:shake:</td><td><img src="img/special_guides/chat_effects/white_shake.gif"></td>
    </tr>
    <tr>
        <td>white:slide:</td><td><img src="img/special_guides/chat_effects/white_slide.gif"></td>
    </tr>
    <tr>
        <td>white:wave:</td><td><img src="img/special_guides/chat_effects/white_wave.gif"></td>
    </tr>
    <tr>
        <td>white:wave2:</td><td><img src="img/special_guides/chat_effects/white_wave2.gif"></td>
    </tr>
</table>
HTML; }