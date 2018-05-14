@extends('layouts.master')

@section('content')
 
<div class="row">
    <div class col-md-4>
        <h2>Sign In</h2>
                <hr>
                @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                    @endforeach
                </div>
                @endif
        
        
        <form action="{{ route('user.signin') }}" method="post">
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" id="email" name="email" >
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="form-group form-check">
                <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember me</label>
            </div>
            <button type="submit" class="btn btn-primary">Sign In</button>
            {{ csrf_field() }}
        </form>
    
    </div>
    
    
</div>

@endsection