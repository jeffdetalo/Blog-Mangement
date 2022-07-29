<template>
    <section class="Main">
        <div>
            <Sidebar/>  
            <Footer/>
            <Logo/>
        </div>

        <div class="container">
        <h2>Post List </h2>

            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Video</th>
                        <th scope="col">Text</th>
                        <th scope="col">Time</th>
                        <th scope="col">Category</th>
                        <th scope="col">Writer ID</th>
                        <th scope="col">Actions</th>
                        <th scope="col">Add Comment</th>
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
                        <td>{{ post.categories[0].type }}</td>
                        <td>{{ post.writer_id }}</td>
                        <td> <router-link :to="{name: 'editpost', params: { id: post.id }}"><i class='fas fa-edit' style='color:#008CBA;' title="Edit Post"></i></router-link>
                            <button @click="deletePost(post.id)"><i class='far fa-trash-alt' style='color: red;' title="Delete Post"></i></button></td>  
                        <td> <router-link :to="{name: 'addcomment', params: { id: post.id }}"><i class='fas fa-plus' title="Add Comment"></i></router-link></td>
                    </tr>
                </tbody>   
            </table>

        </div>
    </section>
</template>

<script>
import Sidebar from '../Sidebar.vue'
import Footer from '../Footer.vue'
import Logo from '../Logo.vue';

    export default {
        components: {
    Sidebar,
    Footer,
    Logo
},
        data() {
            return {
                post: []
            }
        },
        created() {
            this.axios
                .get('api/getPost')
                .then(response => {
                    this.post = response.data;
                });
        },

   methods: {
            deletePost(id) { 
                this.axios
                    .delete(`api/deletePost/${id}`)
                    .then(response => {
                        let i = this.post.map(data => data.id).indexOf(id);
                        this.post.splice(i, 1)
                    });

                alert('Post has been deleted!')
            }
        }
    }
</script>