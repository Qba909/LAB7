<?php
require_once 'init.php';


//2. wykonanie akcji
switch ($action) {
	default : // 'calcView'
		// utwórz obiekt i uzyj
		$ctrl = new app\controllers\CalcCtrl();
		$ctrl->generateView ();
	break;
	case 'calcCompute' :
		// utwórz obiekt i uzyj
		$ctrl = new app\controllers\CalcCtrl();
		$ctrl->process ();
	break;
}
