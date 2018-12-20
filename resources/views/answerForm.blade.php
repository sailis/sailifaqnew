@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">




                <div class="card">
                    <div class="card-header">Create Answer</div>
                    <div class="card-body">
                        @if($edit === FALSE)
                            {!! Form::model($answer, ['route' => ['answers.store', $question], 'method' => 'post']) !!}

                        @else()
                            {!! Form::model($answer, ['route' => ['answers.update', $question, $answer], 'method' => 'patch']) !!}
                        @endif
                        <div class="form-group">
                            {!! Form::label('body', 'Body') !!}
                            {!! Form::text('body', $answer->body, ['class' => 'form-control','required' => 'required']) !!}
                        </div>
                        <button class="btn btn-success float-right" value="submit" type="submit" id="submit">Save
                        </button>
                        {!! Form::close() !!}
                    </div>

                </div>

                <div class="card">
                    <div class="card-header">Upload File</div>
                    <div class="card-body">

                        <form action="{{route('upload')}}" method="post"   enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="file" class="form-control">
                            <input type="Submit" class="btn btn-primary">
                        </form>



            </div>
        </div>
    </div>
@endsection