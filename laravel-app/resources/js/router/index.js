import Vue from 'vue';
import VueRouter from 'vue-router';
import FormPage from '../components/FormPage.vue';
import ListPage from '../components/ListPage.vue';

Vue.use(VueRouter);

const routes = [
    { path: '/', name: 'form', component: FormPage },
    { path: '/list', name: 'list', component: ListPage },
];

export default new VueRouter({
    mode: 'history',
    routes,
});
