<?php
/** @var Album[] $albumsList */
?>

<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="/index.php">
            <img src="/assets/logo.png">
        </a>
    </div>
  
    <div id="navbarBasicExample" class="navbar-menu is-active">
        <div class="navbar-start">
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    Albums
                </a>
  
                <div class="navbar-dropdown">
                    
                    <?php foreach ($albumsList as $album): ?>
                        <a class="navbar-item" href="index.php?action=album&albumId=<?= $album->getId()  ?>">
                            <?= $album->getTitle()  ?>
                        </a>
                    <?php endforeach; ?>
                    
                </div>
            </div>
        </div>
  
        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <?php if (isset($_SESSION['user'])): ?>
                        <a class="button is-light" href="index.php?action=#">
                            <?= $_SESSION["user"]["userName"] ?>
                        </a>
                        <a class="button is-danger" href="index.php?action=logout">
                            Logout
                        </a>
                    <?php else: ?>
                        <a class="button is-primary" href="index.php?action=signup">
                            <strong>Sign up</strong>
                        </a>
                        <a class="button is-light" href="index.php?action=login">
                            Log in
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</nav>