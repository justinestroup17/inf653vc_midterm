<?php
    function get_all_vehicles() {
        global $db;
        $query = 'SELECT v.year, m.make, v.model, t.type, c.class, v.price
                  FROM vehicles AS v
                  INNER JOIN classes AS c
                  ON v.class_id=c.ID
                  INNER JOIN makes AS M
                  ON v.make_id = m.ID
                  INNER JOIN types AS t
                  ON v.type_id = t.ID
                  ORDER BY price DESC';
        $statement = $db->prepare($query);
        $statement->execute();
        $vehicles = $statement->fetchAll();
        $statement->closeCursor();
        return $vehicles;
    }
    function get_vehicle($vehicle_id) {
        global $db;
        $query = 'SELECT *
                  FROM vehicles
                  WHERE vehicle_id = :vehicle_id';
        $statement = $db->prepare($query);
        $statement->bindValue(":vehicle_id", $vehicle_id);
        $statement->execute();
        $vehicle = $statement->fetch();
        $statement->closeCursor();
        return $vehicle;
    }
?>