<template>
    <section class="Main">
        <div>
            <Sidebar/>  
            <Footer/>
            <Logo/>
        </div>

        <div class="container">
            <h2>Comment List</h2>

            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Text</th>
                        <th scope="col">Time</th>
                        <th scope="col">Writer ID</th>
                        <th scope="col">Post ID</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>

                <tbody class="table-dark">
                    <tr v-for="comment in comment" :key="comment.id">
                        <td>{{ comment.id }}</td>
                        <td>{{ comment.text }}</td>
                        <td>{{ comment.time }}</td>
                        <td>{{ comment.writer_id }}</td>
                        <td>{{ comment.post_id }}</td>
                       <td> <router-link :to="{name: 'editcomment', params: { id: comment.id }}"><i class='fas fa-edit' style='color:#008CBA;' title="Edit Comment"></i></router-link>
                        <button @click="deleteComment(comment.id)"><i class='far fa-trash-alt' style='color: red;' title="Delete Comment"></i></button></td>  
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
                comment: [], post: []
            }
        },
        created() {
            this.axios
                .get('api/getComment')
                .then(response => {
                    this.comment = response.data;
                });
        },

   methods: {
            deleteComment   (id) { 
                this.axios
                    .delete(`api/deleteComment/${id}`)
                    .then(response => {
                        let i = this.comment.map(data => data.id).indexOf(id);
                        this.comment.splice(i, 1)
                    });

                alert('Comment has been deleted!')
            }
        }
    }
</script>