<?php

$sql = "SELECT * FROM ytdatabase";
// SELECT * (* = all columns) FROM yourdatabase
$result = $mysqli->query($sql);

?>

<h1>Video Entries:</h1>

<?php

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $embed_url = str_replace('watch?v=', 'embed/', $row['Url']);
        ?>
        <div class="video-data">
            <p><?php echo $row['id'];?></p>
            <h2><?php echo $row['YoutubeVideo'];?></h2>
            <p><?php echo $row['Category'];?></p>
            <a href="<?php echo $row['Url'];?>"><?php echo $row['Url'];?></a>

            <iframe src="<?php echo $embed_url;?>"></iframe>

            

        </div>
    <?php
    }
    } else {
        printf('No record found.<br />');
    }
mysqli_free_result($result);
$mysqli->close();

?>



