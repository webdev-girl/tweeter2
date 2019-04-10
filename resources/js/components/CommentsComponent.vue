<template>
   <div class="comments">
       <div class="comments-content">

           {{ comment.comment}}
           by {{comment.user_id}} @ {{comment.created_at}}
        </div>
   </div>
</template>

<script>
    export default {
        mounted() {
            this.initialComments();
            console.log('Comments Component mounted.')
        },
        data() {
            return{
            comments:[]

        }
    },
        methods:{
        initialComments(){

            axios.get('/api/tweet-comments/' + this.tweetId)

            .then((response) =>{
             console.log(response);
            this.comments = response.data.data;


        });
    }
},

    props:['comments']

}
</script>
