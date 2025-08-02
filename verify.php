<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $recaptchaSecret = '6LeOXRsqAAAAAJ6W1lCDpORQ1J5aZ5MJJvVEMWjQ
'; // Replace with your secret key
    $recaptchaResponse = $_POST['g-recaptcha-response'];

    // Make a request to verify the reCAPTCHA response
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $data = [
        'secret' => $recaptchaSecret,
        'response' => $recaptchaResponse,
    ];

    $options = [
        'http' => [
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data),
        ],
    ];
    $context  = stream_context_create($options);
    $response = file_get_contents($url, false, $context);
    $result = json_decode($response);

    // Return JSON response
    header('Content-Type: application/json');
    echo json_encode($result);
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
}
?>
