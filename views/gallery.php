<?php

    $sql = "SELECT * FROM youtubedatabase";
    // $sql = "SELECT id, src, thumbnail, name FROM gallery";

    $result = $mysqli->query($sql);
    
    ?>

    <ul class="data">
        <?php
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                // printf(
                //     'id: %s, src: %s, thumbnail: %s, name: %d <br />',
                //     $row['id'],
                //     $row['src'],
                //     $row['thumbnail'],
                //     $row['name']);
            ?>
                <li>
                    <p><?php echo $row['Url']?> </p>
                </li>
                <li>
                    <p><?php echo $row['Url']?> </p>
                </li>
                <li>
                    <p><?php echo $row['Url']?> </p>
                </li>
            <?php
            }
        } else {
            printf('No record found.<br />');
        }
        mysqli_free_result($results);
        $mysqli->close();
        ?>
    </ul>
