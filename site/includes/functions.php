<!-- this class contains all the single point entry and common functions for database -->
<?php
function selectAll($pdo, $select, $table)
{
    $query = "SELECT $select FROM $table";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll();
}

function selectSpecific($pdo,$select,$table,$whereclause){
    $query = "SELECT $select FROM $table $whereclause";
    $stmt = $pdo->prepare($query);
    // var_dump($query);
    $stmt->execute();
    if (!$stmt) {
        echo "\nPDO::errorInfo():\n";
        print_r($pdo->errorInfo());
    }
    return $stmt->fetchAll();
}

function insert($pdo,$table,$parameters){
    $keys = array_keys($parameters);
    $values = implode(', ', $keys);
    $valuesWithColon = implode(', :', $keys);
    $query = 'INSERT INTO ' . $table . ' (' . $values . ') VALUES (:' . $valuesWithColon . ')';
    $stmt = $pdo->prepare($query);
    $stmt->execute($parameters);
}

function login($pdo, $email, $password)
{
    $result = $pdo->prepare("SELECT * FROM users WHERE email = :email AND password = :password");
    $userInfo = [
        'email' => $email,
        'password' => $password,
    ];
    $result->execute($userInfo);
    return $result;
}

function updateData($pdo, $table, $data, $condition) {
    $setStatements = [];
    foreach ($data as $column => $value) {
        $setStatements[] = "$column = '$value'";
    }
    $setStatement = implode(', ', $setStatements);

    $whereStatements = [];
    foreach ($condition as $column => $value) {
        $whereStatements[] = "$column = '$value'";
    }
    $whereStatement = implode(' AND ', $whereStatements);

    $query = "UPDATE $table SET $setStatement WHERE $whereStatement";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
}

function delete($pdo,$table,$whereclause){
    $query = "DELETE FROM `$table` WHERE $whereclause";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
}
?>