<header class="header">
    <div class="logo">
        <img src="assets/imgs/logo-transparente.png" alt="">
    </div>

    <nav class="nav">
        <ul class="navbar">
    
        <?php if(!isset($_SESSION['authToken'])) { ?>

            <li>
                <a href="login.php">
                    <i icon-name="log-in"></i>
                    <p>Conectar</p>
                </a>
            </li>

        <?php } else { ?>

            <li>
                <a href="#">
                    <p><?= $_SESSION['authToken']['nome'] ?></p>
                    <i icon-name="user-circle-2"></i>
                </a>
            </li>

            <li>
                <a href="controllers/logout.php">
                    <i icon-name="log-out"></i>
                    <p>Sair</p>
                </a>
            </li>
            
        <?php } ?>

        </ul>
    </nav>
</header>