@extends('layouts')

@section('content')
  
  
    <div class="container mt-4">

        <div class="card mt-4">
            <div class="card-header mb-2">
                {{ $post->title }}
            </div>
            <div class="card-body">
                <p class="card-text">
                    {{ $post->body }}
                </p>
                
                
            </div>
            <div class="card-footer">
                <span class="mr-2">
                    投 稿 日 時 {{ $post->created_at }}
                </span>
                
            </div>
        </div>

        <div class="mt-4 text-end">
            <a class="btn btn-primary" href="{{route('posts.edit', ['post' => $post])}}"> 
                編集  
            </a>
            
            <form
            style="display: inline-block;"
            method="POST"
            action="{{route('posts.destroy', ['post' => $post])}}"
            >
                {{csrf_field()}}
                {{ method_field('DELETE') }}
                <button class="btn btn-danger">削除</button>

            </form>
            
        </div>
        
        
    </div>
    
@endsection('content')
