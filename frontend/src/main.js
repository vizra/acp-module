import Vue from 'vue'
import modules from './modules.js'

import SuperVCore, { SvRoot } from 'supervjs-core'
import SuperVJSNucleo from 'supervjs-nucleo'

Vue.config.productionTip = false
Vue.use(SuperVCore, {
    config: {
      name: process.env.VUE_APP_NAME,
      apiUrl: process.env.VUE_APP_API_URL
    },
    modules: modules
  }
)

Vue.use(SuperVJSNucleo)

new Vue({
  el: '#app',
  name: 'root',
  mixins: [SvRoot]
})