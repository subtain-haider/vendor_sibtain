const StudentIndex = () => import('../../pages/students/Index.vue');

export default {
    name: 'students.index',
    path: '',
    component: StudentIndex,
    meta: {
        breadcrumb: 'index',
        title: 'Students',
    },
};
