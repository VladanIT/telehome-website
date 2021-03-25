<?php

    function getUsers(){
        return executeQuery("SELECT * FROM th_consumers c INNER JOIN th_interventions i ON c.id_consumer = i.consumer_id");
    }

    function getConsumerById($userID){
        return executeQuery("SELECT * FROM th_consumers WHERE id_consumer = $userID");
    }
?>