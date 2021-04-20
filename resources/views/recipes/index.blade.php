@extends('layout')

@section('title', '料理提案')

@section('content')
  @include('nav')
  <div class="container">
    <div class="row">
      <div class="col-3">
        <!-- 検索カード -->
        <div class="card mt-3">
          <div class="card-body">
            <h3 class="h4 bg-dark text-white">&nbsp;材料を選択</h3>
            <form action="{{ route('post.index') }}" method="post" class="mt-3">
              @csrf
              <div class="row mb-3">
                <div class="col-12">
                  <h3 class="h5">
                    <i class="fas fa-carrot"></i>
                    食材一覧
                  </h3>
                  <div class="form-group">
                    @foreach($foodstaffs as $foodstaff)
                    <!-- <label class="control-label"></label> -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="foodstaff_{{ $foodstaff->id }}" name="foodstaff_{{ $foodstaff->id }}" value="{{ $foodstaff->id }}">
                        <label class="form-check-label" for="foodstaff_{{ $foodstaff->id }}">{{ $foodstaff->name }}</label>
                    </div>
                    @endforeach
                  </div>
                </div>
                <div class="col-12">
                  <h3 class="h5">
                    <i class="fas fa-wine-bottle"></i>
                    調味料一覧
                  </h3>
                  <div class="form-group">
                    @foreach($seasonings as $seasoning)
                    <!-- <label class="control-label"></label> -->
                    <div class="form-check mr-3">
                        <input class="form-check-input" type="checkbox" id="seasoning_{{ $seasoning->id }}" name="seasoning_{{ $seasoning->id }}" value="{{ $seasoning->id }}">
                        <label class="form-check-label" for="seasoning_{{ $seasoning->id }}">{{ $seasoning->name }}</label>
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>
              <button class="btn btn-block">検索</button>
            </form>
          </div>
        </div>
      
      </div>
      <div class="col-9">

        <!-- レシピカード -->

        <!-- ここから↓サンプル -->
        @foreach($recipes as $recipe)
        <div class="card mt-3">
          <div class="card-body d-flex flex-row">
            <div>
              <div class="font-weight-bold">
                {{ $recipe->name }}
              </div>
            </div>
          </div>
          <div class="card-body pt-0 pb-2">
            <div class="img_back">
              <img src="/images/{{ $recipe->url }}" alt="料理画像" class="recipe_img">
            </div>
            <div class="card-text">
              <i class="fas fa-sticky-note"></i>
              {!! $recipe->content !!}
            </div>
          </div>
        </div>
        @endforeach
        {{ $recipes->links() }}
      </div>
    </div>
  </div>
  @include('footer')
@endsection
