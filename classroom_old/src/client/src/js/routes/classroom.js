import routeImporter from '@core/modules/importers/routeImporter';

const routes = routeImporter(require.context('./classroom', false, /.*\.js$/));
const RouterView = () => import('@core/bulma/pages/Router.vue');

export default {
    path: '/classroom',
    component: RouterView,
    meta: {
        breadcrumb: 'classroom',
        route: 'classroom.index',
    },
    children: routes,
};
