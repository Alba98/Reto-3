import Vue from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'
import { createApp } from 'vue';
import { applyPolyfills, defineCustomElements } from '@aws-amplify/ui-components/loader';
applyPolyfills().then(() => {  defineCustomElements(window); });

const app = createApp(App);
app.config.isCustomElement = (tag) => tag.startsWith('amplify-');


Vue.config.productionTip = false

new Vue({
  router,
  store,
  created () {
    const userInfo = localStorage.getItem('user')
    if (userInfo) {
      const userData = JSON.parse(userInfo)
      this.$store.commit('setUserData', userData)
    }
    axios.interceptors.response.use(
      response => response,
      error => {
        if (error.response.status === 401) {
          this.$store.dispatch('logout')
        }
        return Promise.reject(error)
      }
    )
  },
  render: h => h(App)
}).$mount('#app')
