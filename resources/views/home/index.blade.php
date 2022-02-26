@extends('template/header')

@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <!-- top tiles -->
        <div class="row" style="display: inline-block;" >
        <div class="tile_count"> 
        </div>
      </div>
        <!-- /top tiles -->

        
            <!-- page content -->
            <div class="fa fa-left" role="main">
              <div class="">
                <div class="page-title">
                  <div class="title_left">
                    <h3>Laundry Angellist</h3>
                  </div>

                  <div class="title_right">
                    <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="button">Go!</button>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="clearfix"></div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="x_panel">
                      <div class="x_title">
                        <h2>Laundry Angellist <small>Layanan Jasa Laundry Kiloan Murah, Gratis Antar Jemput Semarang Kota</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                          </li>
                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Settings 1</a>
                                <a class="dropdown-item" href="#">Settings 2</a>
                              </div>
                          </li>
                          <li><a class="close-link"><i class="fa fa-close"></i></a>
                          </li>
                        </ul>
                        <div class="clearfix"></div>
                      </div>
                      <div class="x_content">

                        <div class="col-md-8 col-lg-8 col-sm-7">
                          <!-- blockquote -->
                          <blockquote>
                            <p>LA Laundry menawarkan layanan jasa laundry kiloan express. Kami siap antar jemput cucian Anda untuk wilayah Cianjur kota, sekitar Simpang Lima, Pandanaran, Tugu Muda, dan daerah pusat kota Semarang lainnya.</p>
                            <p>Dalam cuaca apapun, cucian tetap kering, bersih, wangi, dan bebas jamur. Kami memperhatikan kebersihan setiap pakaian yang Anda percayakan dengan tidak mencampurnya dengan pakaian dari customer lain.</p>
                            <p>Kami menggunakan deterjen bermerek (bukan oplosan) membuat pakaian Anda lebih bersih dan wangi.</p>
                            <footer class="container"><h2><cite title="Source Title">Laundry Kiloan Murah, Gratis Antar Jemput Semarang Kota:</cite></h2>
                            </footer>
                          </blockquote>

                          <blockquote class="blockquote-reverse">

                            <table class="table">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>First Name</th>
                                  <th>Last Name</th>
                                  <th>Username</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Mark</td>
                                  <td>Otto</td>
                                  <td>@mdo</td>
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                  <td>Jacob</td>
                                  <td>Thornton</td>
                                  <td>@fat</td>
                                </tr>
                                <tr>
                                  <th scope="row">3</th>
                                  <td>Larry</td>
                                  <td>the Bird</td>
                                  <td>@twitter</td>
                                </tr>
                              </tbody>
                            </table>
                          </blockquote>
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-5">
                         
                        </div>

                        <div class="clearfix">
                          <img src="{{asset('assets')}}/build/images/logo.jpg" alt="" class="mt-5">
                        </div>

                        <div class="col-md-12">
                          <h4>(LA) Laundry Angellist</h4>
                          <p class="mt-4"><a href="" class="fa fa-map-marker">    Jalan Wiroto I No.17, Krobokan. Semarang 50141</a> </p>
                          <p>SMS // WA 0821 3656 7134</p>
                          <span class="badge badge-primary">Primary</span>
                          <span class="badge badge-secondary">Secondary</span>
                          <span class="badge badge-success">Success</span>
                          <span class="badge badge-danger">Danger</span>
                          <span class="badge badge-warning">Warning</span>
                          <span class="badge badge-info">Info</span>
                          <span class="badge badge-light">Light</span>
                          <span class="badge badge-dark">Dark</span>
                          <span class="badge bg-green">42</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /page content -->


      
      
@endsection