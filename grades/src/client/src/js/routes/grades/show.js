const GradeShow = () => import('../../pages/grades/Show.vue');

export default {
    name: 'grades.show',
    path: ':grade',
    component: GradeShow,
    meta: {
        breadcrumb: 'show',
        title: 'Show Grade',
    },
};
