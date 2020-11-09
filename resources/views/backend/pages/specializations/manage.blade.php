@extends('backend.template.layout')

@section('body-content')
<!-- main content start -->
<div class="main-content">
    <div class="container-fluid">
        
        <!-- page indicator start -->
        <section class="page-indicator">
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        <li>
                            <i class="fas fa-bars"></i>
                        </li>
                        <li>
                            Our Specializations
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page indicator end -->

        <!-- dashbaord statistics seciton start -->
        <section class="statistics">

          
            <!-- add row start -->
            <div class="row add-row">
                <div class="col-md-12 text-right">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        add new Specializations
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="exampleModalLabel">specialities</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('specialityStore') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>specialities</label>
                                                <img src="{{ asset('backend/images/thumbnail.jpg') }}" id="image_preview_container" class="default-thhumbnail" width="100px" alt=""> 
                                                <input type="file" class="form-control-file" name="image" id="image">                                 
                                            </div>                                      
                                        </div>    

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label> Title</label>
                                                <input type="text" class="form-control-file" name="title" >                                 
                                            </div>                                      
                                        </div>  

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label> Description</label>
                                                
                                                <textarea name="description" class="ckeditor"></textarea>                           
                                            </div>                                      
                                        </div>  
                                                                      
                                    </div>
                                    
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Add</button>                                    
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                    </div>   

                </div>
            </div>
            <!-- add row end -->


            <!-- manage row start -->
            <div class="row">

                
                <div class="col-md-12 table-responsive">
                    <table class="table table-striped" id="myTable">
                        <thead>
                            <tr>
                                <td>Id</td>
                                <td> Image</td>
                                <td>Title</td>
                                <td>Description</td>
                                <td>action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach($speciality as $specialities)
                            <tr>
                                <th>{{ $i }}</th>
                                <td>
                                    @if( $specialities->image != NULL )
                                    <img src="{{ asset('images/specialities/'.$specialities->image) }}" class="img-fluid" width="50px" alt="">
                                    @else
                                    <p class="badge badge-danger">No image uploaded</p>
                                    @endif
                                </td>

                                <td>
                                   {{$specialities->title}}
                                </td>
                                <td>
                                    {!!$specialities->description!!}
                                </td>
                                <td>
                                
                                <!-- edit start -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit{{ $specialities->id }}">
                                    edit
                                </button>
                                <div class="modal fade" id="edit{{ $specialities->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="exampleModalLabel">specialities</h3>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('specialityUpdate', $specialities->id) }}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label> Image *</label>
                                                                <img src="{{ asset('images/specialities/'. $specialities->image) }}"  width="100px" alt=""> 
                                                                <input type="file" class="form-control-file" name="image">                                 
                                                            </div>                                      
                                                        </div>  
                                                        
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label> Title</label>
                                                            <input type="text" class="form-control-file" name="title" value="{{$specialities->title}}">               
                                                            </div>                  
                                                        </div>     
                                                        
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label> Title</label>
                                                            <textarea name="description" class="ckeditor" class="form-control">{!!$specialities->description!!}</textarea>                               
                                                            </div>   
                                                        </div>  
                                                                                    
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-primary">Update</button>                                    
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- edit end -->

                                <!-- delete start -->
                                 <!-- delete start -->
                                 <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $specialities->id }}">
                                    Delete
                                </button>
                                <div class="modal fade" id="delete{{ $specialities->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="exampleModalLabel">specialities delete</h3>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-footer">
                                                <form action="{{ route('specialityDelete', $specialities->id) }}" method="post">
                                                    @csrf
                                                    <button type="submit" class="btn btn-success">yes</button>
                                                </form>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- delete end -->

                                </td>
                            </tr>
                            @php
                                $i++;
                            @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- manage row end -->

        </section>
        <!-- dashbaord statistics seciton end -->

    </div>
</div>
<!-- main content end -->
@endsection