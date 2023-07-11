<?php
// Path to the pre-generated ticket file
$ticketFile = 'path/to/ticket.pdf';

// Set the appropriate headers for file download
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="seminar_ticket.pdf"');
header('Content-Length: ' . filesize($ticketFile));

// Send the file to the browser for download
readfile($ticketFile);
