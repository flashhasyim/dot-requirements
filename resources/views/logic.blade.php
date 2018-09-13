@extends('template')

@section('content')
<div class="row justify-content-md-center">
    <div class="col col-lg-6">
        <div class="mt-5"></div>
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <div class="card">
            <h5 class="card-header">Struktur data & Logic</h5>
            <div class="card-body">
                <form action="{{ route('logic.quick') }}" method="get">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="form-group">
                                <label >Nilai data :</label>
                                <input type="text" name="value" value="{{ request()->get('value') }}" placeholder="eg: 1,2,3,4,5" class="form-control" required />
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="">Method</label>
                                <select name="method" class="form-control" required>
                                    <option value="basic">Basic</option>
                                    <option value="condition">Conditional</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-xs btn-primary">
                        Submit
                    </button>
                    @if(isset($result))
                    <hr>
                    Hasil : <b>{{ $result }}</b> 
                    <small class="text-muted float-right">Hasil untuk terbesar ke 2 dari data di atas</small>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>
@endsection