
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */

Vue.component('example', require('./components/Example.vue'));

new Vue({
  el: '#app',
  data: {
    message: 'Hello Vue!'
  }
});

var basket = new Vue({

        el: '#basket',

        data() {
          return {
            basketItems: []
          }
        },

        ready: function(){
            this.fetchBasket();
        },

        methods: {

            fetchBasket: function(){
                this.$http.get('api/buy/fetchBasket')
                  .then(response => {
                    this.basketItems = response.data;
                  })
                  .catch(response => {
                    // Error Handling
                  });
            }
        }
    });
