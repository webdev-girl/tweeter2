 <template>
    <div class="comment">
        {{ comment.comment }}
         by {{comment.user_id}} @ {{comment.created_at}}
    </div>

</template>

<script>
    export default {
        mounted() {
            console.log('Comment Component mounted.')
        },
        props:['comment']
    }
</script>
