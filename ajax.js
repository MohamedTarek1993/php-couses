jQuery(document).ready(function($) {
    if (typeof myAjax === 'undefined' || typeof myAjax.ajaxurl === 'undefined') {
        console.error('AJAX URL is not defined. Exiting the script.');
        return; // Exit the script if the check fails
    }

    function collectAndSendData() {
        let formData = new FormData();
        formData.append('action', 'handle_form_submission');  // Append action

        // Append form fields to URLSearchParams
        formData.append('username', document.getElementById('username').value);
        formData.append('lastname', document.getElementById('lastname').value);
        formData.append('email', document.getElementById('email').value);
        formData.append('phone', document.getElementById('phone').value);
        formData.append('startdate', document.getElementById('startDate').value);
        formData.append('enddate', document.getElementById('endDate').value);
        formData.append('roomnumber', document.getElementById('room_number').value);
        formData.append('guestnumber', document.getElementById('guest_number').value);
        formData.append('roomname', document.getElementById('room_name').value);
        formData.append('roomprice', document.getElementById('room_price').value);

        // Perform the AJAX request
        $.ajax({
            url: myAjax.ajaxurl,
            type: 'POST',
            data: formData.toString(), // Convert URLSearchParams to string
            contentType: 'application/x-www-form-urlencoded; charset=UTF-8', // Set content type
            success: function(response) {
                console.log('Response:', response);
                if (response.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: 'Reservation submitted successfully!',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(() => {
                        localStorage.clear();  // Clear localStorage after success
                        document.getElementById('formReservation').reset();  // Reset the form

                        // Redirect logic based on language
                        let lang = document.documentElement.getAttribute('lang');
                        let redirectUrl = lang === 'ar' ? 'https://wordpress.aait.app/lian-park/' : 'https://wordpress.aait.app/lamar/thankyou-en/?lang=en';
                        window.location.href = redirectUrl;
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: response.data,
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
            },
            error: function(xhr, status, error) {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'There was an error submitting the form.',
                    showConfirmButton: false,
                    timer: 1500
                });
                console.error('XHR Status:', status);
                console.error('XHR Error:', error);
                console.error('XHR Response:', xhr.responseText);
            }
        });
    }

    // Bind form submission to the function
    $('#formReservation').on('submit', function(e) {
        e.preventDefault();
        collectAndSendData();
    });
});
