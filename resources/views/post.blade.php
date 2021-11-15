@extends('layouts/main')

{{-- @dump($postingan) --}}
@section('container')
    <h1>post</h1>    

    @foreach ( $postingan as $post)
    <article>
        <a href="/post/{{ $post['slug'] }}">
        <h3>{{ $post->title }}</h3>
        </a>
        <p>{{ $post->excerpt }}</p>
        {{-- <p>{{ $post['body'] }}</p> --}}
    </article>
    @endforeach
@endsection
Post::create([
    'title' => 'judul ketiga',
    'slug' => 'judul-ketiga',
    'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias tempora commodi laborum facilis enim qui laudantium corporis quas, magni expedita porro nostrum ullam quaerat illo obcaecati recusandae fuga quod nulla repellat ab unde. Error nihil, dolorem eos perspiciatis dolor vero nam unde hic iusto. Itaque hic sequi voluptate corporis consequatur.',
    'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam sed asperiores facilis culpa magnam voluptatibus maxime tempora, laboriosam suscipit quia ut consequatur fugit autem? Esse expedita nostrum unde, commodi reprehenderit dolores cupiditate laborum corrupti, illo dignissimos non! Dolor, cum esse excepturi tempore doloribus id qui explicabo temporibus, aliquid nesciunt dolorum!</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium dolor porro dolores expedita, omnis blanditiis reiciendis neque autem perspiciatis quo a maiores laborum, totam inventore quos eveniet doloribus at deleniti architecto sit tempore consectetur. Quae odio omnis nemo consectetur consequuntur ut. Error cum quod autem labore debitis laboriosam necessitatibus iure?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa voluptatum ullam sed libero modi nemo obcaecati quisquam error aut tempora cupiditate similique dolore sunt a quas odit, optio doloribus fugiat eum doloremque explicabo! Aspernatur odio deleniti ut, architecto id fuga temporibus, rerum sit tenetur nisi aliquid omnis! Iusto, culpa officiis?</p>'
])