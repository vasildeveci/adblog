@extends('admin.layouts.app')

@section('main-content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Text Editors</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Text Editors</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-info card-outline">
            <div class="card-header">
              <h3 class="card-title">
                CKEditor5
                <small>Advanced and full of features</small>
              </h3>
              <!-- tools box -->
              <div class="card-tools">
                <button type="button" class="btn btn-tool btn-sm"
                        data-widget="collapse"
                        data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form role="form">
                    <div class="row">
                            <div class="col-lg-6">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="title">Post Başlığı</label>
                                            <input type="text" class="form-control" id="title" name="title" placeholder="Başlık yazın">
                                        </div>
                                        <div class="form-group">
                                            <label for="subtitle">Özet</label>
                                            <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Özet yazın">
                                        </div>
                                        <div class="form-group">
                                            <label for="slug">Post Slug</label>
                                            <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug yazın">
                                        </div>
                                    </div>                        
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="image">Resim</label>
                                    <input type="file" class="form-control" id="image" name="image">
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="checkbox">
                                    <label class="form-check-label" for="checkbox" name="status">Yayınla</label>
                                </div>
                                </div>
                    </div>
                    
                    
                    <div class="mb-3">
                        <textarea id="editor1" name="body" style="width: 100%">This is my textarea to be replaced with CKEditor.</textarea>
                    </div>
                    <p class="text-sm mb-0">Please adhere to the <a href="https://ckeditor.com/ckeditor-5-builds/#classic">CKEditor</a>
                                    license when using it!</p>
                        <!-- /.card-body -->            
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Kaydet</button>
                        </div>
                    </form>  
            </div>
          </div>
          <!-- /.card -->

          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                <small></small>
              </h3>
              <!-- tools box -->
              <div class="card-tools">
                <button type="button" class="btn btn-tool btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
              <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body pad">
              <div class="mb-3">
                <textarea class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              </div>
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
@endsection