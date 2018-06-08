<?php
header("Content-type: application/pdf");
header("Content-Disposition: inline; filename=Resume Updated.pdf");
@readfile('Resume Updated.pdf');
?>
