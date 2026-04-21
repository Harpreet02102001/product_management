    <?php
    session_start();

      if(isset($_SESSION['name'])){
        header('location: /');
        exit();
      }  
  
    require 'Validator.php';
    $config = require('config.php');
    $db = new Database($config['database']);


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $errors = [];

        if (! Validator::mail($email, 1, 254)) {
            $errors['email'] = 'Please Provide the Valid Email Address';
        }

        if (! Validator::password($password)) {
            $errors['password'] = "Please provide Valid Password!";
        }



        // if (!empty($errors)) {
        //     require "./views/usersViews/login.php";
        //     return;
        // }

        $users = $db->query(
            'SELECT * FROM users WHERE mail = :email',
            [
                'email' => $email,
            ]
        )->fetch();

        if ($users) {
            if (password_verify($password, $users['password'])) {
                $_SESSION['user'] = [
                    'id' => $users['id'],
                    'name' => $users['name'],
                    'email' => $users['email'],
                ];
                header('location: /');
                exit();
            } else {
                $errors['password'] = 'Invalid password';
            }
        } else {
            $errors['email'] = 'No matching address';
        }
    }
    require "./views/usersViews/login.php";
