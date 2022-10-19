<html>
<head>
	<title>???</title>
</head>
	<body>
    <p><u>RESULTAT</u></p>	
    <?php 
    require_once(__DIR__ . '/vendor/autoload.php');

    #Obtenció del primer operand
            if ($_GET["op1"] =="") {
                $operand1 = 0;
            }
            else{
                $operand1 = $_GET["op1"];
            }
    #Obtenció del segon operand
			if ($_GET["op2"] =="") {
				$operand2 = 0;
			}
			else{
				$operand2 = $_GET["op2"];
			}   
    $sub = new IPv4\SubnetCalculator($_GET["op1"], $_GET["op2"]);
    #var_dump($sub);
    $network = $sub->getNetworkPortion();       
    $broadcastAddress = $sub->getBroadcastAddress(); 
    $addressableHostRange = $sub->getAddressableHostRange();  
    $numberHosts = $sub->getNumberAddressableHosts();
    #echo $operand1."<br>";
    #echo $operand2."<br>";
    echo "<p>Adreça IP de l'equip: ", $_GET["op1"], "/", $_GET["op2"], "</p>";
    echo "<p>Adreça IP de la xarxa: ", $network, "/", $_GET["op2"] , "</p>";
    echo "<p>Broadcast: ", $broadcastAddress , "</p>";
    echo "<p>Host Range: ", $addressableHostRange[0], " a ",  $addressableHostRange[1] , "</p>";
    echo "<p>Numero de Host: ", $numberHosts , "</p>";
    ?>
    <a href="ip.html">Torna a la pàgina anterior</a>
	</body>
</html>