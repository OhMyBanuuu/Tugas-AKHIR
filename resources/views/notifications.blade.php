@extends('templatenotifications')
@section('content')
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title">Notifications</h5>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="card card-plain">
                <div class="card-header">
                  <h5 class="card-title">New Notifications</h5>
                </div>
                <div class="card-body">
                  <div class="alert alert-primary">
                    <span>Info akan masuk lewat sini setiap harinya jadi standby ya, terimakasih.</span>
                  </div>
                  <div class="alert alert-warning alert-dismissible fade show">
                    <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="nc-icon nc-simple-remove"></i>
                    </button>
                    <span>Ada beberapa pelanggan yang menanyakan soal rasa makanan kita yang sedikit berubah, coba periksa itu yaa..</span>
                  </div>
                  <div class="alert alert-danger alert-with-icon alert-dismissible fade show" data-notify="container">
                    <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="nc-icon nc-simple-remove"></i>
                    </button>
                    <span data-notify="icon" class="nc-icon nc-bell-55"></span>
                    <span data-notify="message">Besok ada pesanan Krecek Simbok 5 porsi.</span>
                  </div>
                  <div class="alert alert-success alert-with-icon alert-dismissible fade show" data-notify="container">
                    <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="nc-icon nc-simple-remove"></i>
                    </button>
                    <span data-notify="icon" class="nc-icon nc-chart-pie-36"></span>
                    <span data-notify="message">Data statistik kita menunjukkan bahwa tingkat minat pada makanan tradisional yang kita sajikan meningkat. Komentar nya juga kebanyakan bagus. Pertahankan Kualitasnya yaa..</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card card-plain">
                <div class="card-header">
                  <h5 class="card-title">Notification states</h5>
                </div>
                <div class="card-body">
                  <div class="alert alert-primary alert-dismissible fade show">
                    <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="nc-icon nc-simple-remove"></i>
                    </button>
                    <span><b> Primary - </b> "Info yang sangat penting"</span>
                  </div>
                  <div class="alert alert-info alert-dismissible fade show">
                    <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="nc-icon nc-simple-remove"></i>
                    </button>
                    <span><b> Info - </b> "Info biasa"</span>
                  </div>
                  <div class="alert alert-success alert-dismissible fade show">
                    <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="nc-icon nc-simple-remove"></i>
                    </button>
                    <span><b> Success - </b> "Info keberhasilan atau sesuatu yang bagus"</span>
                  </div>
                  <div class="alert alert-warning alert-dismissible fade show">
                    <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="nc-icon nc-simple-remove"></i>
                    </button>
                    <span><b> Warning - </b> "Info Peringatan"</span>
                  </div>
                  <div class="alert alert-danger alert-dismissible fade show">
                    <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="nc-icon nc-simple-remove"></i>
                    </button>
                    <span><b> Danger - </b> "Info bahaya atau sangat urgent"</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <div class="places-buttons">
            <div class="row">
              <div class="col-md-6 ml-auto mr-auto text-center">
                <h4 class="card-title">
                  Communication Center
                </h4>
              </div>
            </div>
            <div class="center-block">
              <div class="col-lg-8 ml-auto mr-auto">
                <div class="row">
                  <div class="col-md-12 ml-auto">
                    <button class="btn btn-primary btn-block" onclick="demo.showNotification('bottom','right')">Check New Notifications</button> 
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-8 ml-auto mr-auto">
                <div class="row">
                  <div class="col-md-4">
                    <button class="btn btn-primary btn-block" onclick="#">All Branches Alarm </button>
                  </div>
                  <div class="col-md-4">
                    <button class="btn btn-primary btn-block" onclick="#">Contact Boss Secetary</button>
                  </div>
                  <div class="col-md-4">
                    <button class="btn btn-primary btn-block" onclick="#">Contact Boss</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection