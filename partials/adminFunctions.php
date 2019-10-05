<?php

    function addUser($user) {
    global $db;


    $query = $db->prepare('INSERT INTO memento_db.users (name, lastName, birthday, userName, email, password)
    VALUES (:name, :lastName, :birthday, :username, :email, :password)');


    $query->bindParam(':name', $user['name'], PDO::PARAM_STR);
    $query->bindParam(':lastName', $user['lastName'], PDO::PARAM_STR);
    $query->bindParam(':birthday', $user['birthday'], PDO::PARAM_STR);
    $query->bindParam(':username', $user['username'], PDO::PARAM_STR);
    $query->bindParam(':email', $user['email'], PDO::PARAM_STR);
    $query->bindParam(':password', $user['password'], PDO::PARAM_STR);



    $query->execute();



    }

    function bringAllUsers() {
    global $db;
    $query = $db-> prepare('SELECT * FROM memento_db.users');
    $query->execute();

    $users = $query->fetchAll(PDO::FETCH_ASSOC);

    return $users;
  }

    function createUser($data) {
    // echo ("<pre>");
    // var_dump ($data);
    // echo ("</pre>");
    return [
      "id" => proximoId(),
      "name" => ucfirst($data["name"]),
      "lastName" => ucfirst($data["lastName"]),
      "birthday" => $data["birthday"],
      "username" => $data["userName"],
      "email" => $data["email"],
      "password" => password_hash($data["password"], PASSWORD_DEFAULT)


    ];
  }



  function proximoId() {
    global $db;

    return $db->lastInsertId() + 1;
  }

  function deleteUserById($id) {
    global $db;
    $query = $db-> prepare('DELETE FROM memento_db.users WHERE id =:id ');
    $query ->bindParam(':id', $id, PDO::PARAM_STR);
    $query->execute();


  }





?>
