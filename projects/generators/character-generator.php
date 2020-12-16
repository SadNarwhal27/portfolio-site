<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/character-generator/character-generator-style.css">
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

                            <div class="mod-select" id="str-throw-select"><span class="select" id="str-select"></span></div>
                            <div class="throw-mod" id="str-mod">+2</div>
                            <div class="throw-name">Strength</div>
                        
                        </div>

                        <div class="throw">

                            <div class="mod-select" id="dex-throw-select"><span class="select" id="dex-select"></span></div>
                            <div class="throw-mod" id="dex-mod">+2</div>
                            <div class="throw-name">Dexterity</div>
                        
                        </div>

                        <div class="throw">

                            <div class="mod-select" id="con-throw-select"><span class="select" id="con-select"></span></div>
                            <div class="throw-mod" id="con-mod">+2</div>
                            <div class="throw-name">Constitution</div>
                        
                        </div>

                        <div class="throw">

                            <div class="mod-select" id="int-throw-select"><span class="select" id="int-select"></span></div>
                            <div class="throw-mod" id="int-mod">+2</div>
                            <div class="throw-name">Intelligence</div>
                        
                        </div>

                        <div class="throw">

                            <div class="mod-select" id="wis-throw-select"><span class="select" id="wis-select"></span></div>
                            <div class="throw-mod" id="wis-mod">+2</div>
                            <div class="throw-name">Wisdom</div>
                        
                        </div>

                        <div class="throw">

                            <div class="mod-select" id="cha-throw-select"><span class="select" id="cha-select"></span></div>
                            <div class="throw-mod" id="cha-mod">+2</div>
                            <div class="throw-name">Charisma</div>
                        
                        </div>

                    </div>

                    <div class="throws-container-name">SAVING THROWS</div>

                </div>

                <div class="skills-container">
                
                    <form action="">

                        <div class="skills">

                            <div class="skill">

                                <div class="skill-select" id="acr-throw-select"><span class="select" id="acr-select"></span></div>
                                <div class="throw-mod" id="acr-mod">+2</div>
                                <div class="throw-name">Acrobatics</div>    

                            </div>

                            <div class="skill">

                                <div class="skill-select" id="ah-throw-select"><span class="select" id="ah-select"></span></div>
                                <div class="throw-mod" id="ah-mod">+2</div>
                                <div class="throw-name">Animal Handling</div>    

                            </div>

                            <div class="skill">

                                <div class="skill-select" id="arc-throw-select"><span class="select" id="arc-select"></span></div>
                                <div class="throw-mod" id="arc-mod">+2</div>
                                <div class="throw-name">Arcana</div>    

                            </div>

                            <div class="skill">

                                <div class="skill-select" id="ath-throw-select"><span class="select" id="ath-select"></span></div>
                                <div class="throw-mod" id="ath-mod">+2</div>
                                <div class="throw-name">Athletics</div>    

                            </div>

                            <div class="skill">

                                <div class="skill-select" id="dec-throw-select"><span class="select" id="dec-select"></span></div>
                                <div class="throw-mod" id="dec-mod">+2</div>
                                <div class="throw-name">Deception</div>    

                            </div>

                            <div class="skill">

                                <div class="skill-select" id="his-throw-select"><span class="select" id="his-select"></span></div>
                                <div class="throw-mod" id="his-mod">+2</div>
                                <div class="throw-name">History</div>    

                            </div>

                            <div class="skill">

                                <div class="skill-select" id="ins-throw-select"><span class="select" id="ins-select"></span></div>
                                <div class="throw-mod" id="ins-mod">+2</div>
                                <div class="throw-name">Insight</div>    

                            </div>

                            <div class="skill">

                                <div class="skill-select" id="intim-throw-select"><span class="select" id="intim-select"></span></div>
                                <div class="throw-mod" id="intim-mod">+2</div>
                                <div class="throw-name">Intimidation</div>    

                            </div>

                            <div class="skill">

                                <div class="skill-select" id="inves-throw-select"><span class="select" id="inves-select"></span></div>
                                <div class="throw-mod" id="inves-mod">+2</div>
                                <div class="throw-name">Investigation</div>    

                            </div>

                            <div class="skill">

                                <div class="skill-select" id="med-throw-select"><span class="select" id="med-select"></span></div>
                                <div class="throw-mod" id="med-mod">+2</div>
                                <div class="throw-name">Medicine</div>    

                            </div>

                            <div class="skill">

                                <div class="skill-select" id="nat-throw-select"><span class="select" id="nat-select"></span></div>
                                <div class="throw-mod" id="nat-mod">+2</div>
                                <div class="throw-name">Nature</div>    

                            </div>

                            <div class="skill">

                                <div class="skill-select" id="perc-throw-select"><span class="select" id="perc-select"></span></div>
                                <div class="throw-mod" id="perc-mod">+2</div>
                                <div class="throw-name">Perception</div>    

                            </div>

                            <div class="skill">

                                <div class="skill-select" id="perf-throw-select"><span class="select" id="perf-select"></span></div>
                                <div class="throw-mod" id="perf-mod">+2</div>
                                <div class="throw-name">Performance</div>    

                            </div>

                            <div class="skill">

                                <div class="skill-select" id="pers-throw-select"><span class="select" id="pers-select"></span></div>
                                <div class="throw-mod" id="pers-mod">+2</div>
                                <div class="throw-name">Persuasion</div>    

                            </div>

                            <div class="skill">

                                <div class="skill-select" id="rel-throw-select"><span class="select" id="rel-select"></span></div>
                                <div class="throw-mod" id="rel-mod">+2</div>
                                <div class="throw-name">Religion</div>    

                            </div>

                            <div class="skill">

                                <div class="skill-select" id="soh-throw-select"><span class="select" id="soh-select"></span></div>
                                <div class="throw-mod" id="soh-mod">+2</div>
                                <div class="throw-name">Sleight of Hand</div>    

                            </div>

                            <div class="skill">

                                <div class="skill-select" id="ste-throw-select"><span class="select" id="ste-select"></span></div>
                                <div class="throw-mod" id="ste-mod">+2</div>
                                <div class="throw-name">Stealth</div>    

                            </div>

                            <div class="skill">

                                <div class="skill-select" id="surv-throw-select"><span class="select" id="surv-select"></span></div>
                                <div class="throw-mod" id="surv-mod">+2</div>
                                <div class="throw-name">Survival</div>    

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