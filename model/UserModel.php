<?php
// models/UserModel.php
/*@author Sajal Khadgi
Description: For learboard database and quiz*/

class UserModel extends BaseModel
{
    public function getData()
    {
        // Example code for fetching data from the database
        $query = $this->db->query('SELECT * FROM users');
        $data = $query->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }
}
?>