import About from './components/About'
import Home from './components/Home'
import Create from './components/Create'
import Edit from './components/Edit'
import Preview from './components/Preview'
import NotFound from './components/NotFound'


export default {
	mode: 'history',

	routes: [
		{
			path: '/',
			component: About,
			name: 'about'
		},		
		{
			path: '/home',
			component: Home,
			name: 'home'
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
		},
		{
   			path :'*',
    		component: NotFound
  		}

	]

}