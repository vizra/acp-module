import Vue from 'vue'
Vue.config.productionTip = false

import SuperVCore, { SvRoot } from 'supervjs-core'
Vue.use(SuperVCore, {
    config: {
      name: process.env.VUE_APP_NAME,
      apiUrl: process.env.VUE_APP_API_URL
    }
  }
)

import SuperVJSNucleo from 'supervjs-nucleo'
Vue.use(SuperVJSNucleo)

new Vue({
  el: '#app',
  name: 'root',
  mixins: [SvRoot]
})