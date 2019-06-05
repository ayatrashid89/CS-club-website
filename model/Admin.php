<?php

class Admin extends DBconnect{

    public function selectAdminLogin() {
        $retrieve = $this->dbconnection()->query("SELECT * FROM admin WHERE id=3");

        $result = $retrieve->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

}



?>