<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Quiz</title>

</head>
<body>

<div id="container"  style="background-image: linear-gradient(#7AB3B0, #ddb075)" class="text-center">
    <h2><br/>Results</h2>
    
    <?php $score =0; ?>
    
      <?php $array1= array(); ?>
      <?php $array2= array(); ?>    
      <?php $array3= array(); ?>
      <?php $array4= array(); ?>
      <?php $array5= array(); ?>
      <?php $array6= array(); ?>
      <?php $array7= array(); ?>
      <?php $array8= array(); ?>
      <?php $array9= array(); ?>
      
         <?php foreach($checks as $checkans) { ?>
               <?php array_push($array1, $checkans); } ?>
               
               
        <?php foreach($results as $res) { ?>
               <?php array_push($array2, $res->correctanswer); 
			         array_push($array3, $res->id); 
			         array_push($array4, $res->question); 
			         array_push($array5, $res->choice1); 
			         array_push($array6, $res->choice2); 
			         array_push($array7, $res->choice3); 
               array_push($array8, $res->correctanswer); 
               array_push($array9, $res->explanation);
			   } ?>
        <?php for ($x=0; $x <8; $x++) { ?>
 
    <form class="card" style = "width:30cm; background-color: transparent;margin:auto" method="post" action="<?php echo base_url();?>index.php/quiz/quizdisplay">  
  
    
    <h5 class="card-header"><p><?=$array3[$x]?>.<?=$array4[$x]?></p></h5>
    <div class="card-body">
      <?php if ($array2[$x]!=$array1[$x]) { //wrong answer ?> 
      
           <p><span style="background-color: #d9534f"><?=$array1[$x]?></span></p>
           <p><span style="background-color: #5cb85c"><?=$array2[$x]?></span></p>
           <p><span><?=$array9[$x]?></span></p>
           
      <?php } else { //right answer?>
      
           <p><span style="background-color: #5cb85c"><?=$array1[$x]?></span></p>
           <p><span><?=$array9[$x]?></span></p>
           <?php $score = $score + 1; ?>
    </div>             
    <?php }} ?>
    
    <br><br>
    
    <h2>Your Score: </h2>
      <h1><?=$score?>/8</h1>
    
    <input type="submit" class="btn btn-dark" value="Play Again!">
    
    </form>
    
</div>

</body>
</html>