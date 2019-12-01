<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Faqtest</title>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
<!--
      <nav class="navbar" role="navigation" aria-label="main navigation">
              <div id="navbarfaqtest" class="navbar-menu">
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
    -->
        <hr>

        <div id='app'>
          <app></app>
        </div>
         
        <script src="js/app.js"></script>
    </body>
</html>
