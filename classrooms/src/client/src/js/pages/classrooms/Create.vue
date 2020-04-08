<template>
    <div class="columns is-centered">
        <div class="column is-three-quarters-desktop is-full-touch">
            <enso-form class="box has-background-light raises-on-hover">
                <template v-slot:company_id="props">
                    <form-field v-bind="props"
                                @input="companies = $event"/>
                </template>
                <template v-slot:grade_id="props">
                    <form-field v-bind="props"
                                :params="params"/>
                </template>
                <template v-slot:abbreviation="props">
                    <form-field v-bind="props"/>
                </template>
            </enso-form>
        </div>
    </div>
</template>

<script>
    import { EnsoForm, FormField } from '@enso-ui/forms/bulma';

    export default {
        name: 'Create',

        components: { EnsoForm, FormField },

        data: () => ({
            companies: [],
        }),

        computed: {
            params() {
                return {
                    company_id: this.companies,
                };
            },
        },
    };
</script>
