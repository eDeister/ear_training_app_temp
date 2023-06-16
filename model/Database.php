<?php
class Database
{
private $host = 'localhost';
private $dbname = 'sajalgre_ear_training';
private $username = 'sajalgre_sajal';
private $password = 'P@ssword1234';
private $db;

public function __construct()
{
try {
$this->db = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
die();
}
}

public function executeQuery($query, $params = [])
{
try {
$statement = $this->db->prepare($query);
$statement->execute($params);
return $statement;
} catch (PDOException $e) {
echo 'Query execution failed: ' . $e->getMessage();
die();
}
}

// Example method to fetch all data from a table
public function getAllData($table)
{
$query = "SELECT * FROM $table";
$statement = $this->executeQuery($query);
return $statement->fetchAll(PDO::FETCH_ASSOC);
}

// Example method to insert data into a table
public function insertData($table, $data)
{
$columns = implode(', ', array_keys($data));
$values = implode(', ', array_fill(0, count($data), '?'));

$query = "INSERT INTO $table ($columns) VALUES ($values)";
$params = array_values($data);

$statement = $this->executeQuery($query, $params);
return $this->db->lastInsertId();
}

// Example method to update data in a table
public function updateData($table, $data, $condition)
{
$setValues = implode(' = ?, ', array_keys($data)) . ' = ?';

$query = "UPDATE $table SET $setValues WHERE $condition";
$params = array_values($data);

$statement = $this->executeQuery($query, $params);
return $statement->rowCount();
}
}
