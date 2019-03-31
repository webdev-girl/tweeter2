<!-- <template>
    <div id="tweet">
        <div class="tweet-content">
            {{ tweet.tweet}}
        </div>
         by {{tweet.user_id}} @ {{tweet.created_at}}
    </div>
</template>
import Event from '../event.js';
<script>
    export default {
        data(){
            return{
                tweets: [],
            }
        },
        mounted() {
            Event.$on('added_tweet', (tweet) => {
                this.tweets.unshift(tweet);
            });
            console.log('Tweet Component mounted.')
        },
        props: ['tweets']

    }


</script> -->
