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
			path: '/create',
			component: Create,
			name: 'create'
		},
		{
			path: '/edit/:id',
			component: Edit,
			name: 'edit'
		}

	]

}