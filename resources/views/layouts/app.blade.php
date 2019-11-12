<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Faqtest</title>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
          <!-- bootstrap zaradi accordiona: -->
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div id='app'>
          <nav class="navbar" role="navigation" aria-label="main navigation">
              <div id="navbarfaqtest" class="navbar-menu">
                <div class="navbar-start">
                @guest
                @else
                         <router-link class="navbar-item"  :to="{ name: 'preview' }">Preview</router-link>
                         <router-link class="navbar-item"  :to="{ name: 'create' }">Create</router-link>
                @endguest
                 <router-link class="navbar-item" to="/">About</router-link>
                </div>

                <div class="navbar-end">
                    @guest
                          <div class="navbar-item">
                            <div class="buttons">
                                @if (Route::has('register'))
                                      <a class="button is-primary" href="{{ route('register') }}">
                                        <strong>Sign up</strong>
                                      </a>
                                @endif
                              <a class="button is-light" href="{{ route('login') }}">
                                Log in
                              </a>
                            </div>
                          </div>
                    @else
                          <div class="navbar-item">
                            <div class="buttons">
                              <a class="button is-light" >
                                {{ Auth::user()->name }}
                              </a>
                              <a class="button is-light" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                              </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </div>
                          </div>
                    @endguest
                </div>
              </div>
        </nav>
   

       <hr>
       <router-view></router-view>
        </div>
        <main>
            @yield('content')
        </main>
   
        <script src="js/app.js"></script>
        <!--
    -->
    </body>
</html>
