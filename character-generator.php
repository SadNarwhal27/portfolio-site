<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/character-generator/character-generator-style.css">
    <title>Character Generator</title>
</head>
<body>
    
    <header></header>
    
    <div class="total-container">

        <div class="randomizer"></div>
        
        <div class="character-container">
            
            <div class="character-abilities-container">
            
                <div class="ability-container">
                    
                    <div class="ability-name">STR</div>

                    <div class="ability-score">15</div>

                    <div class="ability-modifier-container">
                        <div class="ability-modifier">+2</div>
                    </div>
                    
                </div>

                <div class="ability-container">
                    
                    <div class="ability-name">DEX</div>

                    <div class="ability-score">15</div>

                    <div class="ability-modifier-container">
                        <div class="ability-modifier">+2</div>
                    </div>
                    
                </div>

                <div class="ability-container">
                    
                    <div class="ability-name">CON</div>

                    <div class="ability-score">15</div>

                    <div class="ability-modifier-container">
                        <div class="ability-modifier">+2</div>
                    </div>
                    
                </div>

                <div class="ability-container">
                    
                    <div class="ability-name">INT</div>

                    <div class="ability-score">15</div>

                    <div class="ability-modifier-container">
                        <div class="ability-modifier">+2</div>
                    </div>
                    
                </div>

                <div class="ability-container">
                    
                    <div class="ability-name">WIS</div>

                    <div class="ability-score">15</div>

                    <div class="ability-modifier-container">
                        <div class="ability-modifier">+2</div>
                    </div>
                    
                </div>

                <div class="ability-container">
                    
                    <div class="ability-name">CHA</div>

                    <div class="ability-score">15</div>

                    <div class="ability-modifier-container">
                        <div class="ability-modifier">+2</div>
                    </div>
                    
                </div>

            </div>

            <div class="character-skills_throws-container">
            
                <div class="throws-container">

                    <div class="throws">

                        <div class="throw">

                            <div class="mod-select" id="str-throw-select"></div>
                            <div class="throw-mod" id="str-mod">+2</div>
                            <div class="throw-name">Strength</div>
                        
                        </div>

                    </div>

                    <div class="throws-container-name">SAVING THROWS</div>

                </div>

                <div class="skills-container">
                
                    <form action="">

                        <div class="skills">

                            <div class="skill">

                                <input type="checkbox" id="acrobatics-skill">
                                <label class="skill-mod" id="acrobatics-mod" for="acrobatics-throw">+2</label>
                                <label class="skill-name" for="acrobatics-throw">Acrobatics</label>

                            </div>

                            <div class="skill">

                                <input type="checkbox" id="anim-skill">
                                <label class="skill-mod" id="anim-mod" for="anim-skill">+2</label>
                                <label class="skill-name" for="anim-skill">Animal Handling</label>

                            </div>

                            <div class="skill">

                                <input type="checkbox" id="arc-skill">
                                <label class="skill-mod" id="arc-mod" for="arc-skill">+2</label>
                                <label class="skill-name" for="arc-skill">Arcana</label>

                            </div>

                            <div class="skill">

                                <input type="checkbox" id="ath-skill">
                                <label class="skill-mod" id="ath-mod" for="ath-skill">+2</label>
                                <label class="skill-name" for="ath-skill">Athletics</label>

                            </div>

                            <div class="skill">

                                <input type="checkbox" id="dec-skill">
                                <label class="skill-mod" id="dec-mod" for="dec-skill">+2</label>
                                <label class="skill-name" for="dec-skill">Deception</label>

                            </div>

                            <div class="skill">

                                <input type="checkbox" id="his-skill">
                                <label class="skill-mod" id="his-mod" for="his-skill">+2</label>
                                <label class="skill-name" for="his-skill">History</label>

                            </div>

                            <div class="skill">

                                <input type="checkbox" id="ins-skill">
                                <label class="skill-mod" id="ins-mod" for="ins-skill">+2</label>
                                <label class="skill-name" for="ins-skill">Insight</label>

                            </div>

                            <div class="skill">

                                <input type="checkbox" id="tim-skill">
                                <label class="skill-mod" id="tim-mod" for="tim-skill">+2</label>
                                <label class="skill-name" for="tim-skill">Intimidate</label>

                            </div>

                            <div class="skill">

                                <input type="checkbox" id="ves-skill">
                                <label class="skill-mod" id="ves-mod" for="ves-skill">+2</label>
                                <label class="skill-name" for="ves-skill">Investigation</label>

                            </div>

                            <div class="skill">

                                <input type="checkbox" id="med-skill">
                                <label class="skill-mod" id="med-mod" for="med-skill">+2</label>
                                <label class="skill-name" for="med-skill">Medicine</label>

                            </div>

                            <div class="skill">

                                <input type="checkbox" id="nat-skill">
                                <label class="skill-mod" id="nat-mod" for="nat-skill">+2</label>
                                <label class="skill-name" for="nat-skill">Nature</label>

                            </div>

                            <div class="skill">

                                <input type="checkbox" id="perc-skill">
                                <label class="skill-mod" id="perc-mod" for="perc-skill">+2</label>
                                <label class="skill-name" for="perc-skill">Perception</label>

                            </div>

                            <div class="skill">

                                <input type="checkbox" id="perf-skill">
                                <label class="skill-mod" id="perf-mod" for="perf-skill">+2</label>
                                <label class="skill-name" for="perf-skill">Performance</label>

                            </div>

                            <div class="skill">

                                <input type="checkbox" id="pers-skill">
                                <label class="skill-mod" id="pers-mod" for="pers-skill">+2</label>
                                <label class="skill-name" for="pers-skill">Persuasion</label>

                            </div>

                            <div class="skill">

                                <input type="checkbox" id="rel-skill">
                                <label class="skill-mod" id="rel-mod" for="rel-skill">+2</label>
                                <label class="skill-name" for="rel-skill">Religion</label>

                            </div>

                            <div class="skill">

                                <input type="checkbox" id="soh-skill">
                                <label class="skill-mod" id="soh-mod" for="soh-skill">+2</label>
                                <label class="skill-name" for="soh-skill">Sleight of Hand</label>

                            </div>

                            <div class="skill">

                                <input type="checkbox" id="ste-skill">
                                <label class="skill-mod" id="ste-mod" for="ste-skill">+2</label>
                                <label class="skill-name" for="ste-skill">Stealth</label>

                            </div>

                            <div class="skill">

                                <input type="checkbox" id="sur-skill">
                                <label class="skill-mod" id="sur-mod" for="sur-skill">+2</label>
                                <label class="skill-name" for="sur-skill">Survival</label>

                            </div>

                        </div>
                    
                    </form>

                    <div class="skills-container-name">SKILLS</div>
                
                </div>
            
            </div>

            <div class="character-name_titles-container">
            
                <div class="character-name-container">

                    <div class="character-name">Maurice Blackfoot</div>

                    <div class="character-name-text">CHARACTER NAME</div>

                </div>

                <div class="character-titles-container">
                
                    <div class="title-container">
                    
                        <div class="class_level-container">Bard - Level 6</div>

                        <div class="class_level-text">CLASS & LEVEL</div>
                    
                    </div>

                    <div class="title-container">
                    
                        <div class="background-container">Entertainer</div>

                        <div class="background-text">BACKGROUND</div>
                    
                    </div>

                    <div class="title-container">
                    
                        <div class="race-container">Gnome</div>

                        <div class="race-text">RACE</div>
                    
                    </div>

                    <div class="title-container">
                    
                        <div class="alignment-container">CG</div>

                        <div class="alignment-text">Alignment</div>
                    
                    </div>
                
                </div>
            
            </div>

            <div class="character-description_features">
            
                <div class="decription-container">

                    <div class="description-box">
                    
                        <div class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. At eum sit voluptas officia eaque ratione id architecto magni distinctio tempore?</div>
                    
                    </div>
                
                    <div class="description-text">CHARACTER DESCRIPTION</div>
                
                </div>

                <div class="features-container">

                    <div class="features-box">
                    
                        <div class="features">Lorem ipsum dolor sit amet consectetur adipisicing elit. At eum sit voluptas officia eaque ratione id architecto magni distinctio tempore?</div>
                    
                    </div>
                
                    <div class="features-text">FEATURES & TRAITS</div>
                
                </div>
            
            </div>

            <div class="character-stats_items">
            
                <div class="stats-container">
                
                    <div class="health-container">
                    
                        <div class="hp">10</div>

                        <div class="hp-text">HEALTH</div>
                    
                    </div>

                    <div class="armor-container">
                    
                        <div class="ac">14</div>

                        <div class="ac-text">AC</div>
                    
                    </div>

                    <div class="speed-container">
                    
                        <div class="speed">30 ft</div>

                        <div class="hp-text">SPEED</div>
                    
                    </div>

                    <div class="proficiency-container">
                    
                        <div class="pro">+2</div>

                        <div class="pro-text">PROFICIENCY</div>
                    
                    </div>
                
                </div>
                
                <div class="weapons-container">
                
                    <div class="weapon">
                    
                        <div class="weapon-name">Longsword</div>

                        <div class="weapon-bonus">+4</div>

                        <div class="weapon-damage">2d6 + 2 S</div>
                    
                    </div>

                    <div class="weapons-container-text">WEAPONS & ATTACKS</div>
                
                </div>

                <div class="inventory-container">
                
                    <div class="coin-container">
                    
                        <div class="coin-box">
                        
                            <div class="coin-num">0</div>

                            <div class="coin-text">CP</div>
                        
                        </div>

                        <div class="coin-box">
                        
                            <div class="coin-num">0</div>

                            <div class="coin-text">SP</div>
                        
                        </div>

                        <div class="coin-box">
                        
                            <div class="coin-num">0</div>

                            <div class="coin-text">EP</div>
                        
                        </div>

                        <div class="coin-box">
                        
                            <div class="coin-num">0</div>

                            <div class="coin-text">GP</div>
                        
                        </div>

                        <div class="coin-box">
                        
                            <div class="coin-num">0</div>

                            <div class="coin-text">PP</div>
                        
                        </div>
                    
                    </div>

                    <div class="inventory-box">
                    
                        <div class="inventory">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim qui expedita dolor, blanditiis necessitatibus atque porro totam accusantium ipsa magni!</div>

                    </div>

                    <div class="inventory-text">INVENTORY</div>
                
                </div>

                <div class="other-container">
                
                    <div class="other-box">
                    
                        <div class="other-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, fugit magnam rem sed totam nisi ratione fuga vero soluta illo.</div>
                    
                    </div>

                    <div class="other-text">OTHER PROFICIENCIES & LANGUAGES</div>
                
                </div>
            
            </div>
        
        </div>

    </div>
    
</body>
</html>