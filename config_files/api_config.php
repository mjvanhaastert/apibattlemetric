/*
* lets pull all the php stuff i need in here
* Different api's voor battlemetrics
* https://api.battlemetrics.com/
* servers/ = for servers search id
* servers/1106399?include=session = returns all server informmation plus a list of players on the server
* players/ = used with playerid to return players information
* players/?filter[search] = is used to search for name of player
* $servername = "localhost";
* $username = "mjvanh1q_battlemetrics";
* $database = "mjvanh1q_battlemetrics";
* $password = "Oi&M6{X}bzuN";
*/



<?php
// every time page is loaded we need up to date information from the server.
$serverInfoApi = 'https://api.battlemetrics.com/servers/1106399?include=session';
$jsondata = file_get_contents($serverInfoApi);
$decodeJson = json_decode($jsondata);
// lets grab only he information we need and put it in a readable variable
$serverName = $decodeJson->data->attributes->name;
$serverIp = $decodeJson->data->attributes->ip;
$serverPort = $decodeJson->data->attributes->port;
$serverPlayers = $decodeJson->data->attributes->players;
$serverMaxPlayers = $decodeJson->data->attributes->maxPlayers;
$serverDetails = $decodeJson->data->attributes->details;
$serverRustBuild = $decodeJson->data->attributes->details->rust_build;
$serverRustEntCnt = $decodeJson->data->attributes->details->rust_ent_cnt_i;
$serverRustWorldSeed = $decodeJson->data->attributes->details->rust_world_seed;
$serverRustWorldSize = $decodeJson->data->attributes->details->rust_world_size;
$serverRustLastSeedChange = $decodeJson->data->attributes->details->rust_last_seed_change;
$serverRustLastWipe = $decodeJson->data->attributes->details->rust_last_wipe;



//class connection to database


class Database{

	// specify your own database credentials
	private $host = "localhost";
	private $db_name = "mjvanh1q_battlemetrics";
	private $username = "mjvanh1q_battlemetrics";
	private $password = "Oi&M6{X}bzuN";
	public $conn;

	// get the database connection
	public function getConnection(){

		$this->conn = null;

		try{
			$this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
			$this->conn->exec("set names utf8");
		}catch(PDOException $exception){
			echo "Connection error: " . $exception->getMessage();
		}

		return $this->conn;
	}
}

// apiCall function
// dont foget to add session_start(); in the top page
// $_SESSION["favcolor"] = "green"; we need to make a session at the search page
// https://www.w3schools.com/php/php_sessions.asp
//function apiCall($methodPlayer){
//
//    $inputIDPlayer = $_POST['inputIDPlayer'];
//    $inputNamePlayer = $_POST['inputNamePlayer'];
//
//    if ($methodPlayer == true){
//        $apiCall = "https://api.battlemetrics.com/players/".$inputIDPlayer;
//    }
//    else
//        $apiCall = "https://api.battlemetrics.com/players/?filter[search]=/".$inputNamePlayer;
//
//};

// Method: POST, PUT, GET etc
// Data: array("param" => "value") ==> index.php?param=value


function CallAPI($method, $url, $data = false)
{
    $curl = curl_init();

    switch ($method)
    {
        case "POST":
            curl_setopt($curl, CURLOPT_POST, 1);

            if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
        case "PUT":
            curl_setopt($curl, CURLOPT_PUT, 1);
            break;
        default:
            if ($data)
                $url = sprintf("%s?%s", $url, http_build_query($data));
    }

    // Optional Authentication:
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($curl, CURLOPT_USERPWD, "username:password");

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec($curl);

    curl_close($curl);

    return $result;
}




$json_string = 'https://api.battlemetrics.com/servers/1106399?include=session';
$jsondata = file_get_contents($json_string);
$obj = json_decode($jsondata);



//$apiPlayer = '/players';
//$apiPlayerSearch = 'players?filter[search]';
//$apiServer = '/servers';
//$apiServerInclude= '/include?include=session';

