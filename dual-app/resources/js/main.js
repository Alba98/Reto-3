import { createApp } from 'vue'
import App from '../vue/App.vue'
import router from './router'
import '../css/index.css';
import axios from 'axios'

axios.defaults.baseURL = 'http://localhost:8000/api/';
axios.defaults.headers['Authorization'] = `Token ${localStorage.getItem('token')}`;

//const app = createApp(App)
createApp(App).use(router).mount("#app");

app.use(router)

app.mount('#app')