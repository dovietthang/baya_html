@extends('layout-home.layout-base')
@section('title')
<title>{{ __('Sửa địa chỉ') }}</title>
@endsection
@section('content')
<div class="account customer-account-index page-layout-2columns-left">
    <main id="maincontent" class="page-main">
        <div data-bind="scope: 'messages'">
            <div role="alert" class="messages">
                @if(session('success'))
                <div class="message-success success message" data-ui-id="message-success">
                    <div>{{session('success')}}</div>
                </div>
                @endif
                @if(session('errors'))
                <div class="message-error error message" data-ui-id="message-error">
                    <div>{{session('errors')}}</div>
                </div>
                @endif
            </div>
        </div>
        <div class="columns">
            <div class="column main">
                <div class="page-title-wrapper">
                    <h1 class="page-title"><span class="base" data-ui-id="page-title-wrapper">Sửa địa chỉ</span></h1>
                </div><input name="form_key" type="hidden" value="1oc7i7q1aENM68Td">
                <div id="authenticationPopup" data-bind="scope:'authenticationPopup', style: {display: 'none'}"
                    style="display: none;">
                </div>
                <form class="form-address-edit" action="{{route('address.update')}}"
                    method="post" id="form-validate" enctype="multipart/form-data"
                    data-hasrequired="* Đây là trường bắt buộc." novalidate="novalidate">
                    <fieldset class="fieldset">
                        @csrf
                        <input type="hidden" value={{$default->id}} name="id">
                        <legend class="legend"><span>Thông tin liên lạc</span></legend><br> <input name="form_key"
                            type="hidden" value="1oc7i7q1aENM68Td"> <input type="hidden" name="success_url"
                            value=""><input type="hidden" name="error_url" value="">
                        <div class="field field-name-firstname required"><label class="label"
                                for="firstname"><span>Tên</span></label>
                            <div class="control"><input type="text" id="firstname" name="firstname"
                                    value="{{$default->name}}" title="Tên" class="input-text required-entry"
                                    data-validate="{required:true}" aria-required="true"></div>
                        </div>
                        <div class="field field-name-lastname required"><label class="label"
                                for="lastname"><span>Họ</span></label>
                            <div class="control"><input type="text" id="lastname" name="lastname" value="{{$default->last_name}}"
                                    title="Họ" class="input-text required-entry" data-validate="{required:true}"
                                    aria-required="true"></div>
                        </div>
                        {{-- <div class="field company "><label for="company" class="label"><span> Công ty</span></label>
                            <div class="control"> <input type="text" name="company" id="company" value=""
                                    title="Công ty" class="input-text "></div>
                        </div> --}}
                        <div class="field telephone required"><label for="telephone" class="label"><span> Điện
                                    thoại</span></label>
                            <div class="control"><input type="tel" name="telephone" id="telephone" value="{{$default->phone}}"
                                    title="Điện thoại" class="input-text required-entry" aria-required="true"></div>
                        </div>
                    </fieldset>
                    <fieldset class="fieldset">
                        <legend class="legend"><span>Địa chỉ</span></legend><br>
                        <div class="field street required"><label for="street_1" class="label"><span>Địa
                                    chỉ</span></label>
                            <div class="control">
                                <div class="field primary"><label for="street_1" class="label"><span> Street Address:
                                            Line 1</span></label></div>
                                            <input type="text" name="street"
                                    title="Địa chỉ" id="street_1" class="input-text required-entry"
                                    aria-required="true" value="{{$default->address}}">
                                <div class="nested"></div>
                            </div>
                        </div>
                        <div class="field country required"><label class="label" for="country"><span>Quốc
                                    gia</span></label>
                            <div class="control"><select name="country_id" id="country" class="required-entry"
                                    title="Quốc gia" data-validate="{'validate-select':true}" aria-required="true">
                                    <option value="Viet Nam" selected="selected">Vietnam</option>
                                </select></div>
                        </div>
                        <div class="field _required" name="shippingAddress.region_id">
                            <label class="label"
                                for="WOBMSV9"><span>{{__('Province')}}</span>
                            </label>
                            <div class="control">
                                <select class="select" name="region_id" id="WOBMSV9"
                                    aria-required="true" aria-invalid="false">
                                    <option value="">{{__('Select a region, state or province')}}.</option>
                                </select>
                            </div>
                        </div>
                        <div class="field _required" name="shippingAddress.city">
                            <label class="label" for="LXU15EI">
                                <span>{{__('District')}}</span>
                            </label>

                            <div class="control">
                                <select class="admin__control-select" name="city"
                                    id="LXU15EI" aria-describedby="notice-LXU15EI">
                                    <option value="">{{__('Select district')}}</option>
                                </select>
                            </div>
                        </div>
                        <div class="field _required" name="shippingAddress.postcode">
                            <label class="label" for="KJIN0AB">
                                <span>{{__('Wards')}}</span>
                            </label>

                            <div class="control">
                                <select class="admin__control-select" name="postcode"
                                    id="KJIN0AB" aria-describedby="notice-KJIN0AB">
                                    <option value="">{{__('Select ward/commune')}}
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="field choice set billing"><input type="checkbox" id="primary_billing"
                                name="default_billing" value="1" @if($default->is_default == 1)checked @endif class="checkbox"><label class="label"
                                for="primary_billing"><span>Đặt làm mặc định</span></label></div>
                    </fieldset>
                    <div class="actions-toolbar">
                        <div class="primary"><button type="submit" class="action save primary"
                                data-action="save-address" title="Save Address"><span>Lưu địa chỉ</span></button></div>
                                <div class="secondary"><a class="action back" href="{{route('account')}}"><span>{{__('Go
                                    back')}}</span></a></div>
                    </div>
                </form>
            </div>
            @include('layout-home.pages.account-side')
        </div>
    </main>
</div>
@endsection
@section('page-js')

<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>

    <script>
        var city_ = `{{$default->city}}`
        var district_ = `{{$default->district}}`
        var ward_ = `{{$default->ward}}`
        $(document).ready(function () {
            var citis = document.getElementById("WOBMSV9");
            var districts = document.getElementById("LXU15EI");
            var wards = document.getElementById("KJIN0AB");
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
                    let flag_a = false
                    if(x.Name == city_){
                        this.value = x.Name
                        flag_a = true
                    }
                    citis.options[citis.options.length] = new Option(x.Name, x.Name, false, flag_a);
                }
                citis.onchange = function () {
                    districts.length = 1;
                    wards.length = 1;
                    if (this.value != "") {
                        const result = data.filter((n) => n.Name === this.value);

                        for (const k of result[0].Districts) {
                            let flag_b = false
                            if(k.Name == district_){
                                flag_b = true
                            }
                            districts.options[districts.options.length] = new Option(k.Name, k.Name, false, flag_b);
                        }
                    }
                };
                citis.onchange()
                districts.onchange = function () {
                    wards.length = 1;
                    const dataCity = data.filter((n) => n.Name === citis.value);
                    if (this.value != "") {
                        const dataWards = dataCity[0].Districts.filter((n) => n.Name === this.value)[0].Wards;

                        for (const w of dataWards) {
                            let flag_c = false
                            if(w.Name == ward_){
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
