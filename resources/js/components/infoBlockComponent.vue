<template>
<div class="h-96 w-full flex justify-around mt-16">
    <img :src="image" class="w-1/4" alt="visual_data">
    <div class="w-1/2 mt-24">
       <h1 class="font-bold text-3xl"> What does it do? </h1>
    <p  class="mt-12 text-xl"> WHOIS data lookup is a tool that allows you to search for information about the owner
        of a domain name or IP
        address. WHOIS data can provide a number of useful insights and can be beneficial for a variety of reasons.
       </p>
    </div>
</div>
    <div class="h-96 w-full flex justify-around mt-16">
        <div class="w-1/2 mt-24">
            <h1 class="font-bold text-3xl"> Another benefit </h1>
            <p  class="mt-12 text-xl">Another benefit of WHOIS data lookup is that it can help you to identify
                the registrar and hosting provider for a particular domain. This information can be useful if you
                are trying to track down the source of a problem with a website, or if you want to learn more about
                the hosting provider that a particular website is using.
            </p>
        </div>
        <img :src="infoImage" class="w-1/4" alt="info_about_domain">
    </div>
</template>

<script>
import image from "/public/img/visual_data.svg"
import infoImage from "/public/img/info_image.svg"
export default {
    data: function () {
        return {
            image: image,
            infoImage: infoImage
        }
    },
    name: "infoBlockComponent"
}
</script>

