<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Best Seller Of Overloop PDF</title>
</head>

<body>
    <center><img
            src="{{ url('https://www.weareanimalkingdom.com/wp-content/uploads/2021/06/Universitas-Pelita-Harapan-UPH.jpg') }}"
            alt="logo UPH"></center>
    <p style="text-align:center"><strong>Nama: Daryll Jordan</strong><br />
        &nbsp;</p>
    <p style="text-align:center"><strong>NIM: 03081200049</strong><br />
        &nbsp;</p>
    <p style="text-align:center"><strong>Best Seller</strong><br />
        &nbsp;</p>

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

    <p style="text-align:center"><strong>Copyright Daryll Jordan (03081200049)</strong></p>


</body>

</html>
