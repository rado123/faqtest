import Home from './components/Home'
import About from './components/About'
import Create from './components/Create'
import Edit from './components/Edit'

export default {
	mode: 'history',

	routes: [
		{
			path: '/',
			component: Home
		},
		{
			path: '/about',
			component: About,
			name: 'about'
		},

		{
			path: '/faqs/create',
			component: Create,
			name: 'create'
		}

	]

}