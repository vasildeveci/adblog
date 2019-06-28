@extends('admin.layouts.app')

@section('main-content')
<div class="content-wrapper">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Title</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="card-body">
      Start creating your amazing application!
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      Footer
    </div>
    <!-- /.card-footer-->
  </div>
    <!-- /.content -->
  </div>

  <script>
    $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      ClassicEditor
        .create(document.querySelector('#editor1'))
        .then(function (editor) {
          // The editor instance
        })
        .catch(function (error) {
          console.error(error)
        })
  
      // bootstrap WYSIHTML5 - text editor
  
      $('.textarea').wysihtml5({
        toolbar: { fa: true }
      })
    })
  </script>
@endsection
