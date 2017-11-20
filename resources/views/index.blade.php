@extends('layouts.app')

@section('content')

 
    <h1 class="page-title"> Books </h1>

    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN BORDERED TABLE PORTLET-->
            <div class="portlet light portlet-fit bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-users font-dark"></i>
                        <span class="caption-subject font-dark bold uppercase"></span>
                    </div>
                    <div class="tools" style="padding:5px 0 10px;">
                        
                        <a class="btn btn-block btn-primary" href="{{route('addbook')}}">By link</a>  
                        
                        
                <button class="btn btn-block btn-primary" type="button" data-toggle="modal" data-target="#myModal">By modal</button>
<div class ="row">                
<div id="myModal" class="modal fade">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header"><button class="close" type="button" data-dismiss="modal">×</button>
<h4 class="modal-title">New book</h4>
</div>
<div class="modal-body" style="margin:15px">Please fill in all fileds</div>

<form id="bookForm"> 
    <div class="row">
        <div class="col-md-12">
            <div class="portlet box">
              
                <div class="portlet-body">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="portlet-body">
                                <div class="form-group  ">
                                    <label>Author</label>
                                    <input type="text" class="form-control" id="author" name="author" value="">
                                </div>
                            </div>

                            <div class="portlet-body">
                                <div class="form-group">
                                    <label > Name  </label>
                                    <input class="form-control" type="text" id="name" name="name" >
                                    <span class="help-block">
                                        <strong></strong>
                                    </span>
                                </div>
                                
                                   <div class="form-group">
                                    <label > Publish </label>
                                     <input class="form-control" type="text" id="publish" name="publish" >
                                    <span class="help-block">
                                        <strong></strong>
                                    </span>
                                </div>
                                
                                 <div class="form-group  ">
                                    <label>Date</label>
                                    <input type="text" class="form-control" id="date" name="date" >
                                </div>
                                
                               
                            <div class="portlet-body">
                                <div class="form-group  ">
                                    <label>Cover, jpeg,jpg,png,gif, size max: 100000 bytes </label>
                                    <input type="file" class="form-control" id="image" name="image" >
                                </div>
                          
                            </div>

                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-offset-8 col-md-4" style="padding-right:0;">
                                <div class="tools" style="padding:5px 0;float:right;">
                                    <button class="btn btn-danger" type="button" data-dismiss="modal">Close</button>
                                    <input type="submit" class="btn btn-success"  name="s_butt" value="save">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" id="action" name="action" value="save" />
        </div>
    </div>
</form>

</div>
</div>
</div>
</div>
                    </div>
                    
                    

                    
                    
                </div>
                <div class="portlet-body">
                    <div class="">
                        <table class="table table-bordered table-hover dataTable">
                            <thead>
                            <tr>
                                <th> # </th>
                                <th> Author </th>
                                <th> Name </th>
                                <th> Publish </th>
                                <th> Image </th>
                                <th> Data </th>
                                <th> Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($books as $book)
                                <tr id='book_{{$book->id}}'>
                                    <td>{{$book->id}}</td>
                                    <td>
                                       {{$book->name}} 
                                    </td>
                                    <td>
                                       {{$book->author}}
                                    </td>
                                     <td> 
                                       {{$book->date}}
                                     </td>
                                    <td> 
                                       {{$book->publish}}
                                    </td>
                                    <td><img src="/image/{{$book->id}}"  height="100" width="100" /></td>
                                    <td>
                               
  						<button onclick="var context=this; $.ajax({url: '/deletebook/'+'{{$book->id}}',type: 'GET',success: function (data) {del_str(document.getElementById('book_'+'{{$book->id}}'),data);}});" class="delete-modal btn btn-danger"
  							data-id="{{$book->id}}" data-name="{{$book->name}}">
  							<span class=""></span> Delete
  						</button></td>
                                      
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END BORDERED TABLE PORTLET-->
        </div>
    </div>
    
    
   
@endsection



