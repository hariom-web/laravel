@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tasks</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>

                <div class="panel-body">

                    <table class="table">
                        <tr>
                            <th>Title</th>
                            <th>Action</th>
                        </tr>    
                        @foreach($tasks as $task)
                            <tr>
                                <td>{{ $task->title}}</td>
                                <td>
                                    edit

                                    delete

                                </td>
                            </tr>
                            {{ $task->title }}<br>
                        @endforeach
                    </table>
                       
                </div>
            </div>

            {{ link_to_route('task.create','Add new task',null,['class'=>'btn btn-primary']) }}
        </div>
    </div>
</div>
@endsection
