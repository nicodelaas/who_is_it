<template>
<div class="flex align-center w-96">
    <div class="flex flex-col align-center mt-12">
    <h2 class="font-bold text-white text-5xl">DNS Lookup</h2>
        <p class="text-xl text-white text-center mt-16 mb-4">Domain Name / IP Address</p>
        <div class="flex w-full">
        <input type="text" placeholder="     search"
               class="mt-2 rounded-l border w-full">
        <button class="mt-2 bg-[#1da1f2] hover:text-lime-600 text-white text-xl font-bold py-2 px-4 rounded-r">Lookup</button>
        </div>
    </div>
</div>
</template>
<script>
export default {
    name: "TitleAndInputComponent"
}
</script>

