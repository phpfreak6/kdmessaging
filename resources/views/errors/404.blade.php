<!DOCTYPE html>
<html>
    <head>
        @include('frontend/templates/header_includes')
        <style>
            .main-footer {
                margin-left: 0 !important;
            }
            section.imm_error_page {
                min-height: 600px;
                align-items: center;
                display: flex;
                height: 100%;
                background: #f0f0f0;
            }
            .error_main h1 {
                font-size: 7em;
                margin: 0;
                color: #000080;
                text-shadow: 2px 4px 2px #9a9a9a;
            }
            .opps_content i {
                color: #000080;
                font-size: 28px;
            }
            .opps_content {
                font-weight: 600;
                margin: 10px 0 8px;
                font-size: 28px;
                text-transform: uppercase;
            }
            .error_main p {
                font-size: 18px;
                font-weight: 400;
                margin: 0;
            }
            .back_home_btn button i {
                padding-right: 5px;
                color: #000080;
                font-size: 18px;
            }
            .back_home_btn {
                margin-top: 30px;
            }
            .back_home_btn button {
                margin: 0 10px 10px !important;
                min-width: 215px;
                float: unset !important;    
                font-size: 16px;
                padding: 10px 15px;
                color: #000080;
                background: #fff;
                border-radius: 0;
                border: 2px solid #000080;
                font-weight: 600;
            }
            .back_home_btn button:hover, .back_home_btn button:active, .back_home_btn button:focus{
                background: #000080;
                border-color: #000080;
                outline: 0 !important;
                color: #fff;
                transition: 0.5s ease;
            }
            .back_home_btn button:hover i, .back_home_btn button:active i, .back_home_btn button:focus i{
                color: #fff;
                transition: 0.5s ease;
            }
            @media only screen and (max-width: 450px) {
                .opps_content {
                    margin: 10px 5px 8px;
                    font-size: 22px;
                }
                .opps_content i{
                    font-size: 25px;
                }
            }
        </style>
    </head>
    <body>
        <section class="imm_error_page">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="text-center error_main">
                            <h1>404</h1>
                            <h2 class="opps_content"><i class="fa fa-exclamation-triangle"></i> Oops! Page Not Found</h2>
                            <p>We could not find the page you were looking for.</p>
                            <div class="btn-group back_home_btn" role="group">
                                <a href="<?= url()->previous(); ?>"><button type="button" class="btn"><i class="fa fa-reply"></i> BACK TO PAGE</button></a>
                                <a href="<?= url('/'); ?>"><button type="button" class="btn"><i class="fa fa-home"></i> GO TO HOME PAGE</button></a>
                            </div>					
                        </div>
                    </div>			
                </div>
            </div>
        </section>
        @include('frontend/templates/footer')
        @include('frontend/templates/footer_includes')
    </body>
</html>