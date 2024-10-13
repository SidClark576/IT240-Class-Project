<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Signed Up</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <img src="Logo.jpg" alt="logo" style="width: 70px;">
            <h1>SC3 Frozen Foods</h1>
        </header>
        <nav>
            <a href="index.html">Home</a>
            <a href="pricespage.html" >Products</a>
<!--        <a href="contacts.html">Contact Us</a> -->
            <a href="createaccountpage.html">Create an Account</a>
            <a href="aboutpage.html">About</a>
        </nav>
        <main style="text-align: center;">
            <h1>Welcome to the Website</h1>
            <p>You may now search for your goods that you like.</p>

            <p>Here are your details</p>
            <p>First Name: <?php print $_POST['firstName'] ?></p>
            <p>Last Name: <?php print $_POST['lastName'] ?></p>
            <p>Username: <?php print $_POST['userName'] ?></p>
            <p>Email: <?php print $_POST['email'] ?></p>
            
        </main>
        <footer>
            <p>&copy; 2022, Sidney Clark Ordonia</p>
        </footer>
    </body> 
</html>    