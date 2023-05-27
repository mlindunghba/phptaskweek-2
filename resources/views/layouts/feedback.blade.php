
<link rel="stylesheet" href="{{ url('assets/bootstrap/css/bootstrap.min.css') }}">

@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success.</strong> 
  {!! session('success') !!}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

@if(session('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error.</strong> 
  {!! session('error') !!}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

@if(session('info'))
<div class="alert alert-info alert-dismissible fade show" role="alert">
  <strong>Info.</strong> 
  {!! session('error') !!}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

@if(count($errors) > 0)
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Warning.</strong> 
  <ul>
      @foreach ($errors->all() as $error)
      <li> {{ $error }} </li>
      @endforeach
    </ul>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif