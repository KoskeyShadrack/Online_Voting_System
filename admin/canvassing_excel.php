<?php
include("dbcon.php");
 header("Content-type: application/vnd.ms-excel");
 header("Content-Disposition: attachment; filename=Canvassing_Report.xls" );
 header("Expires: 0");
 header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
 header("Pragma: public");
?>
<table cellpadding="0" cellspacing="0" border="0" class="display" id="log" class="jtable">
			<thead>
				<tr>
				<th>Position</th>
				<th>LastName</th>
				<th>FirstName</th>
				<th>Year</th>
			
				<th>No. of Votes</th>
				
				</tr>
			</thead>
			<tbody>

<?php $candidate_query=mysqli_query($conn,"SELECT  * from candidate
                                    ORDER BY FIELD(Position,
                                    'Governor',
                                    'Vice-Governor',
                                   '1st Year Representative',
                                    '2nd Year Representative',
                                    '3rd Year Representative',
                                    '4th Year Representative'
                                    ), LastName asc, FirstName asc
                                    ");
		while($candidate_rows=mysqli_fetch_array($candidate_query)){ $id=$candidate_rows['CandidateID'];
		$fl=$candidate_rows['FirstName'];
	
		?>

<tr class="del<?php echo $id ?>">
	<td align="center"><?php echo $candidate_rows['Position']; ?></td>
	<td><?php echo $candidate_rows['LastName']; ?></td>
	<td><?php echo $candidate_rows['FirstName']; ?></td>
	<td align="center"><?php echo $candidate_rows['Year']; ?></td>
	
		<td align="center">
	<?php $votes_query=mysqli_query($conn,"select * from votes where CandidateID='$id'");
	$vote_count=mysqli_num_rows($votes_query);
	echo $vote_count;
	?>
</td>	

	</tr>
<?php } ?>

			</tbody>
		</table>