import routeImporter from '@core/modules/importers/routeImporter';

const routes = routeImporter(require.context('./subjects', false, /.*\.js$/));
const RouterView = () => import('@core/bulma/pages/Router.vue');

export default {
    path: '/subjects',
    component: RouterView,
    meta: {
        breadcrumb: 'subjects',
        route: 'subjects.index',
    },
    children: routes,
};
