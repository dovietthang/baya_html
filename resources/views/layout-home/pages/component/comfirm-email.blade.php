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
    </div> <a id="contentarea" tabindex="-1"></a>
    <div class="page-title-wrapper">
        <h1 class="page-title"><span class="base" data-ui-id="page-title-wrapper">Send confirmation link</span></h1>
    </div>
    <div class="page messages">
        <div data-placeholder="messages"></div>
    </div>
    <div class="columns">
        <div class="column main"><input name="form_key" type="hidden" value="eQGUrsvLObDwxvCu">
            <div id="authenticationPopup" data-bind="scope:'authenticationPopup', style: {display: 'none'}"
                style="display: none;">
                <script>
                    window.authenticationPopup = {"autocomplete":"off","customerRegisterUrl":"https:\/\/onoff.vn\/customer\/account\/create\/","customerForgotPasswordUrl":"https:\/\/onoff.vn\/customer\/account\/forgotpassword\/","baseUrl":"https:\/\/onoff.vn\/"}
                </script> <!-- ko template: getTemplate() -->


                <!-- /ko -->
            </div>
            <form action="" method="post" id="form-validate" class="form send confirmation" novalidate="novalidate">
                <fieldset class="fieldset" data-hasrequired="* Đây là trường bắt buộc.">
                    <p class="field note">Please enter your email below and we will send you the confirmation link.</p>
                    <div class="field email required"><label for="email_address"
                            class="label"><span>Email</span></label>
                        <div class="control"><input type="email" name="email" id="email_address" class="input-text"
                                value="333333@gmail.com" data-validate="{required:true, 'validate-email':true}"
                                aria-required="true"></div>
                    </div>
                </fieldset>
                <div class="actions-toolbar">
                    <div class="primary"><button type="submit" class="action send primary"><span>Send confirmation
                                link</span></button></div>
                    <div class="secondary"><a
                            href="https://onoff.vn/customer/account/login/referer/aHR0cHM6Ly9vbm9mZi52bi9jdXN0b21lci9hY2NvdW50L2NvbmZpcm1hdGlvbi8_ZW1haWw9MzMzMzMzJTQwZ21haWwuY29t/"
                            class="action back"><span>Back to Sign In</span></a></div>
                </div>
            </form>
        </div>
    </div>
</main>
