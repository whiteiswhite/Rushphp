<?php

class log {
    public $username;
    public $password;
    public $email;
    public $BDD;

    public function __construct($username, $password, $email)
    {
        $this->setUsername($username);
        $this->setPassword($password);
        $this->setEmail($email);
        $this->connect_db();
    }
    
    public function connect_db(){
        try {
            $DB_PDO = new PDO('mysql:host=' . 'localhost' . ';port=' . '3306' . ';dbname=' . 'pool_php_rush', 'root', '');
            $this->setBDD($DB_PDO);
        } catch (PDOException $e) {
            echo "PDO ERROR: " . $e->getMessage() . ' storage in ' . ERROR_LOG_FILE . "\n";
            error_log($e->getMessage() . "\n", 3, ERROR_LOG_FILE);
        }
    }

    public function check_exists(){
        $res = $this->getBdd()->prepare('SELECT * FROM users where username = :username              OR email = :email');
        $res->execute(array(
            'username' => $this->getUsername(),
            'email' => $this->getEmail()));
        if($res->rowCount() >= 1){
            return $username = "<p class='error'> Username or Email already taken </p>";
        } else {
            return $this->create_user();
        }
    }

    public function create_user(){
        $password_hache = password_hash($this->getPassword(),PASSWORD_DEFAULT);
        $req = $this->getBdd()->prepare('INSERT INTO users(username, password, email) VALUES(:username, :password, :email)');
        $req->execute(array(
            'username' => $this->getUsername(),
            'password' => $password_hache,
            'email' => $this->getEmail()));
        session_start();
        $_SESSION['user_created'] = 'user_created';
        header('location: login.php');
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getBdd()
    {
        return $this->BDD;
    }

    public function setBdd($BDD)
    {
        $this->BDD = $BDD;
    }
}

$message = NULL;

if(isset($_POST['submit'])){
    if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])){
        $user = new log($_POST['username'],$_POST['password'],$_POST['email']);
        $message = $user->check_exists();
    } else {
        $message = "<p class='error'>Complete all fields</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" medie="all" href="css/coding.css">

</head>
<header>
    <h1>Registration Page</h1>
    <nav>
        <ul class="menu">
        </ul>
    </nav>
</header>
<main>
    <body>
        <div class="container">
            <img class="img-fluid mx-auto d-block" src="CODING_LOGO.png" alt="Logo epitech">
        </div>
        <div>
    <form action="registration.php" method="post">
        <div class="form-row d-flex">
            <div class="form-group col-md-6 name">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
            </div>
            <div class="form-group col-md-6 pass">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
            </div>

            <div class="form-group col-md-12 mail">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email@exemple.exemple" required>
                <button type="submit" class="btn btn-primary signin" name="submit">Sign in</button>
                <a href="login.php" class="already float-right">Already registered?</a>
                <p class="error"><?php echo $message; ?></p>

                    </div>

                </div>

            </form>
        </div>
    </body>
</main>
</html>