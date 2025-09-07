<section class="section" style="min-height: calc(100vh - 56px - 256px);">
  <div class="container">
    <div class="columns is-centered">
      <div class="column is-4-desktop is-6-tablet">

        <div class="card">
          <div class="card-content">
            <h1 class="title has-text-centered">Log In</h1>

            <form  method="POST">
              <div class="field">
                <label class="label">Username</label>
                <div class="control">
                  <input name="user-name" class="input" type="text" placeholder="example" required>
                </div>
              </div>

              <div class="field">
                <label class="label">Password</label>
                <div class="control">
                  <input name="password" class="input" type="password" placeholder="********" required>
                </div>
              </div>

              <div class="field">
                <div class="control">
                  <button class="button is-primary is-fullwidth">Log In</button>
                </div>
              </div>

              <div class="has-text-centered">
                <a href="index.php?action=forgottenPassword"><s>I forgot my password</s></a> | <a href="index.php?action=signup">I don't have an account</a>
              </div>

            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>