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
        <form action="/lesson/store" method="post">
            @csrf

            <div class="form-group purple-border">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="form-group purple-border">
                <label for="">Content</label>
                <textarea name="content" id="" class="md-textarea form-control"></textarea>
            </div>
            <select class="form-control mb-2" name="group_id">
                <option selected>Open this select menu</option>
                @foreach($groups as $key)
                    <option value="{{ $key['id'] }}">{{ $key['name'] }}</option>
                @endforeach
            </select>
            <div>
                <button class="btn btn-success">Success</button>
            </div>
        </form>

            <div class="container">
                <table class="table">
                    <tr class="admin-table-name">
                        <td>ID</td>
                        <td>Name</td>
                        <td>Content</td>
                        <td  class="admin-table-delete">EDIT</td>
                        <td  class="admin-table-delete">DELETE</td>
                    </tr>
                    @foreach($lessons as $key)
                    <tr>
                        <td><?= $key['id'] ?></td>
                        <td><?= $key['name'] ?></td>
                        <td><?= $key['content'] ?></td>
                        <td><button type="button" class="btn btn-primary">Edit<a href=""></a></button></td>
                        <td><button type="button" class="btn btn-danger">Delete<a href=""></a></button></td>
                    </tr>


                   @endforeach
                </table>



    </div>

    @endsection