
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
// import Vue from 'vue';
 // export default new Vue();
// Vue.use(require('vue-resource'));

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('tweet-component', require('./components/TweetComponent.vue').default);
Vue.component('comments-component', require('./components/CommentsComponent.vue').default);
Vue.component('comment-component', require('./components/CommentComponent.vue').default);
// Vue.component('pagination', require('laravel-vue-pagination'));

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
//
// const app = new Vue({
//     el: '#app'
// });

const app = new Vue({
    el: '#tweetsWrapper',

    data(){
        return{
            tweets: [],
            lastTweetId: 0,
            lastTimeChecked: 0,
        }
    },
        methods:{
            initialTweets(){

            axios.get("/api/tweetsbynumber/100?user_id/")

            .then((response) => {
            this.tweets = response.data.data;
            this.lastTweetId = response.data.data[((response.data.data).length -1)]["id"];
            // console.log(response.data.data);
        });
    },

        scroll(){
             // ...,

        //     window.onscroll = () => {
        //         if ((window.innerHeight + window.srcollY) >=
        //     (document.body.offsetHeight - 2)){
        //         var startPoint = this.lastTweetId;
        //
        //         if((new Date).getTime() > (this.lastCallTime + 5000)){
        //         axios.get("/api/tweetsbynumberfromstartpoint/3/" + this.lastTweetId + 10)
        //         .then((response) => {
        //               var data = response.data.data;
        //         for (var i = 0; i < data.length; i++){
        //                 this.tweets.push(data[i]);
        //                 this.lastTweetId = data[i]["id"];
        //                 console.log(this.lastTweetId);
        //             }
        //
        //         });
        //
        //         this.lastTimeChecked = (new Date).getTime();
        //         }
        //     }
        // };
    },
},
        mounted(){
         this.initialTweets();
         this.scroll();
     }
})
// export default {
//
// 	data() {
// 		return {
// 			// Our data object that holds the Laravel paginator data
// 			tweetData: {first_page_url: "http://127.0.0.1:8000/user/api?page=1",
//                         from: 111,
//                         last_page: 23,
//                         last_page_url: "http://127.0.0.1:8000/user/api?page=23",
//                         next_page_url: null,
//                         path: "http://127.0.0.1:8000/user/api",
//                         per_page: 5,
//                         prev_page_url: "http://127.0.0.1:8000/user/api?page=22",
//                         to: 111,
//                         total: 111},
// 		}
// 	}
//
// 	mounted() {
// 		Fetch initial results
// 		this.getResults();
// 	},
//
// 	methods: {
// 		Our method to GET results from a Laravel endpoint
// 		getResults(page = 1) {
// 			axios.get('/api?page=1/results?page=' + page)
// 				.then(response => {
// 					this.tweetData = response.data;
// 				});
// 		}
// 	}
//
// }
// const comment = new Vue({
//     el: '',
//     data(){
//         return{
//             comments:[]
//
//             // lastTweetId: 0,
//         }    // lastTimeChecked: 0
//     },
//     methods:{
//     initialComments(){
//
//         axios.get('/api/tweet-comments/' + this.tweetId)
//
//         .then((response) =>{
//          console.log(response);
//         this.comments = response.data.data;
//         });
//     }
// },
//
//      mounted(){
//       this.initialComments();
//
//     }
// })
