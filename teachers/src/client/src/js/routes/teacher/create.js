const TeacherCreate = () => import('../../pages/teacher/Create.vue');

export default {
    name: 'teacher.create',
    path: 'create',
    component: TeacherCreate,
    meta: {
        breadcrumb: 'create',
        title: 'Create Teacher',
    },
};
