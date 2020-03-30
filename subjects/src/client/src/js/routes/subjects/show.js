const SubjectShow = () => import('../../pages/subjects/Show.vue');

export default {
    name: 'subjects.show',
    path: ':subject',
    component: SubjectShow,
    meta: {
        breadcrumb: 'show',
        title: 'Show Subject',
    },
};
