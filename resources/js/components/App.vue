<template>
	<div>
          <h1 class="title is-2">Faqtest</h1>
          <div>
              <div class="buttons">
                <a class="button is-primary" href="/register"> <strong>Sign up</strong> </a>
                <a class="button is-light" href="/login"> Log in </a>
                <a class="button is-light" >user Rado?</a>
                <a class="button is-light" href="/logout" onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          Logout </a>
                <form id="logout-form" action="/logout" method="POST" style="">   </form>
              </div>
          </div>
          <hr>
          <nav class="navbar" role="navigation" aria-label="main navigation">
              <div id="navbarfaqtest" class="navbar-menu">
                  <div class="navbar-start">
                     <router-link class="navbar-item" :to="{ name: 'preview' }">Preview</router-link>
                     <router-link class="navbar-item" :to="{ name: 'create' }">Create</router-link>
                     <router-link class="navbar-item" :to="{ name: 'about' }">About</router-link>
                  </div>
               </div>
	      </nav>
	      <hr>
          <router-view></router-view>
       
    </div>
</template>
<script>
	export default {};
</script>