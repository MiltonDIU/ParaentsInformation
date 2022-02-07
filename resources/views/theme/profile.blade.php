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
                        </div>
                    </div>
                </div>

                <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-12 col-sm-12">
                    <div class="tab-content" id="v-pills-tabContent">
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
                                    <input type="email" id="emailAddress" name="email" value="{{$user->email}}" class="edit_input_field">
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

                                <div class="edit_buttons">
                                    <input type="submit" value="Save Changes" class="btn btn regular_btn submit_btn">

                                    <input type="submit" value="Cancel" class="btn btn regular_btn cancel_btn">
                                </div>
                            </div>

                            </form>
                        </div>

                        <div class="tab-pane fade" id="reset_password" role="tabpanel" aria-labelledby="reset_password_tab">
                            <div class="edit_password_groups">
                                <div class="edit_input full_width mb-3">
                                    <label for="currentPassword" class="paragraph edit_input_text">Current Password</label>
                                    <input type="password" id="currentPassword" class="edit_input_field password_field">
                                </div>

                                <div class="edit_input full_width mb-3">
                                    <label for="newPassword" class="paragraph edit_input_text">New Password</label>
                                    <input type="password" id="newPassword" class="edit_input_field password_field">
                                </div>

                                <div class="edit_input full_width mb-3">
                                    <label for="confirmNewPassword" class="paragraph edit_input_text">Confirm New Password</label>
                                    <input type="password" id="confirmNewPassword" class="edit_input_field password_field">
                                </div>

                                <div class="edit_buttons">
                                    <input type="submit" value="Save Changes" class="btn btn regular_btn submit_btn">

                                    <input type="submit" value="Cancel" class="btn btn regular_btn cancel_btn">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ----------------------- edit profile end ----------------------- -->


@endsection
