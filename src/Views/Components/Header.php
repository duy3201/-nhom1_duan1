<?php

namespace App\Views\Components;

use App\Views\BaseView;

class Header extends BaseView
{

     public static function render()
     { ?>
          <div class="container-header">
               <div class="tab-bar">
                    <div class="weo">
                         <p>Chào mừng bạn đên với shop của chúng tôi</p>
                    </div>
                    <div class="icon-header"></div>
               </div>
               <div class="menu">
                    <nav class="navbar navbar-expand-lg bg-body-tertiary">
                         <div class="container-fluid">
                              <a class="navbar-brand" href="#"><img src="/public/img/z" alt=""></a>
                              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                   <span class="navbar-toggler-icon"></span>
                              </button>
                              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                   <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-item">
                                             <a class="nav-link active" aria-current="page" href="#">Home</a>
                                        </li>
                                        <li class="nav-item">
                                             <a class="nav-link" href="#">Link</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                             <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                  Dropdown
                                             </a>
                                             <ul class="dropdown-menu">
                                                  <li><a class="dropdown-item" href="#">Action</a></li>
                                                  <li><a class="dropdown-item" href="#">Another action</a></li>
                                                  <li>
                                                       <hr class="dropdown-divider">
                                                  </li>
                                                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                                             </ul>
                                        </li>
                                        <li class="nav-item">
                                             <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                                        </li>
                                   </ul>
                                   <form class="d-flex" role="search">
                                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                        <button class="btn btn-outline-success" type="submit">Search</button>
                                   </form>
                              </div>
                         </div>
                    </nav>
               </div>
               <div class="bannder">
                    <div id="carouselExampleCaptions" class="carousel slide">
                         <div class="carousel-indicators">
                              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                         </div>
                         <div class="carousel-inner">
                              <div class="carousel-item active">
                                   <img src="/public/img/banner-header.jpeg" class="d-block w-100" alt="...">
                                   <div class="carousel-caption d-none d-md-block">
                                        <h5>First slide label</h5>
                                        <p>Some representative placeholder content for the first slide.</p>
                                   </div>
                              </div>
                              <div class="carousel-item">
                                   <img src="/public/img/banner-header.jpeg" class="d-block w-100" alt="...">
                                   <div class="carousel-caption d-none d-md-block">
                                        <h5>Second slide label</h5>
                                        <p>Some representative placeholder content for the second slide.</p>
                                   </div>
                              </div>
                              <div class="carousel-item">
                                   <img src="/public/img/banner-header.jpeg" class="d-block w-100" alt="...">
                                   <div class="carousel-caption d-none d-md-block">
                                        <h5>Third slide label</h5>
                                        <p>Some representative placeholder content for the third slide.</p>
                                   </div>
                              </div>
                         </div>
                         <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                         </button>
                         <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                         </button>
                    </div>
               </div>
          </div>
<?php }
}
