<?php

    if(array_key_exists('Url', $_POST) && $_POST['Url'] && array_key_exists('YoutubeVideo', $_POST) && $_POST["YoutubeVideo"] && array_key_exists('Category', $_POST) && $_POST['Category'] ){
        $sql = $mysqli->prepare("INSERT INTO ytdatabase (Url, YoutubeVideo, Category) VALUES (?,?,?)");
        $sql -> bind_param('sss', $_POST['Url'], $_POST['YoutubeVideo'], $_POST['Category']);
        $sql -> execute();

        // $sql = "INSERT INTO messages (fname, lname, message) VALUES ('". $_POST['fname']."' , '". $_POST['message']."' )" ;
        // $result = $mysqli->query($sql);

        if ($mysqli->errno) {
            printf("Could not insert record into tableL %s<br />", $mysqli->error);
        }

        ?>
        <p>Thank for Submitting</p>
        <?php
    } else { ?>

        <form action="/" method="POST">

            <label>
                Video Url: <input name="Url">
            </label>
            <label>
                Video name: <input name="YoutubeVideo">
            </label>
            <label>
                Category: <input name="Category">
            </label>

            <button>Submit</button>
        </form>

    <?php
    }
?>

<?php include 'views/showcase.php';?>