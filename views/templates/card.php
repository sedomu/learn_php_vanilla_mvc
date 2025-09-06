<?php
/** @var Album $album */
?>

<div class="cell is-col-min-12">
    <a href="index.php?action=album&albumId=<?=$album->getId()?>">
        <div class="card">
            <div class="card-image">
                <figure class="image is-1by1">
                    <img
                        src="./assets/albums/album<?= $album->getId() ?>.png"
                        alt="This is the cover art for the album Licensed to Ill by the artist Beastie Boys. The cover art copyright is believed to belong to the label, Def Jam / Columbia, or the graphic artist(s)."
                    />
                </figure>
            </div>
            <div class="card-content">
                <div class="media">
                    <div class="media-left">
                        <figure class="image is-48x48">
                            <img
                                src="./assets/profile.jpg"
                                alt="Placeholder image"
                            />
                        </figure>
                    </div>
                    <div class="media-content" style="min-width: 0;">
                        <p class="title is-4" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?= $album->getTitle()  ?></p>
                        <p class="subtitle is-6">@sebaseg</p>
                    </div>
                </div>
            
                <div class="content">
                    <time datetime="<?= $album->getReleaseDate()  ?>"><?= $album->getReleaseDate()  ?></time>
                </div>
            </div>
        </div>
    </a>
</div>