const TeacherShow = () => import('../../pages/teachers/Show.vue');

export default {
    name: 'teachers.show',
    path: ':teacher',
    component: TeacherShow,
    meta: {
        breadcrumb: 'show',
        title: 'Show Teacher',
    },
};
