<?php
/** @var Comment $comment */
?>

<article class="media box">
    <figure class="media-left">
        <p class="image is-48x48">
            <img src="/assets/profiles/profile<?= $comment->getUserId()  ?>.jpg" alt="Avatar">
        </p>
    </figure>
    <div class="media-content">
        <div class="content">
            <p>
                <strong>@<?= $comment->getUserName()  ?></strong> <br>
                <?= $comment->getComment()  ?>
            </p>
        </div>
    </div>
    
    <?php
        if (isset($_SESSION["user"]["id"]) && $_SESSION["user"]["id"] === $comment->getUserId()){
            echo '
                <div class="media-right">
                    <a href="index.php?action=album&albumId=' . $comment->getAlbumId()  . '&deleteComment=' . $comment->getId()  . '">
                        <button class="button is-small">
                            <span class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free v7.0.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#FF6684" d="M136.7 5.9L128 32 32 32C14.3 32 0 46.3 0 64S14.3 96 32 96l384 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-96 0-8.7-26.1C306.9-7.2 294.7-16 280.9-16L167.1-16c-13.8 0-26 8.8-30.4 21.9zM416 144L32 144 53.1 467.1C54.7 492.4 75.7 512 101 512L347 512c25.3 0 46.3-19.6 47.9-44.9L416 144z"/></svg>
                            </span>
                        </button>
                    </a>
                </div>
            ';
        }
    ?>
</article>