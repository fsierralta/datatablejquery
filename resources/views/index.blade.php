<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
       <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
       <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.18/b-1.5.6/b-colvis-1.5.6/b-html5-1.5.6/b-print-1.5.6/datatables.min.css"/>

    </head>
    <body>

    <table id="example" class="table  table-striped "> 
         
         <thead class="thead-dark">
             <tr>  
                  <td>id</td>  
                  <tD>name </tD>
                  <tD>email</tD>
                  <td>&nbsp;</td>
             </tr>     
         </thead>
       
      </table>

        
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script> 
       
        
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.18/b-1.5.6/b-colvis-1.5.6/b-html5-1.5.6/b-print-1.5.6/datatables.min.js"></script>

        <script>
                $(document).ready(function()
                {
                        $('#example').DataTable({
                              "serverSide":true,
                              "ajax":{
                                  url:"{{url('api/users')}}",
                                                },
                           "columns":[
                                                {data:'id'  } ,
                                                {data:'name'} ,
                                                {data:'email'},
                                                {data:'btn'}  ,
                                       ],
                            "language":{
                                "zeroRecords": "No  hay registro"     

                            }, 
                            

                         });
                 
                 
                });
        </script>

    </body>
</html>
