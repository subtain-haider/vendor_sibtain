<template>
    <enso-table class="box is-paddingless raises-on-hover"
        id="companies"
        @clicked="visit">
        <template v-slot:status="{ row }">
            <span class="tag is-table-tag"
                :class="status(row)">
                {{ row.status }}
            </span>
        </template>
    </enso-table>
</template>

<script>
import { mapState } from 'vuex';
import { EnsoTable } from '@enso-ui/tables/bulma';

export default {
    mame: 'Index',

    components: { EnsoTable },

    computed: {
        ...mapState(['enums']),
    },

    methods: {
        visit({ row }) {
            window.open(row.website, '_blank').focus();
        },
        status({ statusValue }) {
            switch (`${statusValue}`) {
            case this.enums.companyStatuses.Active:
                return 'is-success';
            case this.enums.companyStatuses.Overdue:
            case this.enums.companyStatuses.Litigation:
                return 'is-warning';
            case this.enums.companyStatuses.Insolvent:
            case this.enums.companyStatuses.Deregistered:
                return 'is-danger';
            default:
                throw Error(`Unknown status: ${statusValue}`);
            }
        },
    },
};
</script>
