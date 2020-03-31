const StudentCreate = () => import('../../pages/students/Create.vue');

export default {
    name: 'students.create',
    path: 'create',
    component: StudentCreate,
    meta: {
        breadcrumb: 'create',
        title: 'Create Student',
    },
};
