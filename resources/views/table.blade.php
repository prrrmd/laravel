@foreach($data as $item)
{{$item->id}} : {{$item->name}}
<br>
@endforeach

{{$data->links()}}