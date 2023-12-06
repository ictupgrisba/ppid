@include('components/header')
        <div class="container mt-3">
  <h3 align="center">Standar Operasional Prosedur Layanan Informasi Publik</h3>
          
  <table class="table table-striped" border="0">
    <thead>
      <tr>
        <th></th>
        <th></th>
        <th></th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        @php $no = 1; @endphp
        <th>{{$no++ }}</th>
        <td>SOP Pengelolaan Permohonan Informasi</td>
        <td ><a href="#">View</a></td>
      </tr>

       <tr>
        <th>{{$no++ }}</th>
        <td>SOP Pengelolaan Keberatan atas informasi</td>
        <td ><a href="#">View</a></td>
      </tr>
      <tr>
        <th>{{$no++ }}</th>
        <td>SOP Penanganan Sengketa Informasi Publik</td>
        <td ><a href="#">View</a></td>
      </tr>

      <tr>
        <th>{{$no++ }}</th>
        <td>SOP Penetapan dan Pemuktahiran DIP</td>
        <td ><a href="#">View</a></td>
      </tr>
      <tr>
        <th>{{$no++ }}</th>
        <td>SOP Pengujian tentang Konsekuensi</td>
        <td ><a href="#">View</a></td>
      </tr>
      <tr>
        <th>{{$no++ }}</th>
        <td>SOP Pendokumentasian Informasi Publik</td>
        <td ><a href="#">View</a></td>
      </tr>
      <tr>
        <th>{{$no++ }}</th>
        <td>SOP Pendokumentasian Informasi yang Dikecualikan</td>
        <td ><a href="#">View</a></td>
      </tr>
      <tr>
        <th>{{$no++ }}</th>
        <td>SOP Fasilitasi Keberatan Informasi Publik</td>
        <td ><a href="#">View</a></td>
      </tr>
</div>
</tbody>
  </table>


        
@include('components/footer')