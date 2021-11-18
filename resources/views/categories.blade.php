@extends('layouts/main')

{{-- @dump($categories) --}}
@section('container')
    {{-- <h1>Category</h1>    

    @foreach ( $categories as $category)
    
    <ul>
        <li>
        <a href="/categories/{{ $category['slug'] }}">
        <h3>{{ $category->name }}</h3>
        </a>

        </li>
    </ul>
    @endforeach --}}
    <section class="ftco-section" id="services-section">
    	<div class="container">
    		<div class="row justify-content-center py-0 mt-0">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<h1 class="big big-2">Kategori</h1>
            <h2 class="mb-4">Kategori</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
    		<div class="row">
				@foreach ( $categories as $category)
					<div class="col-md-4 text-center d-flex ftco-animate">
						<a href="/categories/{{ $category['slug'] }}" class="services-1">
							<span class="icon">
								<i class="">
                                     <img class="z" style="" width="50" height="auto" src="{{ asset('images/icn/'.$category->name.'.svg') }}" alt="">
									 {{-- <img class="z" style="" width="50" height="auto" src="{{ asset('images/icn/Personal.svg') }}" alt=""> --}}
                                {{-- <img class="z1" style="" style="fill: royalblue" width="100%" height="auto" src="{{ asset('images/z1.svg') }}" alt=""> --}}
                           		</i>
							</span>
							<div class="desc">
								<h3 class="mb-5">{{ $category->name }}</h3>
							</div>
						</a>
					</div>
				@endforeach 
			</div>
    	</div>
    </section>
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