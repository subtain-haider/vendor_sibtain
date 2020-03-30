const TeacherShow = () => import('../../pages/teacher/Show.vue');

export default {
    name: 'teacher.show',
    path: ':teacher',
    component: TeacherShow,
    meta: {
        breadcrumb: 'show',
        title: 'Show Teacher',
    },
};
