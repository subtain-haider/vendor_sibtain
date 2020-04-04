const TeacherEdit = () => import('../../pages/teachers/Edit.vue');

export default {
    name: 'teachers.edit',
    path: ':teacher/edit',
    component: TeacherEdit,
    meta: {
        breadcrumb: 'edit',
        title: 'Edit Teacher',
    },
};
