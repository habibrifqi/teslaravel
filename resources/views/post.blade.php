@extends('layouts/main')

{{-- @dump($sidecontents[0]) --}}

@section('container')
    <section class="ftco-section">
        <div class="container">
          <h2 class="mb-3">{{ $title }}</h2>
          <div class="row">
            @if ($postingan->count())
        
           
            <div class="col-lg-8 ftco-animate">
              <div class="row d-flex">
                @foreach ( $postingan as $post)
                    <div class="col-md-6 d-flex ftco-animate">
                        <div class="blog-entry">
                           <a href="/post?category={{ $post->category->slug }}">
                          <div style="z-index: 100; background-color:rgba(0, 0, 0, 0.7)" class="position-absolute px-3">
                           <p id="kat" class="kat pt-3">{{ $post->category->name }}</p>
                          </div></a>
                          @if ($post->image)
                          {{-- <img src="{{ asset('storage/'.$newpostingan->image) }}" alt="" class="img-fluid"> --}}
                          <a href="single.html" class="block-20" style="background-image: url('{{ asset('storage/'.$post->image) }}');">
                          @else
                              {{-- <img src="https://source.unsplash.com/1600x900/?computer" alt="" class="img-fluid"> --}}
                              <a href="single.html" class="block-20" style="background-image: url('https://source.unsplash.com/1600x900/?{{ $post->category->name }}');">
                          @endif
                        
                        </a>
                        <div class="text mt-3 float-right d-block">
                            <div class="d-flex align-items-center mb-3 meta">
                            <p class="mb-0">
                                <span class="mr-2">{{ $post->created_at->format("d M,Y")}}</span>
                                <a href="/post?author={{ $post->author->username }}" class="mr-2">{{ $post->author->name }}</a>
                                {{-- <a href="#" class="meta-chat"><span class="icon-chat">3</span></a> --}}
                            </p>
                            </div>
                            <h3 class="heading"><a href="/post/{{ $post['slug'] }}">{{ $post->title }}</a></h3>
                            <p>{{ $post->excerpt }}</p>
                        </div>
                        </div>
                    </div>
                @endforeach 
              </div>
              <div class="d-flex justify-content-center">
              {{ $postingan->links() }} 
              </div>
            </div> <!-- .col-md-8 -->        
            @else
            <div class="col-lg-8 ftco-animate">
              <div class="row d-flex justify-content-center">
               <h2>ngak ada postingan</h2> 
              </div> 
            </div>
            @endif
            <div class="col-lg-4 sidebar ftco-animate">
              <div class="sidebar-box">
                <form action="/post" class="search-form" method="GET" id="form_id">
                  @if (request('category'))
                  <input type="hidden" name="category" value="{{ request('category') }}">
                      
                   {{-- @endif --}}
                  {{-- @if () --}}
                      
                  @elseif  (request('author') ) 
                  <input type="hidden" name="author" value="{{ request('author') }}">
                  @endif
                  <div class="form-group" >
                   
                   <span  type="submit" class="icon icon-search" id="submit_id"></span>
                    <input type="text" name="search" value="{{ request('search') }}" class="form-control" placeholder="Type a keyword and hit enter">
                  </div>
                </form>
              </div>
              <div class="sidebar-box ftco-animate">
                  <h3 class="heading-sidebar">Categories</h3>
                <ul class="categories"> 

                  <?php  
                    // foreach ($categ as $key => $ccc) {
                  ?>
                  <?php
                    // } 
                  ?>

                  {{-- @foreach ($categ as $key => $ccc)
                     <li><a href="#"><//?= $cc[$key]->name ?> <span>({{ $ccc->tt }})</span></a></li>
                      
                  @endforeach --}}

                  @foreach ($cc as $key => $ll)
                     <li><a href="/post?category={{ $ll->slug }}">{{ $ll->name }}<span>({{ $ll->posts->count() }})</span></a></li>
                      
                  @endforeach
                  
                  {{-- <li><a href="#">Exterior Design <span>(22)</span></a></li>
                  <li><a href="#">Industrial Design <span>(37)</span></a></li>
                  <li><a href="#">Landscape Design <span>(42)</span></a></li> --}}
                </ul>
              </div>
  
              <div class="sidebar-box ftco-animate">
                <h3 class="heading-sidebar">Recent Blog</h3>
                @foreach ($sidecontents as $sidecontent)
                  <div class="block-21 mb-4 d-flex">
                      @if ($sidecontent->image)
                          {{-- <img src="{{ asset('storage/'.$newpostingan->image) }}" alt="" class="img-fluid"> --}}
                          {{-- <a href="single.html" class="block-20" style="background-image: url('{{ asset('storage/'.$post->image) }}');"> --}}
                          <a class="blog-img mr-4" style="background-image: url('{{ asset('storage/'.$sidecontent->image) }}');"></a>
                      @else
                              {{-- <img src="https://source.unsplash.com/1600x900/?computer" alt="" class="img-fluid"> --}}
                              {{-- <a href="single.html" class="block-20" style="background-image: url('https://source.unsplash.com/1600x900/?{{ $post->category->name }}');"> --}}
                                <a class="blog-img mr-4" style="background-image: url('https://source.unsplash.com/1600x900/?{{ $sidecontent->category->name }}');"></a>
                      @endif
                    {{-- <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a> --}}
                    <div class="text">
                      <h3 class="heading"><a href="/post/{{ $sidecontent['slug'] }}">{{ $sidecontent->title }}</a></h3>
                      <div class="meta">
                        <div><a href="#"><span class="icon-calendar"></span> {{ $sidecontent->created_at->format("d M,Y") }}</a></div>
                        <div><a href="#"><span class="icon-person"></span>{{ $sidecontent->author->name }}</a></div>
                        {{-- <div><a href="#"><span class="icon-chat"></span> 19</a></div> --}}
                      </div>
                    </div>
                  </div>
                @endforeach
                
                {{-- <div class="block-21 mb-4 d-flex">
                  <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                  <div class="text">
                    <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                    <div class="meta">
                      <div><a href="#"><span class="icon-calendar"></span> March 12, 2019</a></div>
                      <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                      <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                    </div>
                  </div>
                </div> --}}
                {{-- <div class="block-21 mb-4 d-flex">
                  <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
                  <div class="text">
                    <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                    <div class="meta">
                      <div><a href="#"><span class="icon-calendar"></span> March 12, 2019</a></div>
                      <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                      <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                    </div>
                  </div>
                </div> --}}
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
      </section> <!-- .section -->
