<table>
  <thead>
    <tr>
      <td>Ad</td>
      <td>Soyad</td>
      <td>Haqqinda</td>
      <td>Fennler</td>
    </tr>
  </thead>
</table>
@foreach ($teachers as $eacher)
  <tbody>
    <tr>
      <td> {{ $teacher->name }} </td>
      <td> {{ $teacher-> }} </td>
    </tr>
  </tbody>
@endforeach