const npcsData = [
    { name: "Abbot Langley", hitpoints: 15, bones: 4.5 },
    { name: "Achietties", hitpoints: 42, bones: 4.5 },
    { name: "Afrah", hitpoints: 7, bones: 4.5 },
    { name: "Al-Kharid warrior (level 9)", hitpoints: 19, bones: 4.5 },
    { name: "Albatross (level 26)", hitpoints: 32, bones: 4.5 },
    { name: "Alfonse the waiter", hitpoints: 7, bones: 4.5 },
    { name: "Alomone (level 13)", hitpoints: 25, bones: 4.5 },
    { name: "Archer (level 42)", hitpoints: 50, bones: 4.5 },
    { name: "Baby blue dragon (level 43)", hitpoints: 50, bones: 30 },
    { name: "Baby dragon (level 43)", hitpoints: 50, bones: 30 },
    { name: "Bandit (level 21)", hitpoints: 27, bones: 4.5 },
    { name: "Barbarian (level 7)", hitpoints: 14, bones: 4.5 },
    { name: "Barbarian guard (level 7)", hitpoints: 14, bones: 4.5 },
    { name: "Barbarian woman (level 8)", hitpoints: 14, bones: 4.5 },
    { name: "Battle mage (level 54)", hitpoints: 120, bones: 4.5 },
    { name: "Bear (level 19)", hitpoints: 25, bones: 4.5 },
    { name: "Bear (level 21)", hitpoints: 27, bones: 4.5 },
    { name: "Bedabin Nomad Guard (level 64)", hitpoints: 70, bones: 4.5 },
    { name: "Big Wolf (level 73)", hitpoints: 74, bones: 4.5 },
    { name: "Black Demon (level 172)", hitpoints: 157, bones: 0 },
    { name: "Black dragon (level 199)", hitpoints: 190, bones: 72 },
    { name: "Black Heather (level 34)", hitpoints: 37, bones: 4.5 },
    { name: "Black Knight (level 31)", hitpoints: 42, bones: 4.5 },
    { name: "Black Knight Titan (level 126)", hitpoints: 142, bones: 4.5 },
    { name: "Black unicorn (level 27)", hitpoints: 29, bones: 4.5 },
    { name: "Blessed Giant rat (level 9)", hitpoints: 30, bones: 4.5 },
    { name: "Blessed spider (level 31)", hitpoints: 32, bones: 0 },
    { name: "Blue dragon (level 99)", hitpoints: 105, bones: 72 },
    { name: "Boot", hitpoints: 16, bones: 4.5 },
    { name: "Border Guard", hitpoints: 22, bones: 4.5 },
    { name: "Bouncer (level 132)", hitpoints: 116, bones: 4.5 },
    { name: "Brother Brace", hitpoints: 15, bones: 4.5 },
    { name: "Brother Jered", hitpoints: 15, bones: 4.5 },
    { name: "Chaos druid (level 13)", hitpoints: 20, bones: 4.5 },
    { name: "Chaos druid warrior (level 37)", hitpoints: 40, bones: 4.5 },
    { name: "Chaos dwarf (level 48)", hitpoints: 61, bones: 4.5 },
    { name: "Charlie the cook", hitpoints: 3, bones: 4.5 },
    { name: "Chicken (level 1)", hitpoints: 3, bones: 4.5 },
    { name: "Chicken (level 3)", hitpoints: 3, bones: 4.5 },
    { name: "Chompy bird (level 6)", hitpoints: 10, bones: 4.5 },
    { name: "Chronozon (level 139)", hitpoints: 60, bones: 0 },
    { name: "City guard (level 74)", hitpoints: 80, bones: 15 },
    { name: "Clivet (level 13)", hitpoints: 25, bones: 4.5 },
    { name: "Colonel Radick (level 37)", hitpoints: 65, bones: 4.5 },
    { name: "Cormorant (level 26)", hitpoints: 32, bones: 4.5 },
    { name: "Count Draynor (level 39)", hitpoints: 35, bones: 4.5 },
    { name: "Cow (level 2)", hitpoints: 8, bones: 4.5 },
    { name: "Cyclops (level 56)", hitpoints: 55, bones: 15 },
    { name: "Dalal", hitpoints: 7, bones: 4.5 },
    { name: "Dark warrior (level 8)", hitpoints: 17, bones: 4.5 },
    { name: "Dark wizard (level 20)", hitpoints: 24, bones: 4.5 },
    { name: "Dark wizard (level 7)", hitpoints: 12, bones: 4.5 },
    { name: "Deadly red spider (level 31)", hitpoints: 35, bones: 0 },
    { name: "Death wing (level 83)", hitpoints: 80, bones: 4.5 },
    { name: "Delrith (level 27)", hitpoints: 7, bones: 0 },
    { name: "Desert Wolf (level 27)", hitpoints: 34, bones: 4.5 },
    { name: "Donny the lad (level 34)", hitpoints: 37, bones: 4.5 },
    { name: "Doomion (level 91)", hitpoints: 87, bones: 0 },
    { name: "Druid (level 33)", hitpoints: 30, bones: 4.5 },
    { name: "Duck (level 1)", hitpoints: 3, bones: 0 },
    { name: "Duckling (level 1)", hitpoints: 3, bones: 0 },
    { name: "Dungeon rat (level 10)", hitpoints: 12, bones: 4.5 },
    { name: "Dwarf (level 10)", hitpoints: 16, bones: 4.5 },
    { name: "Dwarf (level 20)", hitpoints: 26, bones: 4.5 },
    { name: "Dwarf (level 9)", hitpoints: 16, bones: 4.5 },
    { name: "Dwarf Commander", hitpoints: 16, bones: 4.5 },
    { name: "Dwarf youngster", hitpoints: 6, bones: 4.5 },
    { name: "Earth warrior (level 47)", hitpoints: 54, bones: 4.5 },
    { name: "Echned Zekin (level 187)", hitpoints: 150, bones: 0 },
    { name: "Elvarg (level 86)", hitpoints: 120, bones: 4.5 },
    { name: "Enclave guard (level 74)", hitpoints: 80, bones: 15 },
    { name: "Entrana Fire Bird (level 2)", hitpoints: 5, bones: 4.5 },
    { name: "Farmer (level 7)", hitpoints: 12, bones: 4.5 },
    { name: "Fire giant (level 93)", hitpoints: 111, bones: 15 },
    { name: "Fire Warrior of Lesarkus (level 65)", hitpoints: 59, bones: 4.5 },
    { name: "Fly trap", hitpoints: 100, bones: 4.5 },
    { name: "Foreman (level 17)", hitpoints: 20, bones: 4.5 },
    { name: "Forester (level 15)", hitpoints: 17, bones: 4.5 },
    { name: "Fortress Guard (level 20)", hitpoints: 22, bones: 4.5 },
    { name: "Garv", hitpoints: 104, bones: 4.5 },
    { name: "General Khazard (level 112)", hitpoints: 170, bones: 4.5 },
    { name: "Ghost (level 19)", hitpoints: 25, bones: 0 },
    { name: "Ghost (level 24)", hitpoints: 20, bones: 0 },
    { name: "Giant (level 28)", hitpoints: 35, bones: 15 },
    { name: "Giant bat (level 27)", hitpoints: 32, bones: 4.5 },
    { name: "Giant rat (level 3)", hitpoints: 3, bones: 4.5 },
    { name: "Giant rat (level 3)", hitpoints: 5, bones: 4.5 },
    { name: "Giant rat (level 6)", hitpoints: 10, bones: 4.5 },
    { name: "Giant spider (level 2)", hitpoints: 5, bones: 0 },
    { name: "Giant spider (level 27)", hitpoints: 32, bones: 0 },
    { name: "Gnome (level 1)", hitpoints: 3, bones: 4.5 },
    { name: "Gnome child (level 1)", hitpoints: 2, bones: 4.5 },
    { name: "Gnome guard (level 19)", hitpoints: 31, bones: 4.5 },
    { name: "Gnome troop (level 1)", hitpoints: 3, bones: 4.5 },
    { name: "Gnome woman (level 1)", hitpoints: 2, bones: 4.5 },
    { name: "Goblin (level 13)", hitpoints: 16, bones: 4.5 },
    { name: "Goblin (level 2)", hitpoints: 5, bones: 4.5 },
    { name: "Goblin (level 5)", hitpoints: 12, bones: 4.5 },
    { name: "Goblin guard (level 42)", hitpoints: 43, bones: 4.5 },
    { name: "Golem (level 55)", hitpoints: 70, bones: 0 },
    { name: "Gorad (level 58)", hitpoints: 80, bones: 15 },
    { name: "Grave Scorpion (level 12)", hitpoints: 7, bones: 0 },
    { name: "Greater demon (level 92)", hitpoints: 87, bones: 0 },
    { name: "Green dragon (level 83)", hitpoints: 75, bones: 72 },
    { name: "Grip (level 26)", hitpoints: 25, bones: 0 },
    { name: "Grubor", hitpoints: 12, bones: 4.5 },
    { name: "Guard (level 20)", hitpoints: 22, bones: 4.5 },
    { name: "Guard (level 21)", hitpoints: 22, bones: 4.5 },
    { name: "Guard (level 22)", hitpoints: 22, bones: 4.5 },
    { name: "Guard (level 42)", hitpoints: 50, bones: 4.5 },
    { name: "Guard Bandit (level 21)", hitpoints: 27, bones: 4.5 },
    { name: "Guard dog (level 44)", hitpoints: 49, bones: 4.5 },
    { name: "Guardian of Armadyl (level 36)", hitpoints: 40, bones: 4.5 },
    { name: "Guardian of Armadyl (level 40)", hitpoints: 50, bones: 4.5 },
    { name: "Gull (level 26)", hitpoints: 32, bones: 4.5 },
    { name: "Gull", hitpoints: 32, bones: 4.5 },
    { name: "Gunthor the brave (level 29)", hitpoints: 35, bones: 4.5 },
    { name: "Hazeel Cultist (level 13)", hitpoints: 25, bones: 4.5 },
    { name: "Head Thief (level 26)", hitpoints: 37, bones: 4.5 },
    { name: "Hellhound (level 122)", hitpoints: 116, bones: 4.5 },
    { name: "Hero (level 63)", hitpoints: 82, bones: 4.5 },
    { name: "Highwayman (level 5)", hitpoints: 13, bones: 4.5 },
    { name: "Hobgoblin (level 28)", hitpoints: 29, bones: 4.5 },
    { name: "Hobgoblin (level 42)", hitpoints: 49, bones: 4.5 },
    { name: "Holthion (level 91)", hitpoints: 87, bones: 0 },
    { name: "Iban disciple (level 13)", hitpoints: 20, bones: 4.5 },
    { name: "Ice giant (level 54)", hitpoints: 70, bones: 15 },
    { name: "Ice Queen (level 102)", hitpoints: 104, bones: 0 },
    { name: "Ice spider (level 61)", hitpoints: 65, bones: 0 },
    { name: "Ice warrior (level 53)", hitpoints: 59, bones: 4.5 },
    { name: "Ima", hitpoints: 7, bones: 4.5 },
    { name: "Imp (level 2)", hitpoints: 8, bones: 0 },
    { name: "Imp (level 3)", hitpoints: 9, bones: 0 },
    { name: "Invrigar the Necromancer (level 20)", hitpoints: 24, bones: 4.5 },
    { name: "Irvig Senay (level 100)", hitpoints: 125, bones: 0 },
    { name: "Jadid", hitpoints: 7, bones: 4.5 },
    { name: "Jail guard (level 26)", hitpoints: 32, bones: 4.5 },
    { name: "Jailer (level 42)", hitpoints: 47, bones: 4.5 },
    { name: "Jeed", hitpoints: 7, bones: 4.5 },
    { name: "Jogre (level 48)", hitpoints: 60, bones: 15 },
    { name: "Jonny the beard (level 5)", hitpoints: 8, bones: 4.5 },
    { name: "Jungle Savage (level 84)", hitpoints: 90, bones: 4.5 },
    { name: "Jungle spider (level 42)", hitpoints: 50, bones: 0 },
    { name: "Jungle Wolf (level 64)", hitpoints: 69, bones: 4.5 },
    { name: "Justin Servil", hitpoints: 20, bones: 4.5 },
    { name: "Kalrag (level 78)", hitpoints: 78, bones: 0 },
    { name: "Kalron", hitpoints: 3, bones: 4.5 },
    { name: "Khazard commander (level 48)", hitpoints: 22, bones: 4.5 },
    { name: "Khazard Guard (level 21)", hitpoints: 25, bones: 4.5 },
    { name: "Khazard Guard (level 25)", hitpoints: 25, bones: 4.5 },
    { name: "Khazard Ogre (level 55)", hitpoints: 60, bones: 4.5 },
    { name: "Khazard Scorpion (level 44)", hitpoints: 40, bones: 0 },
    { name: "Khazard trooper (level 19)", hitpoints: 22, bones: 4.5 },
    { name: "Khazard warlord (level 112)", hitpoints: 170, bones: 4.5 },
    { name: "King black dragon (level 238)", hitpoints: 240, bones: 72 },
    { name: "King Scorpion (level 32)", hitpoints: 30, bones: 0 },
    { name: "Knight of Ardougne (level 46)", hitpoints: 52, bones: 4.5 },
    { name: "Kolodion (level 113)", hitpoints: 107, bones: 0 },
    { name: "Kolodion", hitpoints: 3, bones: 0 },
    { name: "Kolodion", hitpoints: 65, bones: 0 },
    { name: "Kolodion", hitpoints: 78, bones: 0 },
    { name: "Leprechaun (level 12)", hitpoints: 16, bones: 4.5 },
    { name: "Lesser demon (level 82)", hitpoints: 79, bones: 0 },
    { name: "Local Gnome", hitpoints: 3, bones: 4.5 },
    { name: "Lord Daquarius (level 59)", hitpoints: 38, bones: 4.5 },
    { name: "Lord Iban", hitpoints: 87, bones: 4.5 },
    { name: "Lucien (level 14)", hitpoints: 17, bones: 4.5 },
    { name: "Magic axe (level 42)", hitpoints: 44, bones: 0 },
    { name: "Magic Store owner", hitpoints: 14, bones: 4.5 },
    { name: "Man (level 2)", hitpoints: 7, bones: 4.5 },
    { name: "Man (level 4)", hitpoints: 13, bones: 4.5 },
    { name: "Melzar the mad (level 43)", hitpoints: 44, bones: 4.5 },
    { name: "Mercenary (level 40)", hitpoints: 60, bones: 4.5 },
    { name: "Mercenary Captain (level 53)", hitpoints: 80, bones: 4.5 },
    { name: "Monk (level 3)", hitpoints: 5, bones: 4.5 },
    { name: "Monk (level 5)", hitpoints: 15, bones: 4.5 },
    { name: "Monk of Zamorak (level 17)", hitpoints: 10, bones: 4.5 },
    { name: "Monk of Zamorak (level 22)", hitpoints: 20, bones: 4.5 },
    { name: "Monk of Zamorak (level 45)", hitpoints: 40, bones: 4.5 },
    { name: "Monkey (level 3)", hitpoints: 6, bones: 4.5 },
    { name: "Moss giant (level 48)", hitpoints: 60, bones: 15 },
    { name: "Mounted terrorbird gnome (level 29)", hitpoints: 36, bones: 4.5 },
    { name: "Mounted terrorbird gnome (level 46)", hitpoints: 55, bones: 4.5 },
    { name: "Mourner (level 15)", hitpoints: 13, bones: 4.5 },
    { name: "Mourner (level 15)", hitpoints: 19, bones: 4.5 },
    { name: "Mourner (level 16)", hitpoints: 13, bones: 4.5 },
    { name: "Mourner (level 16)", hitpoints: 19, bones: 4.5 },
    { name: "Mourner (level 19)", hitpoints: 25, bones: 4.5 },
    { name: "Mugger (level 4)", hitpoints: 8, bones: 4.5 },
    { name: "Nazastarool (level 65)", hitpoints: 70, bones: 0 },
    { name: "Nazastarool (level 86)", hitpoints: 70, bones: 0 },
    { name: "Nazastarool (level 88)", hitpoints: 80, bones: 0 },
    { name: "Necromancer (level 29)", hitpoints: 40, bones: 4.5 },
    { name: "Nezikchened (level 187)", hitpoints: 150, bones: 0 },
    { name: "Ogre (level 48)", hitpoints: 60, bones: 15 },
    { name: "Ogre (level 53)", hitpoints: 60, bones: 15 },
    { name: "Ogre chieftain (level 70)", hitpoints: 60, bones: 15 },
    { name: "Ogre guard (level 74)", hitpoints: 80, bones: 15 },
    { name: "Ogre merchant (level 60)", hitpoints: 60, bones: 15 },
    { name: "Ogre shaman (level 113)", hitpoints: 99, bones: 4.5 },
    { name: "Ogre trader (level 60)", hitpoints: 60, bones: 15 },
    { name: "Oomlie Bird (level 28)", hitpoints: 40, bones: 4.5 },
    { name: "Orc (level 20)", hitpoints: 29, bones: 4.5 },
    { name: "Othainian (level 91)", hitpoints: 87, bones: 0 },
    { name: "Otherworldly being (level 64)", hitpoints: 66, bones: 0 },
    { name: "Paladin (level 50)", hitpoints: 13, bones: 4.5 },
    { name: "Paladin (level 53)", hitpoints: 57, bones: 4.5 },
    { name: "Penguin (level 2)", hitpoints: 4, bones: 4.5 },
    { name: "Pirate (level 20)", hitpoints: 20, bones: 4.5 },
    { name: "Pirate (level 25)", hitpoints: 23, bones: 4.5 },
    { name: "Pirate Guard (level 19)", hitpoints: 25, bones: 4.5 },
    { name: "Pit Scorpion (level 32)", hitpoints: 32, bones: 0 },
    { name: "Poison Scorpion (level 20)", hitpoints: 23, bones: 0 },
    { name: "Poison spider (level 29)", hitpoints: 25, bones: 0 },
    { name: "Poison spider (level 64)", hitpoints: 64, bones: 0 },
    { name: "Ranalph Devere (level 95)", hitpoints: 130, bones: 0 },
    { name: "Ranging Guild Doorman", hitpoints: 50, bones: 4.5 },
    { name: "Rat (level 1)", hitpoints: 2, bones: 0 },
    { name: "Red dragon (level 135)", hitpoints: 140, bones: 72 },
    { name: "Renegade Knight (level 35)", hitpoints: 48, bones: 4.5 },
    { name: "River troll (level 120)", hitpoints: 120, bones: 4.5 },
    { name: "River troll (level 14)", hitpoints: 25, bones: 4.5 },
    { name: "River troll (level 159)", hitpoints: 170, bones: 4.5 },
    { name: "River troll (level 29)", hitpoints: 40, bones: 4.5 },
    { name: "River troll (level 49)", hitpoints: 60, bones: 4.5 },
    { name: "River troll (level 79)", hitpoints: 85, bones: 4.5 },
    { name: "Rock Golem (level 120)", hitpoints: 120, bones: 0 },
    { name: "Rock Golem (level 14)", hitpoints: 25, bones: 0 },
    { name: "Rock Golem (level 159)", hitpoints: 170, bones: 0 },
    { name: "Rock Golem (level 29)", hitpoints: 40, bones: 0 },
    { name: "Rock Golem (level 49)", hitpoints: 60, bones: 0 },
    { name: "Rock Golem (level 79)", hitpoints: 85, bones: 0 },
    { name: "Rogue (level 14)", hitpoints: 17, bones: 4.5 },
    { name: "Rowdy Guard (level 40)", hitpoints: 60, bones: 4.5 },
    { name: "Rowdy slave (level 15)", hitpoints: 16, bones: 4.5 },
    { name: "Sabeil", hitpoints: 7, bones: 4.5 },
    { name: "Salarin the twisted (level 70)", hitpoints: 70, bones: 4.5 },
    { name: "San Tojalon (level 106)", hitpoints: 120, bones: 0 },
    { name: "Scorpion (level 14)", hitpoints: 17, bones: 0 },
    { name: "Shade (level 120)", hitpoints: 120, bones: 0 },
    { name: "Shade (level 14)", hitpoints: 25, bones: 0 },
    { name: "Shade (level 159)", hitpoints: 170, bones: 0 },
    { name: "Shade (level 29)", hitpoints: 40, bones: 0 },
    { name: "Shade (level 49)", hitpoints: 60, bones: 0 },
    { name: "Shade (level 79)", hitpoints: 85, bones: 0 },
    { name: "Shadow spider (level 49)", hitpoints: 55, bones: 0 },
    { name: "Shadow warrior (level 48)", hitpoints: 67, bones: 4.5 },
    { name: "Shamus", hitpoints: 16, bones: 4.5 },
    { name: "Shantay Guard (level 22)", hitpoints: 32, bones: 4.5 },
    { name: "Shipyard worker (level 6)", hitpoints: 10, bones: 4.5 },
    { name: "Shipyard worker", hitpoints: 10, bones: 4.5 },
    { name: "Sir Carl (level 53)", hitpoints: 57, bones: 4.5 },
    { name: "Sir Harry (level 53)", hitpoints: 57, bones: 4.5 },
    { name: "Sir Jerro (level 53)", hitpoints: 57, bones: 4.5 },
    { name: "Sir Mordred (level 37)", hitpoints: 38, bones: 4.5 },
    { name: "Skavid (level 2)", hitpoints: 6, bones: 4.5 },
    { name: "Skeleton (level 13)", hitpoints: 18, bones: 4.5 },
    { name: "Skeleton (level 18)", hitpoints: 24, bones: 4.5 },
    { name: "Skeleton (level 20)", hitpoints: 29, bones: 4.5 },
    { name: "Skeleton (level 22)", hitpoints: 17, bones: 4.5 },
    { name: "Skeleton (level 45)", hitpoints: 59, bones: 4.5 },
    { name: "Skeleton Mage (level 15)", hitpoints: 17, bones: 4.5 },
    { name: "Snake (level 5)", hitpoints: 6, bones: 4.5 },
    { name: "Soldier (level 25)", hitpoints: 22, bones: 4.5 },
    { name: "Souless (level 18)", hitpoints: 24, bones: 4.5 },
    { name: "Speedy Keith (level 34)", hitpoints: 37, bones: 4.5 },
    { name: "Spider (level 1)", hitpoints: 2, bones: 0 },
    { name: "Strange plant", hitpoints: 200, bones: 0 },
    { name: "Strange plant", hitpoints: 200, bones: 4.5 },
    { name: "Straven (level 23)", hitpoints: 20, bones: 4.5 },
    { name: "Suit of armour (level 19)", hitpoints: 29, bones: 0 },
    { name: "Summoned Zombie (level 13)", hitpoints: 22, bones: 4.5 },
    { name: "Swarm", hitpoints: 25, bones: 0 },
    { name: "Terrorbird (level 28)", hitpoints: 34, bones: 4.5 },
    { name: "Thief (level 14)", hitpoints: 17, bones: 4.5 },
    { name: "Thief (level 16)", hitpoints: 17, bones: 4.5 },
    { name: "Thrantax The Mighty (level 92)", hitpoints: 80, bones: 0 },
    { name: "Thug (level 10)", hitpoints: 18, bones: 4.5 },
    { name: "Tower Archer (level 22)", hitpoints: 30, bones: 4.5 },
    { name: "Tower Archer (level 42)", hitpoints: 50, bones: 4.5 },
    { name: "Tower Archer (level 61)", hitpoints: 70, bones: 4.5 },
    { name: "Tower Archer (level 81)", hitpoints: 90, bones: 4.5 },
    { name: "Tower guard (level 25)", hitpoints: 22, bones: 4.5 },
    { name: "Tramp (level 2)", hitpoints: 7, bones: 4.5 },
    { name: "Tree spirit (level 101)", hitpoints: 85, bones: 0 },
    { name: "Tree spirit (level 120)", hitpoints: 120, bones: 4.5 },
    { name: "Tree spirit (level 14)", hitpoints: 25, bones: 4.5 },
    { name: "Tree spirit (level 159)", hitpoints: 170, bones: 4.5 },
    { name: "Tree spirit (level 29)", hitpoints: 40, bones: 4.5 },
    { name: "Tree spirit (level 49)", hitpoints: 60, bones: 4.5 },
    { name: "Tree spirit (level 79)", hitpoints: 85, bones: 4.5 },
    { name: "Tree", hitpoints: 250, bones: 4.5 },
    { name: "Tribesman (level 32)", hitpoints: 39, bones: 4.5 },
    { name: "Trobert", hitpoints: 13, bones: 4.5 },
    { name: "Troll (level 69)", hitpoints: 90, bones: 15 },
    { name: "Ugthanki (level 42)", hitpoints: 45, bones: 4.5 },
    { name: "Undead One (level 47)", hitpoints: 47, bones: 4.5 },
    { name: "Undead One (level 50)", hitpoints: 47, bones: 0 },
    { name: "Undead One (level 55)", hitpoints: 47, bones: 4.5 },
    { name: "Undead One (level 62)", hitpoints: 59, bones: 0 },
    { name: "Ungadulu (level 179)", hitpoints: 150, bones: 4.5 },
    { name: "Ungadulu (level 70)", hitpoints: 65, bones: 4.5 },
    { name: "Unicorn (level 15)", hitpoints: 19, bones: 4.5 },
    { name: "Viyeldi (level 79)", hitpoints: 80, bones: 4.5 },
    { name: "Warrior woman (level 19)", hitpoints: 20, bones: 4.5 },
    { name: "Watchman (level 120)", hitpoints: 120, bones: 4.5 },
    { name: "Watchman (level 14)", hitpoints: 20, bones: 4.5 },
    { name: "Watchman (level 159)", hitpoints: 170, bones: 4.5 },
    { name: "Watchman (level 28)", hitpoints: 22, bones: 4.5 },
    { name: "Watchman (level 29)", hitpoints: 40, bones: 4.5 },
    { name: "Watchman (level 49)", hitpoints: 60, bones: 4.5 },
    { name: "Watchman (level 79)", hitpoints: 85, bones: 4.5 },
    { name: "Weaponsmaster (level 17)", hitpoints: 20, bones: 4.5 },
    { name: "White Knight (level 36)", hitpoints: 52, bones: 4.5 },
    { name: "White wolf (level 25)", hitpoints: 34, bones: 4.5 },
    { name: "White wolf (level 38)", hitpoints: 44, bones: 4.5 },
    { name: "Witch (level 20)", hitpoints: 10, bones: 4.5 },
    { name: "Witches experiment (level 19)", hitpoints: 21, bones: 0 },
    { name: "Witches experiment fourth form (level 53)", hitpoints: 51, bones: 0 },
    { name: "Witches experiment second form (level 30)", hitpoints: 31, bones: 0 },
    { name: "Witches experiment third form (level 42)", hitpoints: 41, bones: 0 },
    { name: "Wizard (level 9)", hitpoints: 14, bones: 4.5 },
    { name: "Wizard Frumscone", hitpoints: 14, bones: 4.5 },
    { name: "Wizard Grayzag (level 41)", hitpoints: 34, bones: 4.5 },
    { name: "Wizard Mizgog", hitpoints: 3, bones: 4.5 },
    { name: "Wolf (level 25)", hitpoints: 34, bones: 4.5 },
    { name: "Wolf (level 64)", hitpoints: 69, bones: 4.5 },
    { name: "Woman (level 12)", hitpoints: 13, bones: 4.5 },
    { name: "Woman (level 14)", hitpoints: 23, bones: 4.5 },
    { name: "Woman (level 2)", hitpoints: 7, bones: 4.5 },
    { name: "Woman (level 3)", hitpoints: 10, bones: 4.5 },
    { name: "Woman (level 4)", hitpoints: 13, bones: 4.5 },
    { name: "Wormbrain (level 2)", hitpoints: 5, bones: 4.5 },
    { name: "Wyson the gardener (level 3)", hitpoints: 7, bones: 4.5 },
    { name: "Yeti (level 58)", hitpoints: 55, bones: 4.5 },
    { name: "Zamorak Wizard (level 74)", hitpoints: 80, bones: 4.5 },
    { name: "Zombie (level 120)", hitpoints: 120, bones: 15 },
    { name: "Zombie (level 13)", hitpoints: 22, bones: 4.5 },
    { name: "Zombie (level 14)", hitpoints: 20, bones: 15 },
    { name: "Zombie (level 159)", hitpoints: 170, bones: 15 },
    { name: "Zombie (level 18)", hitpoints: 24, bones: 4.5 },
    { name: "Zombie (level 24)", hitpoints: 30, bones: 4.5 },
    { name: "Zombie (level 25)", hitpoints: 30, bones: 4.5 },
    { name: "Zombie (level 29)", hitpoints: 40, bones: 15 },
    { name: "Zombie (level 49)", hitpoints: 60, bones: 15 },
    { name: "Zombie (level 79)", hitpoints: 85, bones: 15 },
    { name: "Zoo keeper", hitpoints: 20, bones: 4.5 },
];

