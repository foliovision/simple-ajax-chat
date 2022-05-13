<?php // Simple Ajax Chat > Form Nonce

// if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) || ($_SERVER['HTTP_X_REQUESTED_WITH'] !== 'XMLHttpRequest')) die();

$sac_nonces = array(
	'tXyV48eupK[g,8u[M_mI]p]A',
	'uy73B:G%~rJ%a?sVBxB+ci~~',
	'?vpK=%+SqCaN$/q3WFY//Tae',
	'{RYS;Y]WErcnxk@}ShN{sH0v',
	'bz/MjPvzw,Yo3}Rfyp[_J_5:',
	'-wgfX][~s|-|4nc;pF9Mt!pi',
	'pCfUnfmS:aCUH/DkGGUd%|*-',
	'4iXNg)6*c;3UHV|NhQYYS/VK',
	'nRWAs6,b8Q29zip0A#qk99fw',
	'2j(z_b1UeZLAuttY-7?nWdju',
);

$random_nonce = array_rand($sac_nonces, 1);

$sac_nonce = isset($sac_nonces[$random_nonce]) ? base64_encode($sac_nonces[$random_nonce]) : 0;

echo '<input type="hidden" id="sac_js_nonce" name="sac_js_nonce" value="'. $sac_nonce .'" />';
