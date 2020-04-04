import routeImporter from '@enso-ui/ui/src/modules/importers/routeImporter';

const routes = routeImporter(require.context('./classrooms', false, /.*\.js$/));
const Router = () => import('@enso-ui/ui/src/bulma/pages/Router.vue');

export default {
    path: 'classrooms',
    component: Router,
    meta: {
        breadcrumb: 'classrooms',
        route: 'administration.classrooms.index',
    },
    children: routes,
};
