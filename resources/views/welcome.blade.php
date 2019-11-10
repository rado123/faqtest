<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Faqtest</title>
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    </head>
    <body>
        <div id='app'>
        <nav class="navbar" role="navigation" aria-label="main navigation">
          
          <div id="navbarfaqtest" class="navbar-menu">
            <div class="navbar-start">
             <router-link class="navbar-item" to="/">Home</router-link>
             <router-link class="navbar-item"  :to="{ name: 'about' }">About</router-link>
             <router-link class="navbar-item"  :to="{ name: 'create' }">Create</router-link>
            </div>

            <div class="navbar-end">
              <div class="navbar-item">
                <div class="buttons">
                  <a class="button is-primary">
                    <strong>Sign up</strong>
                  </a>
                  <a class="button is-light">
                    Log in
                  </a>
                </div>
              </div>
            </div>
          </div>
        </nav>
   

       <hr>
       <router-view></router-view>
        </div>

        <script src="js/app.js"></script>
    </body>
</html>
