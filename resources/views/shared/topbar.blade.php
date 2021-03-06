
<header id="id">

  <nav class="navbar navbar-default">

    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    </div>

    <div class="collapse navbar-collapse js-navbar-collapse">
      
      <!-- start menu -->

      @foreach($treecat as $tc)
      <ul class="nav navbar-nav">
        <li class="dropdown mega-dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{$tc->name}}
      &nbsp;&nbsp;<span class="caret gi-1x"></span></a>

          <ul class="dropdown-menu mega-dropdown-menu">
            <li class="col-sm-3">
              <ul>
                <li class="dropdown-header">New in Stores</li>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="item active">
                      <a href="#"><img src="http://placehold.it/254x150/3498db/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 1"></a>
                      <h4><small>Summer dress floral prints</small></h4>
                      <button class="btn btn-primary" type="button">49,99 €</button>
                      <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>
                    </div>
                    <!-- End Item -->
                    <div class="item">
                      <a href="#"><img src="http://placehold.it/254x150/ef5e55/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 2"></a>
                      <h4><small>Gold sandals with shiny touch</small></h4>
                      <button class="btn btn-primary" type="button">9,99 €</button>
                      <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>
                    </div>
                    <!-- End Item -->
                    <div class="item">
                      <a href="#"><img src="http://placehold.it/254x150/2ecc71/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 3"></a>
                      <h4><small>Denin jacket stamped</small></h4>
                      <button class="btn btn-primary" type="button">49,99 €</button>
                      <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>
                    </div>
                    <!-- End Item -->
                  </div>
                  <!-- End Carousel Inner -->
                </div>
                <!-- /.carousel -->
                <li class="divider"></li>
                <li><a href="{{url('products')}}">View all Category <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
              </ul>
            </li>



             <li class="col-sm-3">
                <ul>
                    <li class="dropdown-header">
                    {{$tc->name}}
                     
                     @foreach($tc->subcat as $sc)
                    <li>
                      <a href="#">{{$sc->name}}</a>
                    </li>
                    @endforeach
                    <!-- product -->
                    
                    <li class="divider"></li>
                  </li>
                </ul>
            </li>

            <li class="col-sm-3">
              <ul>
                <li class="dropdown-header">Newsletter</li>
                <form class="form" role="form">
                  <div class="form-group">
                    <label class="sr-only" for="email">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email">
                  </div>
                  <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                </form>
              </ul>
            </li>

          </ul>

        </li>
      </ul>
      @endforeach
     <!-- end menu -->
    
      
      <!-- comparison -->
       <ul class="nav navbar-nav">
              
                <li class="dropdown mega-dropdown">
             
                <a id="compare" href="#animatedModal" disabled class="compare-products">
                <i class="fa fa-bar-chart fa-1x" aria-hidden="true"></i>Compare 
                </a>
              </li>
          
        </ul>
        <!-- compare -->
    
    </div>
  <!-- /.nav-collapse -->
  </nav>
</header>



<div class="row"><!--category-tab-->

            <div class="col-sm-12">
                  <div class="panel with-nav-tabs panel-default">

                      <div class="panel-heading">
                              <ul class="nav nav-tabs">
                                  <li class="active"><a href="#highlights" data-toggle="tab">HIGHLIGHTS</a></li>
                                  <li><a href="#shop_brands" data-toggle="tab">&nbsp;&nbsp;&nbsp;SHOP BRANDS</a>                                                      <img src="images/home/new.png" class="new" alt="" />
