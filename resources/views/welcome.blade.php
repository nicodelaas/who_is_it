@include('layout.layout')
{{--@foreach($records as $record)--}}
{{--    <div class="flex flex-col mb-2">--}}
{{--        {{$record}}--}}
{{--    </div>--}}
{{--@endforeach--}}

{{--<div class="flex flex-row">--}}
{{--    <h2>time to live</h2>--}}
{{--    <p>{{$hostNameTimeToLive}}</p>--}}
{{--    <h2>Host name</h2>--}}
{{--    <p>{{$hostNameOfFirstRecord}}</p>--}}
{{--</div>--}}

{{--@if($currentUserInfo)--}}
{{-- <div class="flex flex-col">--}}
{{--{{ $currentUserInfo->ip }}--}}
{{--{{ $currentUserInfo->countryName }}--}}
{{--{{ $currentUserInfo->countryCode }}--}}
{{--{{ $currentUserInfo->regionCode }}--}}
{{--{{ $currentUserInfo->regionName }}--}}
{{--{{ $currentUserInfo->cityName }}--}}
{{--{{ $currentUserInfo->zipCode }}--}}
{{--{{ $currentUserInfo->latitude }}--}}
{{--{{ $currentUserInfo->longitude }}--}}
{{--    </div>--}}
{{--@endif--}}

{{--{{$ip}}--}}

{{--{{{$ipaddress}}}--}}

{{--<div class="flex h-12 w-12">--}}
{{--    {!!$jsonInfo!!}--}}
{{--    <br>--}}
{{--    {!! $jsondomainInfo !!}--}}
{{--    <br>--}}
{{--    {!!$trimmedResponse!!}--}}
{{--</div>--}}

<div id='app'>
<example-component :trimmedResponse="{{ $trimmedResponse }}"></example-component>
</div>




