@extends('layouts.super_admin.app')

@section('style')
<style>

</style>
@endsection

@section('content')
<!-- MAIN CONTENT -->
<div id="content">

  <div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
      <h1 class="page-title txt-color-blueDark">
        <i class="fa fa-pencil-square-o fa-fw "></i>
          Master {{ $title }}
      </h1>
    </div>
  </div>

  <!-- widget grid -->
  <section id="widget-grid" class="">

    <!-- row -->
    <div class="row">

      <!-- NEW WIDGET START -->
      <article class="col-sm-12 col-md-12 col-lg-12">

        <!-- Widget ID (each widget will need unique ID)-->
        <div class="jarviswidget" id="wid-id-0" data-widget-colorbutton="false" data-widget-editbutton="false">
          <!-- widget options:
          usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

          data-widget-colorbutton="false"
          data-widget-editbutton="false"
          data-widget-togglebutton="false"
          data-widget-deletebutton="false"
          data-widget-fullscreenbutton="false"
          data-widget-custombutton="false"
          data-widget-collapsed="true"
          data-widget-sortable="false"

          -->
          <header>
            <span class="widget-icon"> <i class="fa fa-send"></i> </span>
            <h2>Tambah {{ $title }}</h2>

          </header>

          <!-- widget div-->
          <div>

            <!-- widget edit box -->
            <div class="jarviswidget-editbox">
              <!-- This area used as dropdown edit box -->

            </div>
            <!-- end widget edit box -->

            <!-- widget content -->
            <div class="widget-body">
                <form id="formAdd" method="post" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                {{ csrf_field() }} {{ method_field('POST') }}
                <fieldset>

                  <div class="form-group">
                    <label class="col-md-2 control-label">Nama {{ $title }}</label>
                    <div class="col-md-7">
                      <input class="form-control" name="name" placeholder="Masukkan Nama {{ $title }}" type="text" autofocus required maxlength="50">
                      <span class="help-block with-errors"></span>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-2 control-label">Email {{ $title }}</label>
                    <div class="col-md-7">
                      <input class="form-control" name="email" placeholder="Masukkan Email {{ $title }}" type="email" required maxlength="50">
                      <span class="help-block with-errors"></span>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-2 control-label">No KTP</label>
                    <div class="col-md-7">
                      <input class="form-control" name="no_ktp" placeholder="Masukkan No KTP {{ $title }}" type="number" maxlength="99999999999999999999">
                      <span class="help-block with-errors"></span>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-2 control-label">No Telepon</label>
                    <div class="col-md-7">
                      <input class="form-control" name="telepon" placeholder="Masukkan Telepon {{ $title }}" type="text" maxlength="20">
                      <span class="help-block with-errors"></span>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-2 control-label">Alamat</label>
                    <div class="col-md-7">
                      <input class="form-control" name="alamat" placeholder="Alamat" type="text" maxlength="50">
                      <span class="help-block with-errors"></span>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-2 control-label">Password</label>
                    <div class="col-md-7">
                      <input class="form-control" name="password" placeholder="Masukkan Password" type="password" required maxlength="50">
                      <span class="help-block with-errors"></span>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-2 control-label">Confirm Password</label>
                    <div class="col-md-7">
                      <input class="form-control" name="confirm_password" placeholder="Masukkan Confirm Passowrd" type="password" required maxlength="50">
                      <span class="help-block with-errors"></span>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-2 control-label">PIN</label>
                    <div class="col-md-2">
                      <input class="form-control" name="pin" placeholder="Masukkan PIN Anda" type="password" required minlength="6" maxlength="6">
                      <span class="help-block with-errors"></span>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-2 control-label">PIN Confirm</label>
                    <div class="col-md-2">
                      <input class="form-control" name="confirm_pin" placeholder="Masukkan PIN Confirm Anda" type="password" required minlength="6" maxlength="6">
                      <span class="help-block with-errors"></span>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-2 control-label">Hak Akses </label>
                    <div class="col-md-2">
                      <select class="select2" name="id_role" style="width:100%;"></select>
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="col-md-2 control-label">Status</label>
                    <div class="col-md-10">
                      <label class="radio radio-inline">
                        <input type="radio" value="A" class="radiobox" name="isactive" checked>
                        <span>Aktif</span>
                      </label>
                      <label class="radio radio-inline">
                        <input type="radio" value="N" class="radiobox" name="isactive">
                        <span>Non Aktif</span>
                      </label>
                    </div>
                  </div>
                </fieldset>

                <div class="form-actions">
                  <div class="row">
                    <div class="col-md-12">
                      <a id="btnResetAdd" class="btn btn-default">
                        Batal
                      </a>
                      <button id="btnAdd" type="submit" class="btn btn-primary">
                        <i class="fa fa-save"></i>
                        Simpan
                      </button>
                    </div>
                  </div>
                </div>

              </form>

            </div>
            <!-- end widget content -->

          </div>
          <!-- end widget div -->

        </div>
        <!-- end widget -->

      </article>
      <!-- WIDGET END -->

    </div>

    <!-- end row -->

    <!-- row -->
    <div class="row">

      <!-- NEW WIDGET START -->
      <article class="col-sm-12 col-md-12 col-lg-12">

        <!-- Widget ID (each widget will need unique ID)-->
        <div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-3" data-widget-editbutton="false">
          <!-- widget options:
          usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

          data-widget-colorbutton="false"
          data-widget-editbutton="false"
          data-widget-togglebutton="false"
          data-widget-deletebutton="false"
          data-widget-fullscreenbutton="false"
          data-widget-custombutton="false"
          data-widget-collapsed="true"
          data-widget-sortable="false"

          -->
          <header>
            <span class="widget-icon"> <i class="fa fa-table"></i> </span>
            <h2>List Data {{ $title }}</h2>

          </header>

          <!-- widget div-->
          <div>

            <!-- widget edit box -->
            <div class="jarviswidget-editbox">
              <!-- This area used as dropdown edit box -->

            </div>
            <!-- end widget edit box -->

            <!-- widget content -->
            <div class="widget-body">

              <table id="{{$tag}}-table" class="table table-striped table-bordered table-hover" width="100%">
                <thead>
                  <tr>
                    <th data-hide="phone">Kode</th>
                    <th data-class="expand">Nama {{ $title }}</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th data-hide="phone">Action</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>

            </div>
            <!-- end widget content -->

          </div>
          <!-- end widget div -->

        </div>
        <!-- end widget -->


      </article>
      <!-- WIDGET END -->

    </div>

    <!-- end row -->

  </section>
  <!-- end widget grid -->