</li>

                                  <li><a href="#shop_categories" data-toggle="tab">SHOP CATEGORIES</a></li>
                                  <li><a href="#cny_offers" data-toggle="tab">CNY OFFERS</a></li>
                              </ul>
                      </div>

                     
                      <div class="panel-body2">
                          <div class="tab-content">

                           <div class="tab-pane fade in active" id="highlights">
                              
                                <!-- Lightbox -->
                                <div class="col-md-3 col-sm-12 co-xs-12 gal-item" style="height: 350px">
                                    <div class="box">
                                      <a href="http://www.google.com">
                                          <img src="images/home/highlights/1.png"  alt="" />
                                      </a>

                                    </div>
                                  </div>
                                  <div class="col-md-4 col-sm-12 co-xs-12 gal-item" style="height: 175px">
                                    <div class="box">
                                      <a href="#">
                                          <img src="images/home/highlights/2.png"  alt="" />
                                      </a>
                                    </div>
                                  </div>
                                  <div class="col-md-3 col-sm-6 co-xs-12 gal-item" style="height: 175px">
                                    <div class="box">
                                      <a href="#">
                                          <img src="images/home/highlights/3.png"  alt="" />
                                      </a>
                                      
                                    </div>
                                  </div>
                                  <div class="col-md-2 col-sm-6 co-xs-12 gal-item" style="height: 175px">
                                    <div class="box">
                                      <a href="#">
                                          <img src="images/home/highlights/7.png"  alt="" />
                                      </a>
                                  
                                    </div>
                                  </div>
                                  <div class="col-md-4 col-sm-6 co-xs-12 gal-item" style="height: 175px">
                                    <div class="box">
                                      <a href="#">
                                          <img src="images/home/highlights/5.png"  alt="" />
                                      </a>
                                   
                                    </div>
                                  </div>
                                 
                                  <div class="col-md-5 col-sm-6 co-xs-12 gal-item" style="height: 175px">
                                    <div class="box">
                                      <a href="#">
                                          <img src="images/home/highlights/6.png"  alt="" />
                                      </a>
                                     
                                    </div>
                                  </div>
                             
                                 <div class="col-md-2 col-sm-12 co-xs-12 gal-item" style="height: 175px">
                                    <div class="box">
                                      <a href="#">
                                          <img src="images/home/highlights/8.png"  alt="" />
                                      </a>
                                    
                                    </div>
                                  </div>
                               
                                 <div class="col-md-3 col-sm-12 co-xs-12 gal-item" style="height: 175px">
                                    <div class="box">
                                      <a href="#">
                                          <img src="images/home/highlights/11.png"  alt="" />
                                      </a>
                                    
                                    </div>
                                  </div>
                                  <div class="col-md-5 col-sm-12 co-xs-12 gal-item" style="height: 175px">
                                    <div class="box">
                                      <a href="#">
                                          <img src="images/home/highlights/4.png"  alt="" />
                                      </a>
                                    
                                    </div>
                                  </div>
                                     <div class="col-md-2 col-sm-12 co-xs-12 gal-item" style="height: 175px">
                                    <div class="box">
                                      <a href="#">
                                          <img src="images/home/highlights/9.png"  alt="" />
                                      </a>
                                    
                                    </div>
                                </div>
                                <!-- Lightbox -->


                            </div>

                        <div class="tab-pane fade" id="shop_brands">
                          2
                        <!-- Lightbox -->
                                  <div class="col-md-3 col-sm-12 co-xs-12 gal-item" style="height: 350px">
                                    <div class="box">
                                      <a href="http://www.google.com">
                                          <img src="images/home/highlights/1.png"  alt="" />
                                      </a>

                                    </div>
                                  </div>
                                  <div class="col-md-4 col-sm-12 co-xs-12 gal-item" style="height: 175px">
                                    <div class="box">
                                      <a href="#">
                                          <img src="images/home/highlights/2.png"  alt="" />
                                      </a>
                                    </div>
                                  </div>
                                  <div class="col-md-3 col-sm-6 co-xs-12 gal-item" style="height: 175px">
                                    <div class="box">
                                      <a href="#">
                                          <img src="images/home/highlights/3.png"  alt="" />
                                      </a>
                                      
                                    </div>
                                  </div>
                                  <div class="col-md-2 col-sm-6 co-xs-12 gal-item" style="height: 175px">
                                    <div class="box">
                                      <a href="#">
                                          <img src="images/home/highlights/7.png"  alt="" />
                                      </a>
                                  
                                    </div>
                                  </div>
                                  <div class="col-md-4 col-sm-6 co-xs-12 gal-item" style="height: 175px">
                                    <div class="box">
                                      <a href="#">
                                          <img src="images/home/highlights/5.png"  alt="" />
                                      </a>
                                   
                                    </div>
                                  </div>
                                 
                                  <div class="col-md-5 col-sm-6 co-xs-12 gal-item" style="height: 175px">
                                    <div class="box">
                                      <a href="#">
                                          <img src="images/home/highlights/6.png"  alt="" />
                                      </a>
                                     
                                    </div>
                                  </div>
                             
                                 <div class="col-md-2 col-sm-12 co-xs-12 gal-item" style="height: 175px">
                                    <div class="box">
                                      <a href="#">
                                          <img src="images/home/highlights/8.png"  alt="" />
                                      </a>
                                    
                                    </div>
                                  </div>
                               
                                 <div class="col-md-3 col-sm-12 co-xs-12 gal-item" style="height: 175px">
                                    <div class="box">
                                      <a href="#">
                                          <img src="images/home/highlights/11.png"  alt="" />
                                      </a>
                                    
                                    </div>
                                  </div>
                                  <div class="col-md-5 col-sm-12 co-xs-12 gal-item" style="height: 175px">
                                    <div class="box">
                                      <a href="#">
                                          <img src="images/home/highlights/4.png"  alt="" />
                                      </a>
                                    
                                    </div>
                                  </div>
                                     <div class="col-md-2 col-sm-12 co-xs-12 gal-item" style="height: 175px">
                                    <div class="box">
                                      <a href="#">
                                          <img src="images/home/highlights/9.png"  alt="" />
                                      </a>
                                    
                                    </div>
                                </div>
                        <!-- Lightbox -->

                        </div>
                        
                       <div class="tab-pane fade" id="shop_categories">
