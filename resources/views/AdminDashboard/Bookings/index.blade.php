@extends('AdminDashboard.Layout.adminBaseView')
@section('dashContent')
    <div class="container">
        <a href="{{route('booking.add')}}" class="btn btn-primary mb-2 float-end">Create New Booking</a>
        <table class="table table-light table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">User Name</th>
                <th scope="col">Booking Name</th>
                <th scope="col">Booked for</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>             
                {{-- @php $i =1; @endphp     --}}
                @foreach($data as $booking)     
                <tr>
                    <th scope="row">{{$i}}</th>
                    <td>{{@$booking->user_name}}</td>
                    <td>{{@$booking->name}}</td>
                    <td>{{@$booking->booking_datetime}}</td>
                    <td><div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                            Actions
                        </button>
                        <span class="bi bi-list"></span>
                        <ul class="dropdown-content">
                            <li><a class="dropdown-item" href="{{route('booking.edit',['id'=>$booking->id])}}"><i class="bi bi-pencil-square"></i> Edit</a></li>                  
                            <li> <a class="dropdown-item" href="{{route('booking.view.delete',['id'=>$booking->id])}}"><i class="bi bi-trash"></i> Delete</a></li>  
                        </ul>
                    </div>
                    </td>
                </tr>
                {{-- @php $i++; @endphp --}}
                @endforeach
            </tbody>
        </table>
    </div>
@endsection