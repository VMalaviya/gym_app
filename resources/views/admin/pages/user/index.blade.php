@extends('admin.layouts.app')

@section('title', 'Admin - User List')

@push('styles')
<link href="{{asset('admin/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{asset('admin/css/responsive.dataTables.min.css')}}" rel="stylesheet">
@endpush

@section('content')

    <div class="content-header">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item"><a href="#">User</a></li>
                    <li class="breadcrumb-item active" aria-current="page">List</li>
                </ol>
            </nav>
            <br/>
            <h4 class="content-title">Users List</h4>
        </div>
    </div><!-- content-header -->
    <div class="content-body">
        <div class="card card-hover card-task-one">
            <div class="card-body">
            
                <table id="example1" class="table">
                    <thead>
                        <tr>
                            <th>SR.NO</th>
                            <th class="">Name</th>
                            <th class="">Email</th>
                            <th class="">Mobile</th>
                            {{-- <th>Action</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i=1;
                        @endphp
                        @foreach ($users as $user)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$user->full_name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->user_phone_number}}</td>
                                {{-- <td></td> --}}
                            </tr>
                            @php
                                $i++;
                            @endphp
                        @endforeach
                    </tbody>
                </table>

                </div><!-- card-body -->
        </div><!-- card -->
    
    </div><!-- content-body -->

@endsection

@push('scripts')
    <script src="{{asset('admin/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/js/dataTables.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('admin/js/responsive.dataTables.min.js')}}"></script>
    <script>
        $('#example1').DataTable({
        //   responsive: true,
          language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          }
        });
    </script>
@endpush