</div>

@include('setting.userGeneral');

<!-- END MAIN CONTENT -->
@endsection

@section('script')
<script>
var tag   = '{{$tag}}';
var table = $('#'+tag+'-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('user.api') }}",
                columns: [
                  {data: 'id', name: 'id'},
                  {data: 'name', name: 'name'},
                  {data: 'email', name: 'email'},
                  {data: 'isactive', name: 'isactive'},
                  {data: 'action', name: 'action', orderable: false, searchable: false}
                ]
              });

function editData(id) {
  save_method = 'edit';
  $('input[name=_method]').val('PATCH');
  $('#modalEdit form')[0].reset();
  $.ajax({
    url: "{{ url('user') }}" + '/' + id + "/edit",
    type: "GET",
    dataType: "JSON",
    success: function(data) {
      $('#modalEdit').modal('show');
      $('.modal-title').text('Edit User ');
      $('#id_hidden').val(data.id);
      $('#id_edit').val(data.index);
      $('#name_edit').val(data.name);
      $('#email_edit').val(data.email);
      $('#ktp_edit').val(data.ktp);
      $('#telp_edit').val(data.telp);
      $('#alamat_edit').val(data.alamat);
      if (data.role == 'SA') {
        $('#isactive_edit_sa').prop('checked',true);
      } else if (data.role == 'A') {
        $('#isactive_edit_a').prop('checked',true);
      } else if (data.role == 'KP') {
        $('#isactive_edit_kp').prop('checked',true);
      } else {
        $('#isactive_edit_k').prop('checked',true);
      }

      if (data.isactive == 'A') {
        $('#isactive_edit_a').prop('checked',true);
      } else {
        $('#isactive_edit_n').prop('checked',true);
      }
    },
    error : function() {
      swal({
          title: 'Oops...',
          text: 'Nothing Data',
          type: 'error',
          timer: '1500'
      });
    }
  });
}

function deleteData(id){
    var csrf_token = $('meta[name="csrf-token"]').attr('content');
    swal({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        cancelButtonColor: '#d33',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.value) {
          $.ajax({
              url : "{{ url('user') }}" + '/' + id,
              type : "POST",
              data : {'_method' : 'DELETE', '_token' : csrf_token},
              success : function(data) {
                  table.ajax.reload();
                  swal({
                      title: 'Success!',
                      text: data.message,
                      type: 'success',
                      timer: '1500'
                  })
              },
              error : function () {
                  swal({
                      title: 'Oops...',
                      text: data.message,
                      type: 'error',
                      timer: '1500'
                  })
              }
          });
        }
    });
  }

$(function(){
      $('#btnResetAdd').on('click', function (e) {
        $('#formAdd')[0].reset();
      });

      $('#formAdd').validator().on('submit', function (e) {
        $('input[name=_method]').val('POST');
          if (!e.isDefaultPrevented()){
              var id = $('#id').val();
              url = "{{ url('user') }}";

              $.ajax({
                  url : url,
                  type : "POST",
                  data : $('#formAdd').serialize(),
                  success : function(data) {
                      table.ajax.reload();
                      $('#formAdd')[0].reset();
                      if (data.status == true) {
                        swal({
                          title: 'Success!',
                          text: data.message,
                          type: 'success',
                          timer: '1500'
                        });
                        $('#id').val(data.newid);
                        $('#name').focus();
                      } else {
                        swal({
                            title: 'Oops...',
                            text: data.message,
                            type: 'error',
                            timer: '1500'
                        });
                        $('#id').val(id);
                        $('#name').focus();
                      }
                  },
                  error : function(data){
                      swal({
                          title: 'Oops...',
                          text: data.message,
                          type: 'error',
                          timer: '1500'
                      })
                  }
              });
              return false;
          }
      });

      $('#modalEdit form').validator().on('submit', function (e) {
          if (!e.isDefaultPrevented()){
              var id = $('#id_edit').val();
              url = "{{ url('user') . '/' }}" + id;

              $.ajax({
                  url : url,
                  type : "POST",
                  data : $('#modalEdit form').serialize(),
                  success : function(data) {
                      $('#modalEdit').modal('hide');
                      table.ajax.reload();
                      swal({
                          title: 'Success!',
                          text: data.message,
                          type: 'success',
                          timer: '1500'
                      })
                  },
                  error : function(data){
                      swal({
                          title: 'Oops...',
                          text: data.message,
                          type: 'error',
                          timer: '1500'
                      })
                  }
              });
              return false;
          }
      });

      $('[name=id_role]').select2({
          ajax: {
            url: baseurl+'/role_get',
            delay:250,
            data: function (params) {
              var query = {
                search: params.term,
                type: 'public'
              }
              return query;
            },
            processResults: function (data) {
              return {
                results: data
              };
            }
          }
        });

  });
</script>
@endsection
