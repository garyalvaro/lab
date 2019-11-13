<table class="table table-bordered">
        <thead>
                <tr>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>###Nilai###</th>
                        <th>Rata-rata</th>
                        <th>Huruf</th>
                        <th>Aksi</th>
                </tr>
        </thead>
        
        <tbody>
                <tr>
                        <td>1814020000</td>
                        <td>MuridX</td>
                        <td>80</td>
                        <td>80</td>
                        <td>A</td>
                         <td>
                                <button type="button" onClick="detail('<?= $key->nim; ?>')" class="btn btn-xs btn-info">Detail</button>
                                <button type="button" onClick="edit('<?= $key->nim; ?>')" class="btn btn-xs btn-warning">Edit</button>
                        </td>
                </tr>
        </tbody>

</table>