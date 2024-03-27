@extends('layout-home.layout-base')
@section('title')
<title>{{ __('Address') }}</title>
@endsection
@section('content')
<style>
    .wrap_content_account input[type=email],
    .wrap_content_account input[type=tel],
    .wrap_content_account input[type=password],
    .wrap_content_account input[type=date],
    .wrap_content_account input[type=text] {
        width: 100%;
        height: 55px;
        padding: 5px 20px;
        color: #5c5c5c;
        font-weight: 500;
        border: 1px solid transparent;
        background: #ededed;
        outline: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        -o-appearance: none;
        appearance: none;
        font-style: italic;
    }

    .wrap_content_account .large_form {
        margin-bottom: 5px;
    }

    .customers_accountForm_edit {
        max-width: 620px;
        margin: 0px 0px;
        background: #ffffff;
        padding: 25px 30px 30px;
    }

    .customers_accountForm_edit .action_bottom {
        padding: 0;
        border-radius: 4px;
    }

    .customers_accountForm_edit .action_bottom .btn {
        display: inline-block;
        border-radius: 0;
        padding: 0 35px;
        height: 45px;
        line-height: 45px;
        text-transform: uppercase;
        font-weight: 600;
        background: transparent;
        cursor: pointer;
        border: 0;
        color: #fff;
        font-size: 14px;
        outline: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        -o-appearance: none;
        appearance: none;
    }

    .button {
        position: relative;
        display: inline-block;
        z-index: 1;
        overflow: hidden;
        padding: 8px 24px;
        line-height: normal;
        color: #fff;
        border-radius: 20px;
        background-color: var(--shop-color-hover);
        border: 0;
        font-size: 13px;
        font-weight: 500;
        text-align: center;
        letter-spacing: 1px;
        text-transform: uppercase;
        outline: none !important;
        -webkit-transition: color 0.45s cubic-bezier(0.785, 0.135, 0.15, 0.86), border 0.45s cubic-bezier(0.785, 0.135, 0.15, 0.86);
        transition: color 0.45s cubic-bezier(0.785, 0.135, 0.15, 0.86), border 0.45s cubic-bezier(0.785, 0.135, 0.15, 0.86);
    }

    div.mage-error[generated] {
        color: #e02b27;
        font-size: 13px;
    }

    .field.password .control .mage-error {
        -ms-flex-order: 2;
        -webkit-order: 2;
        order: 2;
    }

    .field-error,
    div.mage-error[generated] {
        margin-top: 7px;
    }

    .message-success.success.message.d-flex {
        padding: 15px 20px;
        color: #28a745;
        background: #28a7453d;
        margin-bottom: 15px;
    }
</style>

