<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Colorblind Test</title>

</head>
<body>

<div id="container-fluid"  style="background-image: linear-gradient(#7AB3B0, #ddb075); padding:auto;" class="text-center">
    <h2><br/>Result<br/><br></h2>
    
    <?php $score =0; ?>
    
      <?php $array1= array(); ?>
      <?php $array2= array(); ?>    
      <?php $array3= array(); ?>
      <?php $array4= array(); ?>

         <?php foreach($checks as $checkans) { ?>
               <?php array_push($array1, $checkans); } ?>
               <!-- array1: isinya checkans dari view yang melalui model-->
               
        <?php foreach($answer as $res) { ?>
               <?php array_push($array2, $res->answer); 
            //    array2 isinya hasil dari ambil database
			         array_push($array3, $res->id); 
                     array_push($array4, $res->answer); 
			   } ?>
               
    <?php for ($x=0; $x <25; $x++) { 
         if ($array2[$x]!=$array1[$x]) { //wrong answer
          }else{
            $score = $score + 1;      
        }
    } ?>
    <h2>Your Score: </h2>
      <h1><?=$score?></h1>
      <h2>Your Result: </h2>
    <?php if ($score>13){?>
        <h3 style="color: #5cb85c">Normal</h1>
    <?php  } else if ($score==12 || $score==13) {?>
        <h3 style="color: #f0ad4e">Partially Colorblinded</h1>
    <?php } else {?>
        <h3 style="color: #d9534f">Colorblind</h1>
    <?php } ?>
</div>

</body>
</html>