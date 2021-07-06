
    <title><?= $config['hotelName'] ?>: Level Rewards</title>
<?php 
include_once 'includes/header_scripts.php'; 

?>
</head>
<style>

.alert>.start-icon {
    margin-right: 0;
    min-width: 20px;
    text-align: center;
}

.alert>.start-icon {
    margin-right: 5px;
}

.greencross
{
  font-size:18px;
      color: #25ff0b;
    text-shadow: none;
}

.alert-simple.alert-success
{
  border: 1px solid rgba(36, 241, 6, 0.46);
    background-color: rgba(7, 149, 66, 0.12156862745098039);
    box-shadow: 0px 0px 2px #259c08;
    color: #0ad406;
  text-shadow: 2px 1px #00040a;
  transition:0.5s;
  cursor:pointer;
}
.alert-success:hover{
  background-color: rgba(7, 149, 66, 0.35);
  transition:0.5s;
}
.alert-simple.alert-info
{
  border: 1px solid #0000;
    background-color: white;
    box-shadow: 0px 0px 2px #0396ff;
    color: gray;
  transition:0.5s;
  cursor:pointer;
}

.blue-cross
{
  font-size: 18px;
    color: black;
    text-shadow: none;
}

.alert-simple.alert-warning
{
      border: 1px solid rgba(241, 142, 6, 0.81);
    background-color: rgba(220, 128, 1, 0.16);
    box-shadow: 0px 0px 2px #ffb103;
    color: #ffb103;
    text-shadow: 2px 1px #00040a;
  transition:0.5s;
  cursor:pointer;
}

.alert-warning:hover{
  background-color: rgba(220, 128, 1, 0.33);
  transition:0.5s;
}

.warning
{
      font-size: 18px;
    color: #ffb40b;
    text-shadow: none;
}

.alert-simple.alert-danger
{
  border: 1px solid rgba(241, 6, 6, 0.81);
    background-color: rgba(220, 17, 1, 0.16);
    box-shadow: 0px 0px 2px #ff0303;
    color: #ff0303;
    text-shadow: 2px 1px #00040a;
  transition:0.5s;
  cursor:pointer;
}

.alert-danger:hover
{
     background-color: rgba(220, 17, 1, 0.33);
  transition:0.5s;
}

.danger
{
      font-size: 18px;
    color: #ff0303;
    text-shadow: none;
}

.alert-simple.alert-primary
{
  border: 1px solid rgba(6, 241, 226, 0.81);
    background-color: rgba(1, 204, 220, 0.16);
    box-shadow: 0px 0px 2px #03fff5;
    color: #03d0ff;
    text-shadow: 2px 1px #00040a;
  transition:0.5s;
  cursor:pointer;
}

.alert-primary:hover{
  background-color: rgba(1, 204, 220, 0.33);
   transition:0.5s;
}

.alertprimary
{
      font-size: 18px;
    color: #03d0ff;
    text-shadow: none;
}

.square_box {
    position: absolute;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
    border-top-left-radius: 45px;
    opacity: 0.302;
}

