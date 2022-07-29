<template>
    <section class="alldata">
        <div>
            <Sidebar/> 
        </div>

        <div class="container">
            <h2>Writer List <router-link :to="{name: 'addwriter', params: { id: writer.id }}"><i class="fas fa-plus-circle" style="font-size:20px"></i></router-link></h2>

            <table class="table">
                <thead class="table-dark">
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Middle Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Restriction</th>
                    </tr>
                </thead>

                <tbody class="table-dark">
                    <tr v-for="writer in writer" :key="writer.id">
                        <td>{{ writer.id }}</td>
                        <td>{{ writer.first_name }}</td>
                        <td>{{ writer.middle_name }}</td>
                        <td>{{ writer.last_name }}</td>
                        <td>{{ writer.gender }}</td>
                        <td>{{ writer.writer_restriction }}</td>
                    </tr>
                </tbody>   
            </table>
        </div>

        <div class="container">
             <h2>Post List <router-link :to="{name: 'addpost', params: { id: post.id }}"><i class="fas fa-plus-circle" style="font-size:20px"></i></router-link></h2>

            <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Video</th>
                    <th scope="col">Text</th>
                    <th scope="col">Time</th>
                    <th scope="col">Writer ID</th>
                 </tr>
            </thead>

            <tbody class="table-dark">
                <tr v-for="post in post" :key="post.id">
                    <td>{{ post.id }}</td>
                    <td>{{ post.title }}</td>
                    <td>{{ post.photo }}</td>
                    <td>{{ post.video }}</td>
                    <td>{{ post.text }}</td>
                    <td>{{ post.time }}</td>
                    <td>{{ post.writer_id }}</td>
                </tr>
            </tbody>   
        </table>
        </div>

        <div class="container">
             <h2>Comment List <router-link :to="{name: 'addcomment', params: { id: comment.id }}"><i class="fas fa-plus-circle" style="font-size:20px"></i></router-link></h2>

            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Text</th>
                        <th scope="col">Time</th>
                        <th scope="col">Writer ID</th>
                        <th scope="col">Post ID</th>
                    </tr>
                </thead>

                <tbody class="table-dark">
                    <tr v-for="comment in comment" :key="comment.id">
                        <td>{{ comment.id }}</td>
                        <td>{{ comment.text }}</td>
                        <td>{{ comment.time }}</td>
                        <td>{{ comment.writer_id }}</td>
                        <td>{{ comment.post_id }}</td>
                    </tr>
                </tbody>   
            </table>
        </div>
    </section>
</template>

<script>
import Sidebar from './Sidebar.vue'
import Footer from './Footer.vue'

    export default {
        components: {
    Sidebar,
    Footer
},
    data() {
        return {
            writer: [], post: [], comment: []
        }
    },
    created() {
        this.axios
            .get('api/getWriter')
            .then(response => {
                this.writer = response.data;
            });

        this.axios
            .get('api/getPost')
            .then(response => {
                this.post = response.data;
            });
            
            this.axios
            .get('api/getComment')
            .then(response => {
                this.comment = response.data;
            });        
        },
    }
</script>

<style>

    .alldata
    {
        display: flex;
        flex-direction: column;
        margin-left: 206px;
        margin-top: 200px;
    }

</style>