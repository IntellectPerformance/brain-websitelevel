
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

	<?php include 'controller/level.php'; ?>

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

