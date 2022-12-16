@extends('admin.layouts.main')

@section('content')
  <div class="row mb-12">
    <div class="col-md-6 col-lg-12 mb-3">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">Overloop's Best Seller Of The Year</h5>
          <a href="{{ url('/admin/tahun/print_pdf') }}" target="blank" class="btn btn-primary" title="Print PDF">
            <i class="fa fa-plus" aria-hidden="true"></i> Print PDF
          </a>

          <p><br></p>
          <div class="table-primary">
            <table class="table" id="DataTables">
              <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Tahun</th>
                </tr>
              </thead>
              <tbody>
                @foreach($tahun as $item)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->tahun }}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>

        </div>
      </div>
    </div>
  </div>

@endsection