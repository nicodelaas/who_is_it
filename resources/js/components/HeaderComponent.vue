<template>
    <div class="w-full h-8 px-12">
        <user-ip-component></user-ip-component>
    </div>
    <header class="flex justify-between items-center px-12 h-20 bg-[#1da1f2]">
        <div class="flex items-center text-center">
            <a href="http://www.freave.nl"><img v-bind:src="('/img/logo1.scvg.svg')" class=" mr-1 ml-4 h-22 w-36" alt="logo"></a>
            <h1 class="text-white font-bold text-2xl mt-5">Whois</h1>
        </div>
        <h1 class="text-white font-bold text-xl">Find your website's true identity with DNS Lookup!</h1>
        <nav class="text-white font-bold text-2xl">
            <a class="mr-10 hover:text-lime-500" href="#" v-on:click="isDropdownOpen = !isDropdownOpen">Tools</a>
            <a class="mr-10 hover:text-lime-500" href="#">Contact</a>
            <a class="mr-10 hover:text-lime-500" href="#">Logout</a>
        </nav>
    </header>
    <div class="flex justify-end">
        <ul class=" flex flex-col rounded-l-md text-center bg-[#1da1f2]
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
    name: "UserIp",
    name: "HeaderComponent",
    data() {
        return {
            isDropdownOpen: false,
            listItems: ''
        };
    },
    methods: {
        // async getData() {
        //     const result = await fetch("http://127.0.0.1:8000/api/freave.com");
        //     const res = await result.json();
        //     this.resultArray = res
        //     console.log(this.resultArray);
        // },
        async getData() {
            const res = await fetch("http://127.0.0.1:8000/api/freave.com");
            // const finalRes = await res.json();
            // this.listItems = finalRes;
            const finalRes = await res.json();
            console.log(finalRes)
            this.listItems = Object.entries(finalRes).map((arr) => ({
               property: arr[0],
               value: arr[1],
            }));
            console.log(this.listItems)
        }
    },
    mounted() {
        this.getData();
    }
}
</script>

