const TeacherEdit = () => import('../../pages/teacher/Edit.vue');

export default {
    name: 'teacher.edit',
    path: ':teacher/edit',
    component: TeacherEdit,
    meta: {
        breadcrumb: 'edit',
        title: 'Edit Teacher',
    },
};
