@extends('admin.layouts.app')

@section('title', 'Admin - Users')

@push('styles')
<link href="{{asset('admin/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{asset('admin/css/responsive.dataTables.min.css')}}" rel="stylesheet">
@endpush

@section('content')

    <div class="content-header">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Users</a></li>
                    <li class="breadcrumb-item"><a href="#">User</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create</li>
                </ol>
            </nav>
            <br/>
            <h4 class="content-title">Add New Trainer</h4>
        </div>
    </div><!-- content-header -->
    <div class="content-body">
        <div class="card card-hover card-task-one">
            <div class="card-body">

            <div class="row row-sm">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if(session('error'))
                    <div class="alert alert-danger"> {{ session('error') }} </p>
                @endif
            </div>
            <form action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="row row-sm">

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>First Name</label>
                            <input name="user_first_name" value="{{old('user_first_name')}}" type="text" class="form-control border border-success" placeholder="First Name">
                            @error('user_first_name')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Last Name</label>
                            <input name="user_last_name" value="{{old('user_last_name')}}" type="text" class="form-control border border-success" placeholder="Last Name">
                            @error('user_last_name')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Email Address</label>
                            <input name="email" value="{{old('email')}}" type="text" class="form-control border border-success" placeholder="Email">
                            @error('email')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Mobile Number</label>
                            <input name="user_phone_number" value="{{old('user_phone_number')}}" type="text" class="form-control border border-success" placeholder="Phone">
                            @error('user_phone_number')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Expert In (Like Bodybuilder...)</label>
                            <input name="user_expert_in" value="{{old('user_expert_in')}}" type="text" class="form-control border border-success" placeholder="Expert In">
                            @error('user_expert_in')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Photo</label>
                            {{-- <input type="file" name="user_photo" class="form-control border border-success" placeholder="Photo"> --}}
                            <div class="custom-file">
                                <input type="file" name="user_photo" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                            @error('user_photo')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Gender</label>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio1" name="user_gender" value="male" checked class="custom-control-input" />
                                <label class="custom-control-label" for="customRadio1">Male</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio2" name="user_gender" value="female" class="custom-control-input" />
                                <label class="custom-control-label" for="customRadio2">Female</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 mg-t-10">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    
                </div>

            </form>

            </div><!-- card-body -->
        </div><!-- card -->
    
    </div><!-- content-body -->

@endsection

@push('scripts')
    
@endpush