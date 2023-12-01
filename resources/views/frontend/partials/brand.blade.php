<div class="container">
    <div class="logo-slider">
        <div class="row rless">
            <div id="manufacturers">
                @foreach($brands as $brand)
                <div class="text-center col-xs-12 cless"><img src="{{ \Illuminate\Support\Facades\Storage::url($brand->brand_logo) }}" alt="NFL" class="img-responsive center-block" /></div>
                @endforeach
            </div>
        </div>
    </div>
</div>
