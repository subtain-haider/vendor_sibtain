import routeImporter from '@core/modules/importers/routeImporter';

const routes = routeImporter(require.context('./teacher', false, /.*\.js$/));
const RouterView = () => import('@core/bulma/pages/Router.vue');

export default {
    path: '/teacher',
    component: RouterView,
    meta: {
        breadcrumb: 'teacher',
        route: 'teacher.index',
    },
    children: routes,
};
