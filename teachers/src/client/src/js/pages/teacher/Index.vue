<template>
    <enso-table class="box is-paddingless raises-on-hover"
                id="teachers">
        <template v-slot:status="{ row }">
            <span class="tag is-table-tag"
                  :class="cssClass(row.status)">
                {{ row.status }}
            </span>
        </template>
    </enso-table>
</template>

<script>
    import { EnsoTable } from '@enso-ui/bulma';

    export default {
        name: 'Index',

        components: { EnsoTable },

        methods: {
            cssClass(row) {
                switch (row) {
                    case 'Active':
                        return 'is-success';
                    case 'Onleave':
                        return 'is-warning';
                    case 'Fired':
                        return 'is-danger';
                    default:
                        return '';
                }
            },
        },
    };
</script>

<style lang="scss">
</style>
