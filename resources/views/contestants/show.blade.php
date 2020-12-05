@extends('layouts.app')

@section('content')

<section class="content">
    <div class="container-fluid content-row">
        <div class="row">
            <div class="col-sm-6 pt-4">
                <a href="{{ route('contestants.create') }}" class="btn btn-primary">Add Contestant</a>
            </div>
        </div>
        <div class="row mb-2 pt-4">
            <div class="col-sm-12 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Contestants</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach($contestants as $contestant)
                            <li class="list-group-item">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-1">{{$contestant->contestant_no}}</div>
                                        <div class="col-sm-8">
                                            <a class="btn btn-sm btn-default" href="{{ route('contestants.show', $contestant->id ) }}">
                                                {{ $contestant->first_name }}
                                                {{ $contestant->middle_name }}
                                                {{ $contestant->last_name }}
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a href="{{ route('contestants.edit.id', $contestant->id)}}" class="btn btn-sm btn-success">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <form style="display:inline" action="{{route('contestants.destroy.id', $contestant->id)}}" method="POST">
                                                {{ csrf_field() }}
                                                <button class="btn btn-sm btn-danger" type="submit">
                                                <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="card h-100">
                    <div class="card-header">
                        <h3 class="card-title">Contestants Information</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @foreach($contestants_info as $contestant_info)
                        <img src="{{ url('/uploads/'.$contestant_info->photo ) }}" alt="" width="400" height="300">
                        <hr class="separator">
                        <h5>Personal Information</h5>
                        <hr class="separator">
                        <dl class="row">
                            <dt class="col-sm-4">Contestant Number</dt>
                            <dd class="col-sm-8">{{ $contestant_info->contestant_no }}</dd>
                            <dt class="col-sm-4">Name</dt>
                            <dd class="col-sm-8">{{ $contestant_info->first_name }} {{ $contestant_info->middle_name }} {{ $contestant_info->last_name }}</dd>
                            <dt class="col-sm-4">Gender</dt>
                            <dd class="col-sm-8">{{ $contestant_info->gender }}</dd>
                            <dt class="col-sm-4">Age</dt>
                            <dd class="col-sm-8">{{ $contestant_info->age }}</dd>
                            <dt class="col-sm-4">Nationality</dt>
                            <dd class="col-sm-8">{{ $contestant_info->nationality }}</dd>
                        </dl>
                        <h5>Educational Attainment</h5>
                        <hr class="separator">
                        <dl class="row">
                            <dt class="col-sm-4">Degree</dt>
                            <dd class="col-sm-8">{{ $contestant_info->attainment }}</dd>
                            <dt class="col-sm-4">School</dt>
                            <dd class="col-sm-8">{{ $contestant_info->school }}</dd>
                            <dt class="col-sm-4">Course</dt>
                            <dd class="col-sm-8">{{ $contestant_info->age }}</dd>
                            <dt class="col-sm-4">Year</dt>
                            <dd class="col-sm-8">{{ $contestant_info->year }}</dd>
                        </dl>
                        <h5>Other Information</h5>
                        <hr class="separator">
                        <dl class="row">
                            <dt class="col-sm-4">Weight</dt>
                            <dd class="col-sm-8">{{ $contestant_info->weight }}</dd>
                            <dt class="col-sm-4">Height</dt>
                            <dd class="col-sm-8">{{ $contestant_info->height }}</dd>
                            <dt class="col-sm-4">Biography</dt>
                            <dd class="col-sm-8">{{ $contestant_info->biography }}</dd>
                        </dl>
                        <h5>Vital Statistics</h5>
                        <hr class="separator">
                        <dl class="row">
                            <dt class="col-sm-4">Bust line</dt>
                            <dd class="col-sm-8">{{ $contestant_info->bust_line }}</dd>
                            <dt class="col-sm-4">Waist Line</dt>
                            <dd class="col-sm-8">{{ $contestant_info->waist_line }}</dd>
                            <dt class="col-sm-4">Hip Line</dt>
                            <dd class="col-sm-8">{{ $contestant_info->hip_line }}</dd>
                        </dl>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection