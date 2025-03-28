@includeIf('common.header')
<h1> This is home page  </h1>
<!-- <h1> {{$name}} </h1> -->
<!-- <h1> {{$users[0]}} </h1> -->

@if($name === 'gajanand')
<h2>this is gajanand </h2>
@elseif($name === 'datta')
<h2>this is datta</h2>
@else
<h2>this is other user </h2>
@endif

<div>
    @foreach($users as $user)
    <h3>{{$user}}</h3>
    @endforeach
</div>

<div>
    @for($i = 0; $i <= 10; $i++)
    <h2> {{$i}} </h2>
    @endfor
</div>