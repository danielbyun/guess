<?php

    define("TITLE", "JavaScript Game | How Many Fingers");

?>

<!DOCTYPE html>
<html>

    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
        
        <style>
            
            * {
                font-family: 'Inconsolata', monospace; 
            }
            
            .center {
                text-align: center;
            }
            
            h1{
                color: black;
                -webkit-text-fill-color: black;
                -webkit-text-stroke-width: 1px;
                -webkit-text-stroke-color: grey;
                text-shadow: 2px 2px #FFC3E1;
                font-weight: 700;
                line-height: normal;  
                word-spacing: 0.4em;
                margin-bottom: 5em;
                margin-top: 2em;
            }
            
            p {
                margin-bottom: 1em;
            }
            
            #guess {
                width: 15em;
                padding: 1em;
                box-shadow: 3px 3px 5px #888888;
            }
            
            #checkGuess {
                padding: 1em;
                box-shadow: 3px 3px 5px #888888;
            }
            
            input:focus {
                outline: none;
            }
            
            .noSpace {
                word-spacing: 0;
            }
            
        </style>    
        
        <title>
            <?php echo TITLE; ?>
        </title>
    
    </head>
    
    <body>
    
        <div class="center">
            <h1>How many fingers am I holding up? <span class="noSpace">(0 - 5)</span></h1>

            <p id="answer"></p>
            <input type="number" id="guess" placeholder="Guess here!">
            <button type="submit" id="checkGuess">Guess</button>
        </div>
        
        <script type="text/javascript">
            
            var fingers, guess, random;
            
            //fingers = Math.round((Math.random() * 4))+1;
            
            guess = document.getElementById("guess");
            
            // to be able to generate random number after if/else statement is ran
            function randomize(){
                
                return Math.floor((Math.random() * 6));
                
            }
              document.getElementById("checkGuess").addEventListener('click', function(){
                  // random number
                  random = Math.floor((Math.random() * 6));
                  
                  console.log(random);
                  
                if (guess.valueAsNumber === random){
                    
                    document.getElementById("answer").innerHTML = "Damn, you got it right! It was: " + random + " and you guessed " + guess.valueAsNumber;
                                        
                    guess.value = "";
                    
                } else {
                    
                    document.getElementById("answer").innerHTML = "Sorry! Try again," + " it was " + random + ", and you guessed " + guess.valueAsNumber;
                                        
                    guess.value = "";

                }
                
            })

            randomize();
            
        </script>        
        
    </body>
    
</html>