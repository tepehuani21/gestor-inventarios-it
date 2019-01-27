@extends('layouts.master')@section('content')    <div class="block block-rounded block-bordered">        <div class="block-header block-header-default">            <h3 class="block-title">Opciones de CheckList</h3>            <div class="block-options">                <button type="button" class="btn-block-option">                    <a href="{{ url('opciones_check/create') }}" class="btn btn-hero-primary js-click-ripple-enabled"><i class="si si-plus"></i> Opciones de CheckList</a>                </button>            </div>        </div>        <div class="block-content">            <div class="table-responsive">                <table class="table table-bordered table-striped table-hover">                    <thead>                    <tr>                        <th>@lang('form.sno')</th><th>Area</th><th>Atributo</th><th>Mandatorio</th><th>Actions</th>                    </tr>                    </thead>                    <tbody>                    @php $x=0; @endphp                    @foreach($opciones_check as $item)                        @php $x++;@endphp                        <tr>                            <td>{{ $x }}</td>                            <td><a href="{{ url('opciones_check', $item->id) }}">{{ $item->areaxc->area }}</a></td><td>{{ $item->atributo }}</td><td>{{ $item->mandatorio }}</td>                            <td>                                <a href="{{ url('opciones_check/' . $item->id . '/edit') }}">                                    <button type="submit" class="btn btn-sm btn-light m-1">@lang('form.update')</button>                                </a> /                                {!! Form::open([                                    'method'=>'DELETE',                                    'url' => ['opciones_check', $item->id],                                    'style' => 'display:inline'                                ]) !!}                                {!! Form::button(__('form.deletee'), ['class' => 'btn btn-sm btn-light m-1','type' => 'submit']) !!}                                {!! Form::close() !!}                            </td>                        </tr>                    @endforeach                    </tbody>                </table>                <div class="pagination"> {!! $opciones_check->render() !!} </div>            </div>@endsection