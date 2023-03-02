<!DOCTYPE html>
<html>

<head>
	<title>Links</title>
	<link rel="stylesheet" href="./style.css">
</head>

<body>

	<?php

	$doc = "";

	$excel = "";

	$ppt = "";

	$pdf = "";

	?>
	<h2> Dynamic Links</h2>

	<a href="<?php $doc = 'doc.pdf' ?>"></a>

	<?php
	if ($doc == "doc.doc") {
		echo "<div class=div1>";
		echo '<img  src="Images/doc.jpeg">';
		echo '<a href="#">DOC</a>';
		echo "</div>";
	} elseif ($doc == "doc.xlsx") {
		echo "<div class=div1";
		echo '<img src="Images/excel.jpeg">';
		echo '<a href="#">Excel</a>';
		echo "</div>";
	} elseif ($doc == "doc.ppt") {
		echo "<div class=div1>";
		echo '<img  src="Images/ppt.jpeg">';
		echo '<a href="#">PPT</a>';
		echo "</div>";
	} elseif ($doc == "doc.pdf") {
		echo "<div class=div1>";
		echo '<img  src=" Images/pdf.jpeg">';
		echo '<a href="#">PDF</a>';
		echo "</div>";
	}
	?>



	<a href="<?php $excel = 'excel.xlsx' ?>"></a><br>

	<?php
	if ($excel == "excel.doc") {
		echo "<div class=div1>";
		echo '<img src="Images/doc.jpeg">';
		echo '<a href="#"> DOC</a>';
		echo "</div>";
	} elseif ($excel == "excel.xlsx") {
		echo "<div class=div1>";
		echo '<img src="Images/excel.jpeg">';
		echo '<a href="#"> Excel</a>';
		echo "</div>";
	} elseif ($excel == "excel.ppt") {
		echo "<div class=div1>";
		echo '<img src="Images/ppt.jpeg">';
		echo '<a href="#"> PPT</a>';
		echo "</div>";
	} elseif ($excel == "excel.pdf") {
		echo "<div class=div1>";
		echo '<img src="Images/pdf.jpeg">';
		echo '<a href="#"> PDF</a>';
		echo "</div>";
	}
	?>


	<a href="<?php $ppt = 'ppt.doc' ?>"></a><br>

	<?php
	if ($ppt == "ppt.doc") {
		echo "<div class=div1>";
		echo '<img src="Images/doc.jpeg">';
		echo '<a href="#"> DOC</a>';
		echo "</div>";
	} elseif ($ppt == "ppt.xlsx") {
		echo "<div class=div1>";
		echo '<img src="Images/excel.jpeg">';
		echo '<a href="#"> Excel</a>';
		echo "</div>";
	} elseif ($ppt == "ppt.ppt") {
		echo "<div class=div1>";
		echo '<img src="Images/ppt.jpeg">';
		echo '<a href="#"> PPT</a>';
		echo "</div>";
	} elseif ($ppt == "ppt.pdf") {
		echo "<div class=div1>";
		echo '<img src="Images/pdf.jpeg">';
		echo '<a href="#"> PDF</a>';
		echo "</div>";
	}
	?>

	<a href="<?php $pdf = 'pdf.ppt' ?>"></a><br>

	<?php
	if ($pdf == "pdf.doc") {
		echo "<div class=div1>";
		echo '<img src="Images/doc.jpeg">';
		echo '<a href="#"> DOC</a>';
		echo "</div>";
	} elseif ($pdf == "pdf.xlsx") {
		echo "<div class=div1>";
		echo '<img src="Images/excel.jpeg">';
		echo '<a href="#"> Excel</a>';
		echo "</div>";
	} elseif ($pdf == "pdf.ppt") {
		echo "<div class=div1>";
		echo '<img src="Images/ppt.jpeg">';
		echo '<a href="#"> PPT</a>';
		echo "</div>";
	} elseif ($pdf == "pdf.pdf") {
		echo "<div class=div1>";
		echo '<img src="Images/pdf.jpeg">';
		echo '<a href="#"> PDF</a>';
		echo "</div>";
	}
	?>

</body>

</html>