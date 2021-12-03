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

                    our form
                    {!! Form::open(array('route'=>'task.store')) !!}
                        <div class="form-group">
                            {!! Form::lable('title','Enter Title') !!}
                            {!! Form::text('title',null,['class'=>'form-control']) !!}

                        </div>

                        <div class="form-group">
                            {!! Form::lable('Body','Enter Body') !!}
                            {!! Form::text('body',null,['class'=>'form-control']) !!}

                        </div>  

                        <div class="form-group">
                            {!! Form::button('create',['type'=>'submit','class'=>'btn btn-primary']) !!}

                        </div> 

                    {!! Form::close() !!}
                       
                </div>
                    }
                    }
            </div>

            @if($errors->has))
                <ul class="alter alter-danger">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif            

        </div>
    </div>
</div>
@endsection
