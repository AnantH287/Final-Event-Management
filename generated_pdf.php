<?php
session_start(); 
require_once('TCPDF-main/tcpdf.php'); 

// Ensure all required data is available
if (isset($_POST['name'], $_POST['number'], $_POST['date'], $_POST['location'], $_POST['catering'], $_POST['photography'])) {
    $name = $_POST['name'];
    $number = $_POST['number'];
    $date = $_POST['date']; // Corrected from 'eventdate' to 'date'
    $location = $_POST['location'];
    $catering = $_POST['catering'];
    $photography = $_POST['photography'];

    // Initialize TCPDF
    $pdf = new TCPDF();
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Your Company Name');
    $pdf->SetTitle('Booking Confirmation');
    $pdf->SetSubject('Booking Confirmation');
    $pdf->SetKeywords('TCPDF, PDF, booking, confirmation');

    // Add Page and margins
    $pdf->SetMargins(15, 20, 15);
    $pdf->AddPage();

    // Set font and prepare content
    $pdf->SetFont('helvetica', '', 12);

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
        <li><strong>Photography Required:</strong> " . ($photography == '1' ? 'Yes' : 'No') . "</li>
    </ul>
    <p>We look forward to making your event unforgettable!</p>
    ";

    // Write content to the PDF
    $pdf->writeHTML($html, true, false, true, false, '');

    // Send PDF as a download
    $pdf->Output('Booking_Confirmation_' . $name . '.pdf', 'D'); // 'D' forces download
} else {
    // Provide a meaningful error message
    die("Error: Missing required form data.");
}
?>
