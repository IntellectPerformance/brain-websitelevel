
    <title><?= $config['hotelName'] ?>: Level Rewards</title>
<?php 
include_once 'includes/header_scripts.php'; 

?>
</head>
<style>

		.reward-container-reward-title-websitelevel {
			text-align: center;
			
		}
		.reward-container-reward-title-websitelevel {
			float: left;
			padding: 2px;
			margin: 5px;
			border: 1px solid #0000;
			cursor: pointer;
			border-radius: 6px;
			transition: 0.2s;
			
		}
		.reward-container-reward-title-websitelevel:hover {
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

		// level Rewards gemaakt door Milan
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
                                    <div id="reward-container-websitelevel">
									<form method="POST">
										<div class="reward-container-reward-title-websitelevel">
										<img style="position: absolute;" src="/templates/yada/img/levelprestige/prestige1.gif" width="40">
											<p><img src="/templates/yada/img/present.gif" width="80"></p>
											<p><?php echo $config['diamondTen']?> Diamanten</p>
											<?php echo $buttonlvl5 ?>
											
										</div>
										<div class="reward-container-reward-title-websitelevel">
											<p><img src="/templates/yada/img/present2.gif" width="80"></p>
											<p><?php echo $config['diamondTen']?> Diamanten</p>
											<?php echo $buttonlvl10 ?>
										</div>
										<div class="reward-container-reward-title-websitelevel">
										<img style="position: absolute;" src="/templates/yada/img/levelprestige/prestige2.gif" width="40">
											<p><img src="/templates/yada/img/present.gif" width="80"></p>
											<p><?php echo $config['diamondTen']?> Diamanten</p>
											<?php echo $buttonlvl15 ?>
										</div>
										<div class="reward-container-reward-title-websitelevel">
											<p><img src="/templates/yada/img/present2.gif" width="80"></p>
											<p><?php echo $config['diamondTen']?> Diamanten</p>
											<?php echo $buttonlvl20 ?>
										</div>
										<div class="reward-container-reward-title-websitelevel">
										<img style="position: absolute;" src="/templates/yada/img/levelprestige/prestige3.gif" width="40">
											<p><img src="/templates/yada/img/present.gif" width="80"></p>
											<p><?php echo $config['diamondTen']?> Diamanten</p>
											<?php echo $buttonlvl25 ?>
										</div>
										<div class="reward-container-reward-title-websitelevel">
											<p><img src="/templates/yada/img/present2.gif" width="80"></p>
											<p><?php echo $config['diamondTen']?> Diamanten</p>
											<?php echo $buttonlvl30 ?>
										</div>
										<div class="reward-container-reward-title-websitelevel">
										<img style="position: absolute;" src="/templates/yada/img/levelprestige/prestige4.gif" width="40">
											<p><img src="/templates/yada/img/present.gif" width="80"></p>
											<p><?php echo $config['diamondTen']?> Diamanten</p>
											<?php echo $buttonlvl35 ?>
										</div>
										<div class="reward-container-reward-title-websitelevel">
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

