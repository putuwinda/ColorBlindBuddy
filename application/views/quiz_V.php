<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Quiz</title>
    <style>
    /* Customize the label (the container) */
        .container {
        display: block;
        position: relative;
        padding-left: 0.5cm;
        margin-right: 3cm;
        margin-left: 1.3cm;
        height: 2cm;
        width: 6cm;
        vertical-align: middle;
        text-align: center;
        position: relative;
        cursor: pointer;
        font-size: 20px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        border-color: #91c46d;
        border-radius: 0.5cm;
        background-color: #b0c879;
        }

        /* Hide the browser's default radio button */
        .container input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
        }

        /* Create a custom radio button */
        /* .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 25px;
        width: 25px;
        background-color: #eee;
        border-radius: 50%;
        } */

        /* On mouse-over, add a grey background color */
        /* .container:hover input ~ .checkmark {
        background-color: #008080;
        } */
        .container:hover{
            background-color: #d2eb8d;
        }

        /* When the radio button is checked, add a blue background */
        .container input:checked ~ .checkmark {
            background-color: white;
        }

        /* Create the indicator (the dot/circle - hidden when not checked) */
        .checkmark:after {
        content: "";
        position: absolute;
        display: none;
        }

        /* Show the indicator (dot/circle) when checked */
        .container input:checked ~ .checkmark:after {
        display: block;
        }

        /* Style the indicator (dot/circle) */
        .container .checkmark:after {
        top: 9px;
        left: 9px;
        width: 8px;
        height: 8px;
        margin-left: 0.3 cm;
        border-radius: 50%;
        background: white;
        }
    </style>
</head>
<body>

<div id="quiz" style="background-image: linear-gradient(#7AB3B0, #ddb075)" class="text-center">
	<h2><br/>Choose the correct ones!</h2>
    
    <form class="card" style = "width:30cm; background-color: transparent;margin:auto" method="post" action="<?php echo base_url();?>index.php/quiz/resultdisplay">
       
    
    <?php foreach($questions as $row) { ?>
    
    <?php $ans_array = array($row->choice1, $row->choice2, $row->choice3);
	shuffle($ans_array); ?>
    
    <h5 class="card-header"><?=$row->question?></h5>
    <div class="p-3 mx-auto card-body form-check form-check-inline" style="margin-right:3cm">
        <label class="container">
            <input type="radio" name="quizid<?=$row->id?>" value="<?=$ans_array[0]?>" required> <?=$ans_array[0]?>
            <span class="checkmark"></span>
        </label>
        <label class="container">
            <input type="radio" name="quizid<?=$row->id?>" value="<?=$ans_array[1]?>" required> <?=$ans_array[1]?>
            <span class="checkmark"></span>
        </label>
        <label class="container">
            <input type="radio" name="quizid<?=$row->id?>" value="<?=$ans_array[2]?>" required> <?=$ans_array[2]?>
            <span class="checkmark"></span>
        </label>
    </div>
    
    <?php } ?>
    
    <input class="btn btn-dark" style="width:5cm;margin:auto" type="submit" value="Submit!" id="submit">
    <br/>
    </form>
    
</div>

</body>
</html>