// Live search function
document.getElementById("itemSearch").addEventListener("input", function () {
    const searchQuery = this.value.toLowerCase();
    const resultsDiv = document.getElementById("searchResults");
    resultsDiv.innerHTML = ""; // Clear previous results
    resultsDiv.style.display = searchQuery ? "block" : "none";

    if (!searchQuery) return;

    const matches = npcsData.filter((npc) => npc.name.toLowerCase().includes(searchQuery));

    matches.forEach((npc) => {
        const div = document.createElement("div");
        div.classList.add("search-item");
        div.textContent = npc.name;
        div.onclick = function () {
            document.getElementById("itemSearch").value = npc.name;
            document.getElementById("monsterHP").value = npc.hitpoints;
            resultsDiv.style.display = "none";
        };
        resultsDiv.appendChild(div);
    });
});

// Hide search results when clicking outside
document.addEventListener("click", function (e) {
    if (!document.getElementById("itemSearch").contains(e.target)) {
        document.getElementById("searchResults").style.display = "none";
    }
});

async function fetchXP() {
    const username = document.getElementById("username").value.trim();
    if (!username) return alert("Please enter a username.");

    try {
        const response = await fetch(`pages/api/LCHiscoresProxy.php?username=${encodeURIComponent(username)}`);
        if (!response.ok) throw new Error("Failed to fetch data.");
        const data = await response.json();

        const xpFields = {
            attackXP: 1,
            strengthXP: 3,
            defenceXP: 2,
            hitpointsXP: 4,
            rangedXP: 5,
            prayerXP: 6,
        };

        Object.entries(xpFields).forEach(([field, type]) => {
            const stat = data.find((stat) => stat.type === type);
            if (stat) {
                document.getElementById(field).value = Math.floor(stat.value / 10);
            }
        });
    } catch (error) {
        console.error(error);
        alert("Error fetching data.");
    }
}

