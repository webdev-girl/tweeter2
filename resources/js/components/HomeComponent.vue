
<!-- <div class="mt-3">
   <a href="#">
     {{tweet.user.name }}
   </a>  {{ tweet.createdDate }}
</div>
<template>
    <div class="col-md-8 posts">
        <p v-if="!tweet.length">No posts</p>
        <div class="media" v-for="tweet in tweets" :key="tweet.id">
            <img class="mr-3" />
            <div class="media-body">
                <div class="mt-3">
                    <a :href="tweet.user.profileLink">{{ tweet.user.name }}</a> | {{ tweet.createdDate }}

                </div>
                <p>{{ tweet.body }}</p>
            </div>
        </div>
    </div>
</template>
<script>
import Event from '../event.js';

export default {
    data() {
        return {
            tweets: [],
            tweet: {}
        }
    },
    mounted() {
        Event.$on('added_tweet', (tweet) => {
            this.tweets.unshift(tweet);
        });
    }
}
</script> -->
