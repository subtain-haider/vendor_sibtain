import routeImporter from '@core/modules/importers/routeImporter';

const routes = routeImporter(require.context('./students', false, /.*\.js$/));
const RouterView = () => import('@core/bulma/pages/Router.vue');

export default {
    path: '/students',
    component: RouterView,
    meta: {
        breadcrumb: 'students',
        route: 'students.index',
    },
    children: routes,
};
