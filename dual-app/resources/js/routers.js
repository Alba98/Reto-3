import Home from './components/Home.vue';
import Example from './pages/Example.vue';
export const routes = [
    { path: '/vue',
      component: Home, 
      name: 'Home' 
    },
    { path: '/vue/example', 
     component: Example, 
     name: 'Example' 
    }
];