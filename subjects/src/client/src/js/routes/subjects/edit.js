const SubjectEdit = () => import('../../pages/subjects/Edit.vue');

export default {
    name: 'subjects.edit',
    path: ':subject/edit',
    component: SubjectEdit,
    meta: {
        breadcrumb: 'edit',
        title: 'Edit Subject',
    },
};
