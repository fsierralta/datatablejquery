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
        <!-- <script src="{{asset('js/app.js')}}"> </script>-->
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script> 
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
                            dom: 'Bfrtip', 
                            buttons: [
                                     'copy', 'excel', 'pdf'
                                     ]
             

                         });
                 
                 
                });
        </script>

    </body>
</html>
