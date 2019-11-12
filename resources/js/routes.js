import About from './components/About'
import Create from './components/Create'
import Edit from './components/Edit'
import Preview from './components/Preview'

export default {
	mode: 'history',

	routes: [
		{
			path: '/',
			component: About
		},
		
		{
			path: '/create',
			component: Create,
			name: 'create'
		},
		{
			path: '/preview',
			component: Preview,
			name: 'preview'
		},
		{
			path: '/edit/:id',
			component: Edit,
			name: 'edit'
		}

	]

}