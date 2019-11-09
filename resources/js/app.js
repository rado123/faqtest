require('./bootstrap');
import Vue from 'vue';

import VueRouter from 'vue-router';
Vue.use(VueRouter)

import routes from './routes';

// import VueAxios from 'vue-axios';
import axios from 'axios';
//Vue.use(VueAxios, axios);
//Vue.use(axios);
Vue.prototype.axios=axios;

let app=new Vue({
	el: '#app',
	router: new VueRouter(routes)
});