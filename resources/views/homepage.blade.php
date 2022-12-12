@include('layout.layout')
<div id='app'>
<header-component></header-component>
</div>
<div id="body" class="w-full">
    <div class="w-full h-96 relative ">
        <img src="{{ URL::to('/img/dns_data.jpg') }}"  class="object-cover w-full h-full" alt="hero">
    </div>
    <div class="absolute top-40 inset-x-2/4">
    <title-input-component></title-input-component>
    </div>
    <div class="h-auto flex flex-col align-center justify-content-around p-24">
        <info-block-component></info-block-component>
    </div>
</div>










<script>
    import HeaderComponent from "../js/components/HeaderComponent";
    export default {
        components: {HeaderComponent},
        data() {
            return {
                // Whether the dropdown menu is open or closed
                isDropdownOpen: false
            }
        }
        }
</script>
