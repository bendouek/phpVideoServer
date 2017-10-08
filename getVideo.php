 

 <?php

 function vidInit(){
    $servername = "localhost";
    $username = "bendouek_beth";
    $password = "Beth8899";
    $dbname = "bendouek_gemsContent";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM test ORDER BY RAND() limit 1";
    $result = $conn->query($sql);

    // result variable stores the row for the selected video 
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();  
    }
    else {
        // if something went wrong with query, return video ID of charcoals
        $row = array('NAME'=>'Placeholder', 'URL'=>'https://www.youtube.com/embed/GzLvqCTvOQY?modestbranding=1&rel=0&showinfo=0', ID=>-1);
    }

    $conn->close();

    return $row;

}

function nextVid($id) {
    //return JSON version of video

    $servername = "localhost";
    $username = "bendouek_beth";
    $password = "Beth8899";
    $dbname = "bendouek_gemsContent";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM test WHERE id != ".$id." ORDER BY RAND() limit 1";
    $result = $conn->query($sql);

    // result variable stores the row for the selected video 
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();  
    }
    else {
        // if something went wrong with query, return video ID of charcoals
        $row = array('NAME'=>'Placeholder', 'URL'=>'https://www.youtube.com/embed/GzLvqCTvOQY?modestbranding=1&rel=0&showinfo=0', ID=>-1);
    }

    $conn->close();

    // Tconvert to JSON 
    return json_encode($row);
}

if(isset($_REQUEST["q"]) && $_REQUEST["q"] == 'next') {
    echo nextVid($_REQUEST["id"]);
}
 
?>
