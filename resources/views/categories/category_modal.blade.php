
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
                            <input type="number" class="form-control" min="0" name="percentage" id="catPers"
                                autocomplete="off" required value="0">
                        </div>
                    </div>
                    <div class="row">
                        @php
                            $sum=0;
                            $remaining = 0 ;
                        @endphp
                        @foreach($data as $row)
                            @php
                                $sum += $row->percentage;
                                $remaining = 100 - $sum;
                            @endphp
                        @endforeach
                        <div class="form-group col-md-8">
                            <p>Remaining Percentage: </p>
                            <p id="p1">{{ $remaining }}</p>
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