@extends('layouts.app')
@section('content')




    <div class="container">

        <form action="/diarie/store" method="post">
            @csrf


            <div class="form-group">
                <textarea name="content" id="" class="form-control"></textarea>
            </div>


            <div>
                <button class="btn btn-success">SEND</button>
            </div>
        </form>






        <div class="container">
            <table class="table">
                <tr class="admin-table-name">
                    <td>ID</td>
                    <td>Content</td>
                    <td  class="admin-table-delete">EDIT</td>
                    <td  class="admin-table-delete">DELETE</td>
                    <td><button type="button" class="btn btn-primary">Edit<a href=""></a></button></td>
                    <td><button type="button" class="btn btn-danger">Delete<a href=""></a></button></td>
                </tr>


                @foreach($diaries as $key)
                    <div class="card p-5 mt-2">
                        <p>{{ $key['created_at'] }}</p>
                        <p>{{ $key['content'] }}</p>
                    </div>
                @endforeach
            </table>

















    </div>

    @endsection;