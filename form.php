<?php 

function form_reservation() {
    ob_start();
    ?>
<style>
.reservation_form {
    padding: 50px 0;
}
.reservation_form .input-group {
    flex-direction: column;
    margin-bottom: 20px;
}
.reservation_form .input-group .form-label {
    display: block;
    margin-bottom: 10px;
    font-weight: 600;
    font-size: 14px;
    color: #272727;
    font-family: 'custom regular';
}
.reservation_form .input-group .form-control {
    border-radius: 5px !important;
    border: 1px solid #D1D1D1;
    padding-inline-start: 40px;
    width: 100% !important;
    background-color: transparent !important;
}
.reservation_form .input-group .form-control:focus {
    box-shadow: none !important;
}
.reservation_form .input-group .icon {
    position: absolute;
    inset-inline-start: 10px;
    top: 20%;
    transform: translateY(79%);
    color: #272727;
    font-size: 15px;
    border-inline-end: 1px solid #000;
    width: 20px;
}
.reservation_form .input-group .icon i {
    color: #999999;
    font-size: 15px;
}
</style>

<!-- start form -->
<div class="reservation_form">
    <div class="container">
        <form action="" method="post" id="formReservation">
            <input type="hidden" name="roomname" value="reservation" id="roomname">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <!-- user name -->
                    <div class="input-group">
                        <label class="form-label"><?php lang_in('اسم المستخدم', 'User Name'); ?></label>
                        <input type="text" name="username" class="form-control" id="username" 
                            placeholder="<?php lang_in('اسم المستخدم', 'User Name'); ?>">
                        <span class="icon">
                            <i class="fas fa-user"></i>
                        </span>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <!-- last name -->
                    <div class="input-group">
                        <label class="form-label"><?php lang_in('اسم العائلة', 'Last Name'); ?></label>
                        <input type="text" name="lastname" class="form-control" id="lastname" 
                            placeholder="<?php lang_in('اسم العائلة', 'Last Name'); ?>">
                        <span class="icon">
                            <i class="fas fa-user"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <!-- email  -->
                    <div class="input-group">
                        <label class="form-label"><?php lang_in('البريد الالكتروني', 'Email'); ?></label>
                        <input type="email" name="email" class="form-control" id="email" 
                            placeholder="<?php lang_in('البريد الالكتروني', 'Email'); ?>">
                        <span class="icon">
                            <i class="fas fa-envelope"></i>
                        </span>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <!-- Phone number -->
                    <div class="input-group">
                        <label class="form-label"><?php lang_in('رقم الجوال', 'Phone Number'); ?></label>
                        <input type="tel" name="phone" class="form-control" id="phone" 
                            placeholder="<?php lang_in('رقم الجوال', 'Phone Number'); ?>">
                        <span class="icon">
                            <i class="fas fa-phone"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <!-- Start reservation -->
                    <div class="input-group">
                        <label class="form-label"><?php lang_in('بداية الحجز', 'Start Reservation'); ?></label>
                        <input type="date" name="startdate" class="form-control" id="startDate" 
                            placeholder="<?php lang_in('بداية الحجز', 'Start Reservation'); ?>">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <!-- End reservation -->
                    <div class="input-group">
                        <label class="form-label"><?php lang_in('نهاية الحجز', 'End Reservation'); ?></label>
                        <input type="date" name="enddate" class="form-control" id="endDate" 
                            placeholder="<?php lang_in('نهاية الحجز', 'End Reservation'); ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <!-- Number of Guests -->
                    <div class="input-group">
                        <label class="form-label"><?php lang_in('عدد الضيوف', 'Guest Number'); ?></label>
                        <select dir="rtl" required class="filter-select" name="guestnumber" id="guest_number">
                            <option value="" disabled selected><?php lang_in('عدد الضيوف', 'Number of Guests'); ?></option>
                            <?php
                                $room_guest = get_terms(array('taxonomy' => 'guest_number', 'hide_empty' => false));
                                if (!is_wp_error($room_guest)) {
                                    foreach ($room_guest as $term) {
                                        echo '<option value="' . esc_attr($term->slug) . '">' . esc_html($term->name) . '</option>';
                                    }
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <!-- Number of Rooms -->
                    <div class="input-group">
                        <label class="form-label"><?php lang_in('الغرفة', 'Rooms'); ?></label>
                        <select dir="rtl" required class="filter-select" name="roomnumber" id="room_number">
                            <option value="" disabled selected><?php lang_in('عدد الغرف', 'Number of Rooms'); ?></option>
                            <?php
                                $room_numbers = get_terms(array('taxonomy' => 'number_room', 'hide_empty' => false));
                                if (!is_wp_error($room_numbers)) {
                                    foreach ($room_numbers as $term) {
                                        echo '<option value="' . esc_attr($term->slug) . '">' . esc_html($term->name) . '</option>';
                                    }
                                }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <button type="submit" name="submit" class="btn"><?php lang_in('حجز', 'Reserve'); ?></button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
jQuery(document).ready(function($) {
    $('#guest_number, #room_number').niceSelect(); // Fixed the selector
});
</script>

<?php

// Handling form submission and sending email
add_action('wp_ajax_handle_form_submission', 'handle_form_submission');
add_action('wp_ajax_nopriv_handle_form_submission', 'handle_form_submission');

function handle_form_submission() {
    global $wpdb;

    // Get logo and site name
    $custom_logo_id = get_theme_mod('custom_logo');
    $logo_url = wp_get_attachment_image_src($custom_logo_id, 'full')[0];
    $site_name = get_bloginfo('name');

    // Collect POST data
    $username = sanitize_text_field($_POST['username']);
    $lastname = sanitize_text_field($_POST['lastname']);
    $phone = sanitize_text_field($_POST['phone']);
    $email = sanitize_email($_POST['email']);
    $startdate = sanitize_text_field($_POST['startdate']);
    $enddate = sanitize_text_field($_POST['enddate']);
    $guestnumber = intval($_POST['guestnumber']);
    $roomnumber = intval($_POST['roomnumber']);
    $roomname = sanitize_text_field($_POST['roomname']);

    // Insert into database
    $table_name = $wpdb->prefix . 'formSteps';
    $data = array(
        'username' => $username,
        'lastname' => $lastname,
        'phone' => $phone,
        'email' => $email,
        'startdate' => $startdate,
        'enddate' => $enddate,
        'guestnumber' => $guestnumber,
        'roomnumber' => $roomnumber,
        'roomname' => $roomname,
    );
    $wpdb->insert($table_name, $data);

    // Prepare email content
    $subject = 'Reservation Confirmation';
    $message = "
        <html>
        <head>
        <title>Reservation Confirmation</title>
        </head>
        <body>
        <h1>Reservation Details</h1>
        <p><strong>User Name:</strong> $username</p>
        <p><strong>Phone Number:</strong> $phone</p>
        <p><strong>Guest Number:</strong> $guestnumber</p>
        <p><strong>Start Date:</strong> $startdate</p>
        <p><strong>End Date:</strong> $enddate</p>
        <img src='$logo_url' alt='$site_name'>
        </body>
        </html>
    ";

    // Set headers and send email
    $headers = array('Content-Type: text/html; charset=UTF-8');
    wp_mail($email, $subject, $message, $headers);

    wp_send_json_success(array('message' => 'Reservation submitted successfully.'));
}

return ob_get_clean();
}
add_shortcode('form_reservation', 'form_reservation');
?>
