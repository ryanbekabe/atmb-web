<br />

{!! Form::model($kecamatan, ['class' => 'form-horizontal form-label-left', 'url' => $url, 'method' => $method]) !!}

    <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            {{ Form::text('nama', $kecamatan->nama, ['class' => 'form-control  col-md-7 col-xs-12', 'placeholder' => 'Nama']) }}

            @if ($errors->has('nama'))
                <span class="help-block">
                    <strong>{{ $errors->first('nama') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('kode') ? ' has-error' : '' }}">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kode <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            {{ Form::text('kode', $kecamatan->kode, ['class' => 'form-control  col-md-7 col-xs-12', 'placeholder' => 'Kode']) }}

            @if ($errors->has('kode'))
                <span class="help-block">
                    <strong>{{ $errors->first('kode') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('nama_camat') ? ' has-error' : '' }}">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Camat
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            {{ Form::text('nama_camat', $kecamatan->nama_camat, ['class' => 'form-control  col-md-7 col-xs-12', 'placeholder' => 'Nama Camat']) }}

            @if ($errors->has('nama_camat'))
                <span class="help-block">
                    <strong>{{ $errors->first('nama_camat') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('no_hp_camat') ? ' has-error' : '' }}">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nomor HP Camat
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            {{ Form::text('no_hp_camat', $kecamatan->no_hp_camat, ['class' => 'form-control  col-md-7 col-xs-12', 'placeholder' => 'Nomor HP Camat']) }}

            @if ($errors->has('no_hp_camat'))
                <span class="help-block">
                    <strong>{{ $errors->first('no_hp_camat') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="ln_solid"></div>

    <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <button type="submit" class="btn btn-success">SIMPAN</button>
            <a href="{{url('kecamatan')}}" class="btn btn-default">BATAL</a>
        </div>
    </div>

{!! Form::close() !!}
