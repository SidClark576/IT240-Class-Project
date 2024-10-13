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
            <a href="index.html" class="current">Home</a>
            <a href="pricespage.html" >Products</a>
<!--        <a href="contacts.html">Contact Us</a> -->
            <a href="createaccountpage.html">Create an Account</a>
            <a href="aboutpage.html">About</a>
        </nav>
        <div class="asidemain">
            <aside class="asiders">
                <h2>Welcome <?php print $_POST['firstName'] ?>to Our Home Page</h2>
                <p>Are you looking for a nice Filipino products that you can order from?
                  If you want to find one of these products, go to our Products tab.</p>
            </aside>
            <main class="index">
                <h3>Recent Posts</h3>
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fjabesonline&tabs=timeline&width=650&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="650" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
            </main>
        </div>
        <footer>
            <p>&copy; 2022, Sidney Clark Ordonia</p>
        </footer>
    </body> 
</html>    