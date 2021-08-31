@extends('layouts.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                    <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Sender A2P</h3>
                                    <div class="right">
                                        <a href="/a2p/export" class="btn btn-sm btn-primary">Export XLS</a>
                                    <a href="#" type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#importa2p">
                                         Import XLS
                                    </a>
                                    <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal">
                                    <a class="btn btn-warning btn-sm">Tambah Data</a></button>
								</div>
                                </div>
                                        <form class="navbar-form navbar-left" method="GET" action="/a2p">
                                        <div class="input-group">
                                        <input name="cari1" type="text"  class="form-control" placeholder="Search Costumer...">
                                        <span class="input-group-btn"><button type="submit" class="btn btn-primary">Go</button></span>
                                        </div>
                                        </form>

                                        <form class="navbar-form navbar-left" method="GET" action="/a2p">
                                        <div class="input-group">
                                        <input name="cari2" type="text"  class="form-control" placeholder="Search Operator...">
                                        <span class="input-group-btn"><button type="submit" class="btn btn-primary">Go</button></span>
                                        </div>
                                        </form>

                                        <form class="navbar-form navbar-left" method="GET" action="/a2p">
                                        <div class="input-group">
                                        <input name="cari3" type="text"  class="form-control" placeholder="Search Sender...">
                                        <span class="input-group-btn"><button type="submit" class="btn btn-primary">Go</button></span>
                                        </div>
                                        </form>

                                        <form class="navbar-form navbar-left" method="GET" action="/a2p">
                                        <div class="input-group">
                                        <input name="cari4" type="text"  class="form-control" placeholder="Search Terminasi...">
                                        <span class="input-group-btn"><button type="submit" class="btn btn-primary">Go</button></span>
                                        </div>
                                        </form>


								<div class="panel-body">
                                    
									<table class="table table-hover" id="datatable">
										<thead>
											<tr>
                                            <th>SOURCE</th>
                                            <th>ASAL</th>
                                            <th>COSTUMER</th>
                                            <th>SMSC</th>
                                            <th>LINK</th>
                                            <th>OPERATOR</th>
                                            <th>SENDER</th>
                                            <th>TERMINASI</th>
                                            <th>TIPE TERMINASI</th>
                                            <th>SID</th>
                                            <th>STATUS TERMINASI</th>
                                            <th>TANGGAL DIBUAT</th>
                                            <th>TANGGAL UPDATE</th>
                                            <th>AKSI</th>
											</tr>
										</thead>
										<tbody>
                                        @foreach($data_a2p as $a2p)
                                            <tr>
                                            <td>{{$a2p->source}}</td>
                                            <td>{{$a2p->asal}}</td>
                                            <td>{{$a2p->costumer}}</td>
                                            <td>{{$a2p->SMSC}}</td>
                                            <td>{{$a2p->link}}</td>
                                            <td>{{$a2p->operator}}</td>
                                            <td>{{$a2p->sender}}</td>
                                            <td>{{$a2p->terminasi}}</td>
                                            <td>{{$a2p->tipe_terminasi}}</td>
                                            <td>{{$a2p->SID}}</td>
                                            <td>{{$a2p->status_terminasi}}</td>
                                            <td>{{$a2p->created_at}}</td>
                                            <td>{{$a2p->updated_at}}</td>
                                            <td>
                                        <a href="/a2p/{{$a2p->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="#" class="btn btn-danger btn-sm delete" a2p-id="{{$a2p->id}}">Delete</a>
                                        </td>
                                        </tr>
                                        @endforeach
										</tbody>
									</table>
                                        
								</div>
							</div>
                    </div>
                </div>    
            </div>
        </div>
    </div>
    <!-- Modal Import-->
            <div class="modal fade" id="importa2p" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('a2p.import')}}" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                     
                     {{csrf_field()}}
                     <div class="form-group">
                         <input type="file" name="file" required="required">
                    </div>
               
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Import</button>
                </div>
                </div>
                </form>
            </div>
            </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Sender</h5>
        
      <div class="modal-body">
      <form action="/a2p/create" method="POST">
      {{csrf_field()}}
            <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">SOURCE</label>
                <input name="source" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="SOURCE"
                value="{{old('source')}}">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">ASAL</label>
                <input name="asal" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ASAL"
                value="{{old('asal')}}">
            </div>

            <div class="form-group{{$errors->has('costumer') ? 'has-error' : ''}}">
                <label for="exampleInputEmail1" class="form-label">COSTUMER</label>
                <input name="costumer" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="COSTUMER"
                value="{{old('costumer')}}">
                @if($errors->has('costumer'))
                    <span class="help-block">{{$errors->first('costumer')}}</span>
                @endif
            </div>

            <div class="form-group{{$errors->has('SMSC') ? 'has-error' : ''}}">
                <label for="exampleInputEmail1" class="form-label">SMSC</label>
                <input name="SMSC" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="SMSC"
                value="{{old('SMSC')}}">
                @if($errors->has('SMSC'))
                    <span class="help-block">{{$errors->first('SMSC')}}</span>
                @endif
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">LINK</label>
                <input name="link" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="LINK"
                value="{{old('link')}}">
            </div>

            <div class="form-group{{$errors->has('operator') ? 'has-error' : ''}}">
                <label for="exampleInputEmail1" class="form-label">OPERATOR</label>
                <input name="operator" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="OPERATOR"
                value="{{old('operator')}}">
                @if($errors->has('operator'))
                    <span class="help-block">{{$errors->first('operator')}}</span>
                @endif
            </div>

            <div class="form-group{{$errors->has('sender') ? 'has-error' : ''}}">
                <label for="exampleInputEmail1" class="form-label">SENDER</label>
                <input name="sender" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="SENDER"
                value="{{old('sender')}}"> 
                @if($errors->has('sender'))
                    <span class="help-block">{{$errors->first('sender')}}</span>
                @endif
            </div>

            <div class="form-group{{$errors->has('terminasi') ? 'has-error' : ''}}">
                <label for="exampleInputEmail1" class="form-label">TERMINASI</label>
                <input name="terminasi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="TERMINASI"
                value="{{old('terminasi')}}">
                @if($errors->has('terminasi'))
                    <span class="help-block">{{$errors->first('terminasi')}}</span>
                @endif
            </div>

            <div class="form-group{{$errors->has('tipe_terminasi') ? 'has-error' : ''}}">
                <label for="exampleInputEmail1" class="form-label">TIPE TERMINASI</label>
                <input name="tipe_terminasi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="TIPE TERMINASI"
                value="{{old('tipe_terminasi')}}">
                @if($errors->has('tipe_terminasi'))
                    <span class="help-block">{{$errors->first('tipe_terminasi')}}</span>
                @endif
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">SID</label>
                <input name="SID" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="SID" 
                value="{{old('SID')}}">
            </div>

            <div class="form-group{{$errors->has('status_terminasi') ? 'has-error' : ''}}">
                <label for="exampleInputEmail1" class="form-label">STATUS TERMINASI</label>
                <input name="status_terminasi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="STATUS TERMINASI"
                value="{{old('status_terminasi')}}">
                @if($errors->has('status_terminasi'))
                    <span class="help-block">{{$errors->first('status_terminasi')}}</span>
                @endif
            </div>     

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    </div>
  </div>
@stop

@section('footer')
<script>
        $(document).ready(function(){
            $('#datatable').DataTable();
        $('.delete').click(function(){
           var a2p_id = $(this).attr('a2p-id');
                        swal({
                title: "Apakah Anda Yakin?",
                text: "Setelah dihapus , data tidak dapat kembali lagi! "+a2p_id+" ",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                    console.log(willDelete);
                if (willDelete) {
                    window.location = "/a2p/"+a2p_id+"/delete";
         
                }
            });
        });
    });
    </script>
@stop