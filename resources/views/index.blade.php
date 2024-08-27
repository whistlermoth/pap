<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="icon.jpg">
    <title>P.A.P [Potret Angka Portfolio] Mekaar - PNM Denpasar</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/simplebar.css')}}">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/feather.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/select2.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/dropzone.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/uppy.min.css')}}">
    <link rel = "stylesheet"
   type = "text/css"
   href = "https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="{{ URL::asset('css/jquery.steps.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/jquery.timepicker.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/quill.snow.css')}}">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/daterangepicker.css')}}">
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/app-light.css')}}" id="lightTheme">
    <link rel="stylesheet" href="{{ URL::asset('css/app-dark.css')}}" id="darkTheme" disabled>
    <style>
      #loadingAnimation {
          position: fixed; /* Full-screen */
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background-color: rgba(255, 255, 255); /* Semi-transparent white background */
          display: flex;
          justify-content: center; /* Center horizontally */
          align-items: center; /* Center vertically */
          z-index: 9999; /* Ensure it's above other elements */
      }

      .loader {
          border: 5px solid #f3f3f3; /* Light grey */
          border-top: 5px solid #3498db; /* Blue */
          border-radius: 50%;
          width: 50px;
          height: 50px;
          animation: spin 2s linear infinite;
      }

      @keyframes spin {
          0% { transform: rotate(0deg); }
          100% { transform: rotate(360deg); }
      }
      h6{
        font-size: 12px!important;
      }
      p{
        font-size: 12px!important;
      }
      .card-header {
        background-color: #20b2aa!important;   
      }
      .btn-dark:hover {
        background-color: #ffffff!important;
        color: #000000!important;
      }
      body{
        background-image: url('gambar/pnmdps.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
      }
    </style>
  </head>
  <body class="vertical  light  ">
    {{-- <form action="{{ route('import-excel') }}" method="post" enctype="multipart/form-data">
      @csrf
      <input type="file" name="file">
      <button type="submit">Import Excel</button>
  </form> --}}
  
    <div class="wrapper">
      <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="row align-items-center mb-2">
                <div class="col">
                  <h2 class="h5 page-title text-center">P.A.P [Potret Angka Portfolio] Mekaar - PNM Denpasar</h2>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="card shadow mb-4">
                    <div class="card-body">
                        <form action="{{ route('index.post')}}" method="GET" class="form-con">
                            @csrf            
                            @php
                                $unit = App\Models\Mekaar::select('cabang')->groupBy('cabang')->get();
                                $area = App\Models\Mekaar::select('area')->groupBy('area')->get();
                                $region = App\Models\Mekaar::select('region')->groupBy('region')->get();
                            @endphp
                            <div class="form-group row">
                              <label class="col-md-4 col-form-label">Cabang Denpasar</label>
                              <div class="col-md-8 parent-group">
                              <select id="select-cabang" name="region_all" class="form-control select2 col-12" id="simple-select5">
                                  <option value="">Pilih Salah Satu</option>
                                  <option value="Cabang Denpasar">Cabang Denpasar</option>
                              </select>
                              </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label">Region</label>
                                <div class="col-md-8 parent-group">
                                <select id="select-region" name="region" class="form-control select2 col-12" id="simple-select2">
                                    <option value="">Pilih Salah Satu</option>
                                    {{-- @foreach ($region as $region)
                                        <option value="{{ $region->region}}">{{ $region->region}}</option>
                                    @endforeach --}}
                                </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label">Area</label>
                                <div class="col-md-8 parent-group">
                                <select id="select-area" name="area" class="form-control select2 col-12" id="simple-select4">
                                    {{-- <option value="">Pilih Salah Satu</option>
                                    @foreach ($area as $area)
                                        <option value="{{ $area->area}}">{{ $area->area}}</option>
                                    @endforeach --}}
                                </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label">Pilih Unit</label>
                                <div class="col-md-8 parent-group">
                                <select id="select-unit" name="unit" class="form-control select2 col-12" id="simple-select3">
                                    {{-- <option value="">Pilih Salah Satu</option>
                                    @foreach ($unit as $cabang)
                                        <option value="{{ $cabang->cabang}}">{{ $cabang->cabang}}</option>
                                    @endforeach --}}
                                </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div> <!-- /.card-body -->
                  </div> <!-- /.card -->
                </div> <!-- /.col -->
                <div class="col-md-6">
                  <div class="card shadow mb-4">
                    <div class="card-body">
                      <div class="col-md-12 col-lg-12">
                        <div class="card shadow eq-card mb-4">
                          <div class="card-body">
                            <div class="row items-align-center">
                              <div class="col-4 text-center mb-3">
                                @if($request->unit)
                                    <b>{{ $request->unit }}</b><br>
                                @elseif($request->area)
                                    <b>{{ $request->area }}</b><br>
                                @elseif($request->region)
                                    <b>{{ $request->region }}</b><br>
                                @elseif($request->region_all)
                                    <b>{{ $request->region_all }}</b><br>
                                @endif
                                @if(!empty($record))
                                {{ \Carbon\Carbon::parse('26-08-2024')->translatedFormat('d F Y') }}
                                @endif
                              </div>
                              @php
                                  $currentDate = Illuminate\Support\Carbon::now();

                                // Get the end of the year
                                $endOfYear = Illuminate\Support\Carbon::now()->endOfYear();

                                // Calculate the number of days left
                                $daysLeft = $currentDate->diffInDays($endOfYear);
                              @endphp   
                              <div class="col-4 text-center mb-3">
                                <p class="text mb-1">Sisa Hari Kerja</p>
                                @if($record)
                                <h6 class="mb-1"> {{ $record->first()->sisa_minggu_kerja_sd_des_23 * 5 }}</h6>
                                {{-- <!--<h6 class="mb-1">{{ $daysLeft }} Hari</h6>--> --}}
                                @endif
                              </div>
                              @php
                                  // Get the current date
                                $currentDate = Illuminate\Support\Carbon::now();

                                // Get the end of the year
                                $endOfYear = Illuminate\Support\Carbon::now()->endOfYear();

                                // Calculate the number of weeks left
                                $weeksLeft = $currentDate->diffInWeeks($endOfYear);

                              @endphp       
                              <div class="col-4 text-center mb-3">
                                <p class="text mb-1">Sisa Minggu Kerja</p>
                                @if(!empty($record))
                                <h6 class="mb-1">{{ $record->first()->sisa_minggu_kerja_sd_des_23 }} Minggu</h6>
                                @endif
                              </div>
                              <div class="col-4 text-center mb-3">
                                <p class="text mb-1">Kelas Unit</p>
                                @if($record)
                                <h6 class="mb-1"> {{ $record->first()->kelas_unit}}</h6>
                                @endif
                              </div>
                              <div class="col-4 text-center mb-3">
                                <p class="text mb-1">BWMP</p>
                                @if($record)
                                <h6 class="mb-1"> {{ $record->first()->penyaluran_plafond_home}}</h6>
                                @endif
                              </div>
                              <div class="col-4 text-center mb-3">
                                <p class="text mb-1"></p>
                                @if($record)
                                <h6 class="mb-1"></h6>
                                @endif
                              </div>
                            </div>
                          </div> <!-- .card-body -->
                        </div> <!-- .card -->
                      </div> <!-- .col -->
                    </div> <!-- /.card-body -->
                  </div> <!-- /.card -->
                </div> <!-- /.col -->
              </div>
              <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12">
                  <div class="card shadow eq-card mb-4">
                    <div class="card-header">
                      <strong class="card-title">Posisi Bulan Lalu</strong>
                    </div>
                    <div class="card-body">
                      <div class="row items-align-center">
                        <div class="col-12 text-center mb-3">
                          <p class="text mb-1">NoA</p>
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('noc_bln_lalu'), 0, ',', '.')}}</h6>
                        </div>
                        <div class="col-12 text-center mb-3">
                          <p class="text mb-1">Outstanding</p>
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('os_bln_lalu'), 0, ',', '.')}}</h6>
                        </div>
                        <div class="col-12 text-center mb-3">
                          <p class="text mb-1">NoA PAR</p>
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('noa_par_bln_lalu'), 0, ',', '.')}}</h6>
                        </div>
                      </div>
                      <div class="row items-align-center">
                        <div class="col-12 text-center mb-3">
                          <p class="text mb-1">OS PAR</p>
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('os_par_bln_lalu'), 0, ',', '.')}}</h6>
                        </div>
                        <div class="col-12 text-center mb-3">
                          <p class="text mb-1">NoA NPL</p>
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('noa_npl_bln_lalu'), 0, ',', '.')}}</h6>
                        </div>
                        <div class="col-12 text-center mb-3">
                          <p class="text mb-1">OS NPL</p>
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('os_npl_bln_lalu'), 0, ',', '.')}}</h6>
                        </div>
                      </div>
                    </div> <!-- .card-body -->
                  </div> <!-- .card -->
                </div> <!-- .col -->
                <div class="col-md-6 col-lg-6 col-sm-12">
                  <div class="card shadow eq-card mb-4">
                    <div class="card-header">
                      <strong class="card-title">Growth & Progress Bulan Lalu</strong>
                    </div>
                    <div class="card-body">
                      <div class="row items-align-center">
                        <div class="col-12 text-center mb-3">
                          <p class="text mb-1">Growth NoA</p>
                          <h6 class="mb-1">{{ strtr(number_format(optional($record)->sum('growth_noc_bln_lalu'), 0, ',', '.'), ['%' => ''])}}</h6>
                        </div>
                        <div class="col-12 text-center mb-3">
                          <p class="text mb-1">Growth OS</p>
                          <h6 class="mb-1">{{ strtr(number_format(optional($record)->sum('growth_os_bln_lalu'), 0, ',', '.'), ['%' => ''])}}</h6>
                        </div>
                        <div class="col-12 text-center mb-3">
                          <p class="text mb-1">Progress NoA PAR</p>
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('progres_noa_par_bln_lalu'), 0, ',', '.')}}</h6>
                        </div>
                      </div>
                      <div class="row items-align-center">
                        <div class="col-12 text-center mb-3">
                          <p class="text mb-1">Progress OS PAR</p>
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('progres_os_par_bln_lalu'), 0, ',', '.')}}</h6>
                        </div>
                      </div>
                    </div> <!-- .card-body -->
                  </div> <!-- .card -->
                </div> <!-- .col -->
              </div> <!-- .row -->
              <div class="row">
                <div class="col-md-4 col-lg-4">
                  <div class="card shadow eq-card mb-4">
                    <div class="card-header">
                      <strong class="card-title">NoA</strong>
                    </div>
                    <div class="card-body">
                      <div class="row items-align-center">
                        <div class="col-4 text-center mb-3">
                          <p class="text mb-1">NoA</p>
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('noa'), 0, ',', '.')}}</h6>
                        </div>
                        <div class="col-4 text-center mb-3">
                          <p class="text mb-1">NoC</p>
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('noc'), 0, ',', '.')}}</h6>
                        </div>
                        <div class="col-4 text-center mb-3">
                          <p class="text mb-1">Target EoM</p>
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('target_eom_noc'), 0, ',', '.')}}</h6>
                        </div>
                      </div>
                      <div class="row items-align-center">
                        <div class="col-4 text-center mb-3">
                          <p class="text mb-1">% EoM</p>
                          @if(!empty($record))
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('noc')/ optional($record)->sum('target_eom_noc') * 100, 1)}} %</h6>
                            @endif
                        </div>
                        <div class="col-4 text-center mb-3">
                          <p class="text mb-1">Growth</p>
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('noa') - optional($record)->sum('noc_bln_lalu'), 0, ',', '.')}}</h6>
                        </div>
                        <div class="col-4 text-center mb-3">
                          <p class="text mb-1">Gap NoA</p>
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('noc') - optional($record)->sum('target_eom_noc'), 0, ',', '.')}}</h6>
                        </div>
                      </div>
                      <div class="row items-align-center">
                        <div class="col-4 text-center mb-3">
                          <p class="text mb-1">DO Bulan Ini</p>
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('do_bln_ini'), 0, ',', '.')}}</h6>
                        </div>
                        <div class="col-4 text-center mb-3">
                          <p class="text mb-1">Target EoY</p>
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('target_eoy_noc'), 0, ',', '.')}}</h6>
                        </div>
                        <div class="col-4 text-center mb-3">
                          <p class="text mb-1">% EoY</p>
                          @if(!empty($record))
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('noc')/ optional($record)->sum('target_eoy_noc') * 100, 1)}} %</h6>
                            @endif
                        </div>
                        <div class="col-4 text-center mb-3">
                        </div>
                      </div>
                    </div> <!-- .card-body -->
                  </div> <!-- .card -->
                </div> <!-- .col -->
                <div class="col-md-4 col-lg-4">
                  <div class="card shadow eq-card mb-4">
                    <div class="card-header">
                      <strong class="card-title">OS</strong>
                    </div>
                    <div class="card-body">
                      <div class="row items-align-center">
                        <div class="col-4 text-center mb-3">
                          <p class="text mb-1">OS</p>
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('os_actual'), 0, ',', '.')}}</h6>
                        </div>
                        <div class="col-4 text-center mb-3">
                          <p class="text mb-1">Target EoM</p>
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('target_eom_os'), 0, ',', '.')}}</h6>
                        </div>
                        <div class="col-4 text-center mb-3">
                          <p class="text mb-1">% EoM</p>
                          @if(!empty($record))
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('os_actual')/ optional($record)->sum('target_eom_os') * 100, 1)}} %</h6>
                            @endif
                        </div>
                      </div>
                      <div class="row items-align-center">
                        <div class="col-4 text-center mb-3">
                          <p class="text mb-1">Gap OS</p>
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('os_actual') - optional($record)->sum('target_eom_os'), 0, ',', '.')}}</h6>
                        </div>
                        <div class="col-4 text-center mb-3">
                          <p class="text mb-1">Growth</p>
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('os_actual') - optional($record)->sum('os_bln_lalu'), 0, ',', '.')}}</h6>
                        </div>
                        <div class="col-4 text-center mb-3">
                          <p class="text mb-1">Run Off (1 Minggu)</p>
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('runoff'), 0, ',', '.')}}</h6>
                        </div>
                        
                      </div>
                      <div class="row items-align-center">
                        <div class="col-4 text-center mb-3">
                          <p class="text mb-1">Run Off (1 Bulan)</p>
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('runoff')* 4, 0, ',', '.') }}</h6>
                        </div>
                        <div class="col-4 text-center mb-3">
                          <p class="text mb-1">Target EoY</p>
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('target_eoy_os'), 0, ',', '.')}}</h6>
                        </div>
                        <div class="col-4 text-center mb-3">
                          <p class="text mb-1">% EoY</p>
                          @if(!empty($record))
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('os_actual')/ optional($record)->sum('target_eoy_os') * 100, 1)}} %</h6>
                            @endif
                        </div>
                        <div class="col-4 text-center mb-3">
                          <p class="text mb-1">Lending</p>
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('penyaluran_plafond_kumulatif'), 0, ',', '.')}}</h6>
                        </div>
                        <div class="col-4 text-center mb-3">
                          <p class="text mb-1">Target EoY Lending</p>
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('rkap_des'), 0, ',', '.')}}</h6>
                        </div>

                      </div>
                    </div> <!-- .card-body -->
                  </div> <!-- .card -->
                </div> <!-- .col -->
                <div class="col-md-4 col-lg-4">
                  <div class="card shadow eq-card mb-4">
                    <div class="card-header">
                      <strong class="card-title">Kewajiban DRTD Mingguan dan UK-PNC Harian</strong>
                    </div>
                    <div class="card-body">
                      <div class="row items-align-center">
                        <div class="col-4 text-center mb-3">
                          <p class="text mb-1">DRTD (NoA)</p>
                          @if($record)
                          @php
                            $drtd_noa = ((optional($record)->sum('target_eoy_os') -  optional($record)->sum('os_actual')) / $record->first()->sisa_minggu_kerja_sd_des_23) + optional($record)->sum('runoff');
                          @endphp
                          <h6 class="mb-1">{{ number_format($drtd_noa/ 3000000, 0, ',', '.')}}</h6>
                          @endif
                        </div>
                        <div class="col-4 text-center mb-3">
                          <p class="text mb-1">DRTD (Rp)</p>
                          @if($record)
                          <h6 class="mb-1">{{ number_format(((optional($record)->sum('target_eoy_os') -  optional($record)->sum('os_actual')) / $record->first()->sisa_minggu_kerja_sd_des_23) + optional($record)->sum('runoff'), 0, ',', '.')}}</h6>
                          @endif
                        </div>
                        <div class="col-4 text-center mb-3">
                          <p class="text mb-1">UK & PNC AO (Harian)</p>
                          @if($record)
                          @php
                            $drtd_noa = ((optional($record)->sum('target_eoy_os') -  optional($record)->sum('os_actual')) / $record->first()->sisa_minggu_kerja_sd_des_23) + optional($record)->sum('runoff');
                          @endphp
                          <h6 class="mb-1">{{ number_format(($drtd_noa/ 3000000) / optional($record)->sum('jumlah_ao') / 5, 0, ',', '.')}}</h6>
                          @endif
                        </div>
                      </div>
                    </div> <!-- .card-body -->
                  </div> <!-- .card -->
                </div> <!-- .col -->
              </div> <!-- .row -->
              <div class="row">
                <div class="col-md-4 col-lg-4">
                  <div class="card shadow eq-card mb-4">
                    <div class="card-header">
                      <strong class="card-title">PAR</strong>
                    </div>
                    <div class="card-body">
                      <div class="row items-align-center">
                        <div class="col-4 text-center mb-3">
                          <p class="text mb-1">NoA PAR</p>
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('noa_par'), 0, ',', '.')}}</h6>
                        </div>
                        <div class="col-4 text-center mb-3">
                          <p class="text mb-1">Progress NoA PAR</p>
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('noa_par') - optional($record)->sum('noa_par_bln_lalu'), 0, ',', '.')}}</h6>
                        </div>
                        <div class="col-4 text-center mb-3">
                          <p class="text mb-1">% NoA PAR</p>
                          @if(!empty($record))
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('noa_par')/ optional($record)->sum('noa') * 100, 1)}} %</h6>
                            @endif
                        </div>
                      </div>
                      <div class="row items-align-center">
                        <div class="col-4 text-center mb-3">
                          <p class="text mb-1">OS PAR</p>
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('os_par'), 0, ',', '.')}}</h6>
                        </div>
                        <div class="col-4 text-center mb-3">
                          <p class="text mb-1">Progress OS PAR</p>
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('os_par') - optional($record)->sum('os_par_bln_lalu'), 0, ',', '.')}}</h6>
                        </div>
                        <div class="col-4 text-center mb-3">
                          <p class="text mb-1">% OS PAR</p>
                          @if(!empty($record))
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('os_par')/ optional($record)->sum('os_actual') * 100, 1)}} %</h6>
                            @endif
                        </div>
                      </div>
                      <div class="row items-align-center">
                        <div class="col-4 text-center mb-3">
                          <p class="text mb-1">% RR</p>
                          @if(!empty($record))
                          @php
                            $rr = 1 - (optional($record)->sum('os_par') / optional($record)->sum('os_actual'))
                          @endphp
                          <h6 class="mb-1">{{ number_format($rr * 100, 1) }} %</h6>
                          @endif
                        </div>
                        <div class="col-4 text-center mb-3">
                          <p class="text mb-1">Target EoY</p>
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('target_eom_par'), 0, ',', '.')}}</h6>
                        </div>
                        <div class="col-4 text-center mb-3">
                          <p class="text mb-1">% EoY</p>
                          @if(!empty($record))
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('target_eom_par')/ optional($record)->sum('os_par') * 100, 1)}} %</h6>
                            @endif
                        </div>
                      </div>
                    </div> <!-- .card-body -->
                  </div> <!-- .card -->
                </div> <!-- .col -->
                <div class="col-md-4 col-lg-4">
                  <div class="card shadow eq-card mb-4">
                    <div class="card-header">
                      <strong class="card-title">NPL</strong>
                    </div>
                    <div class="card-body">
                      <div class="row items-align-center">
                        <div class="col-4 text-center mb-3">
                          <p class="text mb-1">NoA NPL</p>
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('noa_npl'), 0, ',', '.')}}</h6>
                        </div>
                        <div class="col-4 text-center mb-3">
                          <p class="text mb-1">Progress NoA NPL</p>
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('noa_npl') - optional($record)->sum('noa_npl_bln_lalu'), 0, ',', '.')}}</h6>
                        </div>
                        <div class="col-4 text-center mb-3">
                          <p class="text mb-1">% NoA NPL</p>
                          @if(!empty($record))
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('noa_npl')/ optional($record)->sum('noa') * 100, 1)}} %</h6>
                            @endif
                        </div>
                      </div>
                      <div class="row items-align-center">
                        <div class="col-4 text-center mb-3">
                          <p class="text mb-1">OS NPL</p>
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('os_npl'), 0, ',', '.')}}</h6>
                        </div>
                        <div class="col-4 text-center mb-3">
                          <p class="text mb-1">Progress OS NPL</p>
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('os_npl') - optional($record)->sum('os_npl_bln_lalu'), 0, ',', '.')}}</h6>
                        </div>
                        <div class="col-4 text-center mb-3">
                          <p class="text mb-1">% OS NPL</p>
                          @if(!empty($record))
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('os_npl')/ optional($record)->sum('os_actual') * 100, 1)}} %</h6>
                            @endif
                        </div>
                      </div>
                      <div class="row items-align-center">
                        <div class="col-4 text-center mb-3">
                          <p class="text mb-1">Target EoY</p>
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('target_eom_npl'), 0, ',', '.')}}</h6>
                        </div>
                        <div class="col-4 text-center mb-3">
                          <p class="text mb-1">% EoY</p>
                          @if(!empty($record) && ($record->sum('os_npl') != 0))
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('target_eom_npl') / optional($record)->sum('os_npl') * 100, 1)}} %</h6>
                          @else
                          <h6 class="mb-1">0 %</h6>
                          @endif
                        </div>
                        <div class="col-4 text-center mb-3">
                        </div>
                      </div>
                    </div> <!-- .card-body -->
                  </div> <!-- .card -->
                </div> <!-- .col -->
                <div class="col-md-4 col-lg-4">
                  <div class="card shadow eq-card mb-4">
                    <div class="card-header">
                      <strong class="card-title">PKM</strong>
                    </div>
                    <div class="card-body">
                      <div class="row items-align-center">
                        <div class="col-4 text-center mb-3">
                          <p class="text mb-1">PKM</p>
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('pkm'), 0, ',', '.')}}</h6>
                        </div>
                        <div class="col-4 text-center mb-3">
                          <p class="text mb-1">Anggota > 30</p>
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('pkm_gt_30'), 0, ',', '.') ?? null}}</h6>
                        </div>
                        <div class="col-4 text-center mb-3">
                          <p class="text mb-1">Anggota < 10</p>
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('pkm_lt_10'), 0, ',', '.') ?? null}}</h6>
                        </div>
                        <div class="col-4 text-center mb-3">
                          <p class="text mb-1">Anggota 10 - 30</p>
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('pkm_10_30'), 0, ',', '.') ?? null}}</h6>
                        </div>
                      </div>
                    </div> <!-- .card-body -->
                  </div> <!-- .card -->
                </div> <!-- .col -->
              </div> <!-- .row -->
              <div class="row">
                <div class="col-md-4 col-lg-4">
                  <div class="card shadow eq-card mb-4">
                    <div class="card-header">
                      <strong class="card-title">SDM</strong>
                    </div>
                    <div class="card-body">
                      <div class="row items-align-center">
                        <div class="col-12 text-center mb-3">
                          <p class="text mb-1">AO</p>
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('jumlah_ao'), 0, ',', '.')}}</h6>
                        </div>
                        <div class="col-12 text-center mb-3">
                          <p class="text mb-1">FAO</p>
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('fao'), 0, ',', '.')}}</h6>
                        </div>
                        <div class="col-12 text-center mb-3">
                          <p class="text mb-1">SAO</p>
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('sao'), 0, ',', '.')}}</h6>
                        </div>
                      </div>
                      <div class="row items-align-center">
                        <div class="col-12 text-center mb-3">
                        </div>
                        <div class="col-12 text-center mb-3">
                          <p class="text mb-1">KUM</p>
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('kum'), 0, ',', '.')}}</h6>
                        </div>
                        <div class="col-12 text-center mb-3">
                        </div>
                      </div>
                     
                    </div> <!-- .card-body -->
                  </div> <!-- .card -->
                </div> <!-- .col -->
                <div class="col-md-4 col-lg-4">
                  <div class="card shadow eq-card mb-4">
                    <div class="card-header">
                      <strong class="card-title">SDM</strong>
                    </div>
                    <div class="card-body">
                      <div class="row items-align-center">
                        <div class="col-12 text-center mb-3">
                          <p class="text mb-1">Keb. AO</p>
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('kebutuhan_ao'), 0, ',', '.')}}</h6>
                        </div>
                        <div class="col-12 text-center mb-3">
                          <p class="text mb-1">Keb. FAO</p>
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('kebutuhan_fao'), 0, ',', '.')}}</h6>
                        </div>
                        <div class="col-12 text-center mb-3">
                          <p class="text mb-1">Keb. SAO</p>
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('kebutuhan_sao'), 0, ',', '.')}}</h6>
                        </div>
                      </div>
                      <div class="row items-align-center">
                        <div class="col-12 text-center mb-3">
                        </div>
                        <div class="col-12 text-center mb-3">
                          <p class="text mb-1">Keb. KUM</p>
                          <h6 class="mb-1">{{ number_format(optional($record)->sum('kebutuhan_kum'), 0, ',', '.')}}</h6>
                        </div>
                        <div class="col-12 text-center mb-3">
                        </div>
                      </div>
                      
                    </div> <!-- .card-body -->
                  </div> <!-- .card -->
                </div> <!-- .col -->
                <div class="col-md-4 col-lg-4">
                  <div class="card shadow eq-card mb-4">
                    <div class="card-header">
                      <strong class="card-title">Additional Menu</strong>
                    </div>
                    <div class="card-body">
                      <div class="row items-align-center">
                        @if($request->unit)
                        <div class="col-12 text-center mb-3">
                          <a href="https://rbm.pnmdenpasar.com/" class="btn btn-dark" role="button" target="_blank">&nbsp;&nbsp;Create RBM (Bulanan)&nbsp;&nbsp;</a>
                        </div>
                        @elseif($request->area)
                        <div class="col-12 text-center mb-3">
                          <a href="https://rbm.pnmdenpasar.com/" class="btn btn-dark" role="button" target="_blank">&nbsp;&nbsp;Create RBM (Bulanan)&nbsp;&nbsp;</a>
                        </div>
                        @elseif($request->region)
                        <div class="col-12 text-center mb-3">
                          <a href="https://rbm.pnmdenpasar.com/" class="btn btn-dark" role="button" target="_blank">&nbsp;&nbsp;Create RBM (Bulanan)&nbsp;&nbsp;</a>
                        </div>
                        <div class="col-12 text-center mb-3">
                          <a href="https://bit.ly/PlanPencairanMekaar" class="btn btn-dark" role="button" target="_blank">Inputan Plan PNC (MRM)</a>
                        </div>
                        @elseif($request->region_all)
                        <div class="col-12 text-center mb-3">
                          <a href="https://rbm.pnmdenpasar.com/" class="btn btn-dark" role="button" target="_blank">&nbsp;&nbsp;Create RBM (Bulanan)&nbsp;&nbsp;</a>
                        </div>
                        @endif
                        
                      </div>
                      
                    </div> <!-- .card-body -->
                  </div> <!-- .card -->
                </div> <!-- .col -->
              </div> <!-- .row -->
            </div> <!-- .col-12 -->
          </div> <!-- .row -->
        </div> <!-- .container-fluid -->
      </main> <!-- main -->
    </div> <!-- .wrapper -->
    
    <!-- Example of a loading animation -->
    <div id="loadingAnimation">
        <div class="loader"></div>
    </div>

    
    <script src="{{ URL::asset('js/jquery.min.js')}}"></script>
    <script src="{{ URL::asset('js/popper.min.js')}}"></script>
    <script src="{{ URL::asset('js/moment.min.js')}}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ URL::asset('js/simplebar.min.js')}}"></script>
    <script src="{{ URL::asset('js/daterangepicker.js')}}"></script>
    <script src="{{ URL::asset('js/jquery.stickOnScroll.js')}}"></script>
    <script src="{{ URL::asset('js/tinycolor-min.js')}}"></script>
    <script src="{{ URL::asset('js/config.js')}}"></script>
    <script src="{{ URL::asset('js/d3.min.js')}}"></script>
    <script src="{{ URL::asset('js/topojson.min.js')}}"></script>
    <script src="{{ URL::asset('js/datamaps.all.min.js')}}"></script>
    <script src="{{ URL::asset('js/datamaps-zoomto.js')}}"></script>
    <script src="{{ URL::asset('js/datamaps.custom.js')}}"></script>
    <script src="{{ URL::asset('js/Chart.min.js')}}"></script>
    <script>
      /* defind global options */
      Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
      Chart.defaults.global.defaultFontColor = colors.mutedColor;
    </script>
    <script src="{{ URL::asset('js/gauge.min.js')}}"></script>
    <script src="{{ URL::asset('js/jquery.sparkline.min.js')}}"></script>
    <script src="{{ URL::asset('js/apexcharts.min.js')}}"></script>
    <script src="{{ URL::asset('js/apexcharts.js')}}"></script>
    <script src="{{ URL::asset('js/apexcharts.custom.js')}}"></script>
    <script src="{{ URL::asset('js/jquery.mask.min.js') }}"></script>
    <script src="{{ URL::asset('js/select2.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.steps.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.timepicker.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.dataTables.min.js')  }}"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="{{ URL::asset('js/dropzone.min.js') }}"></script>
    <script src="{{ URL::asset('js/uppy.min.js') }}"></script>
    <script src="{{ URL::asset('js/quill.min.js') }}"></script>
    <script>
      $(window).on('load', function() {
          $('#loadingAnimation').fadeOut('slow'); // Hides the loading animation
          $('#loadingAnimation').hide();
          console.log('1');
      });
      </script>
    <script>
      // Cabang DPS, Region, Area, Unit
        $(document).ready(function() {
            $('#select-cabang').on('change', function() {
                var selectedCabang = $(this).val();
                $.ajax({
                    url: "{{ route('pilih-region') }}", // Laravel route
                    type: 'GET',
                    data: { region: selectedCabang },
                    success: function(data) {
                        $('#select-region').html(data); // Update the Area dropdown
                    }
                });
            });
            $('#select-region').on('change', function() {
                var selectedRegion = $(this).val();
                $.ajax({
                    url: "{{ route('pilih-area') }}", // Laravel route
                    type: 'GET',
                    data: { region: selectedRegion },
                    success: function(data) {
                        $('#select-area').html(data); // Update the Area dropdown
                    }
                });
            });

            $('#select-area').on('change', function() {
                var selectedArea = $(this).val();
                $.ajax({
                    url: "{{ route('pilih-unit') }}", // Laravel route
                    type: 'GET',
                    data: { area: selectedArea },
                    success: function(data) {
                        $('#select-unit').html(data); // Update the Area dropdown
                    }
                });
            });
            // Similar for other dropdowns
        });
    </script>
    <script>
      $('.select2').select2(
      {
        placeholder: "Pilih Salah Satu",
        theme: 'bootstrap4',
      });
      $('.select5').select2(
      {
        placeholder: "Pilih Salah Satu",
        theme: 'bootstrap4',
      });
      $('.select3').select2(
      {
        placeholder: "Pilih Salah Satu",
        theme: 'bootstrap4',
      });

      $('.select4').select2(
      {
        placeholder: "Pilih Salah Satu",
        theme: 'bootstrap4',
      });
      $('.select2-multi').select2(
      {
        multiple: true,
        theme: 'bootstrap4',
      });
      $('.drgpicker').daterangepicker(
      {
        singleDatePicker: true,
        timePicker: false,
        showDropdowns: true,
        locale:
        {
          format: 'MM/DD/YYYY'
        }
      });
      $('.time-input').timepicker(
      {
        'scrollDefault': 'now',
        'zindex': '9999' /* fix modal open */
      });
      /** date range picker */
      if ($('.datetimes').length)
      {
        $('.datetimes').daterangepicker(
        {
          timePicker: true,
          startDate: moment().startOf('hour'),
          endDate: moment().startOf('hour').add(32, 'hour'),
          locale:
          {
            format: 'M/DD hh:mm A'
          }
        });
      }
      var start = moment().subtract(29, 'days');
      var end = moment();
      function cb(start, end)
      {
        $('#reportrange span').html(end.format('dddd, D MMMM, YYYY', 'id'));
      }
      $('#reportrange').daterangepicker(
      {
        startDate: start,
        endDate: end,
        ranges:
        {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
      }, cb);
      cb(start, end);
      $('.input-placeholder').mask("00/00/0000",
      {
        placeholder: "__/__/____"
      });
      $('.input-zip').mask('00000-000',
      {
        placeholder: "____-___"
      });
      $('.input-money').mask("#.##0,00",
      {
        reverse: true
      });
      $('.input-phoneus').mask('(000) 000-0000');
      $('.input-mixed').mask('AAA 000-S0S');
      $('.input-ip').mask('0ZZ.0ZZ.0ZZ.0ZZ',
      {
        translation:
        {
          'Z':
          {
            pattern: /[0-9]/,
            optional: true
          }
        },
        placeholder: "___.___.___.___"
      });
      // editor
      var editor = document.getElementById('editor');
      if (editor)
      {
        var toolbarOptions = [
          [
          {
            'font': []
          }],
          [
          {
            'header': [1, 2, 3, 4, 5, 6, false]
          }],
          ['bold', 'italic', 'underline', 'strike'],
          ['blockquote', 'code-block'],
          [
          {
            'header': 1
          },
          {
            'header': 2
          }],
          [
          {
            'list': 'ordered'
          },
          {
            'list': 'bullet'
          }],
          [
          {
            'script': 'sub'
          },
          {
            'script': 'super'
          }],
          [
          {
            'indent': '-1'
          },
          {
            'indent': '+1'
          }], // outdent/indent
          [
          {
            'direction': 'rtl'
          }], // text direction
          [
          {
            'color': []
          },
          {
            'background': []
          }], // dropdown with defaults from theme
          [
          {
            'align': []
          }],
          ['clean'] // remove formatting button
        ];
        var quill = new Quill(editor,
        {
          modules:
          {
            toolbar: toolbarOptions
          },
          theme: 'snow'
        });
      }
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function()
      {
        'use strict';
        window.addEventListener('load', function()
        {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form)
          {
            form.addEventListener('submit', function(event)
            {
              if (form.checkValidity() === false)
              {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
    <script>
      var uptarg = document.getElementById('drag-drop-area');
      if (uptarg)
      {
        var uppy = Uppy.Core().use(Uppy.Dashboard,
        {
          inline: true,
          target: uptarg,
          proudlyDisplayPoweredByUppy: false,
          theme: 'dark',
          width: 770,
          height: 210,
          plugins: ['Webcam']
        }).use(Uppy.Tus,
        {
          endpoint: 'https://master.tus.io/files/'
        });
        uppy.on('complete', (result) =>
        {
          console.log('Upload complete! We’ve uploaded these files:', result.successful)
        });
      }
    </script>
    <script src="js/apps.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag()
      {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-56159088-1');
    </script>
  </body>
</html>