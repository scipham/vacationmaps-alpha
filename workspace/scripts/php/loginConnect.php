
        <?php
    $servername = "sql303.rf.gd";
    $username = "rfgd_19170774";
    $password = "Kak123";
    $database = "rfgd_19170774_vacationmaps";

    // Create connection
    $db = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    } 
    echo "Connected successfully (".$db->host_info.")";
        ?>
