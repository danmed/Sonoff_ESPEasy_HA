<?PHP
	$ACTION = $_GET['action'];
	if ($ACTION == "on") {$ACTION = "gpio,12,1";}
	if ($ACTION == "off") {$ACTION = "gpio,12,0";}
	if ($ACTION == "state") {$ACTION = "status,gpio,12";}
	$command = "http://" . $_GET['ip'] . "/control?cmd=" . $ACTION;
	$returned_content = file_get_contents($command);
	$json=json_decode($returned_content, true);
    echo $json[state];
?>
