<div class="card overflow-hidden dash1-card border-0">
    <div class="card-body">
        <p class=" mb-1 ">{{$title}}</p>
        <h2 class="mb-1 number-font">{{$valor}}</h2>
        @if(!empty($subdescription))<small class="fs-12 text-muted">{{$subdescription}}</small>@endif
        <span class="ratio bg-primary">{{$description}}</span>
        
    </div>
</div>