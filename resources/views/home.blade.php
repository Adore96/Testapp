@extends('layouts.app')

@section('content')
  <div class="jumbotron">
  <h1 class="display-4">Hello, world!</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </p>
</div>
<div class="container">
  <div class="row">
       <div class="col-md-3 col-sm-6">
           <div class="progress blue">
               <span class="progress-left">
                   <span class="progress-bar"></span>
               </span>
               <span class="progress-right">
                   <span class="progress-bar"></span>
               </span>
               <div class="progress-value">90%</div>
           </div>
       </div>
       <div class="col-md-3 col-sm-6">
           <div class="progress yellow">
               <span class="progress-left">
                   <span class="progress-bar"></span>
               </span>
               <span class="progress-right">
                   <span class="progress-bar"></span>
               </span>
               <div class="progress-value">75%</div>
           </div>
       </div>
   </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome {{Auth::User()->email}} hgygygy
                    @php
                      $var="shiit";
                      $token=0;
                    @endphp
                    @if ($token==1)
                      <h1>hell</h1>
                    @else
                      <h1>{{$var}}</h1>
                    @endif
                </div>
            </div>
        </div>
      <form class="" action="{{route('testform')}}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleInputEmail1">something</label>
            <input type="text" name="sample" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
</div>
@endsection
