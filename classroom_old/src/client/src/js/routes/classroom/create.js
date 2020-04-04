const ClassRoomCreate = () => import('../../pages/classroom/Create.vue');

export default {
    name: 'classroom.create',
    path: 'create',
    component: ClassRoomCreate,
    meta: {
        breadcrumb: 'create',
        title: 'Create Class Room',
    },
};
