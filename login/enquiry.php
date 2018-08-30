<!DOCTYPE html>
<html>
<head>
    <title></title>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css">

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.colVis.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'copyHtml5',
                        exportOptions: {
                            columns: [ 0, ':visible' ]
                        }
                    },
                    {
                        extend: 'excelHtml5',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'pdfHtml5',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    'colvis'
                ]
            } );
        } );
    </script>
</head>
<body>
<?php include 'header.php';?>
<h1>Enquiry List</h1>
<table id="example" class="display" style="width:100%">
    <thead>
    <tr>
        <th>Client Name</th>
        <th>Mobile</th>
        <th>Email</th>
        <th>Enquiry</th>
        <th>Send Message</th>

    </tr>
    </thead>
    <tbody>
    <?php
    include 'connect.php';
    // session_start();
    $qry="select * from tblenquiry";
    if($check = mysqli_query($conn,$qry)){
        while($value2 = mysqli_fetch_assoc($check)){ ?>

            <tr>
                    <td><?php echo $value2['name'];?></td>
                <td><?php echo $value2['mobile'];?></td>
                <td><?php echo $value2['email'];?></td>
                <td><?php echo $value2['course'];?></td>
                <td><button type="button" class="btn btn-primary">Send Message</button></td>
                <td><form method="post" action="../payment.php">
            </tr>
        <?php }}?>

    </tfoot>
</table>
</body>
</html>