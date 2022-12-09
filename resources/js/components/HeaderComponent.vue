<template>
    <header class="flex justify-between items-center h-20 bg-teal-900">
        <div class="flex items-center text-center">
            <a href="http://www.freave.nl"><img v-bind:src="('/images/logo.svg')" class=" mr-1 ml-4 h-22 w-36" alt="logo"></a>
            <h1 class="text-white font-bold text-2xl mt-5">Whois</h1>
        </div>
        <h1 class="text-white font-bold text-xl">Find your website's true identity with DNS Lookup!</h1>
        <nav class="text-white font-bold text-2xl">
            <a class="mr-10 hover:text-lime-500" href="#" v-on:click="isDropdownOpen = !isDropdownOpen">Tools</a>
            <a class="mr-10 hover:text-lime-500" href="#">Contact</a>
            <a class="mr-10 hover:text-lime-500" href="#">Logout</a>
        </nav>
    </header>
    <div class="flex justify-end mt-6 m-6">
        <ul class=" flex flex-col rounded-md text-center bg-teal-900
     text-white font-bold text-xl w-1/6" v-if="isDropdownOpen">
            <li class="mb-4 mt-4 hover:text-lime-500"><a href="#">DNS Records</a></li>
            <li class="mb-4 hover:text-lime-500"><a href="#">Email verification</a></li>
            <li class="mb-4 hover:text-lime-500"><a href="#">WHois Lookup</a></li>
            <li class="mb-4 hover:text-lime-500"><a href="#">Reverse DNS Records</a></li>
        </ul>
    </div>
</template>

<script>
export default {
    name: "HeaderComponent",
    data() {
        return {
            isDropdownOpen: false
        };
    }
}
</script>

