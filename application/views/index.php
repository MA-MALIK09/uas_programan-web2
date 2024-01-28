<!-- <!DOCTYPE html>
<html>
 
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head> -->
 
<!-- <body> -->
<div class="container">
 
    <div class="col-4">
        <div class="mb-1">
            <label for="npm" class="form-label">NPM</label>
            <input type="email" class="form-control" id="mNpm" placeholder="input npm">
        </div>
 
        <div class="mb-1">
            <label for="nama" class="form-label">Nama</label>
            <input type="email" class="form-control" id="mNama" placeholder="input username">
        </div>
 
        <div class="mb-1">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="email" class="form-control" id="mAlamat" placeholder="input alamat">
        </div>
 
        <div class="mb-1">
            <label for="nilai" class="form-label">Nilai</label>
            <input type="email" class="form-control" id="mNilai" placeholder="input nilai">
        </div>
 
        <button type="button" id="btnSave" class="btn btn-primary">Save</button>
        <button type="button" id="btnUpdate" class="btn btn-primary">Update</button>
        <button type="button" id="btnDelete" class="btn btn-primary">Delete</button>
    </div>
 
    <div class="row" style="margin-top: 50px;">
        <div class="col-6">
            <div class="card" style="background-color:#00ffee1a;">
                <div class="card-body">
 
                    <div class="table-responsive">
                        <table id="tbDataList" class="table border table-striped table-bordered text-nowrap table-hover">
                            <thead>
                                <tr>
                                    <th>NPM</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Nilai</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                            <tfoot></tfoot>
                        </table>
                    </div>
 
                </div>
            </div>
        </div>
    </div>
 
</div>
 
<script>
    window.onload = function() {
 
 
        loadData();
    };
 
    function loadData() {
 
 
        var base_url = window.location.origin;
 
 
        $.ajax({
            url: base_url + "/mahasiswaAPI/api/Get_Mahasiswa",
            method: "GET",
            dataType: "JSON",
            data: {
                npm: ""
            },
            success: function(res) {
                console.log(res.data);
 
 
 
                var table = $('#tbDataList').DataTable({
                    destroy: true,
                    data: res.data,
                    scrollY: "350px",
                    scrollX: "350px",
                    order: [
                        [0, 'desc']
                    ],
                    columns: [
                        {
                            data: 'npm'
                        },
                        {
                            data: 'nama'
                        },
                        {
                            data: 'alamat'
                        },
                        {
                            data: 'nilai'
                        }
                    ]
                });
 
 
                //onclick table
                $('#tbDataList tbody').on('click', 'tr', function() {
                    var data = $('#tbDataList').DataTable().row(this).data();
 
                    // console.log(data);
 
                    var objRow = data;
 
 
 
                    // document.getElementById('id').value = objRow.id;
                    document.getElementById('mNpm').value = objRow.npm;
                    document.getElementById('mNama').value = objRow.nama;
                    document.getElementById('mAlamat').value = objRow.alamat;
                    document.getElementById('mNilai').value = objRow.nilai;
 
 
                });
 
            },
            fail: function(xhr, textStatus, errorThrown) {
                alert('request failed');
            }
        });
 
    }
 
    $('#btnSave').click(function() {
 
 
        var base_url = window.location.origin;
 
        var mNpm = document.getElementById("mNpm").value;
        var mNama = document.getElementById("mNama").value;
        var mAlamat = document.getElementById("mAlamat").value;
        var mNilai = document.getElementById("mNilai").value;
 
        //event.preventDefault();
 
        $.ajax({
            type: 'POST',
            url: base_url + "/mahasiswaAPI/api/Insert_Mahasiswa",
            dataType: 'json',
            async: false,
            data: {
                npm: mNpm,
                nama: mNama,
                alamat: mAlamat,
                nilai: mNilai
 
            },
            success: function(res) {
 
                var obj = res;
                console.log(obj.status);
 
 
                loadData();
 
 
 
            },
            failure: function(errMsg) {
                alert(errMsg);
            }
 
 
 
 
        });
 
 
    });
 
    $('#btnUpdate').click(function() {
 
 
        var base_url = window.location.origin;
        var mNpm = document.getElementById("mNpm").value;
        var mNama = document.getElementById("mNama").value;
        var mAlamat = document.getElementById("mAlamat").value;
        var mNilai = document.getElementById("mNilai").value;
 
 
 
        event.preventDefault();
 
 
        $.ajax({
            type: 'PUT',
            url: base_url + "/mahasiswaAPI/api/Update_Mahasiswa",
            dataType: 'json',
            async: false,
            data: {
                npm: mNpm,
                nama: mNama,
                alamat: mAlamat,
                nilai: mNilai
            },
            success: function(res) {
 
                var obj = res;
                console.log(obj.status);
 
                if (obj.status == false) {
 
 
 
                    console.log(obj.message);
                } else {
                    console.log(obj.message);
 
 
 
 
                    loadData();
 
                }
 
 
            },
            failure: function(errMsg) {
                alert(errMsg);
            }
 
 
 
 
        });
 
    });
 
 
    $('#btnDelete').click(function() {
 
 
        var base_url = window.location.origin;
 
        var mNpm = document.getElementById("mNpm").value;
 
        //event.preventDefault();
 
        $.ajax({
            type: 'DELETE',
            url: base_url + "/api/Delete_Mahasiswa",
            dataType: 'json',
            async: false,
            data: {
                npm: mNpm
 
            },
            success: function(res) {
 
                var obj = res;
                console.log(obj.status);
 
 
                loadData();
 
 
 
            },
            failure: function(errMsg) {
                alert(errMsg);
            }
 
 
 
 
        });
 
 
    });
</script>