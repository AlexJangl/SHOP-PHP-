<?php
require_once 'Model.php';

class UsersModel extends Model
{
    public function getAllUsers()
    {

        $stmt = $this->pdo->prepare('SELECT * FROM users');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function createUsers($name, $email, $password)
    {
        $stmt = $this->pdo->prepare('INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, "user")');
        $stmt->execute([$name, $email, $password]);
    }

    public function login($email, $password)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM users WHERE email=? LIMIT 1');
        $stmt->execute([$email]);
        $user = $stmt->fetch();
        if (is_array($user)) {
            if (md5(SECRET_KEY . $password) == $user['password']) {
                $_SESSION['name'] = $user['name'];
                // header('Location:/');
                return 1;
            } else {
                return 2;
            }
        } else {
            return 3;
        }
    }

    public function is_admin($name)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM users WHERE name=? LIMIT 1');
        $stmt->execute([$name]);
        $user = $stmt->fetch();
        if (is_array($user)) {
            if ($user['role'] === 'admin') {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function saveUser($name, $email, $password)
    {
        $stmt = $this->pdo->prepare('INSERT INTO users (name, email, password) VALUES (?,?,?)');
        $stmt->execute([$name, $email, $password]);
    }

    public function deleteUser($id)
    {
        $smtm = $this->pdo->prepare('DELETE FROM users WHERE id=?');
        $smtm->execute([$id]);

    }

    public function getUser($id)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM users WHERE id=? LIMIT 1');
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function test_password($email, $password)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM users WHERE email=? LIMIT 1');
        $stmt->execute([$email]);
        $user = $stmt->fetch();
        if ($user['password'] === $password) {
            return $password;
        } else {
            return md5(SECRET_KEY . $password);
        }
    }


    public function updateUser($id, $name, $email, $password, $role)
    {
        $stmt = $this->pdo->prepare('UPDATE users SET name=?, email=?, password=?, role=? WHERE id=? ');

        $stmt->execute([$name, $email, $password, $role, $id]);
    }
}