.square_box.box_three {
    background-image: -moz-linear-gradient(-90deg, #290a59 0%, #3d57f4 100%);
    background-image: -webkit-linear-gradient(-90deg, #290a59 0%, #3d57f4 100%);
    background-image: -ms-linear-gradient(-90deg, #290a59 0%, #3d57f4 100%);
    opacity: 0.059;
    left: -80px;
    top: -60px;
    width: 500px;
    height: 500px;
    border-radius: 45px;
}

.square_box.box_four {
    background-image: -moz-linear-gradient(-90deg, #290a59 0%, #3d57f4 100%);
    background-image: -webkit-linear-gradient(-90deg, #290a59 0%, #3d57f4 100%);
    background-image: -ms-linear-gradient(-90deg, #290a59 0%, #3d57f4 100%);
    opacity: 0.059;
    left: 150px;
    top: -25px;
    width: 550px;
    height: 550px;
    border-radius: 45px;
}

.alert:before {
    content: '';
    position: absolute;
    width: 0;
    height: calc(100% - 44px);
    border-left: 1px solid;
    border-right: 2px solid;
    border-bottom-right-radius: 3px;
    border-top-right-radius: 3px;
    left: 0;
    top: 50%;
    transform: translate(0,-50%);
      height: 20px;
}

.fa-times
{
-webkit-animation: blink-1 2s infinite both;
	        animation: blink-1 2s infinite both;
}


/**
 * ----------------------------------------
 * animation blink-1
 * ----------------------------------------
 */
@-webkit-keyframes blink-1 {
  0%,
  50%,
  100% {
    opacity: 1;
  }
  25%,
  75% {
    opacity: 0;
  }
}
@keyframes blink-1 {
  0%,
  50%,
  100% {
    opacity: 1;
  }
  25%,
  75% {
    opacity: 0;
  }
}

</style>
<script>
	// Uitzetten van f12 bullshit.
    document.addEventListener('contextmenu', event => event.preventDefault());
 
    document.onkeydown = function (e) {
 

        if(e.keyCode == 123) {
            return false;
        }
 

        if(e.ctrlKey && e.shiftKey && e.keyCode == 73){
            return false;
        }

        if(e.ctrlKey && e.shiftKey && e.keyCode == 74) {
            return false;
        }

        if(e.ctrlKey && e.keyCode == 85) {
            return false;
        }
    }
 
</script>
<style>

		.reward-container-reward-title-caprihotel {
			text-align: center;
			
		}
		.reward-container-reward-title-caprihotel {
			float: left;
			padding: 2px;
			margin: 5px;
			border: 1px solid #0000;
			cursor: pointer;
			border-radius: 6px;
			transition: 0.2s;
			
		}
		.reward-container-reward-title-caprihotel:hover {
			float: left;
			padding: 2px;
			margin: 5px;
			border: 1px solid #0000;
			cursor: pointer;
			background-color: lightgray;
			transition: 0.5s;
		}
		
		</style>
<body >
<?php

		// level Rewards gemaakt door Milan -> Psychology.
		if(User::userData('ls_experience') < 1000) {
			$levelShow = 0;
		} elseif (User::userData('ls_experience') < 2000) {
			$levelShow = 1;
		} elseif (User::userData('ls_experience') < 3000) {
			$levelShow = 2;
		} elseif (User::userData('ls_experience') < 4000) {
			$levelShow = 3;
		} elseif (User::userData('ls_experience') < 5000) {
			$levelShow = 4;
		} elseif (User::userData('ls_experience') < 6000) {
			$levelShow = 5;
		} elseif (User::userData('ls_experience') < 7000) {
			$levelShow = 6;
		} elseif (User::userData('ls_experience') < 8000) {
			$levelShow = 7;
		} elseif (User::userData('ls_experience') < 9000) {
			$levelShow = 8;
		} elseif (User::userData('ls_experience') < 10000) {
			$levelShow = 9;
		} elseif (User::userData('ls_experience') < 11000) {
			$levelShow = 10;
		} elseif (User::userData('ls_experience') < 12000) {
			$levelShow = 11;
		} elseif (User::userData('ls_experience') < 13000) {
			$levelShow = 12;
		} elseif (User::userData('ls_experience') < 14000) {
			$levelShow = 13;
		} elseif (User::userData('ls_experience') < 15000) {
			$levelShow = 14;
		} elseif (User::userData('ls_experience') < 16000) {
			$levelShow = 15;
		} elseif (User::userData('ls_experience') < 17000) {
			$levelShow = 16;
		} elseif (User::userData('ls_experience') < 18000) {
			$levelShow = 17;
		}
		
		if (User::userData('ls_experience') > 4999) {
			if (User::userData('claim_level') < 1) {
			$buttonlvl5 = '<button type="submit" name="level5" class="btn big green">Claim</button>';
		} else {
			$buttonlvl5 = '<button class="btn big red">Claim</button>';
			}
		} else {
			$buttonlvl5 = '<button class="btn big green">Level 5</button>';
		}
		
		if (User::userData('ls_experience') > 9999) {
			if (User::userData('claim_level') < 2) {
			$buttonlvl10 = '<button type="submit" name="level10" class="btn big green">Claim</button>';
		} else {
			$buttonlvl10 = '<button class="btn big red">Claim</button>';
			}
		} else {
			$buttonlvl10 = '<button class="btn big green">Level 10</button>';
		}
		
		if (User::userData('ls_experience') > 14999) {
			if (User::userData('claim_level') < 3) {
			$buttonlvl15 = '<button type="submit" name="level15" class="btn big green">Claim</button>';
		} else {
			$buttonlvl15 = '<button class="btn big red">Claim</button>';
			}
		} else {
			$buttonlvl15 = '<button class="btn big green">Level 15</button>';
		}
		
		if (User::userData('ls_experience') > 19999) {
			if (User::userData('claim_level') < 4) {
			$buttonlvl20 = '<button type="submit" name="level20" class="btn big green">Claim</button>';
		} else {
			$buttonlvl20 = '<button class="btn big red">Claim</button>';
			}
		} else {
			$buttonlvl20 = '<button class="btn big green">Level 20</button>';
		}
		
		if (User::userData('ls_experience') > 24999) {
			if (User::userData('claim_level') < 5) {
			$buttonlvl25 = '<button type="submit" name="level25" class="btn big green">Claim</button>';
		} else {
			$buttonlvl25 = '<button class="btn big red">Claim</button>';
			}
		} else {
			$buttonlvl25 = '<button class="btn big green">Level 25</button>';
		}
		
		if (User::userData('ls_experience') > 29999) {
			if (User::userData('claim_level') < 6) {
			$buttonlvl30 = '<button type="submit" name="level30" class="btn big green">Claim</button>';
		} else {
			$buttonlvl30 = '<button class="btn big red">Claim</button>';
			}
		} else {
			$buttonlvl30 = '<button class="btn big green">Level 30</button>';
		}
		
		if (User::userData('ls_experience') > 34999) {
			if (User::userData('claim_level') < 7) {
			$buttonlvl35 = '<button type="submit" name="level35" class="btn big green">Claim</button>';
		} else {
			$buttonlvl35 = '<button class="btn big red">Claim</button>';
			}
		} else {
			$buttonlvl35 = '<button class="btn big green">Level 35</button>';
		}
		
		if (User::userData('ls_experience') > 39999) {
			if (User::userData('claim_level') < 8) {
			$buttonlvl40 = '<button type="submit" name="level40" class="btn big green">Claim</button>';
		} else {
			$buttonlvl40 = '<button class="btn big red">Claim</button>';
			}
		} else {
			$buttonlvl40 = '<button class="btn big green">Level 40</button>';
		}
		
		if (User::userData('claim_level') == 0) {
			$prestigelevel = 'Geen';
		}
		
		if (User::userData('claim_level') == 1  || (User::userData('claim_level') == 2)) {
			$prestigelevel = '<img src="/templates/yada/img/levelprestige/prestige1.gif" width="40">';
			
		} elseif (User::userData('claim_level') == 3  ||  (User::userData('claim_level') == 4)) {
			$prestigelevel = '<img src="/templates/yada/img/levelprestige/prestige2.gif" width="40">';
			}
			elseif (User::userData('claim_level') == 5 || (User::userData('claim_level') == 6)) {
			$prestigelevel = '<img src="/templates/yada/img/levelprestige/prestige3.gif" width="40">';
			} 
			
			if (User::userData('claim_level') > 6) {
			$prestigelevel = '<img src="/templates/yada/img/levelprestige/prestige4.gif" width="40">';
			} 
			
		?>

<div class="container">
	<div class="row">
        <div class="col-4">
		 <div id="shadow-box" style="height: 20px; text-align: center;">
          <i class="start-icon  fa fa-info-circle faa-shake animated"></i>
          <strong class="font__weight-semibold">BETA</strong> Functie is nog in programmeer fase.
        </div>
            <div id="shadow-box">
                <div style="height: 70px;" class="title-box png20">
                    <div class="title">Jouw level statistieken</div>
					<div class="desc">Elke 1000XP is 1 level erbij</div>
                </div>
                <div class="png20">
					
                   Jouw Huidige Level: <b><?php  echo $levelShow ?></b><br>
				   
                   Jouw totale XP: <b><?php echo User::userData('ls_experience') ?></b><br>
				   
                   <h4>Jouw Prestige: <?php  echo $prestigelevel ?></h4> </b>
                </div>
            </div>
            <div id="shadow-box">
                <div class="title-box png20" style="height: 80px;">
                    <div class="title">BELANGRIJK!!</div>
					<div class="desc">Lees dit eerst, voordat je al gaat beginnen met claimen!</div>
                </div>
                <div class="png20">
					Hey, <b><?= User::userData('username') ?></b> kleine tip, ga van laag naar hoog claimen, anders blokkeer je alle onder staande. Hierdoor denkt het systeem dat je de vorige ook hebt geclaimed, maar dat is niet waar. Mocht dit gebeuren wij kunnen je niet helpen.
					
					<hr>
					Alhoewel, <b>Milan</b> in het hotel dit kan, <b>Milan</b> kan jouw level rewards resetten hierdoor kan je alles weer claimen wat bij jouw level toe behoort. Maar of dit gegarandeerd uitgevoert wordt door hem, is een vraag.
                </div>
            </div>
        </div>
		<div class="col-8">
		<?= levelreward() ?>
		
		
                                            <div id="shadow-box" style="width: 642px;">
                                              <div class="title-box png20" style="background-color:#d32f2f;background-repeat: no-repeat;background-position: right;height: 70px;">
                                                 <div class="title"><font color="white">Level Rewards</font></div>
                                                 <div class="desc"><font color="white">Hier kan je alle pakketten zien die je kan krijgen of mogelijk kan claimen.</font></div>
                                            </div>
                                <div class="png20" style="height: 470px; position: relative;">
                                    <div id="reward-container-caprihotel">
									<form method="POST">
										<div class="reward-container-reward-title-caprihotel">
										<img style="position: absolute;" src="/templates/yada/img/levelprestige/prestige1.gif" width="40">
											<p><img src="/templates/yada/img/present.gif" width="80"></p>
											<p><?php echo $config['diamondTen']?> Diamanten</p>
											<?php echo $buttonlvl5 ?>
											
										</div>
										<div class="reward-container-reward-title-caprihotel">
											<p><img src="/templates/yada/img/present2.gif" width="80"></p>
											<p><?php echo $config['diamondTen']?> Diamanten</p>
											<?php echo $buttonlvl10 ?>
										</div>
										<div class="reward-container-reward-title-caprihotel">
										<img style="position: absolute;" src="/templates/yada/img/levelprestige/prestige2.gif" width="40">
											<p><img src="/templates/yada/img/present.gif" width="80"></p>
											<p><?php echo $config['diamondTen']?> Diamanten</p>
											<?php echo $buttonlvl15 ?>
										</div>
										<div class="reward-container-reward-title-caprihotel">
											<p><img src="/templates/yada/img/present2.gif" width="80"></p>
											<p><?php echo $config['diamondTen']?> Diamanten</p>
											<?php echo $buttonlvl20 ?>
										</div>
										<div class="reward-container-reward-title-caprihotel">
										<img style="position: absolute;" src="/templates/yada/img/levelprestige/prestige3.gif" width="40">
											<p><img src="/templates/yada/img/present.gif" width="80"></p>
											<p><?php echo $config['diamondTen']?> Diamanten</p>
											<?php echo $buttonlvl25 ?>
										</div>
										<div class="reward-container-reward-title-caprihotel">
											<p><img src="/templates/yada/img/present2.gif" width="80"></p>
											<p><?php echo $config['diamondTen']?> Diamanten</p>
											<?php echo $buttonlvl30 ?>
										</div>
										<div class="reward-container-reward-title-caprihotel">
										<img style="position: absolute;" src="/templates/yada/img/levelprestige/prestige4.gif" width="40">
											<p><img src="/templates/yada/img/present.gif" width="80"></p>
											<p><?php echo $config['diamondTen']?> Diamanten</p>
											<?php echo $buttonlvl35 ?>
										</div>
										<div class="reward-container-reward-title-caprihotel">
											<p><img src="/templates/yada/img/present2.gif" width="80"></p>
											<p><?php echo $config['diamondTen']?> Diamanten</p>
											<?php echo $buttonlvl40 ?>
										</div>
										</form>
									</div>
                                </div>
                        </div>
            	</div>
                        
</div>
</div>
<?php
include_once 'includes/footer.php';
?>

