<?php
require './pdf/fpdf.php' ;// Include the FPDF library

// Create a PDF object
$pdf = new FPDF();
$pdf->AddPage();

// Set font and font size
$pdf->SetFont('Arial', '', 12);

// Define the content of the PDF
$content = "
A Simple PDF File
This is a small demonstration .pdf file -
just for use in the Virtual Mechanics tutorials. More text. And more
text. And more text. And more text. And more text.
And more text. And more text. And more text. And more text. And more
text. And more text. Boring, zzzzz. And more text. And more text. And
more text. And more text. And more text. And more text. And more text.
And more text. And more text.
And more text. And more text. And more text. And more text. And more
text. And more text. And more text. Even more. Continued on page 2 ...
Simple PDF File 2
...continued from page 1. Yet more text. And more text. And more text.
And more text. And more text. And more text. And more text. And more
text. Oh, how boring typing this stuff. But not as boring as watching
paint dry. And more text. And more text. And more text. And more text.
Boring. More, a little more text. The end, and just as well.
";

// Set the file path for the PDF
$pdfFilePath = $_SERVER['DOCUMENT_ROOT'] . '/sample.pdf';

// Add the text content to the PDF
$pdf->MultiCell(0, 10, $content);

// Output the PDF to the specified file path
$pdf->Output($pdfFilePath, 'F'); // 'F' means save to a file

// Display a success message
echo "PDF created successfully!";