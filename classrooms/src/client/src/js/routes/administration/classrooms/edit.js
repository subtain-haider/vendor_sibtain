const ClassroomEdit = () => import('../../../pages/classrooms/Edit.vue');

export default {
    name: 'administration.classrooms.edit',
    path: ':classroom/edit',
    component: ClassroomEdit,
    meta: {
        breadcrumb: 'edit',
        title: 'Edit Classroom',
    },
};
