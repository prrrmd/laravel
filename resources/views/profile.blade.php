<h3>API Calling in laravel</h3><br>
<!-- {{print_r($data)}} -->

@foreach($data as $item)
<li>
	{{$item['id']}} :: {{$item['title']}}
</li>
@endforeach