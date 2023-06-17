<?php
// models/BaseModel.php
/*@author Sajal Khadgi
Description: For learboard database and quiz*/
class BaseModel
{
    protected $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }
}
?>
