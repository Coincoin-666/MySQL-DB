<?php 

class Clients extends Database {
    public function getClients() {
        $database = $this->connectDatabase();
        $myQuery = 'SELECT * FROM `clients`';
        $queryClient = $database->query($myQuery);
        $fetch = $queryClient->fetchAll();
        return $fetch;
    }


}

?>
