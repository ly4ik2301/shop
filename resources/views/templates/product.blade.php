<div class="col-lg-4 col-md-6 mb-4">
    <div class="card h-100">
        <a href="#"><img class="card-img-top" src="http://laravel/public/storage/{{$one->picture}}" alt=""></a>
        <div class="card-body">
            <h4 class="card-title">
                <a href="#">    {{$one->name}}</a>
            </h4>
            <h5>${{$one->price}}</h5>
            <p class="card-text">
                {{ $one->body }}
            </p>
        </div>
        <div class="card-footer">
            <a href="#" id="good-{{$one->id}}-{{$one->price}}" class="addCart">Добавить в корзину</a>
            <small class="text-muted">★ ★ ★ ★ ☆</small>
        </div>
    </div>
</div>
