<x-master-layout :assets="$assets ?? []">
    <div>
        <?php $id = $id ?? null;?>
        @if(isset($id))
            {{ html()->modelForm($data, 'PATCH', route('sub-admin.update', $id))->attribute('enctype', 'multipart/form-data')->open() }}
        @else
            {{ html()->form('POST', route('sub-admin.store'))->attribute('enctype', 'multipart/form-data')->open() }} 
        @endif
        <div class="row">
            <div class="col-xl-3 col-lg-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">{{ $pageTitle }}</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="crm-profile-img-edit position-relative">
                                <img src="{{ $profileImage ?? asset('images/user/1.jpg')}}" alt="User-Profile" id="profile_image_preview"class=" profile_image_preview crm-profile-pic rounded-circle avatar-100">
                                <div class="crm-p-image bg-primary">
                                    <svg class="upload-button" width="14" height="14" viewBox="0 0 24 24">
                                        <path fill="#ffffff" d="M14.06,9L15,9.94L5.92,19H5V18.08L14.06,9M17.66,3C17.41,3 17.15,3.1 16.96,3.29L15.13,5.12L18.88,8.87L20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18.17,3.09 17.92,3 17.66,3M14.06,6.19L3,17.25V21H6.75L17.81,9.94L14.06,6.19Z" />
                                    </svg>
                                    <input class="file-upload custom-file-input" type="file" accept="image/*" name="profile_image" data--target = "profile_image_preview">
                                </div>
                            </div>
                            <div class="img-extension mt-3">
                                <div class="d-inline-block align-items-center">
                                    <span>{{ __('message.only') }}</span>
                                    @foreach(config('constant.IMAGE_EXTENTIONS') as $extention)
                                        <a href="javascript:void();">.{{ __('message.'.$extention) }}</a>
                                    @endforeach
                                    <span>{{ __('message.allowed') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <div class="grid" style="--bs-gap: 1rem">
                                {{ html()->label(__('message.role') . ' <span class="text-danger">*</span>', 'role')->class('form-control-label') }}
                                {{ html()->select('user_type', $roles, old('user_type'))
                                    ->class('select2js form-group role')
                                    ->attribute('data-placeholder', __('message.select_name', ['select' => __('message.role')]))
                                    ->attribute('required', true) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">{{ $pageTitle }} {{ __('message.information') }}</h4>
                        </div>
                        <div class="card-action">
                            <a href="{{route('sub-admin.index')}}" class="btn btn-sm btn-primary" role="button">{{ __('message.back') }}</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="new-user-info">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    {{ html()->label(__('message.name').' <span class="text-danger">*</span>', 'name')->class('form-control-label') }}
                                    {{ html()->text('name', old('name'))
                                        ->placeholder(__('message.name'))
                                        ->class('form-control')
                                        ->attribute('required', true) }}
                                </div>

                                @php
                                    $readonly = isset($id) ? 'readonly' : '';
                                @endphp

                                <div class="form-group col-md-6">
                                    {{ html()->label(__('message.email').' <span class="text-danger">*</span>', 'email')->class('form-control-label') }}
                                    {{ html()->email('email', isset($id) ? optional($data)->email : old('email'))
                                        ->placeholder(__('message.email'))
                                        ->class('form-control')
                                        ->attribute('required', true)
                                        ->attribute($readonly, '') }}
                                </div>

                                <div class="form-group col-md-6">
                                    {{ html()->label(__('message.username').' <span class="text-danger">*</span>', 'username')->class('form-control-label') }}
                                    {{ html()->text('username', isset($id) ? optional($data)->username : old('username'))
                                        ->placeholder(__('message.username'))
                                        ->class('form-control')
                                        ->attribute('required', true)
                                        ->attribute($readonly, '') }}
                                </div>

                                @if(!isset($id))
                                <div class="form-group col-md-6">
                                    {{ html()->label(__('message.password').' <span class="text-danger">*</span>', 'password')->class('form-control-label') }}
                                    <div class="input-group">
                                        {{ html()->password('password')
                                            ->class('form-control')
                                            ->placeholder(__('message.password'))
                                            ->attribute('id', 'password') }}
                                        <div class="input-group-append">
                                            <span class="input-group-text hide-show-password" style="cursor: pointer;">
                                                <i class="fas fa-eye-slash"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                @endif

                                <div class="form-group col-md-6">
                                    {{ html()->label(__('message.contact_number').' <span class="text-danger">*</span>', 'contact_number')->class('form-control-label') }}
                                    {{ html()->text('contact_number', isset($id) ? optional($data)->contact_number : old('contact_number'))
                                        ->placeholder(__('message.contact_number'))
                                        ->class('form-control')
                                        ->attribute('id', 'phone')
                                        ->attribute('required', true)
                                        ->attribute($readonly, '') }}
                                </div>
                            </div>

                            <hr>

                            {{ html()->submit(__('message.save'))->class('btn btn-md btn-primary float-right') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{ html()->form()->close() }}
    </div>
    @section('bottom_script')
        <script>
            $(document).ready(function() {
                $('.hide-show-password').on('click', function() {
                    var passwordInput = $('#password');
                    var eyeIcon = $('.hide-show-password i');

                    var passwordFieldType = passwordInput.attr('type');
                    if (passwordFieldType === 'password') {
                        passwordInput.attr('type', 'text');
                        eyeIcon.removeClass('fa-eye-slash').addClass('fa-eye');
                    } else {
                        passwordInput.attr('type', 'password');
                        eyeIcon.removeClass('fa-eye').addClass('fa-eye-slash');
                    }
                });
            });
        </script>
    @endsection
</x-app-layout>
