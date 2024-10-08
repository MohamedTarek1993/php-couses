<?php 

function form_reservation() {
    ob_start();
    ?>

<!-- start form -->
<div class="reservation_form">
    <div class="container">
        <form action="" id="formReservation">

            <!-- hidden input name room and price -->
            <input type="hidden" value="" name="room_name" id="room_name">
            <input type="hidden" value="" name="room_price" id="room_price">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <!-- user name -->
                    <div class="input-group">
                        <label class="form-label">
                            <?php lang_in('اسم المستخدم' , ' user name' ) ;?>
                        </label>
                        <input type="text" name="username" class="form-control" id="username"
                            placholeder="  <?php lang_in('اسم المستخدم' , ' user name' ) ;?>">
                        <span class="icon">
                            <i class="fas fa-user"></i>
                        </span>
                    </div>
                    <!-- user name -->
                </div>

                <div class="col-lg-6 col-12">
                    <!-- last name -->
                    <div class="input-group">
                        <label class="form-label">
                            <?php lang_in('اسم العائلة' , ' last name' ) ;?>
                        </label>
                        <input type="text" name="lastname" class="form-control" id="lastname"
                            placholeder="  <?php lang_in('اسم العائلة' , ' last name' ) ;?>">
                        <span class="icon">
                            <i class="fas fa-user"></i>
                        </span>
                    </div>
                    <!-- last name -->
                </div>

            </div>


            <div class="row">
                <div class="col-lg-6 col-12">
                    <!-- email  -->
                    <div class="input-group">
                        <label class="form-label">
                            <?php lang_in(' البريد الالكتروني' , ' Email' ) ;?>
                        </label>
                        <input type="email" name="email" class="form-control" id="email"
                            placholeder="    <?php lang_in(' البريد الالكتروني' , ' Email' ) ;?>">
                        <span class="icon">
                            <i class="fas fa-user"></i>
                        </span>
                    </div>
                    <!-- email  -->
                </div>

                <div class="col-lg-6 col-12">
                    <!-- Phone number -->
                    <div class="input-group">
                        <label class="form-label">
                            <?php lang_in(' رقم الجوال' , ' Phone number' ) ;?>
                        </label>
                        <input type="text" name="phone" class="form-control" id="phone"
                            placholeder="   <?php lang_in(' رقم الجوال' , ' Phone number' ) ;?>">
                        <span class="icon">
                            <i class="fas fa-user"></i>
                        </span>
                    </div>
                    <!-- Phone number -->
                </div>

            </div>



            <div class="row">
                <div class="col-lg-6 col-12">
                    <!-- email  -->
                    <div class="input-group">
                        <label class="form-label">
                            <?php lang_in('  بداية الحجز' , ' Start reservation' ) ;?>
                        </label>
                        <input value="" type="date" name="startdate" class="form-control" id="startDate"
                            placholeder="    <?php lang_in('  بداية الحجز' , ' Start reservation' ) ;?>">
                        <!-- <span class="icon">
                            <i class="fas fa-user"></i>
                        </span> -->
                    </div>
                    <!-- email  -->
                </div>

                <div class="col-lg-6 col-12">
                    <!-- Phone number -->
                    <div class="input-group">
                        <label class="form-label">
                            <?php lang_in('  نهاية الحجز' , ' End reservation' ) ;?>
                        </label>
                        <input value=""  type="date" name="enddate" class="form-control" id="endDate"
                            placholeder="   <?php lang_in('  نهاية الحجز' , ' End reservation' ) ;?>">
                        <!-- <span class="icon">
                            <i class="fas fa-user"></i>
                        </span> -->
                    </div>
                    <!-- Phone number -->
                </div>

            </div>



            <div class="row">
                <div class="col-lg-6 col-12">
                    <!-- Number of Guests -->
                    <div class="input-group">
                        <label class="form-label">
                            <?php lang_in(' عدد الضيوف ', 'Guest Number') ?>
                        </label>
                        <select dir="rtl" required class="filter-select" name="guest_number" id="guest_number">
                            <option value="" disabled selected><?php lang_in('عدد الضيوف', 'Number of guest') ?>
                            </option>
                            <?php
                    $room_guest = get_terms(array(
                        'taxonomy' => 'guest_number',
                        'hide_empty' => false,
                    ));

                    if (!is_wp_error($room_guest)) {
                        foreach ($room_guest as $term) {
                            echo '<option value="' . esc_attr($term->slug) . '">' . esc_html($term->name) . '</option>';
                        }
                    }
                    ?>
                        </select>
                    </div>

                    <!-- Number of Rooms -->
                </div>
                <div class="col-lg-6 col-12">
                    <!-- Number of Rooms -->
                    <div class="input-group">
                        <label class="form-label">
                            <?php lang_in('الغرفة', 'Rooms') ?>
                        </label>
                        <select dir="rtl" required class="filter-select" name="room_number" id="room_number">
                            <option value="" disabled selected><?php lang_in('عدد الغرف', 'Number of rooms') ?></option>
                            <?php
                    $room_numbers = get_terms(array(
                        'taxonomy' => 'number_room',
                        'hide_empty' => false,
                    ));

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
                    <button type="submit" name="submit" class="btn"> <?php lang_in('حجز', 'Reserve') ?></button>
                    </button>
                </div>
            </div>

        </form>
    </div>
</div>



<script>
// get data from localstorege for room detials
let roomData = JSON.parse(localStorage.getItem('roomData'))
const roomName = document.getElementById('room_name');
const roomPrice = document.getElementById('room_price');

if (roomData) {
    roomName.value = roomData.nameRoom;
    roomPrice.value = roomData.priceRoom;
}
</script>
<script>
// get data from localstorege for room reservation
let reservationData = JSON.parse(localStorage.getItem('reservationData'))
const startDate = document.getElementById('startDate');
const endDate = document.getElementById('endDate');
const guestNumber = document.getElementById('guest_number');
const roomNumber = document.getElementById('room_number');

if (reservationData) {
    startDate.value = reservationData.start_date;
    endDate.value = reservationData.end_date;
    guestNumber.value = reservationData.guest_number;
    roomNumber.value = reservationData.room_number;
}

</script>

<script>
jQuery(document).ready(function($) {
    $('#guest_number, #room_number').niceSelect(); // Fixed the selector
});
</script>

<!-- finish form -->
<?php



/*
  *THIS IS FUNCTION FOR MULTISTEPS FORM
  * FUNCTION HAS SEND DATA TO DB INSERT TABLE CALLED formSteps 
  * FUNCTION HAS SEND DATA BY MAIL 
  * FUNCTION SEND DATA BY AJAX

*/



  //HOOK FOR AJAX 
 add_action('wp_ajax_handle_form_submission', 'handle_form_submission');
 add_action('wp_ajax_nopriv_handle_form_submission', 'handle_form_submission');

/**
 * Handles the form submission using AJAX.
 *
 * This function is hooked to the WordPress AJAX action 'wp_ajax_handle_form_submission' and
 * 'wp_ajax_nopriv_handle_form_submission' to handle form submissions using AJAX. It collects the
 * form data, sanitizes and validates the inputs, inserts the data into the database, sends
 * a confirmation email to the user and the website administrator.
 *
 * @since 1.0.0
 */

function handle_form_submission() {
    // Check if the request is a POST request
    global $wpdb;
    
      // Get the custom logo URL
    $custom_logo_id = get_theme_mod('custom_logo');
    $logo_url = wp_get_attachment_image_src($custom_logo_id, 'full')[0];
        
        // Get the site name
        $site_name = get_bloginfo('name');

    // Collect and sanitize data from the AJAX request
    $username = isset($_POST['username']) ? sanitize_text_field($_POST['username']) : '';
    $lastname = isset($_POST['lastname']) ? sanitize_text_field($_POST['lastname']) : '';
    $phone = isset($_POST['phone']) ? sanitize_text_field($_POST['phone']) : '';
    $email = isset($_POST['email']) ? sanitize_email($_POST['email']) : '';
    $startdate = isset($_POST['startdate']) ? sanitize_text_field($_POST['startdate']) : '';
    $enddate = isset($_POST['enddate']) ? sanitize_text_field($_POST['enddate']) : '';
    $guestnumber = isset($_POST['guestnumber']) ? intval($_POST['guestnumber']) : 0;
    $roomnumber = isset($_POST['roomnumber']) ? intval($_POST['roomnumber']) : 0;
    $roomname = isset($_POST['roomname']) ? sanitize_text_field($_POST['roomname']) : '';
    $roomprice = isset($_POST['roomprice']) ? intval($_POST['roomprice']) : 0;

    // Perform validation (basic example)
    if (empty($username) || empty($email) || empty($startdate) || empty($enddate)) {
        wp_send_json_error('Please fill in all required fields.');
        return;
    }

    // Insert data into the database
    $result = $wpdb->insert(
        'reservations',
        array(
            'username' => $username,
            'lastname' => $lastname,
            'phone' => $phone,
            'email' => $email,
            'startdate' => $startdate,
            'enddate' => $enddate,
            'guestnumber' => $guestnumber,
            'roomnumber' => $roomnumber,
            'roomname' => $roomname,
            'roomprice' => $roomprice
        ),
        array(
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%d',
            '%d',
            '%s',
            '%d'
        )
    );
    // Prepare the email
    $to = 'moh.tarek.dev@gmail.com'; // Replace with yourW  WEBSITE email address
    $subject = 'حجز غرفة  ';
      $headers = array(
    'Content-Type: text/html; charset=UTF-8',
    'From: ' . esc_html($site_name) . ' <' . get_option('admin_email') . '>'
);
// Prepare the message for sending
$message = '
    <html>
    <head>
        <style>
            table, td, th {  
                border: 1px solid #ddd;
                text-align: left;
            }
            body {
                background-color: #CAAB75;
                font-family: "Cairo", sans-serif;
            }
            .email-header {
                text-align: start;
                margin-bottom: 20px;
            }
            .email-header img {
                max-width: 150px;
                height: auto;
            }
            .email-header h1 {
                font-size: 24px;
                margin: 10px 0;
                color: #000;
                font-weight: 800;
            }
            .email-content {
                margin: 20px;
            }
            .email-content p {
                font-size: 16px;
                font-weight: 500;
            }
            .email-content h2 {
                font-size: 20px;
                margin-top: 20px;
                font-weight: 600;
                background-color: #000;
                text-align: center;
                color: white;
            }
            hr {
                border: 1px dashed #CAAB75;
                margin: 20px 0;
            }
            .head_adult {
                background-color: #CAAB75;
                color: #fff;
                text-align: center;
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <div class="email-header">
            <img src="' . esc_url($logo_url) . '" alt="' . esc_attr($site_name) . '">
            <h1>' . esc_html($site_name) . '</h1>
        </div>
        <hr>
        <div class="email-content">
                    <h1>    معلومات حجز غرفة</h1>
            <p>شكراً لتقديمك النموذج. لقد استلمنا المعلومات التالية:</p>
            <h2>معلومات الحجز</h2>
            <table
                cellspacing="0"
                cellpadding="0"
                align="center"
                class="es-content-body"
                style="
                    mso-table-lspace: 0pt;
                    mso-table-rspace: 0pt;
                    border-collapse: collapse;
                    border-spacing: 0px;
                    background-color: transparent;
                    width: 600px;
                    border: 1px solid #ddd;
                "
                role="none"
            >
                <tr style="border-collapse: collapse">
                    <td align="left" style="Margin:0;padding:10px;">
                        <p><strong>اسم الغرفة:</strong></p>
                    </td>
                    <td align="left" style="Margin:0;padding:10px;">
                        <p>' . esc_html($tripname) . '</p>
                    </td>
                </tr>
                <tr style="border-collapse: collapse">
                    <td align="left" style="Margin:0;padding:10px;">
                        <p><strong> أسم العميل:</strong></p>
                    </td>
                    <td align="left" style="Margin:0;padding:10px;">
                        <p>' . esc_html($username) . ' ' . esc_html($lastname) . '</p>
                    </td>
                </tr>
                <tr style="border-collapse: collapse">
                    <td align="left" style="Margin:0;padding:10px;">
                        <p><strong> رقم الهاتف:</strong></p>
                    </td>
                    <td align="left" style="Margin:0;padding:10px;">
                        <p>' . esc_html($phone) . '</p>
                    </td>
                </tr>
                   <tr style="border-collapse: collapse">
                    <td align="left" style="Margin:0;padding:10px;">
                        <p><strong>البريد الإلكتروني:</strong></p>
                    </td>
                    <td align="left" style="Margin:0;padding:10px;">
                        <p>' . esc_html($email) . '</p>
                    </td>
                </tr>

                  <tr style="border-collapse: collapse">
                    <td align="left" style="Margin:0;padding:10px;">
                        <p><strong>تاريخ بداية الحجز:</strong></p>
                    </td>
                    <td align="left" style="Margin:0;padding:10px;">
                        <p>' . esc_html($startdate) . '</p>
                    </td>
                  </tr>

                 <tr style="border-collapse: collapse">
                    <td align="left" style="Margin:0;padding:10px;">
                        <p><strong>تاريخ نهاية الحجز:</strong></p>
                    </td>
                    <td align="left" style="Margin:0;padding:10px;">
                        <p>' . esc_html($enddate) . '</p>
                    </td>
                </tr>
                  <tr style="border-collapse: collapse">
                    <td align="left" style="Margin:0;padding:10px;">
                        <p><strong>عدد الغرف:</strong></p>
                    </td>
                    <td align="left" style="Margin:0;padding:10px;">
                        <p>' . esc_html($roomnumber) . '</p>
                    </td>
                </tr>

                       <tr style="border-collapse: collapse">
                    <td align="left" style="Margin:0;padding:10px;">
                        <p><strong> عدد الضيوف:</strong></p>
                    </td>
                    <td align="left" style="Margin:0;padding:10px;">
                        <p>' . esc_html($guestnumber) . '</p>
                    </td>
                </tr>

            </table>
            <hr>
           </div>
    </body>
    </html>';
            


// Send the email
$sent = wp_mail($to, $subject, $message, $headers);



// Prepare the message for sending

 $user_subject = '  تم أستلام بريدك الألكتروني بنجاح';

$user_message = '
    <html>
    <head>
        <style>
           
            body {
                background-color: #f7dcc8;
                font-family: "Cairo", sans-serif;
            }
            .email-header {
                text-align: start;
                margin-bottom: 20px;
            }
            .email-header img {
                max-width: 150px;
                height: auto;
            }
            .email-header h1 {
                font-size: 24px;
                margin: 10px 0;
                color: #f36b03;
                font-weight: 800;
            }
            .email-content {
                margin: 20px;
            }
            .email-content p {
                font-size: 16px;
                font-weight: 500;
            }
            .email-content h2 {
                font-size: 20px;
                margin-top: 20px;
                font-weight: 600;
                background-color: #f36b03;
                text-align: center;
                color: white;
            }
            hr {
                border: 1px dashed #f36b03;
                margin: 20px 0;
            }
            .head_adult {
                background-color: #f36b03;
                color: #fff;
                text-align: center;
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <div class="email-header">
            <img src="' . esc_url($logo_url) . '" alt="' . esc_attr($site_name) . '">
            <h1>' . esc_html($site_name) . '</h1>
        </div>
        <hr>
        <div class="email-content">
           <h1>تم أستلام بريدك الالكتروني بنجاح</h1>
      <p>
        شكرا لك <strong> ' . esc_html($username) . esc_html($lastname) . ' </strong> ع حجز رحلة وسوف نفوم
        بالتواصل بك قريبا
      </p>
            
        </div>
    </body>
    </html>';
            
    // Send the confirmation email to the user
    wp_mail($email, $user_subject, $user_message, $headers);


    // Send JSON response
    if ($sent) {
        wp_send_json_success('Form submitted successfully.');
    } else {
        wp_send_json_error('There was an error submitting the form.');
    }

    wp_die();
}




    return ob_get_clean();
}

add_shortcode('formReservation', 'form_reservation');
?>