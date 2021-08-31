@extends('layouts.master')

@section('content')
<div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                    <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Edit Data Sender A2P</h3>
								</div>
								<div class="panel-body">
                                <form action="/a2p/{{$a2p->id}}/update" method="POST">
      {{csrf_field()}}
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">SOURCE</label>
                <input name="source" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="SOURCE" value="{{$a2p->source}}">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">ASAL</label>
                <input name="asal" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ASAL" value="{{$a2p->asal}}">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">COSTUMER</label>
                <input name="costumer" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="COSTUMER" value="{{$a2p->costumer}}">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">SMSC</label>
                <input name="SMSC" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="SMSC" value="{{$a2p->SMSC}}">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">LINK</label>
                <input name="link" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="LINK" value="{{$a2p->link}}">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">OPERATOR</label>
                <input name="operator" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="OPERATOR" value="{{$a2p->operator}}">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">SENDER</label>
                <input name="sender" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="SENDER" value="{{$a2p->sender}}"> 
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">TERMINASI</label>
                <input name="terminasi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="TERMINASI" value="{{$a2p->terminasi}}">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">TIPE TERMINASI</label>
                <input name="tipe_terminasi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="TIPE TERMINASI" value="{{$a2p->tipe_terminasi}}">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">SID</label>
                <input name="SID" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="SID" value="{{$a2p->SID}}">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">STATUS TERMINASI</label>
                <input name="status_terminasi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="STATUS TERMINASI" value="{{$a2p->status_terminasi}}">
            </div>
            <button type="submit" class="btn btn-warning">Update</button>
            </form>
								</div>
							</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('content1')
        <h1>Edit Data Sender A2p</h1>
        @if(session('sukses'))
        <div class="alert alert-success" role="alert">
            {{session('sukses')}} 
        </div>
        @endif
        <div class = "row">
            <div class="col-lg-12">
        <form action="/a2p/{{$a2p->id}}/update" method="POST">
      {{csrf_field()}}
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">SOURCE</label>
                <input name="source" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="SOURCE" value="{{$a2p->source}}">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">ASAL</label>
                <input name="asal" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ASAL" value="{{$a2p->asal}}">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">COSTUMER</label>
                <input name="costumer" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="COSTUMER" value="{{$a2p->costumer}}">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">SMSC</label>
                <input name="SMSC" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="SMSC" value="{{$a2p->SMSC}}">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">LINK</label>
                <input name="link" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="LINK" value="{{$a2p->link}}">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">OPERATOR</label>
                <input name="operator" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="OPERATOR" value="{{$a2p->operator}}">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">SENDER</label>
                <input name="sender" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="SENDER" value="{{$a2p->sender}}"> 
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">TERMINASI</label>
                <input name="terminasi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="TERMINASI" value="{{$a2p->terminasi}}">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">TIPE TERMINASI</label>
                <input name="tipe_terminasi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="TIPE TERMINASI" value="{{$a2p->tipe_terminasi}}">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">SID</label>
                <input name="SID" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="SID" value="{{$a2p->SID}}">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">STATUS TERMINASI</label>
                <input name="status_terminasi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="STATUS TERMINASI" value="{{$a2p->status_terminasi}}">
            </div>
            <button type="submit" class="btn btn-warning">Update</button>
            </form>
        </div>
    </div>
@endsection
