import VueRouter from 'vue-router';
import ListingPage from './components/ListingPage';
import HomePage from './components/HomePage';

export default new VueRouter({
    mode  : 'history',
    routes: [
        {
            name     : 'home',
            path     : '/',
            component: HomePage,
        },
        {
            path     : '/listings/:listing',
            component: ListingPage,
        },
    ]
});
