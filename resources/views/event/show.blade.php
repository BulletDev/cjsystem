@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row mb-2 p-4 row-eq-height">
            <div class="col-sm-12 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        Event
                        <a href="{{ route('event.edit.id', $data[0]->id) }}" class="btn-sm btn-primary float-right">Edit</a>
                    </div>
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-sm-4">Title</dt>
                            <dd class="col-sm-8">{{ $data[0]->title }}</dd>
                            <dt class="col-sm-4">Location</dt>
                            <dd class="col-sm-8">{{ $data[0]->location }}</dd>
                            <dt class="col-sm-4">Date</dt>
                            <dd class="col-sm-8">{{ $data[0]->date }}</dd>
                        </dl>
                    </div>
                    <div class="card-footer"></div>
                </div>
            </div>
        </div>
    </div>
@endsection