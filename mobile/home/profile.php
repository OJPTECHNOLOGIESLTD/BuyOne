<div class="page-content header-clear-medium">
        
        
        <div class="card card-style bg-theme pb-0">
            <div class="content" id="tab-group-1">
                <div class="tab-controls tabs-small tabs-rounded" data-highlight="bg-highlight">
                    <a href="#" data-active data-bs-toggle="collapse" data-bs-target="#tab-1">Profile</a>
                    <a href="#" data-bs-toggle="collapse" data-bs-target="#tab-2">Password</a>
                    <a href="#" data-bs-toggle="collapse" data-bs-target="#tab-3">Pin</a>
                </div>
                <div class="clearfix mb-3"></div>
                <div data-bs-parent="#tab-group-1" class="collapse show" id="tab-1">
                    <p class="mb-n1 color-highlight font-600 font-12">Account Details</p>
                        <h4>Basic Information</h4>
                        
                        <div class="list-group list-custom-small">
                            <a href="#">
                                <i class="fa font-14 fa-user rounded-xl shadow-xl color-blue-dark"></i>
                                <span><b>Name: </b> <?php echo $data->sFname. " " . $data->sLname; ?></span>
                                <i class="fa fa-angle-right"></i>
                            </a>
                            <a href="#">
                                <i class="fa font-14 fa-envelope rounded-xl shadow-xl color-blue-dark"></i>
                                <span><b>Email: </b> <?php echo $data->sEmail; ?></span>
                                <i class="fa fa-angle-right"></i>
                            </a>
                            <a href="#"> 
                                <i class="fa font-14 fa-phone rounded-xl shadow-xl color-blue-dark"></i>
                                <span><b>Phone: </b> <?php echo $data->sPhone; ?></span>
                                <i class="fa fa-angle-right"></i>
                            </a>
                            <a href="#">
                                <i class="fa font-14 fa-globe rounded-xl shadow-xl color-blue-dark"></i>
                                <span><b>State: </b> <?php echo $data->sState; ?></span>
                                <i class="fa fa-angle-right"></i>
                            </a>   
                        
                                           <a href="#" id="legal-link">
        <i class="fa font-14 fa-file-alt rounded-xl shadow-xl color-blue-dark"></i>
        <span><b>Legal</b></span>
        <i class="fa fa-angle-right"></i>
    </a>
    <div class="additional-content">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1 class="text-center mb-4">Terms of Service</h1>
                <div class="content">
                    <p>This Terms of Service agreement ("Agreement") is entered into between BAPAY company ("Company") and the user ("User") of the Company's services.</p>
                    <!-- Only show the initial content -->
                    <div >
                         <p><b>1. Scope of Services</b></p>
                        <p>The Company provides services related to Virtual Top-Up (VTU), hotel booking, flight booking, and other related services (collectively, the "Services").</p>
                        <p><b>2. Acceptance of Terms</b></p>
                        <p>By using the Company's Services, the User agrees to be bound by the terms and conditions set forth in this Agreement.</p>
                        <p><b>3. User Responsibilities</b></p>
                        <p>The User agrees to use the Services in compliance with all applicable laws and regulations.</p>
                        <p>The User is responsible for maintaining the confidentiality of their account information and for all activities that occur under their account.</p>
                        <p>The User agrees not to engage in any activity that may disrupt or interfere with the Company's Services or networks.</p>
                        <p><b>4. Payment</b></p>
                        <p>The User agrees to pay all fees and charges associated with the use of the Services.</p>
                        <p>Payments made for hotel booking and flight booking are subject to the terms and conditions of the respective service providers.</p>
                        <p><b>5. Disclaimer of Warranties</b></p>
                        <p>The Company makes no warranties or representations regarding the accuracy, reliability, or completeness of the information provided through the Services. The Company disclaims all warranties, whether express or implied, including but not limited to warranties of merchantability, fitness for a particular purpose, and non-infringement.</p>
                        <p><b>6. Limitation of Liability</b></p>
                        <p>In no event shall the Company be liable for any direct, indirect, incidental, special, or consequential damages arising out of or in any way connected with the use of the Services.</p>
                        <p><b>7. Indemnification</b></p>
                        <p>The User agrees to indemnify and hold harmless the Company, its affiliates, and their respective officers, directors, employees, and agents from and against any and all claims, liabilities, damages, losses, costs, and expenses (including reasonable attorneys' fees) arising out of or in any way connected with the User's use of the Services.</p>
                        <p><b>8. Governing Law</b></p>
                        <p>This Agreement shall be governed by and construed in accordance with the laws of [Your Jurisdiction].</p>
                        <p><b>9. Amendments</b></p>
                        <p>The Company reserves the right to amend this Agreement at any time. Any amendments to this Agreement will be effective immediately upon posting on the Company's website.</p>
                        <p><b>10. Contact Information</b></p>
                        <p>If you have any questions or concerns about this Agreement, please contact us at :support@bpay.company</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script>
    $(document).ready(function() {
        var contentVisible = false;

        // Toggle additional content when clicking the link
        $('#legal-link').click(function(e) {
            e.preventDefault(); // Prevent the default link behavior
            if (!contentVisible) {
                $('.additional-content').slideDown();
                contentVisible = true;
            } else {
                $('.additional-content').slideUp();
                contentVisible = false;
            }
        });

        // Hide additional content when double-clicking on it
        $('.additional-content').dblclick(function(e) {
            e.preventDefault(); // Prevent the default link behavior
            $('.additional-content').slideUp();
            contentVisible = false;
        });
    });
</script>


<a href="#" id="privacy-link">
    <i class="fa font-14 fa-shield-alt rounded-xl shadow-xl color-blue-dark"></i>
    <span><b>Privacy</b></span>
    <i class="fa fa-angle-right"></i>
</a>

<div class="additional-content privacy-content">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1 class="text-center mb-4">Privacy Policy</h1>
            <div class="content">
                <p>This Privacy Policy describes how BAPAY company ("Company") collects, uses, and protects the information you provide when using the Company's services.</p>
                <!-- Only show the initial content -->
                <div>
                    <p><b>1. Information Collection and Use</b></p>
                    <p>The Company collects personal information when you register with the Company, use the Company's services, or communicate with the Company. This information may include your name, email address, phone number, and other contact information.</p>
                    <p>The Company uses the information collected to provide and improve its services, personalize your experience, and communicate with you.</p>
                    <p><b>2. Information Sharing and Disclosure</b></p>
                    <p>The Company does not sell, trade, or otherwise transfer your personal information to third parties without your consent. However, the Company may share your information with trusted third-party service providers who assist the Company in operating its website, conducting its business, or servicing you.</p>
                    <p><b>3. Data Security</b></p>
                    <p>The Company implements security measures to protect the personal information it collects. However, no method of transmission over the internet or electronic storage is 100% secure, and the Company cannot guarantee the absolute security of your information.</p>
                    <p><b>4. Changes to this Privacy Policy</b></p>
                    <p>The Company may update this Privacy Policy from time to time. You are advised to review this Privacy Policy periodically for any changes.</p>
                    <p><b>5. Contact Us</b></p>
                    <p>If you have any questions or concerns about this Privacy Policy, please contact us at: support@bpay.company</p>
                </div>
            </div>
        </div>
    </div>
</div>


  <script>
    $(document).ready(function() {
        var privacyVisible = false;

        // Toggle additional content when clicking the privacy link
        $('#privacy-link').click(function(e) {
            e.preventDefault(); // Prevent the default link behavior
            if (!privacyVisible) {
                $('.privacy-content').slideDown();
                privacyVisible = true;
            } else {
                $('.privacy-content').slideUp();
                privacyVisible = false;
            }
        });

        // Hide additional content when double-clicking on it
        $('.privacy-content').dblclick(function(e) {
            e.preventDefault(); // Prevent the default link behavior
            $('.privacy-content').slideUp();
            privacyVisible = false;
        });
    });
</script>

                                    <a href="./logout">
    <i class="fas fa-sign-out-alt font-14 rounded-xl shadow-xl color-blue-dark"></i>
    <span><b>Sign Out </b> </span>
    <i class="fa fa-angle-right"></i>
</a>

                            </a>      
                        </div>

                        <p class="mb-n1 mt-2 color-highlight font-600 font-12">Referral</p>
                        <h4>Referral Link</h4>
                        <div class="list-group list-custom-small">
                            <a href="#">
                                <input type="text" class="form-control" readonly value="<?php echo $siteurl."mobile/register/?referral=".$data->sPhone; ?>" />
                            </a>
                            <a href="#">
                                <button class="btn btn-danger btn-sm custom-btn-orange" onclick="copyToClipboard('<?php echo $siteurl."mobile/register/?referral=".$data->sPhone; ?>')"><span style="color:#0B153C;">Copy Link</span></button>
                                <button class="btn btn-success btn-sm custom-btn-orange" onclick="window.open('referrals')"><span style="color:#0B153C;">View Commission</span></button>
                            </a>
                        </div>
                        <style>
                            .custom-btn-orange {
    background-color: #FFA500;
    border-color: #FFA500; /* Optional: change border color to match */
}

                        </style>
                        
                        <?php if($data->sType == 3): ?>
                        <p class="mb-n1 mt-2 color-highlight font-600 font-12">Developer</p>
                        <h4>Api Documentation</h4>
                        <div class="list-group list-custom-small">
                            <a href="#">
                                <input type="text" class="form-control" readonly value="<?php echo $data->sApiKey; ?>" />
                            </a>
                            <a href="#">
                                <button class="btn btn-danger btn-sm" onclick="copyToClipboard('<?php echo $data->sApiKey; ?>')">Copy Api Key</button>
                                <?php if(!empty($data2)): ?>
                                    <button class="pl-5 btn btn-success btn-sm" onclick="window.open('<?php echo $data2->apidocumentation; ?>')">View Documentation</button>
                                <?php endif; ?>
                            </a>
                         </div>
                         <?php endif; ?>
                        
                </div>

                <div data-bs-parent="#tab-group-1" class="collapse" id="tab-2">
                    <!--<p class="mb-n1 color-highlight font-600 font-12">Update Login Details</p>-->
                                    <h2 style="text-align:center; padding:-5px 5px;box-shadow:-20px -20px 20px #FFA500; border:1px; font-size:20px;"><span style="color:#FFA500; font-size:20px">B</span>PAY</h2>

                        <h4>Login Details</h4>
                        
                        <form id="passForm" method="post">
                        <div class="mt-5 mb-3">
                            
                            <div class="input-style has-borders no-icon input-style-always-active mb-4">
                                <input type="password" class="form-control" id="old-pass" name="oldpass" placeholder="Old Password" required>
                                <label for="old-pass" class="color-highlight">Old Password</label>
                                <em>(required)</em>
                            </div>
                            <div class="input-style has-borders no-icon input-style-always-active  mb-4">
                                <input type="password" class="form-control" id="new-pass" name="newpass" placeholder="New Password" required>
                                <label for="new-pass" class="color-highlight">New Password</label>
                                <em>(required)</em>
                            </div>

                            <div class="input-style has-borders no-icon input-style-always-active mb-4">
                                <input type="password" class="form-control" id="retype-pass" placeholder="Retype Password" required>
                                <label for="retype-pass" class="color-highlight">Retype Password</label>
                                <em>(required)</em>
                            </div>
                        </div>
                        <button type="submit" id="update-pass-btn" style="width: 100%;" class="btn btn-full btn-l font-600 font-15 gradient-highlight mt-4 rounded-s">
                                Update Password
                        </button>
                        </form>
                </div>

                <div data-bs-parent="#tab-group-1" class="collapse" id="tab-3">
                    <p class="mb-n1 color-highlight font-600 font-12">Update Transaction Pin</p>
                        <h4>Transaction Pin</h4>
                        
                        <form id="pinForm" method="post">
                        <div class="mt-3 mb-3">
                            <!--<p class="text-danger"><b>Note: </b> The Default Transaction Pin Is '1234'. Your Transaction Pin should be a four digit number. </p>-->
                            <div class="input-style has-borders no-icon input-style-always-active mb-4">
                                <input type="number" class="form-control" id="old-pin" name="oldpin" placeholder="Old Pin" required>
                                <label for="old-pin" class="color-highlight">Old Pin</label>
                                <em>(required)</em>
                            </div>
                            <div class="input-style has-borders no-icon input-style-always-active  mb-4">
                                <input type="number"  class="form-control" id="new-pin" name="newpin" placeholder="New Pin" required>
                                <label for="new-pin" class="color-highlight">New Pin</label>
                                <em>(required)</em>
                            </div>

                            <div class="input-style has-borders no-icon input-style-always-active mb-4">
                                <input type="number" class="form-control" id="retype-pin" placeholder="Retype Pin" required>
                                <label for="retype-pin" class="color-highlight">Retype Pin</label>
                                <em>(required)</em>
                            </div>
                        </div>
                        <button type="submit" id="update-pin-btn" style="width: 100%;" class="btn btn-full btn-l font-600 font-15 gradient-highlight mt-4 rounded-s">
                                Update Pin
                        </button>
                        </form>
                        
                        <hr/>

                        <p class="mb-n1 color-highlight font-600 font-12">Disable Transaction Pin</p>
                        <h4>Disable Pin</h4>
                        
                        <form class="the-submit-form" method="post">
                        <div class="mt-3 mb-3">
                            <!--<p class="text-danger"><b>Note: </b> Only Disable Pin When You Are Sure About The Security Of Your Phone And Your Account Is Secured With A Strong Password. </p>-->
                            <div class="input-style has-borders no-icon input-style-always-active mb-4">
                                <input type="number" maxlength="4" class="form-control" id="old-pin" name="oldpin" placeholder="Old Pin" required>
                                <label for="old-pin" class="color-highlight">Old Pin</label>
                                <em>(required)</em>
                            </div>
                            <div class="input-style has-borders no-icon input-style-always-active  mb-4">
                                <select name="pinstatus">
                                    <option value="">Change Status</option>
                                    <?php if ($data->sPinStatus == 0): ?>
                                    <option value="0" selected>Enable</option> <option value="1">Disable</option>
                                    <?php else : ?>
                                    <option value="0">Enable</option> <option value="1" selected>Disable</option>
                                    <?php endif; ?>
                                </select><label for="new-pin" class="color-highlight">Change Status</label>
                                <em>(required)</em>
                            </div>
</div>
                        <button type="submit" name="disable-user-pin" style="width: 100%;" class="the-form-btn btn btn-full btn-l font-600 font-15 gradient-highlight mt-4 rounded-s">
                                Update Pin
                        </button>
                        </form>
                </div>
                
            </div>
        </div> 

</div>

