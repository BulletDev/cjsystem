
{{-- create criteria modal --}}
<form method="post" action="" id="criteriaform">
    {{ csrf_field() }}
    <!-- Modal -->
    <div class="modal" tabindex="-1" role="dialog" id="criteriaModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="alert alert-danger" style="display:none"></div>
                <div class="modal-header">
                    <h5 class="modal-title">Add Criteria</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" name="category_id" id="category_id">
                    <div class="row">
                        <div class="form-group col-md-8">
                            <label for="criteria">Criteria</label>
                            <input type="text" class="form-control" name="criteria" id="criteria">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="critPercentage">Percentage</label>
                            <input type="number" class="form-control" min="0" name="critPercentage" id="critPers"
                                autocomplete="off" required value="0">
                        </div>
                    </div>
                    <div class="row">
                        @php
                            $critSum=0;
                            $critRemaining=0 ;
                        @endphp
                        @foreach($dataCriteria as $critRow)
                            @php
                                $critSum += $critRow->percentage;
                                $critRemaining = 100 - $critSum;
                            @endphp
                        @endforeach
                        <div class="form-group col-md-8">
                            <p>Remaining Percentage: </p>
                            <p id="p2">{{ $critRemaining }}</p>
                            <div style="display:none" id="critRemaining">{{ $critRemaining }}</div>
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
{{-- /create criteria modal --}}
