<div class="row justify-content-between mb-2 mt-2 border border-1 pt-1 pb-1" >
    <div class="col-5 px-1 py-1">
            <h3 class="h2">
                {{$name}}
            </h3>
        </div>
        <div {{ $attributes->merge(['class' => 'col-3']) }}>    
            {{$slot}}        
        </div>
    </div>