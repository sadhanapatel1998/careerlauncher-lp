<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/PHPMailer/src/Exception.php';
require __DIR__ . '/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';

header('Content-Type: application/json; charset=UTF-8');
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {

    echo json_encode([
        'success' => false,
        'message' => 'Invalid request.'
    ]);

    exit;
}

$name = trim($_POST['name'] ?? '');
$mobile = trim($_POST['mobile'] ?? '');
$email = trim($_POST['email'] ?? '');
$course = trim($_POST['course'] ?? '');
$exam = trim($_POST['exam'] ?? '');
$message = trim($_POST['message'] ?? '');
if ($name === '') {

    echo json_encode([
        'success' => false,
        'message' => 'Please enter your name.'
    ]);

    exit;
}


if (!preg_match('/^[6-9][0-9]{9}$/', $mobile)) {

    echo json_encode([
        'success' => false,
        'message' => 'Please enter a valid 10-digit mobile number.'
    ]);

    exit;
}


if ($course === '') {

    echo json_encode([
        'success' => false,
        'message' => 'Please select a course.'
    ]);

    exit;
}


if ($exam === '') {

    echo json_encode([
        'success' => false,
        'message' => 'Please select an exam.'
    ]);

    exit;
}

if ($email !== '' && !filter_var($email, FILTER_VALIDATE_EMAIL)) {

    echo json_encode([
        'success' => false,
        'message' => 'Please enter a valid email address.'
    ]);

    exit;
}

$name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$mobile = htmlspecialchars($mobile, ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$course = htmlspecialchars($course, ENT_QUOTES, 'UTF-8');
$exam = htmlspecialchars($exam, ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
$mail = new PHPMailer(true);


try {

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'hostinghbs@gmail.com';
     $mail->Password = 'cgpcldgztwgsulxq';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    $mail->setFrom(
        'hostinghbs@gmail.com',
        'Career Launcher Vikaspuri Website'
    );
    $mail->addAddress(
        'del.vikaspuri@careerlauncher.com',
        'Career Launcher Vikaspuri'
    );

    if ($email !== '') {

        $mail->addReplyTo(
            $email,
            $name
        );
    }

    $mail->isHTML(true);
    $mail->Subject = 'New Enquiry - Career Launcher Vikaspuri Website';
    $displayEmail = $email !== ''
        ? $email
        : 'Not provided';
    $displayMessage = $message !== ''
        ? nl2br($message)
        : 'No message provided';

    $mail->Body = '
    <div style="
        font-family:Arial,Helvetica,sans-serif;
        max-width:680px;
        margin:0 auto;
        background:#f7f9fc;
        padding:30px;
    ">
        <div style="
            background:#0a2b5c;
            color:#ffffff;
            padding:25px;
            border-radius:12px 12px 0 0;
        ">

            <h2 style="
                margin:0;
                font-size:24px;
            ">
                New Website Enquiry
            </h2>

            <p style="
                margin:8px 0 0;
                opacity:.85;
            ">
                Career Launcher Vikaspuri
            </p>
        </div>
        <div style="
            background:#ffffff;
            padding:25px;
            border-radius:0 0 12px 12px;
        ">


            <table
                width="100%"
                cellpadding="12"
                cellspacing="0"
                style="
                    border-collapse:collapse;
                    font-size:14px;
                "
            >

                <tr>
                    <td style="
                        border:1px solid #e5e7eb;
                        background:#f8fafc;
                        width:35%;
                    ">
                        <strong>Name</strong>
                    </td>

                    <td style="
                        border:1px solid #e5e7eb;
                    ">
                        ' . $name . '
                    </td>
                </tr>


                <tr>
                    <td style="
                        border:1px solid #e5e7eb;
                        background:#f8fafc;
                    ">
                        <strong>Mobile</strong>
                    </td>

                    <td style="
                        border:1px solid #e5e7eb;
                    ">
                        ' . $mobile . '
                    </td>
                </tr>


                <tr>
                    <td style="
                        border:1px solid #e5e7eb;
                        background:#f8fafc;
                    ">
                        <strong>Email</strong>
                    </td>

                    <td style="
                        border:1px solid #e5e7eb;
                    ">
                        ' . $displayEmail . '
                    </td>
                </tr>


                <tr>
                    <td style="
                        border:1px solid #e5e7eb;
                        background:#f8fafc;
                    ">
                        <strong>Course</strong>
                    </td>

                    <td style="
                        border:1px solid #e5e7eb;
                    ">
                        ' . $course . '
                    </td>
                </tr>


                <tr>
                    <td style="
                        border:1px solid #e5e7eb;
                        background:#f8fafc;
                    ">
                        <strong>Exam</strong>
                    </td>

                    <td style="
                        border:1px solid #e5e7eb;
                    ">
                        ' . $exam . '
                    </td>
                </tr>


                <tr>
                    <td style="
                        border:1px solid #e5e7eb;
                        background:#f8fafc;
                        vertical-align:top;
                    ">
                        <strong>Message</strong>
                    </td>

                    <td style="
                        border:1px solid #e5e7eb;
                    ">
                        ' . $displayMessage . '
                    </td>
                </tr>

            </table>


            <p style="
                margin:25px 0 0;
                color:#6b7280;
                font-size:13px;
            ">
                This enquiry was submitted from the Career Launcher Vikaspuri website.
            </p>

        </div>

    </div>

    ';

    $mail->AltBody =
        "New Career Launcher Vikaspuri Website Enquiry\n\n" .
        "Name: {$name}\n" .
        "Mobile: {$mobile}\n" .
        "Email: {$displayEmail}\n" .
        "Course: {$course}\n" .
        "Exam: {$exam}\n" .
        "Message: " . ($message ?: 'No message provided');


    $mail->send();
    echo json_encode([
        'success' => true,
        'message' => 'Thank you! Your enquiry has been submitted successfully.'
    ]);

    exit;


} catch (Exception $e) {
    echo json_encode([
        'success' => false,
        'message' => 'Unable to send your enquiry. Please try again later.'
    ]);

    exit;
}