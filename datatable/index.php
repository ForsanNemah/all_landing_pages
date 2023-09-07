

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
  
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>



<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">





<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Extn.</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Extn.</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
    </table>





    <script>




//alert("wwe");


new DataTable('#example', {
    ajax: 'objects.txt',
    columns: [
        { data: 'name' },
        { data: 'position' },
        { data: 'office' },
        { data: 'extn' },
        { data: 'start_date' },
        { data: 'salary' }
    ]
});


    </script>