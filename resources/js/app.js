
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const app = new Vue({
//     el: '#app'
// });


// Vue.component('profile', require('./components/profile/Profile.vue'));

//
//
// window.Vue = require('vue');
// import Toasted from 'vue-toasted';
// Vue.use(Toasted)
// Vue.toasted.register('error', message => message, {
//     position : 'bottom-center',
//     duration : 1000
// })
// Vue.component('profile', require('./components/profile/Profile.vue'));
// Vue.component('form-component', require('./components/FormComponent.vue'));
 Vue.component('home-component', require('./components/HomeComponent.vue'));
 // Vue.component('tweet-component', require('./components/TweetComponent.vue'));
// app.js
// const app = new Vue({
//     el: '#app'
// });
// const app = new Vue({
//     el: '#tweetsWrapper',
//     data(){
//         return{
//             tweets: [{
//                         id: 2,
//                         user_id: 607,
//                         tweet: "Gryphon. 'Do you know about this business?' the King added in an impatient tone: 'explanations take such a curious appearance in the pool, 'and she sits purring so nicely by the end of the words all.",
//                         created_at: "2019-03-30 20:43:01",
//                         updated_at: "2019-03-30 20:43:01",
//                         createdDate: "6 hours ago"
//                         },
//                         {
//                         id: 3,
//                         user_id: 607,
//                         tweet: "Cheshire cats always grinned; in fact, a sort of thing never happened, and now here I am to see if she was small enough to get out again. That's all.' 'Thank you,' said the Hatter. 'You MUST.",
//                         created_at: "2019-03-30 20:43:01",
//                         updated_at: "2019-03-30 20:43:01",
//                         createdDate: "6 hours ago"
//                     }],
//         },
//         methods(){
//             showTweet(){
//                 let url = 'http://127.0.0.1:8000/api/tweetsbynumber/10';
//                 this.axios.tweet(url, this.tweets).then((response) => {
//                    this.$router.push({name: 'tweets'});
//                    console.log('test'this.tweets);
//                 });
//             }
//         }
//
// });
