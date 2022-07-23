<?php
  require_once('connect.php');
  header("Content-type: application/vnd.ms-excel");
  header("Content-Disposition: attachment; filename=Voters_voted_List.xls" );
  header("Expires: 0");
  header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
  header("Pragma: public");
	  
	 ?>

<table>
  <thead>
    <tr>
      <th>FirstName</th>
      <th>LastName</th>
      <th>MiddleName</th>
      <th>UserName</th>
      <th>Year</th>
      <th>Status</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $qryreport = mysqli_query($conn,"SELECT * FROM voters where `Status` ='Voted'") or die(mysqli_error());
	
    $sqlrows=mysqli_num_rows($qryreport);
    WHILE ($reportdisp=mysqli_fetch_array($qryreport)) {
    ?>
    <tr>
      <td><?php echo $reportdisp['FirstName'] ?></td>
      <td><?php echo $reportdisp['LastName'] ?></td>
      <td><?php echo $reportdisp['MiddleName'] ?></td>
      <td><?php echo $reportdisp['Username'] ?></td>
      <td><?php echo $reportdisp['Year'] ?></td>
      <td><?php echo $reportdisp['Status'] ?></td>
    <?php } ?>
  </tbody>
</table>