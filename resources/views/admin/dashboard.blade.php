@extends('admin.layout.layout')
@section('title', 'Dashboard')
<link rel="stylesheet" href="{{ url('bootstrap/css/bootstrap.min.css') }}">

@section('content')
   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
         <div class="container-fluid">
            {{-- Start Admin Auth --}}
            <div class="row justify-content-start">
               <div class="col-md-12">
                  <div class="card">
                     <div class="card-header border-transparent">
                        <h3 class="card-title">Authorize User to Admin Permission</h3>
                        <div class="card-tools">
                           <button type="button" class="btn btn-tool" data-card-widget="collapse">
                              <i class="fas fa-minus"></i>
                           </button>
                           <button type="button" class="btn btn-tool" data-card-widget="remove">
                              <i class="fas fa-times"></i>
                           </button>
                        </div>
                     </div>
                     <!-- /.card-header -->
                     <div class="card-body p-0 mb-3">
                        <div class="table-responsive">
                           <table class="table m-0">
                              <thead>
                                 <tr>
                                    <th>User Id</th>
                                    <th>Nama</th>
                                    <th>Role Status</th>
                                    <th>Email</th>
                                    <th>Authorize to Admin</th>
                                    <th>Unauthorize to User</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 @foreach ($Users as $user)
                                    <tr>
                                       <td>{{ $user->id }}</td>
                                       <td>{{ $user->username }}</td>
                                       <td>{{ $user->role }}</td>
                                       <td>{{ $user->email }}</td>
                                       {{-- if role == superadmin disable button, if admin enable button  --}}
                                       <td>
                                          @if ($user->role == 'superadmin')
                                             <button type="button" class="btn btn-outline-secondary" disabled>
                                                <i class="fas fa-user-shield"></i>
                                             </button>
                                          @else
                                             <a href="{{ route('admin.authorizeAdmin', $user->id) }}"
                                                class="btn btn-outline-secondary">
                                                <i class="fas fa-user-shield"></i>
                                             </a>
                                          @endif
                                       </td>
                                       {{-- if role == user disable button, if admin enable button  --}}
                                       <td>
                                          @if ($user->role == 'superadmin')
                                          <button type="button" class="btn btn-outline-secondary" disabled>
                                             <i class="fas fa-user-shield"></i>
                                          </button>
                                          @else
                                          <a href="{{ route('admin.unauthorizeAdmin', $user->id) }}"
                                             class="btn btn-outline-secondary">
                                             <i class="fas fa-user-shield"></i>
                                          </a>
                                          @endif
                                    </tr>
                                 @endforeach
                              </tbody>
                           </table>
                        </div>
                        <!-- /.table-responsive -->
                     </div>
                  </div>
               </div>
               <!-- /.col -->
            </div>
            <!-- /.row -->
            {{-- End Admin Auth --}}
            {{-- Start content displaying --}}
            <div class="row justify-content-center">
               <div class="col-md-12">
                  <div class="card">
                     <div class="card-header border-transparent">
                        <h3 class="card-title">Contents List</h3>
                        <div class="card-tools">
                           <button type="button" class="btn btn-tool" data-card-widget="collapse">
                              <i class="fas fa-minus"></i>
                           </button>
                           <button type="button" class="btn btn-tool" data-card-widget="remove">
                              <i class="fas fa-times"></i>
                           </button>
                        </div>
                     </div>
                     <!-- /.card-header -->
                     <div class="card-body p-0 mb-3">
                        <div class="table-responsive">
                           <table class="table m-0">
                              <thead>
                                 <tr>
                                    <th>ID</th>
                                    <th>Youtube Link</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 @foreach ($Contents as $content)
                                    <tr>
                                       <td>{{ $content->id }}</td>
                                       <td>{{ $content->ytLink }}</td>
                                       <td>{{ $content->title }}</td>
                                       <td>{{ $content->description }}</td>
                                    </tr>
                                 @endforeach
                              </tbody>
                           </table>
                        </div>
                        <!-- /.table-responsive -->
                     </div>
                  </div>
               </div>
               <!-- /.col -->
            </div>
            <!-- /.row -->
            
            {{-- End content displaying --}}

            <!-- Main row -->
            <div class="row justify-content-center">
               <!-- Left col -->
               <div class="col-md-12">
                  <!-- CARD KONTEN BARU -->
                  <div class="card mt-4">
                     <div class="card-header">
                        <h3 class="card-title">Tambahkan Konten Baru</h3>
                        <div class="card-tools">
                           <button type="button" class="btn btn-tool" data-card-widget="collapse">
                              <i class="fas fa-minus"></i>
                           </button>
                           <button type="button" class="btn btn-tool" data-card-widget="remove">
                              <i class="fas fa-times"></i>
                           </button>
                        </div>
                     </div>
                     <!-- /.card-header -->
                     <div class="card-body p-0">
                        <div class="d-md-flex">
                           <div class="p-1 flex-fill" style="overflow: hidden">
                              {{-- Section BUAT Konten BARU --}}
                              <form action="{{ route('admin.dashboard.store') }}" method="POST" class="storeCardKonten">
                                 @csrf
                                 <div class="row">
                                    <div class="col-10">
                                       <div class="mb-3">
                                          <label for="ytLink" class="form-label">Youtube Content Link</label>
                                          <input type="text" class="form-control" id="ytLink" name="ytLink"
                                             required>
                                       </div>
                                    </div>
                                 </div>

                                 <div class="row">
                                    <div class="col-10">
                                       <div class="mb-3">
                                          <label for="titleKonten" class="form-label">Title</label>
                                          <input type="text" class="form-control" id="titleKonten" name="titleKonten"
                                             required>
                                       </div>
                                    </div>
                                 </div>

                                 <div class="row">
                                    <div class="col-10">
                                       <div class="mb-3">
                                          <label for="descriptionKonten" class="form-label">Description</label>
                                          <textarea class="form-control" id="descriptionKonten" name="descriptionKonten" rows="5"></textarea>
                                       </div>
                                    </div>
                                 </div>

                                 <div class="row">
                                    <div class="col-10">
                                       {{-- Success variable message alert  --}}
                                       @if (session('success'))
                                          <div class="alert alert-success alert-dismissible fade show" role="alert">
                                             {{ session('success') }}
                                             <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                          </div>
                                       @endif
                                       <button type="submit" class="btn btn-primary">Save Content</button>
                                    </div>
                                 </div>
                              </form>

                           </div>
                        </div><!-- /.d-md-flex -->
                     </div>
                     <!-- /.card-body -->
                  </div>
                  <!-- /.CARD KONTEN BARU  -->

                  <!-- CARD EDIT / DELETE KONTEN YANG SUDAH ADA -->
                  <div class="card mt-4">
                     {{-- EDIT / DELETE KONTEN --}}
                     <div class="card-header">
                        <h3 class="card-title">Edit or Delete Content</h3>
                        <div class="card-tools">
                           <button type="button" class="btn btn-tool" data-card-widget="collapse">
                              <i class="fas fa-minus"></i>
                           </button>
                           <button type="button" class="btn btn-tool" data-card-widget="remove">
                              <i class="fas fa-times"></i>
                           </button>
                        </div>
                     </div>
                     <!-- /.card-header -->
                     <div class="card-body p-0">
                        <div class="d-md-flex">
                           <div class="p-1 flex-fill" style="overflow: hidden">
                              {{-- Section UPDATE / DELETE Konten --}}
                              <form action="{{ route('explore.update-content') }}" method="POST" class="update-form">
                                 @csrf
                                 @method('PUT')
                                 <div class="row">
                                    <div class="col-10">
                                       <div class="mb-3">
                                          <label for="contentId" class="form-label">Content ID</label>
                                          <input type="text" class="form-control" id="contentId"
                                             name="contentId" required>
                                       </div>
                                    </div>
                                 </div>

                                 <div class="row">
                                    <div class="col-10">
                                       <div class="mb-3">
                                          <label for="ytLink" class="form-label">New Youtube Content Link</label>
                                          <input type="text" class="form-control" id="ytLink" name="ytLink"
                                             required>
                                       </div>
                                    </div>
                                 </div>

                                 <div class="row">
                                    <div class="col-10">
                                       <div class="mb-3">
                                          <label for="newTitleKonten" class="form-label">New Title</label>
                                          <input type="text" class="form-control" id="newTitleKonten"
                                             name="newTitleKonten" required>
                                       </div>
                                    </div>
                                 </div>

                                 <div class="row">
                                    <div class="col-10">
                                       <div class="mb-3">
                                          <label for="descriptionKonten" class="form-label">New Description</label>
                                          <textarea class="form-control" id="descriptionKonten" name="descriptionKonten" rows="5"></textarea>
                                       </div>
                                    </div>
                                 </div>

                                 <div class="row">
                                    <div class="col-10">
                                       {{-- Success variable message alert  --}}
                                       @if (session('success'))
                                          <div class="alert alert-success alert-dismissible fade show" role="alert">
                                             {{ session('success') }}
                                             <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                          </div>
                                       @endif
                                       <button type="submit" class="btn btn-success me-3">Update Card Content</button>
                              </form>
                              {{-- form delete --}}
                              <div class="row mt-2">
                                 <div class="col-10">
                                    <div class="mb-3">
                                       <form action="{{ route('explore.delete-content') }}" method="POST">
                                          @csrf
                                          @method('DELETE')
                                          <button type="submit" class="btn btn-danger">Delete Card Content</button>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div><!-- /.d-md-flex -->
               </div>
               <!-- /.card-body -->
            </div>
            <!-- /.card UPDATE atau DELETE KONTEN YG SUDAH ADA -->
            <!-- /.card -->
         </div>
         <!-- /.col -->
      </div>
      <!-- /.row -->
   </div>
   <!--/. container-fluid -->
   </section>
   <!-- /.content -->
   </div>
   <!-- /.content-wrapper -->
@endsection
