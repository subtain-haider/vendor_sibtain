<template>
    <div class="columns is-centered">
        <div class="column is-three-quarters is-full-touch">
            <enso-form class="box has-background-light raises-on-hover"
                ref="form">
                <template v-slot:mandatary="props">
                    <form-field v-bind="props"
                        :pivot-params="pivotParams"/>
                </template>
            </enso-form>
            <accessories>
                <template slot-scope="{ count }">
                    <tab keep-alive
                        id="People">
                        <div class="columns is-centered">
                            <div class="column is-two-thirds">
                                <people :id="classroomId"
                                    @update="$set(count, 'People', $refs.people.count)"
                                    @remove="teacherRemoved"
                                    ref="people"/>
                            </div>
                        </div>
                    </tab>
                    <tab keep-alive
                        id="Addresses">
                        <div class="columns is-centered">
                            <div class="column is-two-thirds">
                                <addresses :id="classroomId"
                                    type="Sibtain\Classrooms\App\Models\Classroom"
                                    @update="$set(count, 'Addresses', $refs.addresses.count)"
                                    ref="addresses"/>
                            </div>
                        </div>
                    </tab>
                    <tab keep-alive
                        id="Comments">
                        <div class="columns is-centered">
                            <div class="column is-two-thirds">
                                <comments :id="classroomId"
                                    type="Sibtain\Classrooms\App\Models\Classroom"
                                    @update="$set(count, 'Comments', $refs.comments.count)"
                                    ref="comments"/>
                            </div>
                        </div>
                    </tab>
                    <tab keep-alive
                        id="Discussions">
                        <div class="columns is-centered">
                            <div class="column is-two-thirds">
                                <discussions :id="classroomId"
                                    type="Sibtain\Classrooms\App\Models\Classroom"
                                    @update="$set(count, 'Discussions', $refs.discussions.count)"
                                    ref="discussions"/>
                            </div>
                        </div>
                    </tab>
                    <tab keep-alive
                        id="Documents">
                        <div class="columns is-centered">
                            <div class="column is-two-thirds">
                                <documents :id="classroomId"
                                    type="Sibtain\Classrooms\App\Models\Classroom"
                                    @update="$set(count, 'Documents', $refs.documents.count)"
                                    ref="documents"/>
                            </div>
                        </div>
                    </tab>
                </template>
            </accessories>
        </div>
    </div>
</template>

<script>
import { Tab } from '@enso-ui/tabs/bulma';
import {
    Accessories, Addresses, Comments, Discussions, Documents,
} from '@enso-ui/accessories/bulma';
import { EnsoForm, FormField } from '@enso-ui/forms/bulma';
import People from './components/People.vue';

export default {
    name: 'Edit',

    components: {
        EnsoForm,
        FormField,
        Accessories,
        Tab,
        Addresses,
        Comments,
        Discussions,
        Documents,
        People,
    },

    computed: {
        classroomId() {
            return Number.parseInt(this.$route.params.classroom, 10);
        },
        pivotParams() {
            return {
                classrooms: { id: this.classroomId },
            };
        },
    },

    // methods: {
    //     teacherRemoved(teacherId) {
    //         if (this.$refs.form.field('mandatary').value === teacherId) {
    //             this.$refs.form.field('mandatary').value = null;
    //         }
    //     },
    // },
};
</script>
