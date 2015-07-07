<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title></title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/datatable/css/jquery.dataTables.css"></link>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/datatable/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/datatable/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/datatable/js/jquery.dataTables.delay.min.js"></script>
</head>
<body>

<table cellpadding="0" cellspacing="0" border="0" id="data" width="100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
        </tr>
    </thead>
    <tbody></tbody>
    <tfoot></tfoot>
</table>

<script type="text/javascript">
	
	$(document).ready(function() {
		$('#data').dataTable({
			"sScrollY": "400px",
			"bProcessing": true,
	        "bServerSide": true,
	        "sServerMethod": "GET",
	        "sAjaxSource": "<?php echo site_url('welcome/get_table') ?>",
	        "iDisplayLength": 10,
	        "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
	        "aaSorting": [[0, 'asc']],
	        "aoColumns": [
			{ "bVisible": true, "bSearchable": true, "bSortable": true },
				{ "bVisible": true, "bSearchable": true, "bSortable": true },
				{ "bVisible": true, "bSearchable": true, "bSortable": true }
		        ]
		}).fnSetFilteringDelay(700);
	});

</script>
</body>
</html>