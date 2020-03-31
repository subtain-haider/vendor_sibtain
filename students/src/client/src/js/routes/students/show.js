const StudentShow = () => import('../../pages/students/Show.vue');

export default {
    name: 'students.show',
    path: ':student',
    component: StudentShow,
    meta: {
        breadcrumb: 'show',
        title: 'Show Student',
    },
};
