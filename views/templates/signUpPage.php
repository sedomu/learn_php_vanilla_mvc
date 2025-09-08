<section class="section" style="min-height: calc(100vh - 56px - 256px);">
  <div class="container">
    <div class="columns is-centered">
      <div class="column is-4-desktop is-6-tablet">

        <div class="card">
          <div class="card-content">
            <h1 class="title has-text-centered">Sign Up</h1>

            <form method="POST">
              <div class="field">
                <label class="label">User Name</label>
                <div class="control">
                  <input name="user-name" class="input" type="text" placeholder="example" required>
                  <p class="help is-danger"><?= $errorUserExists ? "User name is already used" : "" ?></p>
                  <p class="help is-danger"><?= $errorEmptyUser ? "This field is required" : "" ?></p>
                </div>
              </div>

              <div class="field">
                <label class="label">Password</label>
                <div class="control">
                  <input name="password" class="input" type="password" placeholder="********" required>
                  <p class="help is-danger"><?= $errorDifferentPasswords ? "Passwords don't match" : "" ?></p>
                  <p class="help is-danger"><?= $errorEmptyPassword ? "This field is required" : "" ?></p>
                </div>
              </div>
              
              <div class="field">
                <label class="label">Check password</label>
                <div class="control">
                  <input name="password-check" class="input" type="password" placeholder="********" required>
                  <p class="help is-danger"><?= $errorDifferentPasswords ? "Passwords don't match" : "" ?></p>
                  <p class="help is-danger"><?= $errorEmptyPasswordCheck ? "This field is required" : "" ?></p>
                </div>
              </div>

              <div class="field">
                <div class="control">
                  <button class="button is-primary is-fullwidth">Sign up</button>
                </div>
              </div>

              <div class="has-text-centered">
                  <a href="index.php?action=login">I have an account</a>
              </div>

            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>