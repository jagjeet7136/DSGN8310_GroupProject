<?php 
include_once('E:/xampp/htdocs/Jagjeet_Singh_A3/fpdf186/fpdf.php');

$host = "localhost";
$username = "root";
$pass = "";
$db = "jagjeetsingh70";
$conn = mysqli_connect($host, $username, $pass, $db);
if (!$conn) {
    die("Database connection error");
}

class PDF extends FPDF {
    function Header() {
        $this->SetFont('Arial','B',13);
        $this->Cell(190,10,'Course Report',0,1,'C');
        $this->Ln(10);
    }

    function Footer() {
        $this->SetY(-15);
        $this->SetFont('Arial','I',8);
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);

$student_id = 1; // Change this to the desired student ID

$query = "SELECT 
            Course.course_title AS CourseName,
            Enrollment.grade AS Grade,
            CONCAT(Student.first_name, ' ', Student.last_name) AS StudentName
          FROM 
            Enrollment
          INNER JOIN Course ON Enrollment.course_id = Course.course_id
          INNER JOIN Student ON Enrollment.student_id = Student.student_id
          WHERE 
            Enrollment.student_id = $student_id";

$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $pdf->Cell(95, 10, $row['CourseName'], 1);
    $pdf->Cell(95, 10, $row['Grade'], 1);
    $pdf->Ln();
}

$pdf->Output(); // Output PDF
?>