$serverName = $obj->data->attributes->name;
$serverIp = $obj->data->attributes->ip;
$serverPort = $obj->data->attributes->port;
$serverPlayers = $obj->data->attributes->players;
$serverMaxPlayers = $obj->data->attributes->maxPlayers;
$serverDetails = $obj->data->attributes->details;
$serverRustBuild = $obj->data->attributes->details->rust_build;
$serverRustEntCnt = $obj->data->attributes->details->rust_ent_cnt_i;
$serverRustWorldSeed = $obj->data->attributes->details->rust_world_seed;
$serverRustWorldSize = $obj->data->attributes->details->rust_world_size;
$serverRustLastSeedChange = $obj->data->attributes->details->rust_last_seed_change;
$serverRustLastWipe = $obj->data->attributes->details->rust_last_wipe;
var_dump($serverRustLastWipe)

for ($i = 0; $i < $serverPlayers; $i++) {
    $playerIdOnServer = $obj->included[$i]->relationships->player->data->id;
    $playerNameOnServer = $obj->included[$i]->attributes->name;
    $playerStartOnServer = date('H:i:s d-M', strtotime($obj->included[$i]->attributes->start));
}
$results = array();
while($row = $obj)
{
    $results[] = $row;
}
var_dump($serverRustLastWipe)

// Steamapi variables, api urls and all the other stuff i need to get the info
//
//$gameAppId = 252490;



//
//for ($i = 0; $i < $serverPlayers; $i++) {
//    $playerID = $obj->included[$i]->relationships->player->data->id;
//    $playerNick = $obj->included[$i]->attributes->name;
//    $playerConnect = date('H:i:s d-M',strtotime($obj->included[$i]->attributes->start));
//    };
//return $playerID;






    /*todo fix loop search function
for loop for the search function
With all the information it needs
  we need to fix this later
$results = $_POST['playername'];
$json_player = 'https://api.battlemetrics.com/players?filter[search]='. $results;
$json_player_data = file_get_contents($json_player);
$objp = json_decode($json_player_data);

for ($s = 0; $s < count($objp->data); $s++) {
    $searchId$searchId = $objp->data[$s]->attributes->id;
    $objp->data[$s]->attributes->name;
    date('H:i:s d-M-Y',strtotime($objp->data[$s]->attributes->createdAt));
    date('H:i:s d-M-Y',strtotime($objp->data[$s]->attributes->updatedAt))

*/



?>




//
//// Method: POST, PUT, GET etc
//// Data: array("param" => "value") ==> index.php?param=value
//
//function CallAPI($url, $data = false)
//{
//    $curl = curl_init();
//    $url = sprintf("%s?%s", $url, http_build_query($data));
//
//
//    // Optional Authentication:
//    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
//    curl_setopt($curl, CURLOPT_URL, $url);
//    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
//
//    $result = curl_exec($curl);
//
//    curl_close($curl);
//
//    return $result;
//}


//$servername = "localhost";
//$username = "mjvanh1q_battlemetrics";
//$database = "mjvanh1q_battlemetrics";
//$password = "Oi&M6{X}bzuN";
//
//
//
//$con=mysqli_connect("localhost","mjvanh1q_battlemetrics","Oi&M6{X}bzuN","mjvanh1q_battlemetrics");
//// Check connection
//if (mysqli_connect_errno())
//  {
//  echo "Failed to connect to MySQL: " . mysqli_connect_error();
//  }

// Perform queries
//mysqli_query($con,"SELECT * FROM mjvanh1q_battlemetrics");
//mysqli_query($con,"INSERT INTO Persons (FirstName,LastName,Age)
//VALUES ('Glenn','Quagmire',33)");

//mysqli_close($con);


    /**
 * Created by PhpStorm.
 * User: man1c
 * Date: 24-9-18
 * Time: 16:25
 */