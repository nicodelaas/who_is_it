
<template>
    <div class="w-full h-auto">
        <div class="flex justify-center">
            <div class="font-bold">
                {{ trimmedResponse }}
                    </div>
                </div>
            </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        props: ['trimmedResponse']
    }
</script>
