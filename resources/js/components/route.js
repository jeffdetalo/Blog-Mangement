import Vue from "vue"
import VueRouter from "vue-router"
import Login from './Login.vue'
import Dashboard from './Dashboard.vue'
import WriterList from './Writer/WriterList.vue'
import AddWriter from './Writer/AddWriter.vue'
import EditWriter from './Writer/EditWriter.vue'
import PostList from './Post/PostList.vue'
import AddPost from './Post/AddPost.vue'
import EditPost from './Post/EditPost.vue'
import CommentList from './Comment/CommentList.vue'
import AddComment from './Comment/AddComment.vue'
import EditComment from './Comment/EditComment.vue'
import AllData from './AllData.vue'

Vue.use(VueRouter);
export default new VueRouter({
    routes: [
        {
            name: 'login',
            path: '',
            component: Login
        },

        {
            name: 'dashboard',
            path: '/dashboard',
            component: Dashboard
        },
        
        {
            name: 'alldata',
            path: '/alldata',
            component: AllData
        },

        {
            name: 'writerlist',
            path: '/writerlist',
            component: WriterList
        },

        {
            name: 'addwriter',
            path: '/addwriter',
            component: AddWriter
        },

        {
            name: 'editwriter',
            path: '/edit/:id',
            component: EditWriter
        },

        {
            name: 'postlist',
            path: '/postlist',
            component: PostList
        },

        {
            name: 'addpost',
            path: '/addpost',
            component: AddPost
        },

        {
            name: 'editpost',
            path: '/editpost',
            component: EditPost
        },

        {
            name: 'commentlist',
            path: '/commentlist',
            component: CommentList
        },

        {
            name: 'addcomment',
            path: '/addcomment',
            component: AddComment
        },

        {
            name: 'editcomment',
            path: '/editcomment',
            component: EditComment
        },
    ],

})