<?php

function getValue() {
    try {
        include_once "config.php";

        $db = new PDO("mysql:host=".DBHOST."; dbname=".DBNAME, DBUSER, DBPASS);

        $statement = $db -> prepare("SELECT artist_name FROM artist WHERE artist_id = 1");

        $statement -> execute();

        $row = $statement -> fetch();

        echo $row[0];
    } catch(PDOException $error) {
        echo "<p class='highlight'>The function <code>getValue</code> has " .
            "generated the following error:</p>" .
            "<pre>$error</pre>" .
            "<p class='highlight'>Exiting…</p>";

        exit;
    }
}

function getBandNameWithID($id) {
    try {
        include_once "config.php";

        $db = new PDO("mysql:host=".DBHOST."; dbname=".DBNAME, DBUSER, DBPASS);

        $statement = $db -> prepare("SELECT artist_name FROM artist WHERE artist_id = {$id}");

        $statement -> execute();

        $row = $statement -> fetch();

        echo $row[0];
    } catch(PDOException $error) {
        echo "<p class='highlight'>The function <code>getBandNameWithID</code> has " .
            "generated the following error:</p>" .
            "<pre>$error</pre>" .
            "<p class='highlight'>Exiting…</p>";

        exit;
    }
}
