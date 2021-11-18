{{-- <head>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head> --}}

{{-- @push('styles')
    <link href="{{ asset('css/open-iconic-bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">

    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">

    <link href="{{ asset('css/aos.css') }}" rel="stylesheet">

    <link href="{{ asset('css/ionicons.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('css/icomoon.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

@endpush --}}
{{-- @push('scripts')
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery.stellar.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/aos.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/scrollax.min.js') }}"></script>
  
  <script src="js/main.js"></script> 
@endpush --}}
 

@extends('layouts/main')

{{-- @dump($newpostingan) --}}
@section('container')
    {{-- <h2>{{ $newpostingan->title }}</h2>   
    <p>By: <a class="text-decoration-none" href="/authors/{{ $newpostingan->author->username }}">{{ $newpostingan->author->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $newpostingan->category->slug }}">{{ $newpostingan->category->name }}</a></p>
    {!! $newpostingan->body !!} --}}
    <section class="ftco-section">
        <div class="container">
          <div class="row">
            
            <div class="col-lg-8 ftco-animate">
              <div class="row d-flex">

                {{-- <div class="col-md-6 d-flex ftco-animate">
                  <div class="blog-entry justify-content-end">
                    <a href="single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
                    </a>
                    <div class="text mt-3 float-right d-block">
                      <div class="d-flex align-items-center mb-3 meta">
                        <p class="mb-0">
                          <span class="mr-2">June 21, 2019</span>
                          <a href="#" class="mr-2">Admin</a>
                          <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                        </p>
                      </div>
                      <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
                      <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 d-flex ftco-animate">
                  <div class="blog-entry justify-content-end">
                    <a href="single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
                    </a>
                    <div class="text mt-3 float-right d-block">
                      <div class="d-flex align-items-center mb-3 meta">
                        <p class="mb-0">
                          <span class="mr-2">June 21, 2019</span>
                          <a href="#" class="mr-2">Admin</a>
                          <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                        </p>
                      </div>
                      <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
                      <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 d-flex ftco-animate">
                  <div class="blog-entry">
                    <a href="single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
                    </a>
                    <div class="text mt-3 float-right d-block">
                      <div class="d-flex align-items-center mb-3 meta">
                        <p class="mb-0">
                          <span class="mr-2">June 21, 2019</span>
                          <a href="#" class="mr-2">Admin</a>
                          <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                        </p>
                      </div>
                      <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
                      <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                  </div>
                </div> --}}
              </div>
  
  
              <h2 class="mb-3">{{ $newpostingan->title }}</h2>
                <img src="https://source.unsplash.com/1600x900/?computer" alt="" class="img-fluid">
              </p>
              {{-- <p>Molestiae cupiditate inventore animi, maxime sapiente optio, illo est nemo veritatis repellat sunt doloribus nesciunt! Minima laborum magni reiciendis qui voluptate quisquam voluptatem soluta illo eum ullam incidunt rem assumenda eveniet eaque sequi deleniti tenetur dolore amet fugit perspiciatis ipsa, odit. Nesciunt dolor minima esse vero ut ea, repudiandae suscipit!</p> --}}
              {!! $newpostingan->body !!} 
              {{-- <h2 class="mb-3 mt-5">#2. Creative WordPress Themes</h2>
              <p>Temporibus ad error suscipit exercitationem hic molestiae totam obcaecati rerum, eius aut, in. Exercitationem atque quidem tempora maiores ex architecto voluptatum aut officia doloremque. Error dolore voluptas, omnis molestias odio dignissimos culpa ex earum nisi consequatur quos odit quasi repellat qui officiis reiciendis incidunt hic non? Debitis commodi aut, adipisci.</p>
              <p>
                <img src="images/image_4.jpg" alt="" class="img-fluid">
              </p>
              <p>Quisquam esse aliquam fuga distinctio, quidem delectus veritatis reiciendis. Nihil explicabo quod, est eos ipsum. Unde aut non tenetur tempore, nisi culpa voluptate maiores officiis quis vel ab consectetur suscipit veritatis nulla quos quia aspernatur perferendis, libero sint. Error, velit, porro. Deserunt minus, quibusdam iste enim veniam, modi rem maiores.</p>
              <p>Odit voluptatibus, eveniet vel nihil cum ullam dolores laborum, quo velit commodi rerum eum quidem pariatur! Quia fuga iste tenetur, ipsa vel nisi in dolorum consequatur, veritatis porro explicabo soluta commodi libero voluptatem similique id quidem? Blanditiis voluptates aperiam non magni. Reprehenderit nobis odit inventore, quia laboriosam harum excepturi ea.</p>
              <p>Adipisci vero culpa, eius nobis soluta. Dolore, maxime ullam ipsam quidem, dolor distinctio similique asperiores voluptas enim, exercitationem ratione aut adipisci modi quod quibusdam iusto, voluptates beatae iure nemo itaque laborum. Consequuntur et pariatur totam fuga eligendi vero dolorum provident. Voluptatibus, veritatis. Beatae numquam nam ab voluptatibus culpa, tenetur recusandae!</p>
              <p>Voluptas dolores dignissimos dolorum temporibus, autem aliquam ducimus at officia adipisci quasi nemo a perspiciatis provident magni laboriosam repudiandae iure iusto commodi debitis est blanditiis alias laborum sint dolore. Dolores, iure, reprehenderit. Error provident, pariatur cupiditate soluta doloremque aut ratione. Harum voluptates mollitia illo minus praesentium, rerum ipsa debitis, inventore?</p>--}}
              <div class="tag-widget post-tag-container mb-5 mt-5">
                <div class="tagcloud">
                  <a href="/categories/{{ $newpostingan->category->slug }}" class="tag-cloud-link">{{ $newpostingan->category->name }}</a>
                </div>
              </div> 
              
              <div class="about-author d-flex p-4 bg-dark">
                  
                <div class="bio mr-5">
                  <img src="https://source.unsplash.com/1600x900/?face" alt="Image placeholder" class="img-fluid mb-4 ">
                </div>
                <div class="desc">
                 <a href="/authors/{{ $newpostingan->author->username }}"> <h3 class="auther-post">{{ $newpostingan->author->name }}</h3></a>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
                </div>
              </div>
  
  
              <div class="pt-5 mt-5">
                <h3 class="mb-5">6 Comments</h3>
                <ul class="comment-list">
                  <li class="comment">
                    <div class="vcard bio">
                      <img src="images/person_1.jpg" alt="Image placeholder">
                    </div>
                    <div class="comment-body">
                      <h3>John Doe</h3>
                      <div class="meta">June 20, 2019 at 2:21pm</div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                      <p><a href="#" class="reply">Reply</a></p>
                    </div>
                  </li>
  
                  <li class="comment">
                    <div class="vcard bio">
                      <img src="images/person_1.jpg" alt="Image placeholder">
                    </div>
                    <div class="comment-body">
                      <h3>John Doe</h3>
                      <div class="meta">June 20, 2019 at 2:21pm</div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                      <p><a href="#" class="reply">Reply</a></p>
                    </div>
  
                    <ul class="children">
                      <li class="comment">
                        <div class="vcard bio">
                          <img src="images/person_1.jpg" alt="Image placeholder">
                        </div>
                        <div class="comment-body">
                          <h3>John Doe</h3>
                          <div class="meta">June 20, 2019 at 2:21pm</div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                          <p><a href="#" class="reply">Reply</a></p>
                        </div>
  
  
                        <ul class="children">
                          <li class="comment">
                            <div class="vcard bio">
                              <img src="images/person_1.jpg" alt="Image placeholder">
                            </div>
                            <div class="comment-body">
                              <h3>John Doe</h3>
                              <div class="meta">June 20, 2019 at 2:21pm</div>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                              <p><a href="#" class="reply">Reply</a></p>
                            </div>
  
                              <ul class="children">
                                <li class="comment">
                                  <div class="vcard bio">
                                    <img src="images/person_1.jpg" alt="Image placeholder">
                                  </div>
                                  <div class="comment-body">
                                    <h3>John Doe</h3>
                                    <div class="meta">June 20, 2019 at 2:21pm</div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                    <p><a href="#" class="reply">Reply</a></p>
                                  </div>
                                </li>
                              </ul>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
  
                  <li class="comment">
                    <div class="vcard bio">
                      <img src="images/person_1.jpg" alt="Image placeholder">
                    </div>
                    <div class="comment-body">
                      <h3>John Doe</h3>
                      <div class="meta">June 20, 2019 at 2:21pm</div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                      <p><a href="#" class="reply">Reply</a></p>
                    </div>
                  </li>
                </ul>
                <!-- END comment-list -->
                
                <div class="comment-form-wrap pt-5">
                  <h3 class="mb-5">Leave a comment</h3>
                  <form action="#" class="p-5 bg-dark">
                    <div class="form-group">
                      <label for="name">Name *</label>
                      <input type="text" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                      <label for="email">Email *</label>
                      <input type="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                      <label for="website">Website</label>
                      <input type="url" class="form-control" id="website">
                    </div>
  
                    <div class="form-group">
                      <label for="message">Message</label>
                      <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                      <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                    </div>
  
                  </form>
                </div>
              </div>
  
            </div> <!-- .col-md-8 -->
            <div class="col-lg-4 sidebar ftco-animate">
              <div class="sidebar-box">
                <form action="#" class="search-form">
                  <div class="form-group">
                    <span class="icon icon-search"></span>
                    <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                  </div>
                </form>
              </div>
              <div class="sidebar-box ftco-animate">
                  <h3 class="heading-sidebar">Categories</h3>
                <ul class="categories">
                  <li><a href="#">Interior Design <span>(12)</span></a></li>
                  <li><a href="#">Exterior Design <span>(22)</span></a></li>
                  <li><a href="#">Industrial Design <span>(37)</span></a></li>
                  <li><a href="#">Landscape Design <span>(42)</span></a></li>
                </ul>
              </div>
  
              <div class="sidebar-box ftco-animate">
                <h3 class="heading-sidebar">Recent Blog</h3>
                <div class="block-21 mb-4 d-flex">
                  <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                  <div class="text">
                    <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                    <div class="meta">
                      <div><a href="#"><span class="icon-calendar"></span> March 12, 2019</a></div>
                      <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                      <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                    </div>
                  </div>
                </div>
                <div class="block-21 mb-4 d-flex">
                  <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                  <div class="text">
                    <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                    <div class="meta">
                      <div><a href="#"><span class="icon-calendar"></span> March 12, 2019</a></div>
                      <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                      <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                    </div>
                  </div>
                </div>
                <div class="block-21 mb-4 d-flex">
                  <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
                  <div class="text">
                    <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                    <div class="meta">
                      <div><a href="#"><span class="icon-calendar"></span> March 12, 2019</a></div>
                      <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                      <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                    </div>
                  </div>
                </div>
              </div>
  
              <div class="sidebar-box ftco-animate">
                <h3 class="heading-sidebar">Tag Cloud</h3>
                <div class="tagcloud">
                  <a href="#" class="tag-cloud-link">house</a>
                  <a href="#" class="tag-cloud-link">office</a>
                  <a href="#" class="tag-cloud-link">building</a>
                  <a href="#" class="tag-cloud-link">land</a>
                  <a href="#" class="tag-cloud-link">table</a>
                  <a href="#" class="tag-cloud-link">interior</a>
                  <a href="#" class="tag-cloud-link">exterior</a>
                  <a href="#" class="tag-cloud-link">industrial</a>
                </div>
              </div>
  
              <div class="sidebar-box ftco-animate">
                <h3 class="heading-sidebar">Paragraph</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
              </div>
            </div>
  
          </div>
        </div>
      </section> 
@endsection

{{-- @section('container') --}}

{{-- @endsection --}}









