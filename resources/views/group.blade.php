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
        <form action="/group/store" method="post">
            @csrf

            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div>
                <button class="btn btn-success">Success</button>
            </div>


        </form>
        @foreach($groups as $key)
            <div class="card p-5 mt-2">
                <h1>{{ $key['name'] }}</h1>
            </div>
        @endforeach
    </div>















@endsection