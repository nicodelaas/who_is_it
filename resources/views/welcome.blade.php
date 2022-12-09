@include('layout.layout')
<div id='app'>
<header-component></header-component>
    <user-ip-component></user-ip-component>
</div>
<div id="body">
    <title-input-component></title-input-component>
    <table>
        {{--domain name--}}
        <tr>
            <td class="font-bold mr-2">Domain Name:</td>
            <td class="ml-4">{{$extraData["Domain Name"]}}</td>
        </tr>
        <tr>
            <td class="font-bold mr-2">Registry Domain ID</td>
            <td class="ml-4">{{$extraData["Registry Domain ID"]}}</td>
        </tr>
{{--        Registrar--}}
        <tr>
            <td class="font-bold mr-2">Registrar WHOIS Server: </td>
            <td class="ml-4">{{$extraData["Registrar WHOIS Server"]}}</td>
        </tr>
        <tr>
            <td class="font-bold mr-2">Registry Domain ID</td>
            <td class="ml-4">{{$extraData["Registry Domain ID"]}}</td>
        </tr>
        <tr>
            <td class="font-bold mr-2">Updated Date: </td>
            <td class="ml-4">{{$extraData["Updated Date"]}}</td>
        </tr>
        <tr>
            <td class="font-bold mr-2">Creation Date: </td>
            <td class="ml-4">{{$extraData["Creation Date"]}}</td>
        </tr>
        <tr>
            <td class="font-bold mr-4">Registrar Registration Expiration Date </td>
            <td class="ml-4">{{$extraData["Registrar Registration Expiration Date"]}}</td>
        </tr>
        <tr>
            <td class="font-bold mr-4">Registrar</td>
            <td class="ml-4">{{$extraData["Registrar"]}}</td>
        </tr>
        <tr>
            <td class="font-bold mr-4">Registrar IANA ID</td>
            <td class="ml-4">{{$extraData["Registrar IANA ID"] ?? "no data found"}}</td>
        </tr>
        <tr>
            <td class="font-bold mr-4">Registrar Abuse Contact Email</td>
            <td class="ml-4">{{$extraData["Registrar Abuse Contact Email"]}}</td>
        </tr>
        <tr>
            <td class="font-bold mr-4">Registrar Abuse Contact Phone</td>
            <td class="ml-4">{{$extraData["Registrar Abuse Contact Phone"]}}</td>
        </tr>
{{--        Registry--}}
        <tr>
            @if(isset($extraData["Registry Registrant ID"]))
                <td class="font-bold mr-4">Registry Registrant ID</td>
            <td class="ml-4">{{$extraData["Registry Registrant ID"]}}</td>
             @else
                <td class="font-bold mr-4">Registry Registrant ID</td>
                <td> no data found </td>
                @endif
        </tr>
        <tr>
            @if(isset($extraData["Registrant Name"]))
                <td class="font-bold mr-4">Registry Name</td>
                <td class="ml-4">{{$extraData["Registrant Name"]}}</td>
            @else
                <td class="font-bold mr-4">Registry Name</td>
                <td> no data found </td>
            @endif
        </tr>
        <tr>
            @if(isset($extraData["Registrant Street"]))
                <td class="font-bold mr-4">Registry Street</td>
                <td class="ml-4">{{$extraData["Registrant Street"]}}</td>
            @else
                <td class="font-bold mr-4">Registry Street</td>
                <td> no data found </td>
            @endif
        </tr>
        <tr>
            <@if(isset($extraData["Registrant Postal Code"]))
                <td class="font-bold mr-4">Registry Postal Code</td>
                <td class="ml-4">{{$extraData["Registrant Postal Code"]}}</td>
            @else
                <td class="font-bold mr-4">Registry Postal Code</td>
                <td> no data found </td>
            @endif
        </tr>
        <tr>
            @if(isset($extraData["Registrant Name"]))
                <td class="font-bold mr-4">Registry Name</td>
                <td class="ml-4">{{$extraData["Registrant Name"]}}</td>
            @else
                <td class="font-bold mr-4">Registry Name</td>
                <td> no data found </td>
            @endif
        </tr>
        <tr>
            @if(isset($extraData["Registrant Organization"]))
                <td class="font-bold mr-4">Registry Organization</td>
                <td class="ml-4">{{$extraData["Registrant Organization"]}}</td>
            @else
                <td class="font-bold mr-4">Registry Organization</td>
                <td> no data found </td>
            @endif
        </tr>
        <tr>
            <td class="font-bold mr-4">Registry Country</td>
            <td class="ml-4">{{$extraData["Registrant Country"]}}</td>
        </tr>
        <tr>
            @if(isset($extraData["Registrant Phone"]))
                <td class="font-bold mr-4">Registrant Phone</td>
                <td class="ml-4">{{$extraData["Registrant Phone"]}}</td>
            @else
                <td class="font-bold mr-4">Registrant Phone</td>
                <td> no data found </td>
            @endif
        </tr>
{{--        Admin Info--}}
        @if(isset($extraData["Registry Admin ID"]))
            <td class="font-bold mr-4">Registrant Admin ID</td>
            <td class="ml-4">{{$extraData["Registry Admin ID"]}}</td>
        @else
            <td class="font-bold mr-4">Registrant Admin ID</td>
            <td> no data found </td>
        @endif
        <tr>
        @if(isset($extraData["Admin Name"]))
            <td class="font-bold mr-4">Admin Name</td>
            <td class="ml-4">{{$extraData["Admin Name"] ?? "no data found"}}</td>
        @else
            <td class="font-bold mr-4">Admin name</td>
            <td> no data found </td>
        @endif
        </tr>
        <tr>
            <td class="font-bold mr-4">Admin Organization</td>
            <td class="ml-4">{{$extraData["Admin Organization"] ?? "no data found"}}</td>
        </tr>
        @if(isset($extraData["Admin Street"]))
            <td class="font-bold mr-4">Admin Street</td>
            <td class="ml-4">{{$extraData["Admin Street"] ?? "no data found"}}</td>
        @else
            <td class="font-bold mr-4">Admin Street</td>
            <td> no data found </td>
        @endif
        <tr>
        @if(isset($extraData["Admin City"]))
            <td class="font-bold mr-4">Admin City</td>
            <td class="ml-4">{{$extraData["Admin City"] ?? "no data found"}}</td>
        @else
            <td class="font-bold mr-4">Admin City</td>
            <td> no data found </td>
        @endif
        <tr>
            <td class="font-bold mr-4">Admin State/Province</td>
            <td class="ml-4">{{$extraData["Admin State/Province"] ?? "no data found"}}</td>
        </tr>
        <tr>
        @if(isset($extraData["Admin Postal Code"]))
            <td class="font-bold mr-4">Admin Postal Code</td>
            <td class="ml-4">{{$extraData["Admin  Postal Code"] ?? "no data found"}}</td>
        @else
            <td class="font-bold mr-4">Admin Postal Code</td>
            <td> no data found </td>
        @endif
        </tr>
        <tr>
        @if(isset($extraData["Admin Phone"]))
            <td class="font-bold mr-4">Admin Phone</td>
            <td class="ml-4">{{$extraData["Admin  Phone"] ?? "no data found"}}</td>
        @else
            <td class="font-bold mr-4">Admin Phone</td>
            <td> no data found </td>
        @endif
        </tr>
{{--        Tech info--}}
        @if(isset($extraData["Registry Tech ID"]))
            <td class="font-bold mr-4">Registry Tech ID</td>
            <td class="ml-4">{{$extraData["Registry Tech ID"] ?? "no data found"}}</td>
        @else
            <td class="font-bold mr-4">Registry Tech ID</td>
            <td> no data found </td>
        @endif
        <tr>
        @if(isset($extraData["Registry Name"]))
            <td class="font-bold mr-4">Registry  Name</td>
            <td class="ml-4">{{$extraData["Registry Name"] ?? "no data found"}}</td>
        @else
            <td class="font-bold mr-4">Registry  Name</td>
            <td> no data found </td>
        @endif
        </tr>
        <tr>
            <td class="font-bold mr-4">Tech Organization</td>
            <td class="ml-4">{{$extraData["Tech Organization"] ?? "no data found"}}</td>
        </tr>
        @if(isset($extraData["Tech Street"]))
            <td class="font-bold mr-4">Tech Street</td>
            <td class="ml-4">{{$extraData["Tech Street"] ?? "no data found"}}</td>
        @else
            <td class="font-bold mr-4">Tech Street</td>
            <td> no data found </td>
        @endif
        <tr>
        @if(isset($extraData["Tech City"]))
            <td class="font-bold mr-4">Tech City</td>
            <td class="ml-4">{{$extraData["Tech City"] ?? "no data found"}}</td>
        @else
            <td class="font-bold mr-4">Tech City</td>
            <td> no data found </td>
        @endif
        </tr>
        <tr>
            <td class="font-bold mr-4">Tech State/Province</td>
            <td class="ml-4">{{$extraData["Tech State/Province"] ?? "no data found"}}</td>
        </tr>
        @if(isset($extraData["Tech Postal Code"]))
            <td class="ml-4">{{$extraData["Tech Postal Code"] ?? "no data found"}}</td>
        @else
            <td> no data found </td>
        @endif
        @if(isset($extraData["Tech Phone"]))
            <td class="ml-4">{{$extraData["Tech Phone"] ?? "no data found"}}</td>
        @else
            <td> no data found </td>
        @endif
        <tr>
            <td class="font-bold mr-4">Tech Email</td>
            <td class="ml-4">{{$extraData["Tech Email"] ?? "no data found"}}</td>
        </tr>
{{--        Billing--}}
        <tr>
            <td class="font-bold mr-4">Tech Organization</td>
            <td class="ml-4">{{$extraData["Billing Organization"] ?? "no data found"}}</td>
        </tr>
        @if(isset($extraData["Billing Street"]))
            <td class="font-bold mr-4">Tech Street</td>
            <td class="ml-4">{{$extraData["Billing Street"] ?? "no data found"}}</td>
        @else
            <td class="font-bold mr-4">Tech Street</td>
            <td> no data found </td>
        @endif
        <tr>
            @if(isset($extraData["Billing City"]))
                <td class="font-bold mr-4">Tech City</td>
                <td class="ml-4">{{$extraData["Billing City"] ?? "no data found"}}</td>
            @else
                <td class="font-bold mr-4">Tech City</td>
                <td> no data found </td>
            @endif
        </tr>
        <tr>
            <td class="font-bold mr-4">Billing State/Province</td>
            <td class="ml-4">{{$extraData["Billing State/Province"] ?? "no data found"}}</td>
        </tr>
        @if(isset($extraData["Billing Postal Code"]))
            <td class="ml-4">{{$extraData["Billing Postal Code"] ?? "no data found"}}</td>
        @else
            <td> no data found </td>
        @endif
        @if(isset($extraData["Billing Phone"]))
            <td class="ml-4">{{$extraData["Billing Phone"] ?? "no data found"}}</td>
        @else
            <td> no data found </td>
        @endif
        <tr>
            <td class="font-bold mr-4">Billing Email</td>
            <td class="ml-4">{{$extraData["Billing Email"] ?? "no data found"}}</td>
        </tr>
    </table>
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
