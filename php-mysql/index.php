<?php
include __DIR__.'/connection.php';

$pdo = connection();

// $name = "gabriel";
// $email = "ga@ga";
// $password = "123";
// global $id; $id=3;$name; $name="KAIO";




// INSERT -- OK
// $sql = "INSERT INTO users (user_name, user_email, user_password) VALUES ('gariel','gabriel@gab','12312321')";
// $pdo->exec($sql);

// $sql = "INSERT INTO users (user_name, user_email, user_password) VALUES (?,?,?)";
// $pdo->prepare($sql)->execute([$name, $email, $password]);



// $consulta = $pdo->query("SELECT * FROM users"); //LISTAR TUDO -- OK
// while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
//     echo "Nome: {$linha['user_name']} - Usuário: {$linha['user_email']}<br />";
// }



// $consulta = $pdo->query("SELECT * FROM users WHERE user_id = 5"); //SHOW -- OK
// while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
//     echo "Nome: {$linha['user_name']} - Usuário: {$linha['user_email']}<br />";
// }




// $stmt = $pdo->prepare('DELETE FROM users WHERE user_id = :id'); // DELETE -- OK
// $stmt->bindParam(':id', $id);
// $stmt->execute();



// $stmt = $pdo->prepare('UPDATE users SET user_name = :name WHERE user_id = :id'); // UPDATE -- OK
// $stmt->execute(array(
//   ':id'   => $id,
//   ':name' => $name
// ));