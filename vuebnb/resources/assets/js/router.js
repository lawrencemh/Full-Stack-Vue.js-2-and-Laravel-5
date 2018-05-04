import VueRouter from 'vue-router';
import ListingPage from './components/ListingPage';

export default new VueRouter({
    mode  : 'history',
    routes: [
        // {
        //     path     : '/',
        //     component: HomePage,
        // },
        {
            path     : '/listings/:listing',
            component: ListingPage,
        },
    ]
});
