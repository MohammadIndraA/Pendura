<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    include_once 'database.php';
    include_once 'nodemcu_log.php';

    $database = new Database();
    $db = $database->getConnection();

    $item = new Nodemcu_log($db);
	
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		// The request is using the POST method
		$data = json_decode(file_get_contents("php://input"));
		$item->mq_135 = $data->sensorco;
		$item->mq_09 = $data->sensorgas;
        $item->mq_07 = $data->gas;
	} 
    elseif ($_SERVER['REQUEST_METHOD'] === 'GET'){
		// The request is using the GET method
		$item->mq_135 = isset($_GET['mq_135']) ? $_GET['mq_135'] : die('wrong structure!');
		$item->mq_09 = isset($_GET['mq_09']) ? $_GET['mq_09'] : die('wrong structure!');
        $item->mq_07 = isset($_GET['mq_07']) ? $_GET['mq_07'] : die('wrong structure!');
	}else {
		die('wrong request method');
	}
	
    if($item->createLogData()){
        echo 'Data created successfully.';
    } else{
        echo 'Data could not be created.';
    }
?>
