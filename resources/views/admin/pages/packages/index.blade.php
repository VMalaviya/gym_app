@extends('admin.layouts.app')

@section('title', 'Admin - Packages')

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
                    <li class="breadcrumb-item"><a href="#">Package</a></li>
                    <li class="breadcrumb-item active" aria-current="page">List</li>
                </ol>
            </nav>
            <br/>
            <h4 class="content-title">Package List</h4>
        </div>
    </div><!-- content-header -->
    <div class="content-body">
        <div class="card card-hover card-task-one">
            <div class="card-body">
                <div class="row row-sm mb-4 p-2" style="float:right;">
                    <a href="{{route('package.create')}}" class="btn btn-primary
                        btn-sm">Add New Package</a>
                </div>
                <div class="row row-sm">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                </div> 
            
                <table id="example1" class="table">
                    <thead>
                        <tr>
                            <th>SR.NO</th>
                            <th class="">Name</th>
                            <th class="">Duration (Months)</th>
                            <th class="">Price</th>
                            <th class="">Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i=1;
                        @endphp
                        @foreach ($packages as $package)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$package->name}}</td>
                                <td>{{$package->duration_months}}</td>
                                <td>{{$package->price}}</td>
                                <td>{{$package->description}}</td>
                                <td>
                                    <a href="{{route('package.edit', $package->id)}}" class="btn btn-primary
                                        btn-sm"><i data-feather="edit"></i></a>
                                    <form action="{{ route('package.destroy', $package->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this package?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i data-feather="delete"></i></button>
                                    </form>
                                </td>
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