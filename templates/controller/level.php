<?php
	class LevelConfiguration 
	{
		function levelPreview() 
		{
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
		}
		
		function buttonHandler() 
		{
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
		}
		
		function PrestigePreview() 
		{
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
		}
	}
		?>