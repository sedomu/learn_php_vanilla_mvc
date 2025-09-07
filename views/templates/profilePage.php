<section class="section">
    <div class="container">
        <h1 class="title">Mon compte</h1>

        <form action="index.php?action=profile" method="post" enctype="multipart/form-data">
            <div class="field is-flex is-flex-direction-column is-align-items-center">
                <label class="label">Profile picture</label>
                <div class="control is-flex is-align-items-center" style="gap: 1rem;">
                    <figure class="image is-128x128 is-square">
                        <img class="is-rounded" src="assets/profiles/profile1.jpg" alt="Profil">
                    </figure>
                    <input class="input" type="file" name="profile-picture" accept=".jpg, .jpeg, image/jpeg">
                </div>
            </div>

            <div class="field">
                <label class="label">User Name</label>
                <div class="control">
                    <input class="input" type="text" name="user-name" value="<?= $_SESSION["user"]["userName"]  ?>" required>
                </div>
            </div>

            <div class="field">
                <label class="label">Change password</label>
                <div class="control">
                    <input class="input" type="password" name="password" placeholder="New password">
                </div>
                <div class="box has-background-danger-light mt-3">
                        <p class="has-text-danger has-text-centered">
                            <strong> ⚠️ This is a learning project.<br/>
                            If the password field is filled, the password will change immediately once you click "Save".</strong>
                        </p>
                    </div>
            </div>

            <!-- Bouton enregistrer -->
            <div class="field">
                <div class="control">
                    <button class="button is-primary" type="submit">Enregistrer les modifications</button>
                </div>
            </div>
        </form>
    </div>
</section>