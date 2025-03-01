<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms of Service</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        /* Custom styles */
        .additional-content {
            display: none;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1 class="text-center mb-4">Terms of Service</h1>
                <div class="content">
                    <p>This Terms of Service agreement ("Agreement") is entered into between BAPAY company ("Company") and the user ("User") of the Company's services.</p>
                    <!-- Only show the initial content -->
                    <div class="additional-content">
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
            // Set the initial content visibility
            var contentVisible = false;

            // Show additional content when scrolling up
            $(window).scroll(function() {
                if ($(this).scrollTop() < 50 && !contentVisible) {
                    $('.additional-content').slideDown();
                    contentVisible = true;
                } else if ($(this).scrollTop() >= 50 && contentVisible) {
                    $('.additional-content').slideUp();
                    contentVisible = false;
                }
            });
        });
    </script>
</body>
</html>
