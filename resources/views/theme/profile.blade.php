@extends('layouts.master')
@section('content')


    <!-- ----------------------- edit profile start ----------------------- -->
    <section id="edit_profile_main">
        <div class="container">
            <div class="row">
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-12 col-sm-12">
                    <div class="d-flex align-items-start">
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <button class="nav-link active" id="edit_profile_tab" data-bs-toggle="pill" data-bs-target="#edit_profile" type="button" role="tab" aria-controls="edit_profile" aria-selected="true"><i class="fas fa-pencil-alt"></i>Edit Profile</button>

                            <button class="nav-link" id="reset_password_tab" data-bs-toggle="pill" data-bs-target="#reset_password" type="button" role="tab" aria-controls="reset_password" aria-selected="false"><i class="fas fa-lock"></i>Reset Password</button>
                            <a class="nav-link" href="{{ route('feedback') }}"><i class="fas fa-envelope"></i>Feedback</a>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-12 col-sm-12">
                    <div class="tab-content" id="v-pills-tabContent">
                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="tab-pane fade show active" id="edit_profile" role="tabpanel" aria-labelledby="edit_profile_tab">
                            <form method="POST" action="{{ route("profile.my-profile.update", [auth()->id()]) }}" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                            <div class="edit_form_groups">
                                <div class="edit_input full_width mb-3">
                                    <label for="firstName" class="paragraph edit_input_text">Name</label>
                                    <input type="text" id="firstName" name="name" value="{{$user->name}}" class="edit_input_field">
                                </div>

                                <div class="edit_input full_width mb-3">
                                    <label for="phoneNumber" class="paragraph edit_input_text">Phone Number</label>
                                    <input type="text" id="phoneNumber" name="mobile" value="@if($user->profile){{$user->profile->mobile}}@endif" class="edit_input_field">
                                </div>

                                <div class="edit_input full_width mb-3">
                                    <label for="emailAddress" class="paragraph edit_input_text">Email Address</label>
                                    <input type="email" readonly id="emailAddress" name="email" value="{{$user->email}}" class="edit_input_field">
                                </div>

                                <div class="edit_input full_width mb-3">
                                    <label for="presentAddress" class="paragraph edit_input_text">Present Address</label>
                                    <textarea id="presentAddress" name="address"  class="edit_input_field">
@if($user->profile){{$user->profile->address}}@endif
                                    </textarea>
                                </div>

                                <div class="edit_input full_width mb-4">
                                    <label for="studentId" class="paragraph edit_input_text">Student ID <span>(Optional)</span></label>
                                    <input type="text" id="studentId" name="student_id" value="@if($user->profile){{$user->profile->student_id}}@endif"  class="edit_input_field">
                                </div>

                                <div class="edit_input full_width mb-4">
                                    <label for="studentId" class="paragraph edit_input_text">If you want to get the newsletter<span>(Optional)</span></label>


                                    @foreach(App\Models\Link::IS_ACTIVE_RADIO as $key => $label)
                                            <input style="width: 30px; height: 30px" class="form-check-input" type="radio" id="if_notification_{{ $key }}" name="if_notification" value="{{ $key }}" {{ old('if_notification', $user->if_notification) === (string) $key ? 'checked' : '' }} required>
                                         <span style="margin-left: -80px">  {{$label}}</span>
                                    @endforeach


                                </div>

                                <div class="edit_buttons">
                                    <input type="submit" value="Save Changes" class="btn btn regular_btn submit_btn">

                                    <input type="submit" value="Cancel" class="btn btn regular_btn cancel_btn">
                                </div>
                            </div>

                            </form>
                        </div>

                        <div class="tab-pane fade" id="reset_password" role="tabpanel" aria-labelledby="reset_password_tab">

                            <form method="POST" action="{{ route("profile.password.update") }}">
                                @csrf

                            <div class="edit_password_groups">

                                <div class="form-group edit_input full_width mb-3">
                                    <label class="required paragraph edit_input_text" for="title">{{ trans('cruds.user.fields.email') }}</label>
                                    <input class="form-control edit_input_field password_field {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" id="email" value="{{ old('email', auth()->user()->email) }}" required>
                                    @if($errors->has('email'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('email') }}
                                        </div>
                                    @endif
                                </div>


                                <div class="form-group  edit_input full_width mb-3">
                                    <label for="newPassword" class="paragraph edit_input_text">New {{ trans('cruds.user.fields.password') }}</label>
                                    <input class="form-group  edit_input_field password_field {{ $errors->has('password') ? 'is-invalid' : '' }}" type="password" name="password" id="password" required>
                                    @if($errors->has('password'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('password') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group  edit_input full_width mb-3">
                                    <label for="confirmNewPassword" class="paragraph edit_input_text">Repeat New {{ trans('cruds.user.fields.password') }}</label>
                                    <input class="form-group  edit_input_field password_field" type="password" name="password_confirmation" id="password_confirmation" required>
                                </div>

                                <div class="form-group  edit_buttons">
                                    <input type="submit" value="Save Changes" class="btn btn regular_btn submit_btn">

                                    <input type="submit" value="Cancel" class="btn btn regular_btn cancel_btn">
                                </div>
                            </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ----------------------- edit profile end ----------------------- -->


@endsection
