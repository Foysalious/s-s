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
                            Reservation
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page indicator end -->

        <!-- dashbaord statistics seciton start -->
        <section class="statistics">



            <!-- manage row start -->
            <div class="row">
                <div class="col-md-12 table-responsive">
                    <table class="table table-striped" id="myTable">
                        <thead>
                            <tr>
                                <td>Id</td>
                                <td>name</td>
                                <td>email</td>
                                <td>phone</td>
                                <td>Booking Date </td>
                                <td>Booking Time </td>
                                <td>Adult</td>
                                <td>child_under_120_cm</td>
                                <td>child_under_132_cm</td>
                                <td>city</td>
                                <td>address</td>
                                <td>message</td>
                                <td>random</td>
                                <td>payment Method</td>
                                <td>Action</td>
                             
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach($reservations as $reservation)
                            <tr>
                                <th>{{ $i }}</th>
                                <td>
                                   {{$reservation->name}}
                                </td>
                                <td>
                                    {{$reservation->email}}
                                 </td>
                                 <td>
                                    {{$reservation->phone}}
                                 </td>
                                 <td>
                                    {{$reservation->booking_date}}
                                 </td>
                                 <td>
                                    {{$reservation->booking_time}}
                                 </td>
                                 <td>
                                    {{$reservation->adult}}
                                 </td>
                                 <td>
                                    {{$reservation->child_under_120_cm}}
                                 </td>
                                 <td>
                                    {{$reservation->child_under_132_cm}}
                                 </td>
                                 <td>
                                    {{$reservation->city}}
                                 </td>
                                 <td>
                                    {{$reservation->address}}
                                 </td>
                                 <td>
                                    {{$reservation->message}}
                                 </td>
                                 <td>
                                    {{$reservation->random}}
                                 </td>
                                 <td>
                                     @if ($reservation->payment_method==2)
                                            <p class="badge badge-success">Paid</p>
                                         @else
                                            <p class="badge badge-danger">Not Paid</p>
                                     @endif
                                
                                 </td>
                                 
                                 <td>
                                
                                    <!-- edit start -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit{{ $reservation->id }}">
                                        edit
                                    </button>
                                    <div class="modal fade" id="edit{{ $reservation->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="exampleModalLabel">reservation</h3>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('reservationUpdate', $reservation->id) }}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                   
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Name *</label>
                                                                 
                                                            <input type="text" class="form-control" name="name" value="{{$reservation->name}}">                                 
                                                            </div>                                      
                                                        </div>  

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Email *</label>
                                                                 
                                                                <input type="text" class="form-control" name="email" value="{{$reservation->email}}">                                 
                                                            </div>                                      
                                                        </div> 

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Phone *</label>
                                                                 
                                                                <input type="text" class="form-control" name="phone" value="{{$reservation->phone}}">                                 
                                                            </div>                                      
                                                        </div> 

                                                        
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Payment status *</label>
                                                                <select name='payment_method'>
                                                                    <option value="2" {{ ( $reservation->payment_method == 2) ? 'selected' : '' }}>Paid</option>
                                                                    <option value="1"{{ ( $reservation->payment_method == 1) ? 'selected' : '' }}>Not Paid</option>
                                                                
                                                                  </select>                                
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
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $reservation->id }}">
                                        delete
                                    </button>
                                    <div class="modal fade" id="delete{{ $reservation->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="exampleModalLabel">reservation delete</h3>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-footer">
                                                <form action="{{ route('reservationDelete', $reservation->id) }}" method="post">
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