<?php
/**
 * @var Album $album
 * @var Comment[] $commentsList
 * */
?>

<section class="hero is-large">
    <div class="hero-background" style="
        background-image: url('./assets/albums/album<?= $album->getId() ?>.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;"
    </div>
    <div class="hero-body">
        <p class="title has-background-primary has-text-light is-inline"><?= $album->getTitle() ?></p>
        <p></p>
        <p class="subtitle has-background-light is-inline"><?= $album->getReleaseYear() ?></p>
    </div>
</section>

<section class="section">
    <div class="container">
        <ul>
            <li>Released: <?= $album->getReleaseDateInUSString() ?></li>
            <li>Recorded: <?= $album->getRecordingPeriod() ?></li>
            <li>Studio: <?= $album->getStudio() ?></li>
            <li>Duration: <?= $album->getDurationInMinutes() ?></li>
            <li>Label: <?= $album->getLabel() ?></li>
            <li>Producer: <?= $album->getProducer() ?></li>
        </ul>
    </div>
</section>

<section class="section">
    <div class="container">
        <p>
            <?= $album->getWikipediaPresentation() ?>
        </p>
    </div>
</section>

<section class="section">
    <div class="container">
        <h2 class="title">Comments</h2>

            <?php if (empty($commentsList)) {
                echo '
                        <article class="media box">
                            <div class="media-content">
                                <div class="content has-text-centered">
                                    <p>
                                        <em>No comments yet. Be the first to share your thoughts!</em>
                                    </p>
                                </div>
                            </div>
                        </article>
                    ';
            } else {
                foreach ($commentsList as $comment) {
                    require "comments.php";
                }
            } ?>

            <?php
                if (isset($_SESSION["user"]["id"])){
                    echo '
                        <div class="box">
                            <form method="POST">
                                <div class="field">
                                    <label class="label">Your comment</label>
                                    <div class="control">
                                        <textarea name="comment" class="textarea" placeholder="Write your thoughts..."></textarea>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="control">
                                        <button class="button is-link">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    ';
                } else {
                    echo '
                        <div class="box has-text-centered">
                            <p class="has-text-grey">
                                You must <a href="/index.php?action=login" class="has-text-link">log in</a> to post a comment.
                            </p>
                        </div>
                    ';
                }
            ?>
            
</section>
