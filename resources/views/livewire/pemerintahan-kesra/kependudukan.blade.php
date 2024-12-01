<?php

?>
<div>

    <div class="slim-mainpanel">
        <div class="container-fluid pd-t-20">
            <div class="row row-xs mg-b-20">
                <div class="col-12">
                    <div class="ht-md-60 pd-x-20 bg-primary d-flex align-items-center justify-content-center">
                        @livewire('pemerintahan-kesra.navigation')
                    </div>

                    <div class="card-body bd bd-t-0">
                        <div class="tab-content">
                            <div class="tab-pane active" id="kependudukan">
                                <div class="row row-xs mg-b-20">
                                    <div class="col-sm-6 col-lg-4 mg-t-10">
                                        <div class="card card-status bg-body-custom-ungu">
                                            <div class="media">
                                                <i class="icon ion-ios-location tx-purple"></i>
                                                <div class="media-body">
                                                    <h1>32,604</h1>
                                                    <p class="fs-16">Luas Wilayah (km2)</p>
                                                </div><!-- media-body -->
                                            </div><!-- media -->
                                        </div><!-- card -->
                                    </div><!-- col-3 -->
                                    <div class="col-sm-6 col-lg-4 mg-t-10 ">
                                        <div class="card card-status bg-body-custom-ungu">
                                            <div class="media">
                                                <i class="icon ion-person tx-teal"></i>
                                                <div class="media-body">
                                                    <h1>17,583</h1>
                                                    <p class="fs-16">Jumlah KK</p>
                                                </div><!-- media-body -->
                                            </div><!-- media -->
                                        </div><!-- card -->
                                    </div><!-- col-3 -->
                                    <div class="col-sm-6 col-lg-4 mg-t-10">
                                        <div class="card card-status bg-body-custom-ungu">
                                            <div class="media">
                                                <i class="icon ion-ios-body-outline tx-danger"></i>
                                                <div class="media-body">
                                                    <h1>61,119</h1>
                                                    <p class="fs-16">Jumlah Penduduk (jiwa)</p>
                                                </div><!-- media-body -->
                                            </div><!-- media -->
                                        </div><!-- card -->
                                    </div><!-- col-3 -->
                                </div>

                                <div class="row row-xs">
                                    <div class="col-12 col-lg-4 mg-t-10 mg-lg-t-0">
                                        <div class="card card-activities pd-20">
                                            <h6 class="slim-card-title">Perbandingan Jenis Kelamin</h6>
                                            <div class="bd pd-t-30 pd-b-20 pd-x-20">
                                                <div style="width: 100%; height:400px">
                                                    @if(isset($this->dataJenisKelamin))
                                                    <livewire:livewire-pie-chart
                                                        key="{{ $chartJenisKelamin->reactiveKey() }}"
                                                        :pie-chart-model="$chartJenisKelamin" />
                                                    @else
                                                    @livewire('components.loading')
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <span class="ref">Sumber Data : Aplikasi Sidesi</span>
                                            </div>
                                        </div><!-- card -->
                                    </div>

                                    <div class="col-12 col-lg-8">
                                        <div class="card card-activities pd-20">
                                            <h6 class="slim-card-title">Penduduk Per Kecamatan <i
                                                    class="fa fa-info-circle ms-2"></i></h6>
                                            <div class="bd pd-t-30 pd-b-20 pd-x-20">

                                                <div style="width: 100%; height:400px">
                                                    @if(isset($this->dataJenisKelamin))
                                                    <livewire:livewire-column-chart
                                                        key="{{ $chartPendudukKecamatan->reactiveKey() }}"
                                                        :column-chart-model="$chartPendudukKecamatan" />
                                                    @else
                                                    @livewire('components.loading')
                                                    @endif
                                                </div>

                                            </div>
                                            <div class="card-footer">
                                                <span class="ref">Sumber Data : Aplikasi Sidesi</span>
                                            </div>
                                        </div><!-- card -->
                                    </div><!-- col-3 -->
                                </div>

                                <div class="row mg-t-10">
                                    <div class="col-12 mg-t-10 mg-lg-t-0">
                                        <div class="card card-activities pd-20">
                                            <h6 class="slim-card-title mg-b-20">Penduduk Menurut Agama <i
                                                    class="fa fa-info-circle"></i></h6>
                                            <div class="row row-sm">
                                                <div class="col-12">
                                                    <div class="card card-sales bg-mantle">
                                                        <div class="row">
                                                            <div class="col">
                                                                <label class="fs-16 tx-white-8">Islam</label>
                                                                <p class="fs-32">1,898</p>
                                                            </div><!-- col -->
                                                            <div class="col">
                                                                <label class="fs-16 tx-white-8 ">Katolik</label>
                                                                <p class="fs-32">32,112</p>
                                                            </div><!-- col -->
                                                            <div class="col">
                                                                <label class="fs-16 tx-white-8">Protestan</label>
                                                                <p class="fs-32">72,067</p>
                                                            </div><!-- col -->
                                                            <div class="col">
                                                                <label class="fs-16 tx-white-8">Hindu</label>
                                                                <p class="fs-32">72,067</p>
                                                            </div><!-- col -->
                                                            <div class="col">
                                                                <label class="fs-16 tx-white-8">Budha</label>
                                                                <p class="fs-32">72,067</p>
                                                            </div><!-- col -->
                                                            <div class="col">
                                                                <label class="fs-16 tx-white-8">Konghucu</label>
                                                                <p class="fs-32">72,067</p>
                                                            </div><!-- col -->
                                                        </div><!-- row -->
                                                    </div><!-- card -->
                                                </div><!-- col-4 -->
                                            </div><!-- row -->
                                            <div class="card-footer">
                                                <span class="ref">Sumber Data : Aplikasi Sidesi</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card card-quick-post mg-t-10">
                                            <h6 class="slim-card-title">Penduduk Menurut Jenis Pekerjaan</h6>

                                            <div class="bd pd-t-30 pd-b-20 pd-x-20">

                                                <div style="width: 100%; height:400px">
                                                    @if(isset($this->dataJenisKelamin))
                                                    <livewire:livewire-column-chart
                                                        key="{{ $chartJenisPekerjaan->reactiveKey() }}"
                                                        :column-chart-model="$chartJenisPekerjaan" />
                                                    @else
                                                    @livewire('components.loading')
                                                    @endif
                                                </div>

                                            </div>
                                            <div class="card-footer">
                                                <span class="ref">Sumber Data : Aplikasi Sidesi</span>
                                            </div>
                                        </div><!-- card -->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card card-quick-post mg-t-10">
                                            <h6 class="slim-card-title">Penduduk Menurut Umur</h6>
                                            <div class="bd pd-t-30 pd-b-20 pd-x-20">

                                                <div style="width: 100%; height:400px">
                                                    @if(isset($this->dataJenisKelamin))
                                                    <livewire:livewire-column-chart
                                                        key="{{ $chartUmur->reactiveKey() }}"
                                                        :column-chart-model="$chartUmur" />
                                                    @else
                                                    @livewire('components.loading')
                                                    @endif
                                                </div>

                                            </div>
                                            <div class="card-footer">
                                                <span class="ref">Sumber Data : Aplikasi Sidesi</span>
                                            </div>
                                        </div><!-- card -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('styles')
    <style>
        #map {
            width: 100%;
            height: 80vh;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
        }
    </style>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    @endpush

    @push('scripts')
    {{-- <script src="{{ asset('assets/js/dashboard-opd/kependudukan.js') }}"></script> --}}

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="{{ asset('assets/js/dashboard-opd/penduduk.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard-opd/map.js') }}"></script>


    <script>
        var info = L.control();
    var kobar = {
      lat: -3.345196,
      lng: 104.670997
    };

    // Initialize the map
    var kobar_map = L.map('map', {
      center: kobar,
      zoom: 10,
      scrollWheelZoom: true,
      doubleClickZoom: false
    });

    // Set the tile layer
    var tilemap = [
      'https://server.arcgisonline.com/ArcGIS/rest/services/World_Street_Map/MapServer/tile/{z}/{y}/{x}',
      'https://server.arcgisonline.com/ArcGIS/rest/services/World_Topo_Map/MapServer/tile/{z}/{y}/{x}',
      'https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}',
      'https://portal.ina-sdi.or.id/arcgis/rest/services/RBI/Basemap/MapServer/tile/{z}/{y}/{x}',
      'https://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',
      'https://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}',
      'https://a.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png',
      'https://maps.wikimedia.org/osm-intl/{z}/{x}/{y}.png',
      'https://a.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png'
    ];
    var baseon = 4;

    // Set the base map
    function setMap() {
      L.tileLayer(tilemap[baseon], {
        maxZoom: 20,
        attribution: '',
        subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
      }).addTo(kobar_map);

      // Add the polygon to the map
      var polygon = L.polygon([
        [-3.556695, 104.437781],
        [-3.562177, 104.414436],
        [-3.584107, 104.403449],
        [-3.621113, 104.319678],
        [-3.596443, 104.305946],
        [-3.496384, 104.299079],
        [-3.493643, 104.443275],
        [-3.422362, 104.450141],
        [-3.422362, 104.463874],
        [-3.403170, 104.466621],
        [-3.349705, 104.536658],
        [-3.318172, 104.540778],
        [-3.319543, 104.529792],
        [-3.300349, 104.525672],
        [-3.260589, 104.547645],
        [-3.256476, 104.560004],
        [-3.235910, 104.572364],
        [-3.215343, 104.562751],
        [-3.193405, 104.507819],
        [-3.145413, 104.489967],
        [-3.120731, 104.477607],
        [-3.085077, 104.507819],
        [-3.091934, 104.581977],
        [-3.101533, 104.606696],
        [-3.111132, 104.620429],
        [-3.050794, 104.691840],
        [-3.068714, 104.715512],
        [-3.097146, 104.719316],
        [-3.070577, 104.730719],
        [-3.063745, 104.743642],
        [-3.047804, 104.742882],
        [-3.037176, 104.751244],
        [-3.033380, 104.781653],
        [-3.050081, 104.781653],
        [-3.054636, 104.798377],
        [-3.073614, 104.793056],
        [-3.082723, 104.806739],
        [-3.116882, 104.799897],
        [-3.131887, 104.793535],
        [-3.130638, 104.812302],
        [-3.164367, 104.814804],
        [-3.183970, 104.799735],
        [-3.217816, 104.814566],
        [-3.265057, 104.807504],
        [-3.297491, 104.799735],
        [-3.308771, 104.812447],
        [-3.333448, 104.816685],
        [-3.348253, 104.806798],
        [-3.355304, 104.818097],
        [-3.454001, 104.813860],
        [-3.485018, 104.741118],
        [-3.464575, 104.707219],
        [-3.802178, 104.561736],
        [-3.783856, 104.499588],
        [-3.757782, 104.460746],
        [-3.773286, 104.464277],
        [-3.782447, 104.408485],
        [-3.762715, 104.376705],
        [-3.755668, 104.383061],
        [-3.734527, 104.372467],
        [-3.719022, 104.374586],
        [-3.671099, 104.450859],
        [-3.610486, 104.478402],
        [-3.563966, 104.438853],
      ]).addTo(kobar_map).bindPopup('Peta Wilayah Ogan Ilir');
    }
    setMap();

    // Define custom marker icons
    var blueIcon = new L.Icon({
      iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-blue.png',
      shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
      iconSize: [25, 41],
      iconAnchor: [12, 41],
      popupAnchor: [1, -34],
      shadowSize: [41, 41]
    });

    // Add a marker with a popup
    var marker = L.marker([-3.2360136236357704, 104.66542011707496], {
      icon: blueIcon
    }).addTo(kobar_map);

    marker.bindPopup('<p>Location: <br> Latitude: -3.2360136236357704 <br> Longitude: 104.66542011707496</p>');
    $(document).on('show.tab', 'a[data-toggle="tab"]', function (e) {
      var target = $(e.target).attr('href');
      var petaIdl = target.split('_')[2];
      var tripId = target.split('_')[3];

      var map = window[mapId];
      if (map) {
        map.setView([-3.247523, 104.661723], 14.5);
        map.invalidateSize();
      } else {
        var mapElement = $(target).find('div[id^="map"]');
        if (mapElement.length) {
          mapElement = mapElement[0];
          map = window[mapElement.id];
          map.setView([-3.247523, 104.661723], 14.5);
          map.invalidateSize();
        }
      }
    })
    </script>

    <script>
        $(document).ready(function () {
      $('.select2-show-search').select2({
        placeholder: function () {
          $(this).data('placeholder');
        },
        allowClear: true
      });
    });
    </script>
    @endpush
</div>
