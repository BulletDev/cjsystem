@extends('layouts.app')

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row mb-2 pt-4">
                <div class="col-md-6">
                    <a href="{{ route('contestants.create') }}" class="btn btn-primary">Add Contestant</a>
                </div>
            </div>
            <div class="row mb-2 pt-4">
                <div class="col-md-6 float-left">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Contestants</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <ul class="list-group">
                                @foreach($contestants as $contestant)
                                    <li class="list-group-item">
                                        <a href="{{ route('contestants.show', $contestant->id) }}">{{ $contestant->first_name }} {{ $contestant->middle_name }} {{ $contestant->last_name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 float-right">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Contestants Information</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                                <img src="#" alt="" width="400" height="300">
                                <hr class="separator">
                                <h5>Personal Information</h5>
                                <hr class="separator">
                                <dl class="row">
                                    <dt class="col-sm-4">Contestant Number</dt>
                                    <dd class="col-sm-8"></dd>
                                    <dt class="col-sm-4">Name</dt>
                                    <dd class="col-sm-8"></dd>
                                    <dt class="col-sm-4">Gender</dt>
                                    <dd class="col-sm-8"></dd>
                                    <dt class="col-sm-4">Age</dt>
                                    <dd class="col-sm-8"></dd>
                                    <dt class="col-sm-4">Nationality</dt>
                                    <dd class="col-sm-8"></dd>
                                </dl>
                                <h5>Educational Attainment</h5>
                                <hr class="separator">
                                <dl class="row">
                                    <dt class="col-sm-4">Degree</dt>
                                    <dd class="col-sm-8"></dd>
                                    <dt class="col-sm-4">School</dt>
                                    <dd class="col-sm-8"></dd>
                                    <dt class="col-sm-4">Course</dt>
                                    <dd class="col-sm-8"></dd>
                                    <dt class="col-sm-4">Year</dt>
                                    <dd class="col-sm-8"></dd>
                                </dl>
                                <h5>Other Information</h5>
                                <hr class="separator">
                                <dl class="row">
                                    <dt class="col-sm-4">Weight</dt>
                                    <dd class="col-sm-8"></dd>
                                    <dt class="col-sm-4">Height</dt>
                                    <dd class="col-sm-8"></dd>
                                    <dt class="col-sm-4">Biography</dt>
                                    <dd class="col-sm-8"></dd>
                                </dl>
                                <h5>Vital Statistics</h5>
                                <hr class="separator">
                                <dl class="row">
                                    <dt class="col-sm-4">Bust line</dt>
                                    <dd class="col-sm-8"></dd>
                                    <dt class="col-sm-4">Waist Line</dt>
                                    <dd class="col-sm-8"></dd>
                                    <dt class="col-sm-4">Hip Line</dt>
                                    <dd class="col-sm-8"></dd>
                                </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection