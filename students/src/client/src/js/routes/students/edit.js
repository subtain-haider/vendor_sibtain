const StudentEdit = () => import('../../pages/students/Edit.vue');

export default {
    name: 'students.edit',
    path: ':student/edit',
    component: StudentEdit,
    meta: {
        breadcrumb: 'edit',
        title: 'Edit Student',
    },
};
