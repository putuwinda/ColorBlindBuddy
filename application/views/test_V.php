<!DOCTYPE html>
<head>
<script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script> 
</head>

<body style="text-align: center">
    <form action="<?php echo site_url('index.php/Colorblindtest/cbtest');?>" style="background-image: linear-gradient(#7AB3B0, #ddb075); height:100%">
        <br/>
        <h3>Select the number you see on above circle of each. <br/> If you don't see numbers, just type "nothing". <br/> Click on the Submit button below when you're done.</br><?php echo $this->session->flashdata('info');?>    </h3>
        <div class="row" style="margin: 20px;">
            <div class="card col" style="margin: 10px; background-color: transparent">
                <img src="https://drive.google.com/uc?id=16dxth5eSO-z6yimF0ZtPXRt6T5LtZ4WO" class="card-img-top">
                <div class="card-body" action="<?php echo site_url('Colorblindtest/test');?>">
                    <input type="answer" class="form-control" id="ans1" style="background-color: transparent" placeholder="Enter your answer"><br/>
                    <!-- <button class="btn btn-dark" onclick="enable_disable1()">OK </button>   -->
                </div>
            </div>
            <div class="card col" style="margin: 10px; background-color: transparent">
                <img src="https://drive.google.com/uc?id=1DL5aqSmnSSRwHiS0fGySnJByvEBqZFsn" class="card-img-top">
                <div class="card-body">
                    <input type="answer" class="form-control" id="ans2" style="margin: 10px; background-color: transparent" placeholder="Enter your answer"><br/>
                    <!-- <button class="btn btn-dark" onclick="enable_disable2()">OK </button>   -->
                </div>
            </div>
            <div class="card col" style="margin: 10px; background-color: transparent">
                <img src="https://drive.google.com/uc?id=115PdfWeFUCsGK3nRad5gulF6d7jgg5ZT" class="card-img-top">
                <div class="card-body">
                    <input type="answer" class="form-control" id="ans3" style="background-color: transparent" placeholder="Enter your answer"><br/>
                    <!-- <button class="btn btn-dark" onclick="enable_disable3()">OK </button>   -->
                </div>
            </div>
            <div class="card col" style="margin: 10px; background-color: transparent">
                <img src="https://drive.google.com/uc?id=1f2KmcJXQy5wtqwqwTH1wPACuXVbZtAAh" class="card-img-top">
                <div class="card-body">
                    <input type="answer" class="form-control" id="ans4" style="background-color: transparent" placeholder="Enter your answer"><br/>
                    <!-- <button class="btn btn-dark" onclick="enable_disable4()">OK </button>   -->
                </div>
            </div>
            <div class="card col" style="margin: 10px; background-color: transparent">
                <img src="https://drive.google.com/uc?id=1K0MKXv16wLklFPsd-lcXNgXaOliYkQVk" class="card-img-top">
                <div class="card-body">
                    <input type="answer" class="form-control" id="ans5" style="background-color: transparent" placeholder="Enter your answer"><br/>
                    <!-- <button class="btn btn-dark" onclick="enable_disable5()">OK </button>   -->
                </div>
            </div>
        </div>
        <div class="row" style="margin: 20px">
            <div class="card col" style="margin: 10px; background-color: transparent">
                <img src="https://drive.google.com/uc?id=12pH3Y1IwO3MTF-pFvb5M-Bf-Zmy27MNn" class="card-img-top">
                <div class="card-body">
                    <input type="answer" class="form-control" id="ans6" style="background-color: transparent" placeholder="Enter your answer"><br/>
                    <!-- <button class="btn btn-dark" onclick="enable_disable6()">OK </button>   -->
                </div>
            </div>
            <div class="card col" style="margin: 10px; background-color: transparent">
                <img src="https://drive.google.com/uc?id=1gK3QMjbVgV6_-yFisbf8S8GqB7aQaMMD" class="card-img-top">
                <div class="card-body">
                    <input type="answer" class="form-control" id="ans7" style="background-color: transparent" placeholder="Enter your answer"><br/>
                    <!-- <button class="btn btn-dark" onclick="enable_disable7()">OK </button>   -->
                </div>
            </div>
            <div class="card col" style="margin: 10px; background-color: transparent">
                <img src="https://drive.google.com/uc?id=12564smX75uuYYMHNrE3kOR1q-TtOWnLP" class="card-img-top">
                <div class="card-body">
                    <input type="answer" class="form-control" id="ans8" style="background-color: transparent" placeholder="Enter your answer"><br/>
                    <!-- <button class="btn btn-dark" onclick="enable_disable8()">OK </button>   -->
                </div>
            </div>
            <div class="card col" style="margin: 10px; background-color: transparent">
                <img src="https://drive.google.com/uc?id=1oqjrx6bYH2UitJd6QucIwU-nali2kh0q" class="card-img-top">
                <div class="card-body">
                    <input type="answer" class="form-control" id="ans9" style="background-color: transparent" placeholder="Enter your answer"><br/>
                    <!-- <button class="btn btn-dark" onclick="enable_disable9()">OK </button>   -->
                </div>
            </div>
            <div class="card col" style="margin: 10px; background-color: transparent">
                <img src="https://drive.google.com/uc?id=1BBMn7Icz1m6FwClOLv4CECWpY6unOvNq" class="card-img-top">
                <div class="card-body">
                    <input type="answer" class="form-control" id="ans10" style="background-color: transparent" placeholder="Enter your answer"><br/>
                    <!-- <button class="btn btn-dark" onclick="enable_disable10()">OK </button>   -->
                </div>
            </div>
        </div>
        <div class="row" style="margin: 20px;">
            <div class="card col" style="margin: 10px; background-color: transparent">
                <img src="https://drive.google.com/uc?id=1gBgvO9A1Dn5OlhXFHe3S3EHtcHthI9PW" class="card-img-top">
                <div class="card-body">
                    <input type="answer" class="form-control" id="ans11" style="background-color: transparent" placeholder="Enter your answer"><br/>
                    <!-- <button class="btn btn-dark" onclick="enable_disable11()">OK </button>   -->
                </div>
            </div>
            <div class="card col" style="margin: 10px; background-color: transparent">
                <img src="https://drive.google.com/uc?id=1H26r87hOfr_dVScWgTx-xdAJUpSqj-hQ" class="card-img-top">
                <div class="card-body">
                    <input type="answer" class="form-control" id="ans12" style="margin: 10px; background-color: transparent" placeholder="Enter your answer"><br/>
                    <!-- <button class="btn btn-dark" onclick="enable_disable12()">OK </button>   -->
                </div>
            </div>
            <div class="card col" style="margin: 10px; background-color: transparent">
                <img src="https://drive.google.com/uc?id=1vvGPoe_9Z_C66tMLly1AwfwHkQdmlyum" class="card-img-top">
                <div class="card-body">
                    <input type="answer" class="form-control" id="ans13" style="background-color: transparent" placeholder="Enter your answer"><br/>
                    <!-- <button class="btn btn-dark" onclick="enable_disable13()">OK </button>   -->
                </div>
            </div>
            <div class="card col" style="margin: 10px; background-color: transparent">
                <img src="https://drive.google.com/uc?id=1PQxXGj-CCbcYIvSzfrxHA2kefa6sW8lT" class="card-img-top">
                <div class="card-body">
                    <input type="answer" class="form-control" id="ans14" style="background-color: transparent" placeholder="Enter your answer"><br/>
                    <!-- <button class="btn btn-dark" onclick="enable_disable14()">OK </button>   -->
                </div>
            </div>
            <div class="card col" style="margin: 10px; background-color: transparent">
                <img src="https://drive.google.com/uc?id=15qj7_o6ipowC_5gyVdINW7g62gd-NpUL" class="card-img-top">
                <div class="card-body">
                    <input type="answer" class="form-control" id="ans15" style="background-color: transparent" placeholder="Enter your answer"><br/>
                    <!-- <button class="btn btn-dark" onclick="enable_disable15()">OK </button>   -->
                </div>
            </div>
        </div>
        <div class="row" style="margin: 20px;">
            <div class="card col" style="margin: 10px; background-color: transparent">
                <img src="https://drive.google.com/uc?id=10MGafCICBj246b2qdAx8z-JmhO2qQRyv" class="card-img-top">
                <div class="card-body">
                    <input type="answer" class="form-control" id="ans16" style="background-color: transparent" placeholder="Enter your answer"><br/>
                    <!-- <button class="btn btn-dark" onclick="enable_disable16()">OK </button>   -->
                </div>
            </div>
            <div class="card col" style="margin: 10px; background-color: transparent">
                <img src="https://drive.google.com/uc?id=1DCotHjm6eOJ25msEpaRxxWfsqpV_c6Jm" class="card-img-top">
                <div class="card-body">
                    <input type="answer" class="form-control" id="ans17" style="margin: 10px; background-color: transparent" placeholder="Enter your answer"><br/>
                    <!-- <button class="btn btn-dark" onclick="enable_disable17()">OK </button>   -->
                </div>
            </div>
            <div class="card col" style="margin: 10px; background-color: transparent">
                <img src="https://drive.google.com/uc?id=1O74GeKBTyzUdrDwRhbo1JX_nlOEV10rS" class="card-img-top">
                <div class="card-body">
                    <input type="answer" class="form-control" id="ans18" style="background-color: transparent" placeholder="Enter your answer"><br/>
                    <!-- <button class="btn btn-dark" onclick="enable_disable18()">OK </button>   -->
                </div>
            </div>
            <div class="card col" style="margin: 10px; background-color: transparent">
                <img src="https://drive.google.com/uc?id=1s-c8TRExUmQ5rsOkzHcQoslce6nkPdEE" class="card-img-top">
                <div class="card-body">
                    <input type="answer" class="form-control" id="ans19" style="background-color: transparent" placeholder="Enter your answer"><br/>
                    <!-- <button class="btn btn-dark" onclick="enable_disable19()">OK </button>   -->
                </div>
            </div>
            <div class="card col" style="margin: 10px; background-color: transparent">
                <img src="https://drive.google.com/uc?id=1D3jpse7BRs9E-L4mGAmqOMd_rng1-Ir_" class="card-img-top">
                <div class="card-body">
                    <input type="answer" class="form-control" id="ans20" style="background-color: transparent" placeholder="Enter your answer"><br/>
                    <!-- <button class="btn btn-dark" onclick="enable_disable20()">OK </button>   -->
                </div>
            </div>
        </div>
        <div class="row" style="margin: 20px;">
            <div class="card col" style="margin: 10px; background-color: transparent">
                <img src="https://drive.google.com/uc?id=1kUhVXtgfhLpDL0guVsuwVm80ray4LZe-" class="card-img-top">
                <div class="card-body">
                    <input type="answer" class="form-control" id="ans21" style="background-color: transparent" placeholder="Enter your answer"><br/>
                    <!-- <button class="btn btn-dark" onclick="enable_disable21()">OK </button>   -->
                </div>
            </div>
            <div class="card col" style="margin: 10px; background-color: transparent">
                <img src="https://drive.google.com/uc?id=1OoTpFgd4TNo5Kpn6zq5MhomhOERZqYaC" class="card-img-top">
                <div class="card-body">
                    <input type="answer" class="form-control" id="ans22" style="margin: 10px; background-color: transparent" placeholder="Enter your answer"><br/>
                    <!-- <button class="btn btn-dark" onclick="enable_disable22()">OK </button>   -->
                </div>
            </div>
            <div class="card col" style="margin: 10px; background-color: transparent">
                <img src="https://drive.google.com/uc?id=1qWqKk_JCjmAasOGxTH7Le9y9qKzXykHH" class="card-img-top">
                <div class="card-body">
                    <input type="answer" class="form-control" id="ans23" style="background-color: transparent" placeholder="Enter your answer"><br/>
                    <!-- <button class="btn btn-dark" onclick="enable_disable23()">OK </button>   -->
                </div>
            </div>
            <div class="card col" style="margin: 10px; background-color: transparent">
                <img src="https://drive.google.com/uc?id=1l-JOM5Ovdy-TPfvhklCUPO5w5jUZhIxs" class="card-img-top">
                <div class="card-body">
                    <input type="answer" class="form-control" id="ans24" style="background-color: transparent" placeholder="Enter your answer"><br/>
                    <!-- <button class="btn btn-dark" onclick="enable_disable24()">OK </button>   -->
                </div>
            </div>
            <div class="card col" style="margin: 10px; background-color: transparent">
                <img src="https://drive.google.com/uc?id=1XVlnrc9ANA8-1Eon3y5OZpqrsS6JyXPW" class="card-img-top">
                <div class="card-body">
                    <input type="answer" class="form-control" id="ans25" style="background-color: transparent" placeholder="Enter your answer"><br/>
                    <!-- <button class="btn btn-dark" onclick="enable_disable25()">OK </button>   -->
                </div>
            </div>
        </div>
        <button class="btn btn-dark" >I am Finished!</button><br/>
    </form>
</body>