const SubjectCreate = () => import('../../pages/subjects/Create.vue');

export default {
    name: 'subjects.create',
    path: 'create',
    component: SubjectCreate,
    meta: {
        breadcrumb: 'create',
        title: 'Create Subject',
    },
};
