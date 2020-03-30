const ClassRoomShow = () => import('../../pages/classroom/Show.vue');

export default {
    name: 'classroom.show',
    path: ':classRoom',
    component: ClassRoomShow,
    meta: {
        breadcrumb: 'show',
        title: 'Show Class Room',
    },
};
