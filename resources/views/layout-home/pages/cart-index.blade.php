@extends('layout-home.layout-base')
@section('title')
<title>{{ __('Cart') }}</title>
@endsection
@section('content')
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
    <a id="contentarea" tabindex="-1"></a>
    <div class="page-title-wrapper">
        <h1 class="page-title"><span class="base" data-ui-id="page-title-wrapper">{{__('Cart')}}</span></h1>
    </div>
    @if(session('msg_cart'))
    <div role="alert" class="messages">
        <div class="message-success success message" data-ui-id="message-success">
            <div>
                {{session('msg_cart')}}
            </div>
        </div>
    </div>
    @else
        @if(isset($carts) || !$carts || (@$carts && count(@$carts) == 0))
            <div class="columns">
                <div class="column main"><input name="form_key" type="hidden" value="UVHAAa7abItIWOFF">
                    <div id="authenticationPopup" data-bind="scope:'authenticationPopup', style: {display: 'none'}"
                        style="display: none;">
                    </div>
                    <div class="cart-empty">
                        <p>{{__('Your shopping cart is empty')}}</p>
                        <p>{{__('Click')}} <a href="{{route('home')}}">{{__('here')}}</a> để tiếp tục mua sắm</p>
                    </div>
                </div>
            </div>
        @endif
    @endif
</main>
@endsection
