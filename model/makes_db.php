<?php
    function get_makes() {
        global $db;
        $query = 'SELECT make
                  FROM makes
                  ORDER BY ID';
        $statement = $db->prepare($query);
        $statement->execute();
        $makes = $statement->fetchAll();
        $statement->closeCursor();
        return $makes;
    }
?>