@foreach($records as $record)
    <div class="flex flex-col mb-2">
        {{$record}}
    </div>
@endforeach

<div class="flex flex-row">
    <h2>time to live</h2>
    <p>{{$hostNameTimeToLive}}</p>
    <h2>Host name</h2>
    <p>{{$hostNameOfFirstRecord}}</p>
</div>
