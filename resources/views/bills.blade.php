<h1> {{$heading  }}</h1>

@if(count($bills)== 0)
<p>No Bills found</p>
 @endif
 
@foreach($bills as $bill)
<h2>{{$bill['title']  }}</h2>
<p>{{$bill['description']  }}</p>

@endforeach