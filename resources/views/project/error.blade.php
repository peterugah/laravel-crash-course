@if($errors)
@foreach($errors->all() as $error)
<p class="notification is-danger">{{$error}}</p>
@endforeach
@endif