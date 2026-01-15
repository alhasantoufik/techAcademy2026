@extends('admin.layouts.app')
@section('title', 'Edit User')

@push('styles')
<link rel="stylesheet" href="{{ asset('backend') }}/assets/plugins/bootstrap-select/css/bootstrap-select.css" />


@endpush


@section('admin_content')

<div class="container-fluid">

    <div class="row clearfix">

        <div class="col-lg-5 col-md-5 col-sm-12 mt-4">
            <div class="card">
                <div class="card-header">
                    <h4 style="display: inline-block"> Edit User</h4>
                </div>
                <div class="body">
                    <form action="{{ route('update.user', $user->id ) }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-4">
                            <label><b>Name</b></label>
                            <div class="input-group">

                                <span class="input-group-addon"> <i class="material-icons">person</i> </span>
                                <div class="form-line" style="border: 1px solid #ccc">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $user->name) }}">
                                </div>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <label><b>Email</b></label>
                            <div class="input-group">

                                <span class="input-group-addon"> <i class="material-icons">email</i> </span>
                                <div class="form-line" style="border: 1px solid #ccc">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $user->email) }}">
                                </div>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <label><b>Phone</b></label>
                            <div class="input-group">

                                <span class="input-group-addon"> <i class="material-icons">phone</i> </span>
                                <div class="form-line" style="border: 1px solid #ccc">
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone', $user->phone) }}">
                                </div>
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group mb-4">
                            <label><b>Password</b></label>
                            <div class="input-group">

                                <span class="input-group-addon"> <i class="material-icons">lock</i> </span>
                                <div class="form-line" style="border: 1px solid #ccc">
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="form-control" >
                                </div>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <label><b>Confirm Password</b></label>
                            <div class="input-group">

                                <span class="input-group-addon"> <i class="material-icons">lock</i> </span>
                                <div class="form-line" style="border: 1px solid #ccc">
                                    <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" value="form-control">
                                </div>
                                @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-4>
                            <label for="brand_id"><b>Role*</b></label>
                            <div class="form-group">
                                <div class="" style="border: 1px solid #ccc">
                                    <select name="system_admin" class="form-control show-tick">
                                        <option disabled value="0">Select Role</option>

                                        <option value="Admin"
                                            {{ old('system_admin', $user->system_admin) == 'Admin' ? 'selected' : '' }}>
                                            Admin
                                        </option>

                                        <option value="User"
                                            {{ old('system_admin', $user->system_admin) == 'User' ? 'selected' : '' }}>
                                            User
                                        </option>
                                    </select>

                                </div>
                            </div>
                        </div>


                        <button type="submit" class="btn btn-raised btn-warning text-white m-t-15 waves-effect right mb-3" style="font-weight: 500"> Update </button>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@push('scripts')

<script src="{{ asset('backend') }}/assets/plugins/ckeditor/ckeditor.js"></script> <!-- Ckeditor -->

<script src="{{ asset('backend') }}/assets/js/pages/forms/editors.js"></script>


@endpush
