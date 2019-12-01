
require('./bootstrap');
import 'bootstrap/dist/css/bootstrap.min.css';
import Vue from 'vue';

import VueRouter from 'vue-router';
Vue.use(VueRouter)

import routes from './routes';

import axios from 'axios';
Vue.prototype.axios=axios;

import App from './components/App'

let app=new Vue({
	el: '#app',
	components: { App },
	router: new VueRouter(routes)
});
