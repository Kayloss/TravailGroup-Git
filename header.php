
<header>
    <nav>
        <h1>LEBONCOINCOIN</h1>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="shop/index.html">Shop</a></li>
            <?php
            if(isset($_SESSION['id'])){
                echo '<li><a href="#">Logout</a></li>';
            }else{
                echo '<li><a href="login.php">Login</a></li>';
            }
            ?>
            <ul>
    </nav>
</header>