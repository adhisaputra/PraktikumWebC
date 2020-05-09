<div class="w-25 float-left card shadow rounded">
    <div class="img-thumb mt mb">
        <img src="https://upload.wikimedia.org/wikipedia/id/2/2d/Logo-unud-baru.png" alt="logo universitas udayana">
    </div>
    <div class="side-menu">
        <ul>
            <?php if (isset($_SESSION['login'])) : ?>
                <h4>Hai, <?= $_SESSION['username'] ?></h4>
                <a href="logout.php">
                    <li>Logout</li>
                </a>
            <?php else : ?>
                <a href="login.php">
                    <li>Login</li>
                </a>
            <?php endif ?>
            <li class="bg-dark">Desain WEB</li>
            <a href="#">
                <li>HTML</li>
            </a>
            <a href="#">
                <li>CSS
                </li>
            </a>
            <a href="#">
                <li>Lain-Lain</li>
            </a>
        </ul>
    </div>
</div>