<template>
    <div>   
        <button class="mt-2 btn btn-primary" @click="showDetails">View Details</button>
        <p class="mt-2" v-for="details in content" v-text="details.body"></p>
    </div>
</template>

<script>
    export default {
        
        props: ['selectEmail'],

        mounted() {
            console.log('Component mounted.')
        },

        data: function() {
            return {
                content: []
            }
        },

        methods: {
            showDetails(){
                console.log(this.selectEmail);
                axios
                    .get('https://jsonplaceholder.typicode.com/comments?email=' + this.selectEmail)
                    .then(response => {
                        this.content = response.data;
                        console.log(response.data);
                    });                
            }
        },
    }
</script>