<?php
function getSkillContent($skill) { return <<<HTML
<h2>$skill Skill Guide</h2>
<p>
	There are a variety of different foods you can cook in RuneScape. Food is useful because eating it will heal lost hit points. As you practice your cooking, your character will get better. You will burn food less often, and you will be able to make better food which heals you more.
	<br><br>
	To cook food you will need to use one of the many stoves which are scattered around the map. Alternatively if there aren't any stoves nearby you can build a campfire and use that. For more information on building fires please see our <a href="?p=skillguides&skill=firemaking">Firemaking</a> section.
	<br><br>
	A guide to the different foods you can cook is shown below. In addition to the foods listed there are also some low-level foods and drinks which can be bought directly from the shops and pubs in RuneScape.<!-- (will be added later) A similar table can be opened in the game by clicking the cooking skill icon in the stats menu.-->
	<h3>Cooking Items</h3>
	To cook meat, chicken or fish, simply use the raw item on a fire or Range.
	<br><br>
	Note: You can deliberately burn things if needed. After you cook them, you can cook them again, and will see the message "You deliberately burn the nicely cooked meat." No exp is gained for burning meat deliberately.
	<br><br>
	The table below will show you the foods you can cook, the level requirements to cook them, and how much each food heals. Clicking the item names in the table will take you to instructions for making that item, all of which are listed below the table.
	<br><br>
	<table width="100%" cellpadding="1" cellspacing="0" class="table">
		<tbody>
			<tr> 
			<th>Food</th>
			<th>Cooking Level</th>
			<th>Heals</th>
			<th>Bites</th>
			<th>Exp</th>
			<th>Raw</th>
			<th>Cooked</th>
		</tr>
		<tr> 
			<td><a href="#meats">Cooked Meat</a></td>
			<td>1</td>
			<td>3</td>
			<td>1</td>
			<td>30</td>
			<td><canvas data-itemname="raw_beef"></canvas></td>
			<td><canvas data-itemname="cooked_meat"></canvas></td>
		</tr>
		<tr> 
			<td><a href="#meats">Shrimp</a></td>
			<td>1</td>
			<td>3</td>
			<td>1</td>
			<td>30</td>
				<td><canvas data-itemname="raw_shrimp"></canvas></td>
				<td><canvas data-itemname="shrimp"></canvas></td>
			</tr>
			<tr> 
				<td><a href="#bread">Bread</a></td>
				<td>1</td>
				<td>4</td>
				<td>1</td>
				<td>40</td>
				<td><canvas data-itemname="bread_dough"></canvas></td>
				<td><canvas data-itemname="bread"></canvas></td>
			</tr>
			<tr> 
				<td><a href="#meats">Sardine</a></td>
				<td>1</td>
				<td>4</td>
				<td>1</td>
				<td>40</td>
				<td><canvas data-itemname="raw_sardine"></canvas></td>
				<td><canvas data-itemname="sardine"></canvas></td>
			</tr>
			<tr> 
				<td><a href="#meats">Herring</a></td>
				<td>5</td>
				<td>5</td>
				<td>1</td>
				<td>50</td>
				<td><canvas data-itemname="raw_herring"></canvas></td>
				<td><canvas data-itemname="herring"></canvas></td>
			</tr>
			<tr> 
				<td><a href="#meats">Mackerel</a></td>
				<td>10</td>
				<td>6</td>
				<td>1</td>
				<td>60</td>
				<td><canvas data-itemname="raw_mackerel"></canvas></td>
				<td><canvas data-itemname="mackerel"></canvas></td>
			</tr>
			<tr> 
				<td><a href="#pies">Redberry Pie</a></td>
				<td>10</td>
				<td>6</td>
				<td>2</td>
				<td>78</td>
				<td><canvas data-itemname="uncooked_redberry_pie"></canvas></td>
				<td><canvas data-itemname="redberry_pie"></canvas></td>
			</tr>
			<tr> 
				<td><a href="#meats">Anchovies</a></td>
				<td>15</td>
				<td>3</td>
				<td>1</td>
				<td>30</td>
				<td><canvas data-itemname="raw_anchovies"></canvas></td>
				<td><canvas data-itemname="anchovies"></canvas></td>
			</tr>
			<tr> 
				<td><a href="#meats">Trout</a></td>
				<td>15</td>
				<td>7</td>
				<td>1</td>
				<td>70</td>
				<td><canvas data-itemname="raw_trout"></canvas></td>
				<td><canvas data-itemname="trout"></canvas></td>
			</tr>
			<tr> 
				<td><a href="#meats">Cod</a></td>
				<td>18</td>
				<td>7</td>
				<td>1</td>
				<td>70</td>
				<td><canvas data-itemname="raw_cod"></canvas></td>
				<td><canvas data-itemname="cod"></canvas></td>
			</tr>
			<tr> 
				<td><a href="#meats">Pike</a></td>
				<td>20</td>
				<td>8</td>
				<td>1</td>
				<td>80</td>
				<td><canvas data-itemname="raw_pike"></canvas></td>
				<td><canvas data-itemname="pike"></canvas></td>
			</tr>
			<tr> 
				<td><a href="#pies">Meat Pie</a></td>
				<td>20</td>
				<td>8</td>
				<td>2</td>
				<td>80</td>
				<td><canvas data-itemname="uncooked_meat_pie"></canvas></td>
				<td><canvas data-itemname="meat_pie"></canvas></td>
			</tr>
			<tr> 
				<td><a href="#meats">Salmon</a></td>
				<td>25</td>
				<td>9</td>
				<td>1</td>
				<td>90</td>
				<td><canvas data-itemname="raw_salmon"></canvas></td>
				<td><canvas data-itemname="salmon"></canvas></td>
			</tr>
			<tr> 
				<td><a href="#stew">Stew</a></td>
				<td>25</td>
				<td>9</td>
				<td>1</td>
				<td>117</td>
				<td><canvas data-itemname="uncooked_stew"></canvas></td>
				<td><canvas data-itemname="stew"></canvas></td>
			</tr>
			<tr> 
				<td><a href="#meats">Chompy Bird</a></td>
				<td>30</td>
				<td>10</td>
				<td>1</td>
				<td>100</td>
				<td><canvas data-itemname="raw_chompy"></canvas></td>
				<td><canvas data-itemname="cooked_chompy"></canvas></td>
			</tr>
			<tr> 
				<td><a href="#meats">Tuna</a></td>
				<td>30</td>
				<td>10</td>
				<td>1</td>
				<td>100</td>
				<td><canvas data-itemname="raw_tuna"></canvas></td>
				<td><canvas data-itemname="tuna"></canvas></td>
			</tr>
			<tr> 
				<td><a href="#pies">Apple Pie</a></td>
				<td>30</td>
				<td>10</td>
				<td>2</td>
				<td>100</td>
				<td><canvas data-itemname="uncooked_apple_pie"></canvas></td>
				<td><canvas data-itemname="apple_pie"></canvas></td>
			</tr>
			<tr> 
				<td><a href="#wine">Wine</a></td>
				<td>35</td>
				<td>15</td>
				<td>1</td>
				<td>110</td>
				<td><canvas data-itemname="jug_unfermented_wine"></canvas></td>
				<td><canvas data-itemname="jug_wine"></canvas></td>
			</tr>
			<tr> 
				<td><a href="#pizzas">Pizza</a></td>
				<td>35</td>
				<td>10</td>
				<td>1</td>
				<td>143</td>
				<td><canvas data-itemname="uncooked_pizza"></canvas></td>
				<td><canvas data-itemname="plain_pizza"></canvas></td>
			</tr>
			<tr> 
				<td><a href="#meats">Lobster</a></td>
				<td>40</td>
				<td>12</td>
				<td>1</td>
				<td>120</td>
				<td><canvas data-itemname="raw_lobster"></canvas></td>
				<td><canvas data-itemname="lobster"></canvas></td>
			</tr>
			<tr> 
				<td><a href="#cakes">Cake</a></td>
				<td>40</td>
				<td>12</td>
				<td>3</td>
				<td>180</td>
				<td><canvas data-itemname="uncooked_cake"></canvas></td>
				<td><canvas data-itemname="cake"></canvas></td>
			</tr>
			<tr> 
				<td><a href="#meats">Bass</a></td>
				<td>43</td>
				<td>13</td>
				<td>1</td>
				<td>130</td>
				<td><canvas data-itemname="raw_bass"></canvas></td>
				<td><canvas data-itemname="bass"></canvas></td>
			</tr>
			<tr> 
				<td><a href="#meats">Swordfish</a></td>
				<td>45</td>
				<td>14</td>
				<td>1</td>
				<td>140</td>
				<td><canvas data-itemname="raw_swordfish"></canvas></td>
				<td><canvas data-itemname="swordfish"></canvas></td>
			</tr>
			<tr> 
				<td><a href="#pizzas">Meat Pizza</a></td>
				<td>45</td>
				<td>14</td>
				<td>2</td>
				<td>26</td>
				<td><canvas data-itemname="uncooked_pizza"></canvas></td>
				<td><canvas data-itemname="meat_pizza"></canvas></td>
			</tr>
			<tr> 
				<td><a href="#cakes">Chocolate Cake</a></td>
				<td>50</td>
				<td>15</td>
				<td>3</td>
				<td>30</td>
				<td><canvas data-itemname="cake"></canvas></td>
				<td><canvas data-itemname="chocolate_cake"></canvas></td>
			</tr>
			<tr> 
				<td><a href="#oomlie_wrap">Oomlie Wrap</a></td>
				<td>50</td>
				<td>14</td>
				<td>1</td>
				<td>40</td>
				<td><canvas data-itemname="raw_oomlie"></canvas></td>
				<td><canvas data-itemname="wrapped_oomlie"></canvas></td>
			</tr>
			<tr> 
				<td><a href="#meats">Lava Eel</a></td>
				<td>53</td>
				<td>14</td>
				<td>1</td>
				<td>140</td>
				<td><canvas data-itemname="raw_lava_eel"></canvas></td>
				<td><canvas data-itemname="lava_eel"></canvas></td>
			</tr>
			<tr> 
				<td><a href="#pizzas">Anchovy Pizza</a></td>
				<td>55</td>
				<td>16</td>
				<td>2</td>
				<td>140</td>
				<td><canvas data-itemname="uncooked_pizza"></canvas></td>
				<td><canvas data-itemname="anchovie_pizza"></canvas></td>
			</tr>
			<tr> 
				<td>Ugthanki Kebab</td>
				<td>53</td>
				<td>19</td>
				<td>1</td>
				<td>120</td>
				<td><canvas data-itemname="bowl_oniontomugthanki"></canvas></td>
				<td><canvas data-itemname="ugthanki_kebab"></canvas></td>
			</tr>
			<tr> 
				<td><a href="curry">Curry</a></td>
				<td>60</td>
				<td>19</td>
				<td>1</td>
				<td>221</td>
				<td><canvas data-itemname="uncooked_curry"></canvas></td>
				<td><canvas data-itemname="curry"></canvas></td>
			</tr>
			<tr> 
				<td><a href="#pizzas">Pineapple Pizza</a></td>
				<td>65</td>
				<td>20</td>
				<td>2</td>
				<td>110</td>
				<td><canvas data-itemname="uncooked_pizza"></canvas></td>
				<td><canvas data-itemname="pineapple_pizza"></canvas></td>
			</tr>
			<tr> 
				<td><a href="#meats">Shark</a></td>
				<td>80</td>
				<td>20</td>
				<td>1</td>
				<td>210</td>
				<td><canvas data-itemname="raw_shark"></canvas></td>
				<td><canvas data-itemname="shark"></canvas></td>
			</tr>
			<tr> 
				<td><a href="#meats">Sea Turtle</a></td>
				<td>82</td>
				<td>20</td>
				<td>1</td>
				<td>211.3</td>
				<td><canvas data-itemname="raw_seaturtle"></canvas></td>
				<td><canvas data-itemname="seaturtle"></canvas></td>
			</tr>
			<tr> 
				<td><a href="#meats">Manta Ray</a></td>
				<td>91</td>
				<td>22</td>
				<td>1</td>
				<td>216.3</td>
				<td><canvas data-itemname="raw_mantaray"></canvas></td>
				<td><canvas data-itemname="mantaray"></canvas></td>
			</tr>
		</tbody>
	</table>
	<h3>The Cooking Guild</h3>
	If you are level 32 or above in your cooking skill and are wearing a chefs hat then you can enter the Cooking Guild which is just North-west of Varrock.
	<br><br>
	The cooking guild contains a number of items useful for cooks, including a flour mill, a water supply, and stoves to cook on as well as useful ingredients such as apples and chocolate.
	<h3>Other foods</h3>
	There are a number of other foods available to Members obtainable from the various races that inhabit RuneScape.
	<br><br>
	Visitors to the Tree Gnome Stronghold will be able to taste and create a wide variety of different foods at the Gnome Restaurant by using the recipe book available there, and there are further local delicacys to be discovered in many different regions of RuneScape.
	<h3>How to Cook</h3>
	<h4 id="bread">Bread</h4>
	<ol>
		<li>Pick some grain and take it to the windmill to make flour.</li>
		<li>You will need to use a pot to pick up the flour you have made.</li>
		<li>Buy a bucket or jug and fill it with water from a sink or fountain.</li>
		<li>Mix the flour and water to make some bread dough.</li>
		<li>Cook the dough by using it with a stove.</li>
	</ol>
	<h4 id="meats">Meats</h4>
	<ol>
		<li>Obtain raw meat by killing animals or by fishing for raw fish.</li>
		<li>Use the raw meat or fish on the fire or stove to cook it.</li>
		<li>????</li>
		<li>Profit!</li>
	</ol>
	<h4 id="pies">Pies</h4>
	<ol>
		<li>Mix flour and water to make some pastry dough.</li>
		<li>Place the dough in an empty pie dish.</li>
		<li>Use your choice of filling with the empty pie. (redberry, apple or meat)</li>
		<li>Cook the pie by using it with a stove.</li>
	</ol>
	<h4 id="cakes">Cakes</h4>
	<ol>
		<li>Mix flour, eggs, and milk together in a cake tin.</li>
		<li>Cook the cake by using it with a stove.</li>
		<li>Buy some chocolate and add it to the cake, to make Chocolate Cake. (optional)</li>
	</ol>
	<h4 id="stew">Stew</h4>
	<ol>
		<li>Obtain a bowl, and fill it with water from a sink or fountain.</li>
		<li>Pick a potato and place it in the bowl.</li>
		<li>Cook some meat and place it in the bowl.</li>
		<li>Cook the stew by using it with a stove or fire.</li>
	</ol>
	<h4 id="curry">Curry</h4>
	<ol>
		<li>Make some uncooked stew (see Stew description).</li>
		<li>Before cooking the stew add 1 Spice (bought or thieved from Spice stall in Ardougne market square).</li>
		<li>Cook the curry by using it with a stove or fire.</li>
	</ol>
	<h4 id="wine">Wine</h4>
	<ol>
		<li>Fill a jug with water.</li>
		<li>Use grapes with the jug of water.</li>
		<li>Wait until the wine ferments.</li>
		<li>Wine will ferment when left in your inventory or the bank.</li>
	</ol>
	<h4 id="pizzas">Pizzas</h4>
	<ol>
		<li>Mix flour and water to make a pizza base.</li>
		<li>Buy a tomato and add it to the pizza.</li>
		<li>Buy some cheese and add it to the pizza.</li>
		<li>Cook the pizza by using it with a stove.</li>
		<li>Add your choice of topping to the pizza.</li>
	</ol>
	<h4 id="oomlie_wrap">Oomlie Wrap</h4>
	<ol>
		<li>You can find Oomlie Birds (lvl 45 - look like brown chickens) inside Kharazi Jungle. Kharazi jungle is the area you explore while doing the Legends quest (you can't enter the jungle unless you're doing or did the Legends quest). It's the most southern part of Karamja Island.</li>
		<li>Kill an Oomlie Bird. It will drop a Raw Oomlie Meat which looks just like a raw chicken.</li>
		<li>Go to the totem pole (if you did the Legends quest - you'll know what it is) which can be found on the western part of the jungle (not on the shore) or look near the Water Pool. You should see a big tree near it with the option to shake it.</li>
		<li>Shake the tree. A Palm leaf will appear on the ground.</li>
		<li>Use the leaf on the Raw oomlie meat to wrap it up.</li>
		<li>Cook the Oomlie wrap on a fire or range. (Unwrapped Oomlie will always burn.)</li>
	</ol>
</p>
HTML; }