<?php 

/*
  * Function for handling multi-step form submissions.
  * Inserts data into the 'formSteps' table and sends confirmation emails.
*/

// Hook for AJAX
add_action('wp_ajax_handle_form_submission', 'handle_form_submission');
add_action('wp_ajax_nopriv_handle_form_submission', 'handle_form_submission');

/**
 * Handles the form submission using AJAX.
 *
 * This function collects form data, validates and sanitizes inputs, inserts data into the database,
 * and sends a confirmation email to the user and website admin.
 */
function handle_form_submission() {
    global $wpdb;

    // Check if the request is a POST request
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        wp_send_json_error('Invalid request method.');
        return;
    }

    // Get the custom logo URL
    $custom_logo_id = get_theme_mod('custom_logo');
    $logo_url = wp_get_attachment_image_src($custom_logo_id, 'full')[0];

    // Get the site name
    $site_name = get_bloginfo('name');

    // Collect and sanitize form data
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
    $bathnumber = isset($_POST['bathnumber']) ? sanitize_text_field($_POST['bathnumber']) : '';
    $roomsize = isset($_POST['roomsize']) ? sanitize_text_field($_POST['roomsize']) : '';
    // Validate required fields
    if (empty($username) || empty($email) || empty($startdate) || empty($enddate)) {
        wp_send_json_error('Please fill in all required fields.');
        return;
    }

    // Insert data into the database
    $table_name = $wpdb->prefix . 'formsubmit'; // Adjust with the table prefix
    $result = $wpdb->insert(
        $table_name,
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
            'roomprice' => $roomprice,
            'bathnumber' => $bathnumber,
            'roomsize' => $roomsize
        ),
        array(
            '%s', // username
            '%s', // lastname
            '%s', // phone
            '%s', // email
            '%s', // startdate
            '%s', // enddate
            '%d', // guestnumber
            '%d', // roomnumber
            '%s', // roomname
            '%d',  // roomprice
            '%s', // bathnumber
            '%s', // roomsize
        )
    );

    // Check if the insertion was successful
    if ( false === $result ) {
        wp_send_json_error('Database insert error: ' . print_r($wpdb->last_error, true));
        return;
    }

    // Prepare the email headers
    $headers = array(
        'Content-Type: text/html; charset=UTF-8',
        'From: ' . esc_html($site_name) . ' <' . get_option('admin_email') . '>'
    );

    // Prepare the admin email content
    $admin_email = 'moh.tarek.dev@gmail.com'; // Replace with the admin email
    $subject = 'تفاصيل الحجز';
    $message = '
    <html>
    <head>
        <style>
            table, td, th { border: 1px solid #ddd; text-align: left; }
            body { background-color: #CAAB75; font-family: "Cairo", sans-serif; }
            .email-header { text-align: start; margin-bottom: 20px; }
            .email-header img { max-width: 150px; height: auto; }
            .email-header h1 { font-size: 24px; margin: 10px 0; color: #000; font-weight: 800; }
            .email-content p { font-size: 16px; font-weight: 500; }
            .email-content h2 { font-size: 20px; margin-top: 20px; font-weight: 600; background-color: #000; text-align: center; color: white; }
            hr { border: 1px dashed #CAAB75; margin: 20px 0; }
        </style>
    </head>
    <body>
        <div class="email-header">
            <img src="' . esc_url($logo_url) . '" alt="' . esc_attr($site_name) . '">
            <h1>' . esc_html($site_name) . '</h1>
        </div>
        <hr>
        <div class="email-content">
            <h1>Room Reservation Information</h1>
            <p>Thank you for submitting the form. We have received the following information:</p>
            <h2>Reservation Details</h2>
            <table cellspacing="0" cellpadding="0" align="center" style="width: 600px; border: 1px solid #ddd;">
                <tr><td><strong>أسم الغرفة:</strong></td><td>' . esc_html($roomname) . '</td></tr>
                 <tr><td><strong>سعر الغرفة:</strong></td><td>' . esc_html($roomprice) . '</td></tr>
                <tr><td><strong>أسم الشخص:</strong></td><td>' . esc_html($username) . ' ' . esc_html($lastname) . '</td></tr>
                <tr><td><strong>الهاتف:</strong></td><td>' . esc_html($phone) . '</td></tr>
                <tr><td><strong>البريد الألكتروني:</strong></td><td>' . esc_html($email) . '</td></tr>
                <tr><td><strong>تاريخ بداية الحجز:</strong></td><td>' . esc_html($startdate) . '</td></tr>
                <tr><td><strong>تاريخ نهاية الحجز:</strong></td><td>' . esc_html($enddate) . '</td></tr>
                <tr><td><strong>عدد الغرف:</strong></td><td>' . esc_html($roomnumber) . '</td></tr>
                <tr><td><strong>عدد الضيوف :</strong></td><td>' . esc_html($guestnumber) . '</td></tr>
                <tr><td><strong>سعر الغرفة:</strong></td><td>' . esc_html($roomprice) . '</td></tr>
                <tr><td><strong>المساحة:</strong></td><td>' . esc_html($roomsize) . '</td></tr>
                <tr><td><strong>عدد الحمامات:</strong></td><td>' . esc_html($bathnumber) . '</td></tr>
            </table>
        </div>
    </body>
    </html>';

    // Send email to the admin
    $email_sent = wp_mail($admin_email, $subject, $message, $headers);

    // Prepare the user confirmation email content
    $user_subject = 'تم تفعيل حجزك في موقعنا';
    $user_message = '
    <html>
    <head>
        <style>
            body { background-color: #f7dcc8; font-family: "Cairo", sans-serif; }
            .email-header { text-align: start; margin-bottom: 20px; }
            .email-header img { max-width: 150px; height: auto; }
            .email-header h1 { font-size: 24px; margin: 10px 0; color: #f36b03; font-weight: 800; }
            .email-content p { font-size: 16px; font-weight: 500; }
            hr { border: 1px dashed #f36b03; margin: 20px 0; }
        </style>
    </head>
    <body>
        <div class="email-header">
            <img src="' . esc_url($logo_url) . '" alt="' . esc_attr($site_name) . '">
            <h1>' . esc_html($site_name) . '</h1>
        </div>
        <hr>
        <div class="email-content">
            <h1>شكرا على حجزك</h1>
            <p>شكرا لك بالتسجيل, ' . esc_html($username) . ' ' . esc_html($lastname) . '. سوف نتواصل معك قريبا .</p>
        </div>
    </body>
    </html>';

    // Send confirmation email to the user
    wp_mail($email, $user_subject, $user_message, $headers);

    // Send JSON response based on email success
    if ($email_sent) {
        wp_send_json_success('Form submitted successfully.');
    } else {
        wp_send_json_error('Form submitted, but there was an issue sending emails.');
    }

    wp_die(); // Close the AJAX request properly
}


?>

<section class="post_slider">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <?php
                // Start post query 
                $query = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => -1,
                    'order' => 'DESC',
                ));

                if ($query->have_posts()) {
                    $post_count = 0; // Initialize a counter

                    while ($query->have_posts()) {
                        $query->the_post();

                        // Open a new Swiper slide for every 2 posts
                        if ($post_count % 2 === 0) {
                            echo '<div class="swiper-slide">'; // Start new slide
                            echo '<div class="row">'; // Start new row for Bootstrap grid
                        }
                        
                        // Insert each post content within Bootstrap column
                        echo '<div class="col-lg-6 col-12">';
                        ?>
            <div class="post-overlay-container">
                <div class="post-image-over">
                    <!-- get image post   -->
                    <img src="<?php  the_post_thumbnail_url();  ?>" alt="">
                </div>
                <a href="<?php the_permalink(); ?>" class="post-overlay">
                    <div class="title">
                        <h4><?php the_title(); ?></h4>
                        <p><?php the_date(); ?></p>
                    </div>
                    <div class="text">
                        <?php the_excerpt(); ?>
                    </div>
                    <div class="button">
                        <span class="read-more"> <?php  lang_in( "اقرأ المزيد" , "read more") ;?></span>
                    </div>
                </a>
            </div>


            <?php
                        // echo do_shortcode('[elementor-template id="962"]');
                        echo '</div>'; // Close Bootstrap column
                        
                        $post_count++;

                        // Close the Swiper slide after every 2 posts
                        if ($post_count % 2 === 0) {
                            echo '</div>'; // Close row
                            echo '</div>'; // Close swiper-slide
                        }
                    }

                    // In case the total number of posts is odd, close the last open slide
                    if ($post_count % 2 !== 0) {
                        echo '</div>'; // Close row
                        echo '</div>'; // Close the last swiper-slide if not closed already
                    }

                    // Reset post data after the custom query
                    wp_reset_postdata();
                } 
            ?>
        </div>

        <!-- Add Swiper buttons and pagination -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
</section>