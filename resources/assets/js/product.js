require('../app')
import Greeting from '../components/Example.vue'

var app = new Vue({
    name: 'App',
    el: '#app',
    components: { Example },
    data: {
        test: 'This is from the welcome page component'
    }
})
