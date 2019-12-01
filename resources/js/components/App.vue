<template>
	<div>
          <h1 class="title is-4">Faqtest</h1>
       
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