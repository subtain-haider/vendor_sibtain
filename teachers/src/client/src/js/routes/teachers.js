import routeImporter from '@core/modules/importers/routeImporter';

const routes = routeImporter(require.context('./teachers', false, /.*\.js$/));
const RouterView = () => import('@core/bulma/pages/Router.vue');

export default {
    path: '/teachers',
    component: RouterView,
    meta: {
        breadcrumb: 'teachers',
        route: 'teachers.index',
    },
    children: routes,
};