@endsection
{{-- Post::create([
    'title' => 'judul ketiga',
    'category_id' => 3,
    'slug' => 'judul-ketiga',
    'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias tempora commodi laborum facilis enim qui laudantium corporis quas, magni expedita porro nostrum ullam quaerat illo obcaecati recusandae fuga quod nulla repellat ab unde. Error nihil, dolorem eos perspiciatis dolor vero nam unde hic iusto. Itaque hic sequi voluptate corporis consequatur.',
    'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam sed asperiores facilis culpa magnam voluptatibus maxime tempora, laboriosam suscipit quia ut consequatur fugit autem? Esse expedita nostrum unde, commodi reprehenderit dolores cupiditate laborum corrupti, illo dignissimos non! Dolor, cum esse excepturi tempore doloribus id qui explicabo temporibus, aliquid nesciunt dolorum!</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium dolor porro dolores expedita, omnis blanditiis reiciendis neque autem perspiciatis quo a maiores laborum, totam inventore quos eveniet doloribus at deleniti architecto sit tempore consectetur. Quae odio omnis nemo consectetur consequuntur ut. Error cum quod autem labore debitis laboriosam necessitatibus iure?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa voluptatum ullam sed libero modi nemo obcaecati quisquam error aut tempora cupiditate similique dolore sunt a quas odit, optio doloribus fugiat eum doloremque explicabo! Aspernatur odio deleniti ut, architecto id fuga temporibus, rerum sit tenetur nisi aliquid omnis! Iusto, culpa officiis?</p>'
]) --}}

{{-- Category::create([
    'name' => 'personal',
    'slug' => 'personal'
]) --}}