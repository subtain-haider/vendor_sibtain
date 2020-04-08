const GradeEdit = () => import('../../pages/grades/Edit.vue');

export default {
    name: 'grades.edit',
    path: ':grade/edit',
    component: GradeEdit,
    meta: {
        breadcrumb: 'edit',
        title: 'Edit Grade',
    },
};
