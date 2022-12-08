<template>
<div class="flex justify-center align-center w-full">
    <div class="flex flex-col justify-center align-center mt-12">
    <h2 class="font-bold text-5xl">DNS Lookup</h2>
        <p class="text-xl text-center mt-16">Domain Name / IP Address</p>
        <input type="text" placeholder="  search on basis of domain or IP adress"
               class="mt-2 border w-full h-8">
        <button class="mt-2 bg-teal-900 hover:text-lime-500 text-white text-xl font-bold py-2 px-4 rounded">Search</button>
    </div>
</div>
</template>
<script>
export default {
    name: "TitleAndInputComponent"
}
</script>

