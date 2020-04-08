import routeImporter from '@core/modules/importers/routeImporter';

const routes = routeImporter(require.context('./grades', false, /.*\.js$/));
const RouterView = () => import('@core/bulma/pages/Router.vue');

export default {
    path: '/grades',
    component: RouterView,
    meta: {
        breadcrumb: 'grades',
        route: 'grades.index',
    },
    children: routes,
};