3
                      <!-- Lightbox -->
                                                        <div class="col-md-3 col-sm-12 co-xs-12 gal-item" style="height: 350px">
                                    <div class="box">
                                      <a href="http://www.google.com">
                                          <img src="images/home/highlights/1.png"  alt="" />
                                      </a>

                                    </div>
                                  </div>
                                  <div class="col-md-4 col-sm-12 co-xs-12 gal-item" style="height: 175px">
                                    <div class="box">
                                      <a href="#">
                                          <img src="images/home/highlights/2.png"  alt="" />
                                      </a>
                                    </div>
                                  </div>
                                  <div class="col-md-3 col-sm-6 co-xs-12 gal-item" style="height: 175px">
                                    <div class="box">
                                      <a href="#">
                                          <img src="images/home/highlights/3.png"  alt="" />
                                      </a>
                                      
                                    </div>
                                  </div>
                                  <div class="col-md-2 col-sm-6 co-xs-12 gal-item" style="height: 175px">
                                    <div class="box">
                                      <a href="#">
                                          <img src="images/home/highlights/7.png"  alt="" />
                                      </a>
                                  
                                    </div>
                                  </div>
                                  <div class="col-md-4 col-sm-6 co-xs-12 gal-item" style="height: 175px">
                                    <div class="box">
                                      <a href="#">
                                          <img src="images/home/highlights/5.png"  alt="" />
                                      </a>
                                   
                                    </div>
                                  </div>
                                 
                                  <div class="col-md-5 col-sm-6 co-xs-12 gal-item" style="height: 175px">
                                    <div class="box">
                                      <a href="#">
                                          <img src="images/home/highlights/6.png"  alt="" />
                                      </a>
                                     
                                    </div>
                                  </div>
                             
                                 <div class="col-md-2 col-sm-12 co-xs-12 gal-item" style="height: 175px">
                                    <div class="box">
                                      <a href="#">
                                          <img src="images/home/highlights/8.png"  alt="" />
                                      </a>
                                    
                                    </div>
                                  </div>
                               
                                 <div class="col-md-3 col-sm-12 co-xs-12 gal-item" style="height: 175px">
                                    <div class="box">
                                      <a href="#">
                                          <img src="images/home/highlights/11.png"  alt="" />
                                      </a>
                                    
                                    </div>
                                  </div>
                                  <div class="col-md-5 col-sm-12 co-xs-12 gal-item" style="height: 175px">
                                    <div class="box">
                                      <a href="#">
                                          <img src="images/home/highlights/4.png"  alt="" />
                                      </a>
                                    
                                    </div>
                                  </div>
                                     <div class="col-md-2 col-sm-12 co-xs-12 gal-item" style="height: 175px">
                                    <div class="box">
                                      <a href="#">
                                          <img src="images/home/highlights/9.png"  alt="" />
                                      </a>
                                    
                                    </div>
                                </div>
                        <!-- Lightbox -->

                       </div>

                              <div class="tab-pane fade" id="cny_offers">
                                4
                                  <!-- Lightbox -->
                                   <div class="col-md-3 col-sm-12 co-xs-12 gal-item" style="height: 350px">
                                    <div class="box">
                                      <a href="http://www.google.com">
                                          <img src="images/home/highlights/1.png"  alt="" />
                                      </a>

                                    </div>
                                  </div>
                                  <div class="col-md-4 col-sm-12 co-xs-12 gal-item" style="height: 175px">
                                    <div class="box">
                                      <a href="#">
                                          <img src="images/home/highlights/2.png"  alt="" />
                                      </a>
                                    </div>
                                  </div>
                                  <div class="col-md-3 col-sm-6 co-xs-12 gal-item" style="height: 175px">
                                    <div class="box">
                                      <a href="#">
                                          <img src="images/home/highlights/3.png"  alt="" />
                                      </a>
                                      
                                    </div>
                                  </div>
                                  <div class="col-md-2 col-sm-6 co-xs-12 gal-item" style="height: 175px">
                                    <div class="box">
                                      <a href="#">
                                          <img src="images/home/highlights/7.png"  alt="" />
                                      </a>
                                  
                                    </div>
                                  </div>
                                  <div class="col-md-4 col-sm-6 co-xs-12 gal-item" style="height: 175px">
                                    <div class="box">
                                      <a href="#">
                                          <img src="images/home/highlights/5.png"  alt="" />
                                      </a>
                                   
                                    </div>
                                  </div>
                                 
                                  <div class="col-md-5 col-sm-6 co-xs-12 gal-item" style="height: 175px">
                                    <div class="box">
                                      <a href="#">
                                          <img src="images/home/highlights/6.png"  alt="" />
                                      </a>
                                     
                                    </div>
                                  </div>
                             
                                 <div class="col-md-2 col-sm-12 co-xs-12 gal-item" style="height: 175px">
                                    <div class="box">
                                      <a href="#">
                                          <img src="images/home/highlights/8.png"  alt="" />
                                      </a>
                                    
                                    </div>
                                  </div>
                               
                                 <div class="col-md-3 col-sm-12 co-xs-12 gal-item" style="height: 175px">
                                    <div class="box">
                                      <a href="#">
                                          <img src="images/home/highlights/11.png"  alt="" />
                                      </a>
                                    
                                    </div>
                                  </div>
                                  <div class="col-md-5 col-sm-12 co-xs-12 gal-item" style="height: 175px">
                                    <div class="box">
                                      <a href="#">
                                          <img src="images/home/highlights/4.png"  alt="" />
                                      </a>
                                    
                                    </div>
                                  </div>
                                     <div class="col-md-2 col-sm-12 co-xs-12 gal-item" style="height: 175px">
                                    <div class="box">
                                      <a href="#">
                                          <img src="images/home/highlights/9.png"  alt="" />
                                      </a>
                                    
                                    </div>
                                </div>
                        <!-- Lightbox -->

                       </div>


                      </div>

                         
                       

                      </div>
                  </div>
    
              </div>
          </div>
          </div><!--category tab-->
