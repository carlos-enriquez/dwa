<!DOCTYPE html>
<html>
<head>
    <title>Raffle v1</title>

<?php
    # Who are our contestants? 
        $contestants["Ethel"] = "";
        $contestants["Leroy"] = "";
        $contestants["Sam"]   = "";
        $contestants["Sandy"] = "";
        
		$contestants2["Ethel"] = "";
        $contestants2["Leroy"] = "";
        $contestants2["Sam"]   = "";
        $contestants2["Sandy"] = "";
        
		$cards = array("at.png","t2.png","t3.png","t4.png");
		 
		    
    # Pick and print a winning number 
        $how_many_contestants = count($contestants);
		$how_many_cards = count($cards);
		$how_many_cards = $how_many_cards-1;
		$winning_number = rand(1,$how_many_contestants);
		$winning_card = rand(0,$how_many_cards);
				
		# Count how many winner
		$count_winner = "";
    	
?>
</head>    
<body>
    <br>
    The winning number is <?=$winning_number?>!<br>
	
	<? # Loop through contestants, seeing if any won 
       foreach($contestants as $index => $this_contestant) {
       
        	# Generate a random number and card
				$random_number = rand(1,$how_many_contestants);
							
				# See if their generated random  number mathches the winning number
					if($random_number == $winning_number) {
					$contestants[$index] = "Winner! because his number is $random_number";
					
					$count_winner = $count_winner+1;
								
					}else {
					$contestants[$index] = "Loser :( because his number is $random_number";           
					}
					
	   }
		?>

    	<? foreach($contestants as $contestant => $winner_or_loser): ?>
       <br>
        <?=$contestant?> is a <?=$winner_or_loser?><br>
		
		<? endforeach; ?>
    <?
    
	if($count_winner == ""){
		$ganadores = "Nobody Win";
	}elseif($count_winner == '1'){
		$ganadores = "Only one winner";
	}elseif($count_winner>1 and $count_winner<4){
		$ganadores = "Its a tie";
	}elseif($count_winner == "4"){
			$ganadores = "Everybody Win";
			}
    ?>
      
    <br>
    <?=$ganadores?>
    <br><br><br>
    
    <p><a href="index.php">Play Again</a></p>
    
    <p><a href="../index.html">Go back</a></p>
    
    <br><br><br>
    
    Different Game <br>
    The winning card is
    <br>
    <? echo "<img src=\"$cards[$winning_card]\" title=\"Error\" alt=\"Error\" />";	?>
    <br>
    
            
        <? # Loop through contestants, seeing if any won 
       foreach($contestants2 as $index => $this_contestant2) {
       
        	# Generate a random number and card
				$carta_jugador = rand(0,$how_many_cards);
					
				# See if their generated random  number mathches the winning number
					
					if($carta_jugador == $winning_card) {
					$contestants2[$index] = "Winner! because his card is <img src=\"$cards[$carta_jugador]\" title=\"Error\" alt=\"Error\" />";
					
					$count_winner = $count_winner+1;
								
					}else {
					$contestants2[$index] = "Loser :( because his card is <img src=\"$cards[$carta_jugador]\" title=\"Error\" alt=\"Error\" />";           
					}
					
	   }
		?>
        
        <? foreach($contestants2 as $contestant2 => $winner_or_loser2): ?>
       <br>
       
        <?=$contestant2?> is a <?=$winner_or_loser2?><br>
		
		<? endforeach; ?>	
    
  
</body>
</html>