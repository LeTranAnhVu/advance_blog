import Vue from 'vue';
import VueRouter from 'vue-router';
import Admin from "../components/Admin";
import authRouter from './auth-router';
import Auth from "../components/Auth/Auth";

// components


Vue.use(VueRouter);

const routes = [
    {
        path: '/auth',
        name: 'auth',
        component: Auth,
        children: authRouter,
        meta: {
            title: 'Authetication'
        }
    },
    {
        path: '/',
        name: 'admin',
        component: Admin,
        meta: {
            title: 'Admin',
        },
    }

];

export default new VueRouter({
    base: '/app/',
    mode: 'history',
    routes,
});