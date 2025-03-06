<nav class="main-navigation">
    <div class="nav-container">
        <div class="logo">J2B</div>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li>
                <?php 
                if (isset($_SESSION["username"])) {
                    echo '<a href="#user">'.$_SESSION["username"].'</a>';
                } else {
                    echo '<a href="login.php">Login</a>';
                }     
                ?>
            </li>
            <li>
                <?php 
                if (isset($_SESSION["username"])) {
                    echo '<a href="include/logout.inc.php">Logout</a>'; 
                }   
                ?>
            </li>
        </ul>
    </div>
</nav>