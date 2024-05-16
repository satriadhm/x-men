@extends('admin.layouts.layouts') 
@section('title','Vendor')
@section('before_pages','Vendor')
@section('after_pages','Data Vendor')

@section('content') 
<section id="statistic-card">
    <div class="card">
        <div class="card-body">
            <div class="d-lg-flex justify-content-lg-between">
                <h3 class="card-title">Data Vendor</h3>

                
                <button
                    class="btn btn-primary justify-content-end"
                    data-bs-toggle="modal" data-bs-target="#tambah-data"
                    type="button"
                >
                    Tambah Data <i class="far fa-plus"></i>
                </button>
               
             
              
               
                <!-- Modal -->
               
            </div>
            <form action="">
                <div
                class="modal fade"
                id="tambah-data"
                tabindex="-1"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true"
            >
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">
                               Tambah Data Vendor
                            </h5>
                            <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                            ></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="nama_vendor">Nama Vendor</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="nama_vendor"
                                    placeholder="Nama Vendor"
                                    name="nama_vendor"
                                />
                            </div>
                            <div class="form-group">
                                <label for="alamat_vendor">Alamat Vendor</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="alamat_vendor"
                                    placeholder="Alamat Vendor"
                                    name="alamat_vendor"
                                />
                            </div>
                            <div class="form-group">
                                <label for="alamat_vendor">Email Vendor</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="email_vendor"
                                    placeholder="Alamat Vendor"
                                    name="email_vendor"
                                />
                            </div>
                            <div class="form-group">
                                <label for="alamat_vendor">Telepon Vendor</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="telepon_vendor"
                                    placeholder="Telepon Vendor"
                                    name="telepon_vendor"
                                />
                            </div>
                            <div class="form-group">
                                <label for="alamat_vendor">Website Vendor</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="website_vendor"
                                    placeholder="Website Vendor"
                                    name="website_vendor"
                                />
                            </div>
                            <div class="form-group">
                                <label for="jenis_vendor">Jenis Vendor</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="jenis_vendor"
                                    placeholder="Jenis Vendor"
                                    name="jenis_vendor"
                                />
                            </div>
                            <div class="form-group">
                                <label for="deskripsi_vendor">Deskripsi Vendor</label>
                             
                                <textarea name="deskripsi_vendor" id="deskripsi_vendor" class="form-control" cols="10" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="logo_vendor">Logo Vendor</label>
                             
                                <input
                                    type="file"
                                    class="form-control"
                                    id="logo_vendor"
                                    placeholder="Logo Vendor"
                                    name="logo_vendor"
                                />
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button
                                type="button"
                                class="btn btn-secondary"
                                data-bs-dismiss="modal"
                            >
                                Close
                            </button>
                            <button type="button" class="btn btn-primary">
                                Save changes
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            </form>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama Vendor</th>
                            <th>Alamat Vendor</th>
                            <th>Email Vendor</th>
                            <th>Telepon Vendor</th>
                            <th>Website Vendor</th>
                            <th>Jenis Vendor</th>
                            <th>Deskripsi Vendor</th>
                            <th>Logo Vendor</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vendor as $ven)
                        <tr>
                            <td>{{ $vendor->nama_vendor }}</td>
                            <td>{{ $vendor->alamat_vendor }}</td>
                            <td>{{ $vendor->website_vendor }}</td>
                            <td>{{ $vendor->jenis_vendor }}</td>
                            <td>{{ $vendor->deskripsi_vendor }}</td>
                            <td>{{ $vendor->logo_vendor }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
