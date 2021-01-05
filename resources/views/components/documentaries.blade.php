@php
    $documentarie = count($documentaries['results']);
@endphp
<div class="uppercase font-bold text-lg px-2 text-white">
    Documentaries
</div>
<div class="p-4 flex overflow-y-hidden overflow-x-scroll row-posters">
    @for ( $i = 0; $i < $documentarie; $i++) 
        <img src="https://image.tmdb.org/t/p/original/{{$documentaries['results'][$i]['backdrop_path']}}" 
            data-name="{{$documentaries['results'][$i]['name'] ?? $documentaries['results'][$i]['title']}}"
            alt="{{$documentaries['results'][$i]['name'] ?? $documentaries['results'][$i]['title']}}"
            key="{{$documentaries['results'][$i]['id']}}"
            class=" w-full object-contain mr-5 trailer  row-poster" style="max-height:100px">
    @endfor
</div>