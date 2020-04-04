const TeacherCreate = () => import('../../pages/teachers/Create.vue');

export default {
    name: 'teachers.create',
    path: 'create',
    component: TeacherCreate,
    meta: {
        breadcrumb: 'create',
        title: 'Create Teacher',
    },
};
