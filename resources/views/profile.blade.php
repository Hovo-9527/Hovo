@extends('layouts.app')

@section('content')
<div class="container">

    <form action="" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="textarea"></textarea>
        </div>

        <div>
            <button class="btn btn-success">Success</button>
        </div>
    </form>






</div>

@endsection
