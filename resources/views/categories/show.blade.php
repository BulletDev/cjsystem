@extends('layouts.app')
@section('content')

<div class="container-fluid p-4 content-row">
    <div class="row pt-4">
        <div class="col-md-6 float-left">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Categories</h3>
                    <button type="button" class="btn btn-success btn-sm float-right" data-toggle="modal" data-target="#myModal" id="open"><i class="fa fa-plus"></i></button>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Category</th>
                                <th>Percentage</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $total =0;
                            @endphp
                            @foreach($data as $row)
                                <tr>
                                    <td><a href="{{ route('categories.show', $row->id) }}">{{ $row->category }}</a></td>
                                    <td>{{ $row->percentage }}</td>
                                    <td class="row">
                                        <a href="{{ route('categories.edit.id', $row->id) }}"
                                            class="btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                        <form action="{{ route('categories.destroy.id', $row->id) }}" method="post">
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
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6 float-left">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Criteria</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Criteria</th>
                                <th>Percentage</th>
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
                                        <button type="submit" class="btn-sm btn-flat btn-danger delete col"
                                            data-confirm="Are you sure to delete this item?">
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
                            <td>Total Percentage: {{ $totalCriteria }}</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- create category modal --}}
<form method="post" action="{{ route('categories.store') }}" id="form">
    {{ csrf_field() }}
    <!-- Modal -->
    <div class="modal" tabindex="-1" role="dialog" id="myModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="alert alert-danger" style="display:none"></div>
                <div class="modal-header">

                    <h5 class="modal-title">Add Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-md-8">
                            <label for="category">Category</label>
                            <input type="text" class="form-control" name="category" id="category">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="percentage">Percentage</label>
                            <input type="number" class="form-control" min="0" name="percentage" id="catPers" autocomplete="off" required value="0">
                        </div>
                    </div>
                    <div class="row">
                        @php
                            $sum=0;
                            $remaining = 0 ;
                        @endphp
                        @foreach ($data as $row)
                            @php
                                $sum += $row->percentage;
                                $remaining = 100 - $sum;
                            @endphp
                        @endforeach
                        <div class="form-group col-md-8">
                            <p>Remaining Percentage: </p><p id="p1">{{ $remaining }}</p>
                            <div style="display:none" id="remaining">{{ $remaining }}</div>
                        </div>
                        
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-success" id="submit" value='Save'>
                </div>
            </div>
        </div>
    </div>
</form>
{{-- /create category modal --}}

@endsection