<template>
    <table>
        <tr v-for="item in getBillingItems('Billing')" :key="item.property">
            <td class="py-1 pr-1">{{ item.property }}</td>
            <td class="py-1 pr-1">{{ item.value }}</td>
        </tr>
    </table>
</template>

<script>
export default {
    name: "HeaderComponent",
    data() {
        return {
            listItems: [],
        };
    },
    methods: {
        async getData() {
            const res = await fetch("http://127.0.0.1:8000/api/freave.com");
            const finalRes = await res.json();
            this.listItems = Object.entries(finalRes).map((arr) => ({
                property: arr[0],
                value: arr[1],
            }));

            return this.listItems;
        },
        getBillingItems(filteredProperty) {
            return this.listItems.filter(item => item.property.startsWith(filteredProperty));
        }
    },
    created() {
        this.getData();
    }
}
</script>
