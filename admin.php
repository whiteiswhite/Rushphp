<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/coding.css">
</head>
<header>
    <h1>Administration Page</h1>
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
        <p><?php echo "Welcome on the administration side."; ?></p>
    </div>
    <div class="d-lg-inline-block">
        <form method="POST" action="createuser.php">
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
                <input type="submit" class="btn btn-primary signin logoutbutton" name="CreateUser" value="CreateUser"/>
            </form>
    </div>
        <button type="logout" class="btn btn-primary signin logoutbutton" name="submit"><a href="logout.php" class="logout">Logout</a></button>
    </body>
</main>
</html>