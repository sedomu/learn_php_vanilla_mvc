<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sign In</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>
<body>

<section class="section">
  <div class="container">
    <div class="columns is-centered">
      <div class="column is-4-desktop is-6-tablet">

        <!-- Card -->
        <div class="card">
          <div class="card-content">
            <h1 class="title has-text-centered">Se connecter</h1>

            <form action="#" method="POST">
              <!-- Email -->
              <div class="field">
                <label class="label">Email</label>
                <div class="control has-icons-left">
                  <input class="input" type="email" placeholder="exemple@domaine.com" required>
                  <span class="icon is-small is-left">
                    <i class="fas fa-envelope"></i>
                  </span>
                </div>
              </div>

              <!-- Password -->
              <div class="field">
                <label class="label">Mot de passe</label>
                <div class="control has-icons-left">
                  <input class="input" type="password" placeholder="********" required>
                  <span class="icon is-small is-left">
                    <i class="fas fa-lock"></i>
                  </span>
                </div>
              </div>

              <!-- Remember me -->
              <div class="field">
                <label class="checkbox">
                  <input type="checkbox">
                  Se souvenir de moi
                </label>
              </div>

              <!-- Submit -->
              <div class="field">
                <div class="control">
                  <button class="button is-primary is-fullwidth">Se connecter</button>
                </div>
              </div>

              <!-- Links -->
              <div class="has-text-centered">
                <a href="#">Mot de passe oublié ?</a> | <a href="#">Créer un compte</a>
              </div>

            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- Font Awesome pour les icônes -->
<script defer src="https://use.fontawesome.com/releases/v6.4.0/js/all.js"></script>

</body>
</html>