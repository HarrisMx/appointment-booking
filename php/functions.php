<?php 
    session_start();
    include('includes/connect.db.php');

    if(isset($_POST['appointment_btn'])) {
        $pname = $_POST['pname'];
        $psurname = $_POST['psurname'];
        $dname = $_POST['dname'];
        $date = $_POST['pdate'];
        $doc_id = "";
        $p_id = "";

        $full_name = $pname . ' ' . $psurname;

        $p_id = get_person_id($full_name);
       
        #$doc_id = get_doc_id($dname);
        
        $data = array(
			'p_name' => $pname,
			'p_surname' => $psurname,
			'date' => $date,
			'doc_name' => $dname,
			'person_id' => $p_id
        );

        createAppointment("appointment" , $data);

        create_appointment(createAppointment("appointment" , $data));
    }

    

    if(isset($_POST['add_doc'])) {
        $conn = new Database_Connection();
        $connection_link = $conn->connect();

        $name = $_POST['name'];
        $sname = $_POST['sname'];
        $spec = $_POST['add'];

        $qry = "INSERT INTO doctor(doc_name, doc_surname, specialty) VALUES(".$name.",".$sname.",".$spec.")";
        echo $qry;
        $connection_link->query($qry);
        $connection_link->close();
        #header("Location:../doctors.php");
    }
    function create_appointment($query) {
        $conn = new Database_Connection();
        $connection_link = $conn->connect();
        echo $query;
        $connection_link->query($query);

        $connection_link->close();

        header("Location:../appointment.php");
    }

    function get_doc_id($name) {

        $conn = new Database_Connection();
        $connection_link = $conn->connect();
        list($dname, $dsname) =  explode (' ' , $name);
        $doc_id = "";
        $qry = "SELECT * FROM doctor WHERE doc_name='".$dname. "' AND doc_surname='". $dsname."'";

        $result = $connection_link->query($qry);

        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                if($row['doc_name'] == $dname && $row['doc_surname'] == $dsname){
                    $doc_id = $row['doc_id'];
                    break;
                }
            }
        }
        $connection_link->close();
        return $doc_id;
    }

    function get_person_id($name) {
        list($name, $sname) =  explode (' ' , $name);
        $conn = new Database_Connection();
        $connection_link = $conn->connect();
        $qry = "SELECT * FROM users WHERE name='".$name. "' AND surname='". $sname."'";
        $id = "";

        $result = $connection_link->query($qry);

        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                if($row['name'] == $name && $row['surname'] == $sname){
                    $id = $row['id'];
                    break;
                }
            }
        }
        $connection_link->close();
        return $id;
    }

    function createAppointment($table_name , $data){
        $sql = "";
        $sql = "INSERT INTO ".$table_name."(p_name,p_surname ,date,doc_name,person_id) VALUES('".$data['p_name']."','".$data['p_surname']."','".$data['date']."','".$data['doc_name']."','".$data['person_id']."')";
        return $sql;
    }
?>