<div class="layout-account">
    <div class="container">
        <div class="wrapbox-content-account">
            <div class="header-page clearfix">
                <h1>Thông tin địa chỉ</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-12 col-12 sidebar-account">
                    @include('layout-home.pages.account-side')
                </div>
                <div class="col-lg-9 col-md-12 col-12 customers_accountForm_edit ">
                    <div data-bind="scope: 'messages'">
                        <div role="alert" class="messages">
                            @if(session('success'))
                            <div class="message-success success message d-flex" data-ui-id="message-success">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                </svg>
                                <div style="margin-left: 5px;">{{session('success')}}</div>
                            </div>
                            @endif
                            @if(session('errors'))
                            <div class="message-error error message d-flex" data-ui-id="message-error">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z" />
                                </svg>
                                <div style="margin-left: 5px;">{{session('errors')}}</div>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="wrap_content_account">
                        <div class="page-title-wrapper">
                        </div><input name="form_key" type="hidden" value="1oc7i7q1aENM68Td">
                        <div id="authenticationPopup" data-bind="scope:'authenticationPopup', style: {display: 'none'}" style="display: none;">
                        </div>
                        <form class="form form-edit-account form-address-edit" action="{{route('address.update')}}" method="post" id="form-validate" enctype="multipart/form-data" data-hasrequired="* Đây là trường bắt buộc." novalidate="novalidate">
                            <fieldset class="fieldset">
                                @csrf
                                <input type="hidden" value={{$default->id}} name="id">
                                <legend class="legend"><span>Thông tin liên lạc</span></legend><br> <input name="form_key" type="hidden" value="1oc7i7q1aENM68Td"> <input type="hidden" name="success_url" value=""><input type="hidden" name="error_url" value="">
                                <div class="field field-name-firstname required clearfix large_form"><label class="label" for="firstname"><span>Tên</span></label>
                                    <div class="control"><input type="text" id="firstname" name="firstname" value="{{$default->name}}" title="Tên" class="input-text required-entry" data-validate="{required:true}" aria-required="true"></div>
                                </div>
                                <div class="field field-name-lastname required clearfix large_form"><label class="label" for="lastname"><span>Họ</span></label>
                                    <div class="control"><input type="text" id="lastname" name="lastname" value="{{$default->last_name}}" title="Họ" class="input-text required-entry" data-validate="{required:true}" aria-required="true"></div>
                                </div>

                                <div class="field telephone required clearfix large_form">
                                    <label for="telephone" class="label">
                                        <span> Điện thoại</span></label>
                                    <div class="control">
                                        <input type="tel" name="telephone" id="telephone" value="{{$default->phone}}" title="Điện thoại" class="input-text required-entry" aria-required="true">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="fieldset">
                                <legend class="legend"><span>Địa chỉ</span></legend><br>
                                <div class="field street required clearfix large_form"><label for="street_1" class="label"><span>Địa
                                            chỉ</span></label>
                                    <div class="control">
                                        <div class="field primary"><label for="street_1" class="label"><span> Street Address:
                                                    Line 1</span></label></div>
                                        <input type="text" name="street" title="Địa chỉ" id="street_1" class="input-text required-entry" aria-required="true" value="{{$default->address}}">
                                        <div class="nested"></div>
                                    </div>
                                </div>
                                <div class="field country required clearfix large_form"><label class="label" for="country"><span>Quốc
                                            gia</span></label>
                                    <div class="control"><select name="country_id" id="country" class="required-entry" title="Quốc gia" data-validate="{'validate-select':true}" aria-required="true">
                                            <option value="Viet Nam" selected="selected">Vietnam</option>
                                        </select></div>
                                </div>
                                <div class="field _required clearfix large_form" name="shippingAddress.region_id">
                                    <label class="label" for="WOBMSV9"><span>{{__('Province')}}</span>
                                    </label>
                                    <div class="control">
                                        <select class="select" name="region_id" id="WOBMSV9" aria-required="true" aria-invalid="false">
                                            <option value="">{{__('Select a region, state or province')}}.</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="field _required clearfix large_form" name="shippingAddress.city">
                                    <label class="label" for="LXU15EI">
                                        <span>{{__('District')}}</span>
                                    </label>

                                    <div class="control">
                                        <select class="admin__control-select" name="city" id="LXU15EI" aria-describedby="notice-LXU15EI">
                                            <option value="">{{__('Select district')}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="field _required clearfix large_form" name="shippingAddress.postcode">
                                    <label class="label" for="KJIN0AB">
                                        <span>{{__('Wards')}}</span>
                                    </label>

                                    <div class="control">
                                        <select class="admin__control-select" name="postcode" id="KJIN0AB" aria-describedby="notice-KJIN0AB">
                                            <option value="">{{__('Select ward/commune')}}
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="field choice set billing"><input type="checkbox" id="primary_billing" name="default_billing" value="1" @if($default->is_default == 1)checked @endif class="checkbox"><label class="label" for="primary_billing"><span>Đặt làm mặc định</span></label></div>
                            </fieldset>

                            <div class="clearfix d-flex align-items-center custommer_account_action mt-3">
                                <div class="action_bottom button dark">
                                    <input class="btn" type="submit" data-action="save-address" value="Lưu địa chỉ">
                                </div>
                                <div class="req_pass me-3" style="margin-left: 15px;">
                                    <div class="secondary"><a class="action back" href="{{route('account')}}"><span>{{__('Go back')}}</span></a></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('page-js')

<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>

<script>
    var city_ = `{{$default->city}}`
    var district_ = `{{$default->district}}`
    var ward_ = `{{$default->ward}}`
    $(document).ready(function() {
        var citis = document.getElementById("WOBMSV9");
        var districts = document.getElementById("LXU15EI");
        var wards = document.getElementById("KJIN0AB");
        var Parameter = {
            url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json",
            method: "GET",
            responseType: "application/json",
        };
        var promise = axios(Parameter);
        promise.then(function(result) {
            renderCity(result.data);
        });

        function renderCity(data) {
            for (const x of data) {
                let flag_a = false
                if (x.Name == city_) {
                    this.value = x.Name
                    flag_a = true
                }
                citis.options[citis.options.length] = new Option(x.Name, x.Name, false, flag_a);
            }
            citis.onchange = function() {
                districts.length = 1;
                wards.length = 1;
                if (this.value != "") {
                    const result = data.filter((n) => n.Name === this.value);

                    for (const k of result[0].Districts) {
                        let flag_b = false
                        if (k.Name == district_) {
                            flag_b = true
                        }
                        districts.options[districts.options.length] = new Option(k.Name, k.Name, false, flag_b);
                    }
                }
            };
            citis.onchange()
            districts.onchange = function() {
                wards.length = 1;
                const dataCity = data.filter((n) => n.Name === citis.value);
                if (this.value != "") {
                    const dataWards = dataCity[0].Districts.filter((n) => n.Name === this.value)[0].Wards;

                    for (const w of dataWards) {
                        let flag_c = false
                        if (w.Name == ward_) {
                            flag_c = true
                        }
                        wards.options[wards.options.length] = new Option(w.Name, w.Name, false, flag_c);
                    }
                }
            };
            districts.onchange()
        }
        $(function() {
            $(".form-address-edit").validate({
                rules: {
                    firstname: "required",
                    lastname: "required",
                    region_id: "required",
                    city: "required",
                    postcode: "required",
                    street: "required",
                    telephone: "required",
                },
                messages: {
                    firstname: "Trường này là bắt buộc.",
                    lastname: "Trường này là bắt buộc.",
                    region_id: "Trường này là bắt buộc.",
                    city: "Trường này là bắt buộc.",
                    postcode: "Trường này là bắt buộc.",
                    street: "Trường này là bắt buộc.",
                    telephone: "Trường này là bắt buộc.",
                },
            });
        });

    });
</script>
@endsection