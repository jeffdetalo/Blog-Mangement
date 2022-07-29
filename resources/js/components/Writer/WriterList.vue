<template>
    <section class="Main">
        <div>
            <Sidebar/>  
            <Footer/>
            <logo/>
        </div>

        <div class="container">
            <h2>Writer List <router-link :to="{name: 'addwriter', params: { id: writer.id }}" class="btn btn-block" ><i class="fas fa-plus"></i></router-link></h2>
            <table class="table">
                <thead class="table-dark">
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Writer Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Restriction</th>
                    <th scope="col">Actions</th>
                    <th scope="col">Add Post</th>
                    </tr>
                </thead>

                <tbody class="table-dark">
                    <tr v-for="writer in writer" :key="writer.id">
                        <td>{{ writer.id }}</td>
                        <td>{{ writer.first_name }} {{ writer.last_name }}</td>
                        <td>{{ writer.gender }}</td>
                        <td>{{ writer.writer_restriction }}</td>
                        <td> <router-link :to="{name: 'editwriter', params: { id: writer.id }}"><i class='fas fa-edit' style='color:#008CBA;' title="Edit Writer"></i></router-link>
                        <button @click="deleteWriter(writer.id)"><i class='far fa-trash-alt' style='color: red;' title="Delete Writer"></i></button></td>
                         <td> <router-link :to="{name: 'addpost', params: { id: writer.id }}"><i class='fas fa-plus' title="Add Post"></i></router-link></td>

                    </tr>
                </tbody>   
            </table>
        </div>
    </section>

</template>

<script>
import Sidebar from '../Sidebar.vue'
import Footer from '../Footer.vue'
import Logo from '../Logo.vue'

    export default {
        components: {
    Sidebar,
    Footer,
    Logo
},
        data() {
            return {
                writer: []
            }
        },
        created() {
            this.axios
                .get('api/getWriter')
                .then(response => {
                    this.writer = response.data;
                });   
        },

   methods: {
            deleteWriter(id) { 
                this.axios
                    .delete(`api/deleteWriter/${id}`)
                    .then(response => {
                        let i = this.writer.map(data => data.id).indexOf(id);
                        this.writer.splice(i, 1)
                    });

                alert('Writer has been deleted!')
            }
        }
    }
</script>

<style>

    .Main
    {
        display: flex;
        flex-direction: row;
        gap: 210px;
        margin-top: 200px;
    }

    .container
    {
        display: flex;
        flex-direction: column;
    }

</style>