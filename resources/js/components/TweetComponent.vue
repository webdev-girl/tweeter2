 <template>
    <div class="tweet">
        <div class="tweet-border">
            <h6 class="home-tweet-fonts">{{ tweet.tweet}}</h6>
        </div>
         by {{tweet.user_id}} @ {{tweet.created_at}}
         <!-- <button  :class=" { 'is-visable' : likesVisable } " @click="tweetLike(tweet.id)" >Like</button>
         <button  :class=" { 'is-invisable' : unlikeVisable } " @click="tweetUnLike(tweet.id)">Unlike</button> -->
            <!-- <button class="{'displaying' : likeActive }" class="like btn-like" @click="likeTweet(tweet.id)" ng-click="like()">
                 <i class="fas fa-heart"></i>
            </button>
            <button :class="{'displaying': unLikeActive }" class="like btn-unlike" @click="tweetUnLike(tweet.id)" ng-click="like()">
                <i class="fas fa-thumbs-down"></i>
            </button> -->
             {{tweet.number_of_likes}}

        <!-- <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <img class="comment-avatar" src="images/profile.png" alt="profile">
                </div>
                <div class="col-md-6">
                    <form  method="POST" action="/api/new-comment">
                        <textarea v-model="comment" class="form-control comment-box" rows="1" placeholder="What's happening?" required></textarea>
                        <input type="hidden" name="user_id"  />
                        <input type="hidden" name="tweet_id" />
                        <button  @click="makeComment" type="submit" class="btn btn-primary">comment</button>
                    </form>
                </div>
            </div>
        </div> -->

    </div>

</template>

<script>
    export default {
        mounted(){
            console.log('Tweet Component mounted.')
            // if(this.tweet.liked_by_user == '1'){
            //     this.unlikeVisable = true,
            //     this.likesVisable = false
            // }
            //     this.makeComment();
            //     this.tweetUnLike();
            //     this.tweetLike();
             },

        data(){
            return {
                tweets:[]
                }

            },

            // methods:{
            //     tweetLike(tweetId){
            //        // this.tweet.likes = parseInt(this.tweet.likes) + 1;
            //        this.likesVisable = true,
            //        this.unlikeVisable = false,
            //
            //        this.tweet.number_of_likes,
            //     alert(currentLoggedInUserId);
            //        axios.post('/api/tweetlike-api',{
            //            tweet_id: tweetId,
            //            like: '1',
            //            comment: this.makeComment,
            //            user_id: currentLoggedInUserId
            //        })
            //
            //        .then(function(response){
            //        console.log(resource);
            //        })
            //
            //        .catch(function(error){
            //        console.log(error);
            //     });
            // },

            //    tweetUnLike(tweetId){
            //        if(this.tweet.likes >0){
            //         // this.tweet.likes = parseInt(this.tweet.likes) - 1;
            //
            //         this.likesVisable = false,
            //         this.unlikeVisable = true,
            //
            //         this.tweet.number_of_Unlikes,
            //         alert(currentLoggedInUserId);
            //         axios.post('/api/tweetunlike-api',{
            //             tweet_id: tweetId,
            //             like: '0',
            //             comment: makeComment,
            //             user_id: currentLoggedInUserId
            //         })
            //
            //         .then(function(response){
            //         console.log(resource);
            //         })
            //
            //         .catch(function(error){
            //         console.log(error);
            //         });
            //     }
            //
            // },

            // makeComment() {
            //      alert(this.newComment);
            //     axios.post('/api/new-comment',{
            //         tweet_id: this.tweet.id,
            //         comment: this.newComment,
            //         user_id: currentLoggedInUserId
            //     })

          //       .then(function(response){
          //       console.log(resource);
          //       })
          //
          //       .catch(function(error){
          //       console.log(error);
    props:['tweet']      //    });
}




</script>
