

<html>

<style>
.site_body{
    margin: 0;
    pading: 0;
    color: #fff;
    background: repeat #1b1b1b;
    font-size: 14px;
    text-shadow: #050505 0 -1px 0;
    font-weight: bold;
	margin-left: 875px;


}

#admin_footer {
    color: #fff;
    background: #204562;
    border-top: 1px solid #1d3b53;
    padding-left: 20px;
    /* margin-top: 602px; */
    height: 40px;
    line-height: 35px;
    margin-bottom: 0px;
    font-weight: normal;
}
</style>
<body>
    
     <div  id="admin_footer" style=" margin-top: -10px;margin-bottom: 10px; margin-left: -10px;">Highchart With Php and Mysql </div>

    <div class="">
        <table id="example" class="display" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Name</th>
                <th>Subject</th>
                <th>Mark</th>
               
            </tr>
        </thead>
 
        <tfoot>
            <tr>
               <th>Name</th>
                <th>Subject</th>
                <th>Mark</th>
                
            </tr>
        </tfoot>
    </table>
    </div>
    
<head>
    
    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="css/jquery.datatables.css">
 
<!-- jQuery -->
<script type="text/javascript" charset="utf8" src="js/jquery-1.8.2.min.js"></script>
 
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="js/jquery.dataTables.min.js"></script>
<script>
    $( document ).ready(function() {
$('#example').dataTable({
                 "bProcessing": true,
                 "sAjaxSource": "data.php",
                 "aoColumns": [
                        { mData: 'name' } ,
                        { mData: 'subject' },
                        { mData: 'mark' }
                ]
        });   
});
    </script>
    
</head>   
     <div  id="admin_footer" style=" margin-top: 240px;margin-left: -10px;">Copyright By www.browsecookies.blogspot.in @ All Rights Reserved.<a href="www.browsecookies.blogspot.in">Click</a> </div>

</body>

</html>

