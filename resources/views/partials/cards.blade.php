@foreach ($projects as $project)
    <div class="card" style="width: 12rem;">
        <img src={{$project -> url}} class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$project -> name}}</h5>
            <p class="card-text">{{$project -> descripton}}</p>
            <p class="card-text">{{$project -> date}}</p>
            <a href="#" class="btn btn-primary">{{$project -> timestamps}}</a>
        </div>
    </div>
@endforeach
