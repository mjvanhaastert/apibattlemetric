<?php
function showList()
{
    $servername = "localhost";
    $username = "mjvanh1q_battlemetrics";
    $password = "-80zuZbq4^&%";
    $dbname = "mjvanh1q_battlemetrics";

    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT * FROM battlemetrics_list";
    $result = $conn->query($sql);

    $arrayListId = array();
    $arrayListName = array();
    $arrayListNote = array();

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {

            array_push($arrayListId,$row["battlemetrics_list_id"]);
            array_push($arrayListName,$row["battlemetrics_list_name"]);
            array_push($arrayListNote,$row["battlemetrics_list_note"]);

        }
        $conn->close();
    }

    $array['id'] = $arrayListId;
    $array['name'] = $arrayListName;
    $array['note'] = $arrayListNote;

    return $array;
}

function ListTable(){
    $data = showList();

    for ($x = 0; $x < count($data); $x++) {

        echo "<tr>";
        echo "<td>"."<input type='checkbox' id='" . $data['id'][$x]. "'>". "</td>";
        echo "<td id='" . $data['id'][$x]. "'>". $data['name'][$x] . "</td>";
        echo "</tr>";
    }

}


function NoteList(){

    $note = showList();

    for ($x = 0; $x < count($note); $x++) {

        echo "<tr>";
        echo "<td id='" . $note['id'][$x]. "'>". $note['note'][$x] . "</td>";
        echo "</tr>";
    }

}





//    switch ($method) {
//        case 'list':
//            // Create connection
//            $conn = new mysqli($servername, $username, $password, $dbname);
//            // Check connection
//            if ($conn->connect_error) {
//                die("Connection failed: " . $conn->connect_error);
//            }
//            $sql = "SELECT battlemetrics_list_id, battlemetrics_list_name FROM battlemetrics_list";
//            $result = $conn->query($sql);
//            echo '<table class="table table-bordered table-dark">';
//            echo '<th scope="col">List Name:</th>';
//            if ($result->num_rows > 0) {
//                // output data of each row
//                while ($row = $result->fetch_assoc()) {
//                    $id = $row["battlemetrics_list_id"];
//                    echo '<tr>' . '<td id="' . $id . '">' . $row["battlemetrics_list_name"] . '</td>' . '<tr>';
//
//                }
//                echo '</table>';
//                $conn->close();
//            }
//
//        case 'note':
//            // Create connection
//
//            $note_id = '2';
//            $conn = new mysqli($servername, $username, $password, $dbname);
//            // Check connection
//            if ($conn->connect_error) {
//                die("Connection failed: " . $conn->connect_error);
//            }
//            $sql = "SELECT battlemetrics_list_note FROM battlemetrics_list where battlemetrics_list_id ='{$note_id}'" ;
//            $result = $conn->query($sql);
//            echo $result;
//                $conn->close();
//
//    }
