<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>App Name - @yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}" media="all">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min.css')}}">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>



  <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="  https://cdn.datatables.net/buttons/1.6.3/css/buttons.bootstrap4.min.css" rel="stylesheet">

  <script src="https://cdn.datatables.net/buttons/1.6.3/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.3/js/buttons.bootstrap4.min.js"></script>
  <script src="/vendor/datatables/buttons.server-side.js"></script>
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  @include('users::partials.header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('users::partials.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    @include('users::partials.breadcrumb')
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      @include('sweetalert::alert')     
      @yield('content')
    </section>
    <!-- /.content -->
  </div>
  @include('users::partials.footer')
  <!-- /.content-wrapper -->

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('assets/js/demo.js') }}"></script>

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script> --}}
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
{{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> --}}
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

{{-- <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.3/css/buttons.dataTables.min.css"> --}}
{{-- <script src="https://cdn.datatables.net/buttons/1.6.3/js/dataTables.buttons.min.js"></script> --}}




<script type="text/javascript">
  $(function () {
     $.fn.dataTable.ext.errMode="javascript";
    var table = $('.item-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('item.index') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'image', name: 'image'},
            {data: 'name', name: 'name'},
            {data:'item_unit_price',name:'item_unit_price'},
            {data: 'created_at', name: 'created_at'},
            {data: 'updated_at', name: 'updated_at'},
            {
                data: 'action',
                name: 'action',
                orderable: true,
                searchable: true
            },

        ]
    });

  });
</script> 

   <script type="text/javascript">

        $(document).ready(function () {

            $("#approveAdmin").on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget)
                var ids=button.data('ids');
                var names = button.data('names');
                var unit_price=button.data('unit');

                var modal=$(this)
                modal.find('.modal-title').text('Update Item');
                modal.find(".modal-body #name ").val(names);
                modal.find(".modal-body #item_unit_price ").val(unit_price);

            });

        });

        $(document).ready( function () {
            $('#itemTable').select2();
        } );
    </script> 


    <script>
       $(document).ready(function(){

         $('#brand').on('show.bs.modal',function (event){

                var button= $(event.relatedTarget)
                var ids=button.data('ids');
                var names = button.data('brandName');

                var modal=$(this)
                modal.find('.modal-title').text('Update Brand');
                modal.find(".modal-body #name").val(names);
         });

       });
    </script>
</body>
</html>

