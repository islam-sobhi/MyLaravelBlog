@extends('layouts.app') @section('content')
<div class="container">
  <div class="row">



    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-table"></i> welcome to posts </div>
      <div class="card-body">

        <div class="table-responsive">
          <table border="0" class="table table-striped table-bordered table-hover " id="example">
            <thead>
              <tr class="table-primary" style="text-align:center;color:white;margin-left:150px;">

                <th style="width: 30px;">No.</th>
                <th style="width: 30px;">Image</th>
                <th>Title</th>
                <th>Author</th>
                <th>created At</th>
                <th>Updated At</th>
                <th>Action</th>
              </tr>
            </thead>
            <tfoot>
              <tr class="text-center">
                <th>No.</th>
                <th>Image</th>
                <th>Title</th>
                <th>Author</th>
                <th>created At</th>
                <th>Updated At</th>
                <th>Action</th>
              </tr>
            </tfoot>
            <tbody>



              @if ($posts->count()>0 )
               @foreach ($posts as $index=>$post)
              <tr class="text-center">
                <td>{{$index +1}}</td>
                <td>
                  <img src="{{$post->featured}}" class="rounded mx-auto d-block" alt="..." height="100px" width="150px">
                </td>
                <td>{{$post->title}}</td>
                <td></td>
                <td>{{$post->created_at}}</td>
                <td>{{$post->updated_at}}</td>
                <td>



                  <a class="btn btn-success rounded float-left" href="{{route('post.edit',['id'=>$post->id])}}" data-method="delete" rel="nofollow"
                    data-confirm="Are you sure you want to edit this?">
                    <i class="fas fa-edit		"></i> Edit </a>


                  <a class="btn btn-danger  rounded float-left" href="{{route('post.delete',['id'=>$post->id])}}" data-method="delete" rel="nofollow"
                    data-confirm="Are you sure you want to delete this?">
                    <i class="fas fa-trash-alt	"></i> Delete</a>

                </td>

              </tr>
              @endforeach @else @endif
            </tbody>
          </table>
        </div>
      </div>
      <div class="card-footer small text-muted">
        <h5>Last Updated {{$last_post->created_at->diffForHumans()}}</h5>
      </div>
    </div>
  </div>

  <button onclick="tableToExcel('example', 'W3C Example Table')">Export</button>
</div>

</div>





<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/dataTables/jquery.dataTables.js"></script>
<script src="/js/dataTables/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
} );

</script> 
<script type="text/javascript">
var tableToExcel = (function() {
  var uri = 'data:application/vnd.ms-excel;base64,'
    , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
    , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
    , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
  return function(table, name) {
    if (!table.nodeType) table = document.getElementById(table)
    var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
    window.location.href = uri + base64(format(template, ctx))
  }
})()
</script>
@endsection