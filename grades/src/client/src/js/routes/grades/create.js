const GradeCreate = () => import('../../pages/grades/Create.vue');

export default {
    name: 'grades.create',
    path: 'create',
    component: GradeCreate,
    meta: {
        breadcrumb: 'create',
        title: 'Create Grade',
    },
};