function runCalc() {
    let monsterName = document.getElementById("itemSearch").value.trim().toLowerCase();
    let monsterHP = parseInt(document.getElementById("monsterHP").value) || 0;
    let numMonsters = parseInt(document.getElementById("numMonsters").value) || 0;
    let xpPerKill = monsterHP * 4;
    let totalXP = xpPerKill * numMonsters;

    let attackXP = parseInt(document.getElementById("attackXP").value) || 0;
    let strengthXP = parseInt(document.getElementById("strengthXP").value) || 0;
    let defenceXP = parseInt(document.getElementById("defenceXP").value) || 0;
    let hitpointsXP = parseInt(document.getElementById("hitpointsXP").value) || 0;
    let rangedXP = parseInt(document.getElementById("rangedXP").value) || 0;
    let prayerXP = parseInt(document.getElementById("prayerXP").value) || 0;

    let style = document.getElementById("attackStyle").value;
    if (style === "accurate") attackXP += totalXP;
    if (style === "aggressive") strengthXP += totalXP;
    if (style === "defensive") defenceXP += totalXP;
    if (style === "controlled") {
        attackXP += totalXP / 3;
        strengthXP += totalXP / 3;
        defenceXP += totalXP / 3;
    }
    if (style === "rapid") rangedXP += totalXP;
    if (style === "longrange") {
        rangedXP += totalXP / 2;
        defenceXP += totalXP / 2;
    }
    hitpointsXP += totalXP / 3;
    // Prayer XP from bones
    const buryBones = document.getElementById("buryBones").value;
    if (buryBones === "yes") {
        const matchedNPC = npcsData.find((npc) => npc.name.toLowerCase() === monsterName);
        const boneXP = matchedNPC && matchedNPC.bones ? matchedNPC.bones : 4.5; // default to regular bones
        prayerXP += boneXP * numMonsters;
    }

    document.getElementById("newXP").innerHTML = `Attack XP: ${Math.floor(attackXP).toLocaleString()} (Level ${getLevelForXP(attackXP)})<br>
         Strength XP: ${Math.floor(strengthXP).toLocaleString()} (Level ${getLevelForXP(strengthXP)})<br>
         Defence XP: ${Math.floor(defenceXP).toLocaleString()} (Level ${getLevelForXP(defenceXP)})<br>
         Hitpoints XP: ${Math.floor(hitpointsXP).toLocaleString()} (Level ${getLevelForXP(hitpointsXP)})<br>
         Ranged XP: ${Math.floor(rangedXP).toLocaleString()} (Level ${getLevelForXP(rangedXP)})<br>
         Prayer XP: ${Math.floor(prayerXP).toLocaleString()} (Level ${getLevelForXP(prayerXP)})`;
}

["monsterHP", "numMonsters", "attackStyle", "buryBones"].forEach((id) => {
    document.getElementById(id).addEventListener("change", runCalc);
});
