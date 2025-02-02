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
                    <li class="breadcrumb-item"><a href="#">Package</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
            </nav>
            <br/>
            <h4 class="content-title">Edit Package</h4>
        </div>
    </div><!-- content-header -->
    <div class="content-body">
        <div class="card card-hover card-task-one">
            <div class="card-body">
            
                <form action="{{route('package.update', $package->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row row-sm">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>
    
                    <div class="row row-sm">
                        
                        <div class="col-sm-4">
                            <label>Package Name</label>
                            <input type="text" name="name" value="{{$package->name}}" class="form-control" placeholder="Package Name">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
    
                        <div class="col-sm-4">
                            <label>Package Duration in Month (e.g. 1 or 2 or 3)</label>
                            <input type="text" name="duration_months" value="{{$package->duration_months}}" class="form-control" placeholder="Package Duration like 1 or 2 or 3">
                            @error('duration_months')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
    
                        <div class="col-sm-4">
                            <label>Price</label>
                            <input type="number" name="price" value="{{$package->price}}" class="form-control" placeholder="Price">
                            @error('price')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                          
                        <div class="col-sm-12 mg-t-10">
                            <label>Description</label>
                            <textarea name="description" class="form-control" rows="6" placeholder="Description...">{{$package->description}}</textarea>
                            @error('description')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
    
                        <div class="col-sm-12 mg-t-10">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
    
                    </div><!-- row -->
                </form>

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