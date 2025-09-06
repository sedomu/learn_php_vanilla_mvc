<?php
/** @var Album[] $albumsList */
?>

<section class="section">
    <div class="container">
        <h1 class="title">
            Beastie Boys discography
        </h1>
        <p class="subtitle">
            Learning PHP vanilla with the Beastie Boys' discography.
        </p>
    </div>
</section>

<section class="section">
    <div class="grid is-col-min-12">
        
        <?php
            forEach($albumsList as $album){
                require "card.php";
            }
        ?>
        
    </div>
</section>