@include('layout.layout')
<div id='app'>
<header-component></header-component>
    <user-ip-component></user-ip-component>
</div>
<div id="body">
    <title-input-component></title-input-component>
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
