const ClassRoomEdit = () => import('../../pages/classroom/Edit.vue');

export default {
    name: 'classroom.edit',
    path: ':classRoom/edit',
    component: ClassRoomEdit,
    meta: {
        breadcrumb: 'edit',
        title: 'Edit Class Room',
    },
};
