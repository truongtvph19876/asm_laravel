@extends('frontend.layouts.app')

@section('title') Edit {{$$module_name_singular->name}}'s Profile @endsection

@section('content')
    <form action="{{ route('frontend.users.profileUpdate', encode_id($$module_name_singular->id)) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">
                <div class="col-md-3 border-right">
                    <div class="card-body text-center" style="display: flex; flex-direction: column">
                        <img class="rounded-circle mt-5 mx-auto" width="150px" src="{{ Storage::url($$module_name_singular->profile->avatar) }}">
                        <div>
                            <label for="avatar" class="btn">Upload avatar</label>
                            <input id="avatar" name="avatar" style="visibility:hidden;" type="file">
                        </div>
                        <span class="font-weight-bold">{{ $$module_name_singular->profile->name }}</span>
                        <span class="text-black-50">{{ $$module_name_singular->profile->email }}</span>
                    </div>
                </div>
                <div class="col-md-5 border-right">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-center">Profile Settings</h4>
                    </div>
                    <div class="p-3 py-5">
                        <div class="row mt-2">
                            <div class="col-md-6">
                                @php
                                    $label_value = "First Name";
                                    $input_name = 'first_name';
                                    $placeholder = "First Name";
                                    $required = true;
                                    $value = $$module_name_singular->first_name;
                                @endphp
                                {{ html()->label($label_value)->for($input_name) }} {!!  $required ? "<span style='color: red'>*</span>" : ''  !!}
                                {{ html()->input('text', $input_name)->id($input_name)->class('form-control')->placeholder($placeholder)->value($value) }}
                                @if ($errors->has($input_name)) {{ html()->span($errors->first($input_name))->class('text-danger') }} @endif
                            </div>
                            <div class="col-md-6">
                                @php
                                    $label_value = "Last Name";
                                    $input_name = 'last_name';
                                    $placeholder = "Last Name";
                                    $required = true;
                                    $value = $$module_name_singular->last_name;
                                @endphp
                                {{ html()->label($label_value)->for($input_name) }} {!!  $required ? "<span style='color: red'>*</span>" : ''  !!}
                                {{ html()->input('text', $input_name)->id($input_name)->class('form-control')->placeholder($placeholder)->value($value) }}
                                @if ($errors->has($input_name)) {{ html()->span($errors->first($input_name))->class('text-danger') }} @endif
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                @php
                                    $label_value = "Email";
                                    $input_name = 'email';
                                    $placeholder = "Email";
                                    $required = true;
                                    $value = $$module_name_singular->email;
                                @endphp
                                {{ html()->label($label_value)->for($input_name) }} {!!  $required ? "<span style='color: red'>*</span>" : ''  !!}
                                {{ html()->input('text', $input_name)->id($input_name)->class('form-control')->placeholder($placeholder)->value($value) }}
                                @if ($errors->has($input_name)) {{ html()->span($errors->first($input_name))->class('text-danger') }} @endif
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                @php
                                    $label_value = "Date of birth";
                                    $input_name = 'date_of_birth';
                                    $placeholder = "Data of birth";
                                    $required = '';
                                    $value = $$module_name_singular->date_of_birth;
                                @endphp
                                {{ html()->label($label_value)->for($input_name) }} {!!  $required ? "<span style='color: red'>*</span>" : ''  !!}
                                {{ html()->input('date', $input_name)->id($input_name)->class('form-control')->placeholder($placeholder)->value($value) }}
                                @if ($errors->has($input_name)) {{ html()->span($errors->first($input_name))->class('text-danger') }} @endif
                            </div>
                            <div class="col-md-4">
                                @php
                                    $label_value = "Phone";
                                    $input_name = 'mobile';
                                    $placeholder = "Your Phone";
                                    $required = '';
                                    $value = $$module_name_singular->mobile;
                                @endphp
                                {{ html()->label($label_value)->for($input_name) }} {!!  $required ? "<span style='color: red'>*</span>" : ''  !!}
                                {{ html()->input('text', $input_name)->id($input_name)->class('form-control')->placeholder($placeholder)->value($value) }}
                                @if ($errors->has($input_name)) {{ html()->span($errors->first($input_name))->class('text-danger') }} @endif
                            </div>
                            <div class="col-md-2">
                                <label class="labels">Gender</label>
                                <div class="d-flex gap-2">
                                    <div>
                                        <input type="radio" name="gender" class="form-check" value="Male" @if($$module_name_singular->gender == 'Male') checked @endif>
                                        <span>Male</span>
                                    </div>
                                    <div>
                                        <input type="radio" name="gender" class="form-check" value="Female" @if($$module_name_singular->gender == 'Female') checked @endif>
                                        <span>Female</span>
                                    </div>
                                    <div>
                                        <input type="radio" name="gender" class="form-check" value="Other" @if($$module_name_singular->gender == 'Other') checked @endif>
                                        <span>Other</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div>
                                <div class="form-group col-md-4">
                                    @php
                                        $label_value = "Tỉnh/Thành Phố";
                                        $input_name = 'city';
                                        $placeholder = "Tỉnh/Thành phố";
                                        $required = false;
                                        $value = $$module_name_singular->profile->city;
                                    @endphp
                                    {{ html()->label($label_value)->for($input_name) }} {!!  $required ? "<span style='color: red'>*</span>" : ''  !!}
                                    {{ html()->select($input_name)->id($input_name)->class('form-select-lg form-control')->placeholder($placeholder)->value($value) }}
                                    @if ($errors->has($input_name)) {{ html()->span($errors->first($input_name))->class('text-danger') }} @endif
                                </div>
                                <div class="form-group col-md-4">
                                    @php
                                        $label_value = "Quận/Huyện";
                                        $input_name = 'district';
                                        $placeholder = "Quận/Huyện";
                                        $required = false;
                                        $value = $$module_name_singular->profile->district;
                                    @endphp
                                    {{ html()->label($label_value)->for($input_name) }} {!!  $required ? "<span style='color: red'>*</span>" : ''  !!}
                                    {{ html()->select($input_name)->id($input_name)->class('form-select-lg form-control')->placeholder($placeholder)->value($value) }}
                                    @if ($errors->has($input_name)) {{ html()->span($errors->first($input_name))->class('text-danger') }} @endif
                                </div>
                                <div class="form-group col-md-4">
                                    @php
                                        $label_value = "Xã/Phường";
                                        $input_name = 'ward';
                                        $placeholder = "Xã/Phường";
                                        $required = false;
                                        $value = $$module_name_singular->profile->ward;
                                    @endphp
                                    {{ html()->label($label_value)->for($input_name) }} {!!  $required ? "<span style='color: red'>*</span>" : ''  !!}
                                    {{ html()->select($input_name)->id($input_name)->class('form-select-lg form-control')->placeholder($placeholder)->value($value) }}
                                    @if ($errors->has($input_name)) {{ html()->span($errors->first($input_name))->class('text-danger') }} @endif
                                </div>
                            </div>

                            <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
                            <script>
                                var citis = document.getElementById("city");
                                var districts = document.getElementById("district");
                                var wards = document.getElementById("ward");
                                var Parameter = {
                                    url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json",
                                    method: "GET",
                                    responseType: "application/json",
                                };
                                var promise = axios(Parameter);
                                promise.then(function (result) {
                                    renderCity(result.data);
                                });

                                function renderCity(data) {
                                    for (const x of data) {
                                        citis.options[citis.options.length] = new Option(x.Name, x.Name);
                                    }
                                    citis.onchange = function () {
                                        district.length = 1;
                                        ward.length = 1;
                                        if(this.value != ""){
                                            const result = data.filter(n => n.Name === this.value);

                                            for (const k of result[0].Districts) {
                                                district.options[district.options.length] = new Option(k.Name, k.Name);
                                            }
                                        }
                                    };
                                    district.onchange = function () {
                                        ward.length = 1;
                                        const dataCity = data.filter((n) => n.Name === citis.value);
                                        if (this.value != "") {
                                            const dataWards = dataCity[0].Districts.filter(n => n.Name === this.value)[0].Wards;

                                            for (const w of dataWards) {
                                                wards.options[wards.options.length] = new Option(w.Name, w.Name);
                                            }
                                        }
                                    };
                                }
                            </script>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                @php
                                    $label_value = "Bio";
                                    $input_name = 'bio';
                                    $placeholder = "Bio";
                                    $required = '';
                                    $value = $$module_name_singular->profile->bio;
                                @endphp
                                {{ html()->label($label_value)->for($input_name) }} {!!  $required ? "<span style='color: red'>*</span>" : ''  !!}
                                {{ html()->input('text', $input_name)->id($input_name)->class('form-control')->placeholder($placeholder)->value($value) }}
                                @if ($errors->has($input_name)) {{ html()->span($errors->first($input_name))->class('text-danger') }} @endif
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                @php
                                    $label_value = "Website";
                                    $input_name = 'url_website';
                                    $placeholder = "Your url website";
                                    $required = '';
                                    $value = $$module_name_singular->profile->url_website;
                                @endphp
                                {{ html()->label($label_value)->for($input_name) }} {!!  $required ? "<span style='color: red'>*</span>" : ''  !!}
                                {{ html()->input('text', $input_name)->id($input_name)->class('form-control')->placeholder($placeholder)->value($value) }}
                                @if ($errors->has($input_name)) {{ html()->span($errors->first($input_name))->class('text-danger') }} @endif
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                @php
                                    $label_value = "Facebook";
                                    $input_name = 'url_facebook';
                                    $placeholder = "Your url Facebook";
                                    $required = '';
                                    $value = $$module_name_singular->profile->url_facebook;
                                @endphp
                                {{ html()->label($label_value)->for($input_name) }} {!!  $required ? "<span style='color: red'>*</span>" : ''  !!}
                                {{ html()->input('text', $input_name)->id($input_name)->class('form-control')->placeholder($placeholder)->value($value) }}
                                @if ($errors->has($input_name)) {{ html()->span($errors->first($input_name))->class('text-danger') }} @endif
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                @php
                                    $label_value = "Instagram";
                                    $input_name = 'url_instagram';
                                    $placeholder = "Your url Instagram";
                                    $required = '';
                                    $value = $$module_name_singular->profile->url_instagram;
                                @endphp
                                {{ html()->label($label_value)->for($input_name) }} {!!  $required ? "<span style='color: red'>*</span>" : ''  !!}
                                {{ html()->input('text', $input_name)->id($input_name)->class('form-control')->placeholder($placeholder)->value($value) }}
                                @if ($errors->has($input_name)) {{ html()->span($errors->first($input_name))->class('text-danger') }} @endif
                            </div>
                        </div>
                        <div class="mt-3 text-center">
                            <button class="btn btn-primary profile-button my-2" type="submit">Save Profile</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection
