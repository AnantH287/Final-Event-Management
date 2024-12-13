<?php
require_once('TCPDF-main/tcpdf.php');
session_start();

// Retrieve session data (ensure these match the ones set after booking)
$name = $_SESSION['marriage_name'];
$number = $_SESSION['marriage_number'];
$location = $_SESSION['marriage_location'];
$date = $_SESSION['eventdate'];
$venue = $_SESSION['marriage_venue'];
$catering = $_SESSION['marriage_catering'];
$photo = $_SESSION['marriage_photo'];

// Create new PDF document
$pdf = new TCPDF();
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Your Company Name');
$pdf->SetTitle('Wedding Booking Confirmation');

// Add a page
$pdf->AddPage();
$pdf->SetFont('helvetica', '', 12);

// Content
$html = "
<h1>Wedding Booking Confirmation</h1>
<p>Thank you, <strong>$name</strong>, for booking your wedding with us!</p>
<p><strong>Booking Details:</strong></p>
<ul>
    <li><strong>Name:</strong> $name</li>
    <li><strong>Mobile Number:</strong> $number</li>
    <li><strong>Location:</strong> $location</li>
    <li><strong>Event Date:</strong> $date</li>
    <li><strong>Venue:</strong> $venue</li>
    <li><strong>Catering Required:</strong> " . ($catering == '1' ? 'Yes' : 'No') . "</li>
    <li><strong>Photography Required:</strong> " . ($photo == '1' ? 'Yes' : 'No') . "</li>
</ul>
<p>We look forward to making your special day unforgettable!</p>
";

// Print text
$pdf->writeHTML($html, true, false, true, false, '');

// Close and output PDF
$pdf->Output('wedding_confirmation.pdf', 'D'); // D for download
?>
