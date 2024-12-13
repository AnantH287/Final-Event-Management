<?php
session_start(); // Start the session
require_once('TCPDF-main/tcpdf.php'); // Include TCPDF

// Check if necessary session data is set
if (isset($_SESSION['name'], $_SESSION['number'], $_SESSION['eventdate'], $_SESSION['location'], $_SESSION['catering'], $_SESSION['magic'])) {
    $name = $_SESSION['name'];
    $number = $_SESSION['number'];
    $date = $_SESSION['eventdate'];
    $location = $_SESSION['location'];
    $catering = $_SESSION['catering'];
    $magic = $_SESSION['magic'];

    // Create new PDF document
    $pdf = new TCPDF();
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Your Company Name');
    $pdf->SetTitle('Booking Confirmation');
    $pdf->SetSubject('Booking Confirmation');
    $pdf->SetKeywords('TCPDF, PDF, booking, confirmation');

    // Set margins and add a page
    $pdf->SetMargins(15, 20, 15);
    $pdf->AddPage();

    // Set font
    $pdf->SetFont('helvetica', '', 12);

    // Content
    $html = "
    <h1>Booking Confirmation</h1>
    <p>Thank you, <strong>$name</strong>, for your booking!</p>
    <p><strong>Booking Details:</strong></p>
    <ul>
        <li><strong>Name:</strong> $name</li>
        <li><strong>Mobile Number:</strong> $number</li>
        <li><strong>Event Date:</strong> $date</li>
        <li><strong>Location:</strong> $location</li>
        <li><strong>Catering Required:</strong> " . ($catering == '1' ? 'Yes' : 'No') . "</li>
        <li><strong>Magic Show Required:</strong> " . ($magic == '1' ? 'Yes' : 'No') . "</li>
    </ul>
    <p>We look forward to making your event unforgettable!</p>
    ";

    // Print text
    $pdf->writeHTML($html, true, false, true, false, '');

    // Close and output PDF document
    $pdf->Output('booking_confirmation.pdf', 'D'); // D means download
} else {
    echo "Error: Missing data.";
}
?>
