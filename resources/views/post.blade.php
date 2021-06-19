@extends('layouts.app')
@section('content')




    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/post/store" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Cotnent</label>
                <textarea class="form-control"  name="content"></textarea>
            </div>

            <div>
                <button class="btn btn-success">Success</button>
            </div>
        </form>
        @foreach($posts as $key)
            <div class="card p-5 mt-2">
                <h1>{{ $key['user']['name'] }}</h1>
                <p>{{ $key['content'] }}</p>
            </div>
        @endforeach
    </div>















@endsection