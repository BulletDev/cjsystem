@extends('layouts.app')
@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container">
    <div class="row">
        <div class="col p-4">
            {{-- card --}}
            <div class="card">

                {{-- card-header --}}
                <div class="card-header">
                    <h3>Event</h3>
                </div>
                {{-- /card-header --}}

                {{-- card-body --}}
                <div class="card-body">
                    <form action="{{ route('event.update.id', $data[0]->id) }}" method="post">
                        {{ csrf_field() }}
                        <fieldset>
                            <div class="form-group">
                                <label for="title" class="col-lg-2 control-label">Title</label>
                                <div class="col-lg-10">
                                <input type="text" name="title" id="title" value="{{ $data[0]->title }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="location" class="col-lg-2 control-label">Location</label>
                                <div class="col-lg-10">
                                    <textarea name="location" id="location" cols="30" rows="10">{{ $data[0]->location }}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dat" class="col-lg-2 control-label">Date</label>
                                <div class="col-lg-10">
                                    <input type="date" name="date" id="date" value="{{ $data[0]->date }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <a href="{{route('event.show')}}" name="cancel" class="btn btn-default">Cancel</button>
                                <button type="submit" name="submit" class="btn btn-primary">Save</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
                {{-- /card-body --}}

                {{-- card-footer --}}
                <div class="card-footer">

                </div>
                {{-- /card-footer --}}

            </div>
            {{-- /card --}}
        </div>
    </div>
</div>
@endsection