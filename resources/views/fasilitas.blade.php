@include('components/header')
        <div class="container mt-3">
            <p>Layanan Informasi Publik di Universitas PGRI Sumatera Barat menyediakan fasilitas layanan secara Elektronik dan Non Elektronik, fasilitas tersebut sebagai berikut :</p>
            <p>1. ELEKTRONIK</p>
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
        <td>Email </td>
        <td>humas@pugrisba.ac.id </td>
        <td></td>
      </tr>
      <tr>
        
        <th>{{$no++ }}</th>
        <td>website </td>
        <td><a href="https://ppid.upgrisba.ac.id">https://ppid.upgrisba.ac.id/</td>
        <td></td>
      </tr>
      <tr>
      <th>{{$no++ }}</th>
        <td> </td>
        <td>:Facebook</td>
        <td><a href="https://www.facebook.com/upgrisba.ac.id/?locale=id_ID">Klik Disini</a></td>
      </tr>
      <tr>
      <th></th>
        <td> </td>
        <td >:Instagram</td>
        <td><a href="https://www.instagram.com/@upgrisba">Klik Disini</a></td>
      </tr>
      <tr>
      <th></th>
        <td> </td>
        <td >:YouTube</td>
        <td><a href="https://www.youtube.com/@STKIPPGRISumateraBarat">Klik Disini</a></td>
      </tr>
        </div>
        </tbody>
  </table>
  <p>2. NON ELEKTRONIK </p>
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
        <td>Permohonan Informasi</td>
        <td>: formulir (Offline) </td>
        <td><a href="#">Klik Disini</a></td>
      </tr>
      <tr>
        
        <th>{{$no++ }}</th>
        <td>Permohonan Keberatan</td>
        <td>: Formulir (Offline)</td>
        <td><a href="#">Klik Disini</td>
        
      </tr>


      </tbody>
      </div>
  </table>
  <p>3. Ruang Pelayanan informasi</p>
 
 








        
@include('components/footer')