@extends('layouts.app')
@section('content')

<div class="container-fluid content-row p-4">
    <div class="row mb-2">
        {{-- category table --}}
        <div class="col-sm-12 col-lg-6 float-right" id="colCat">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Categories</h3>
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 40px;">
                            <div class="input-group-append">
                                <button type="button" class="btn btn-success btn-sm float-right" data-toggle="modal"
                                    data-target="#myModal" id="open"><i class="fa fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-head-fixed text-nowrap table-hover">
                        <thead>
                            <tr>
                                <th>Category</th>
                                <th>Percentage</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $total =0;
                            @endphp
                            
                            @foreach($data as $row)
                                <tr>
                                    <td>
                                        <a id="getAllData" href="{{ route('categories.show', [$row->id, $row->category]) }}">{{ $row->category }}</a>
                                        {{-- href="{{ route('categories.show', $row->id) }}" --}}
                                    </td>
                                    <td>{{ $row->percentage }}</td>
                                    <td><a href="{{ route('categories.edit.id', $row->id) }}"
                                            class="btn-sm btn-primary"><i class="fa fa-edit"></i></a></td>
                                    <td>
                                        <form
                                            action="{{ route('categories.destroy.id', $row->id) }}"
                                            method="post">
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn-sm btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @php
                                    $total += $row->percentage
                                @endphp
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>Total Percentage: </td>
                                <td id="totalPercentage">{{ $total }}</td>
                            </tr>
                        </tfoot>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>

        {{-- criteria table --}}
        <div class="col-sm-12 col-lg-6 float-right" id="colCrit">
            <div class="card">
                <div class="card-header">
                        <h3 class="card-title">{{ $dataCategory }}</h3>
                    
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 40px;">
                            <div class="input-group-append">
                                <button type="button" class="btn btn-success btn-sm float-right" data-toggle="modal"
                                    data-target="#criteriaModal" id="critOpen"><i class="fa fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table id="critTable" class="table table-head-fixed text-nowrap">
                        <thead>
                            <tr>
                                <th>Criteria</th>
                                <th>Percentage</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $totalCriteria =0;
                            @endphp
                            @foreach($dataCriteria as $rowCriteria)
                                <tr>
                                    <td>{{ $rowCriteria->criteria }}</td>
                                    <td>{{ $rowCriteria->percentage }}</td>
                                    <td>
                                        <a href="{{ route('categories.edit.id', $rowCriteria->id) }}"
                                            class="btn-sm btn-primary"><i class="fa fa-edit"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <form
                                            action="{{ route('categories.destroy.id', $rowCriteria->id) }}"
                                            method="post">
                                            <button type="submit" class="btn-sm btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @php
                                    $totalCriteria += $rowCriteria->percentage
                                @endphp
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>Total Percentage: </td>
                                <td id="totalCritPercentage">{{ $totalCriteria }}</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>

@include('categories.category_modal')
@include('categories.criteria_modal')
@endsection