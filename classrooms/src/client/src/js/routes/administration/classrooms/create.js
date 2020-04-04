const ClassroomCreate = () => import('../../../pages/classrooms/Create.vue');

export default {
    name: 'administration.classrooms.create',
    path: 'create',
    component: ClassroomCreate,
    meta: {
        breadcrumb: 'create',
        title: 'Create Classroom',
    },
};
