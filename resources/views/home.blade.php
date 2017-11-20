@extends('layouts.app')

@section('content')







<div class="container">
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

                    
                   <h1 class="page-title"><i class="icon-users font-dark"></i> New Book </h1>

          
                   
    {{ Form::open([ 'route' => ['addbook'], 'method' => 'POST','enctype' => 'multipart/form-data']) }}
    <div class="row">
        <div class="col-md-12">
            <div class="portlet box">
              
                <div class="portlet-body">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="portlet-body">
                                <div class="form-group  ">
                                    <label>Author</label>
                                    <input type="text" class="form-control" name="author" value="">
                                </div>
                            </div>

                            <div class="portlet-body">
                                <div class="form-group">
                                    <label > Name  </label>
                                    <textarea class="form-control" id="text" name="name" rows="3"></textarea>
                                    <span class="help-block">
                                        <strong></strong>
                                    </span>
                                </div>
                                
                                   <div class="form-group">
                                    <label > Publish </label>
                                    <textarea class="form-control" id="text" name="publish" rows="3"></textarea>
                                    <span class="help-block">
                                        <strong></strong>
                                    </span>
                                </div>
                                
                                 <div class="form-group  ">
                                    <label>Date</label>
                                    <input type="text" class="form-control" name="date" value="">
                                </div>
                                
                               
                            <div class="portlet-body">
                                <div class="form-group  ">
                                    <label>Cover, jpeg,jpg,png,gif, size max: 100000 bytes </label>
                                    <input type="file" class="form-control" name="image" value="">
                                </div>
                          
                            </div>

                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-offset-8 col-md-4" style="padding-right:0;">
                                <div class="tools" style="padding:5px 0;float:right;">
                                    <a href="/home" class="btn btn-danger">Back</a>
                                    <button class="btn btn-success">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" name="action" value="save" />
        </div>
    </div>
    {!! Form::close() !!}

  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
