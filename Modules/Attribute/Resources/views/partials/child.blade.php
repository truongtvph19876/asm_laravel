<ul>
    @foreach ($children as $child)
        <div class="d-flex">
            <i class=" p-3 fa-solid fa-arrow-turn-up fa-flip-horizontal"></i>
            <div class="w-100 shadow-sm p-3 rounded border mb-1 d-flex justify-content-between">
                <b style="color: {{$child->value}}">{{ $child->name }}</b>
                <div class="">
                    <a href='{!! route("backend.$module_name.edit", $child) !!}' class='btn btn-sm btn-primary mt-1' data-toggle="tooltip"
                       title="Edit {{ ucwords(Str::singular($module_name)) }}"><i class="fas fa-wrench"></i></a>
                    <a href='{!! route("backend.$module_name.show", $child) !!}' class='btn btn-sm btn-success mt-1' data-toggle="tooltip"
                       title="Show {{ ucwords(Str::singular($module_name)) }}"><i class="fas fa-tv"></i></a>
                    <form action="{{ route("backend.$module_name.destroy", $child) }}" method="POST" class='btn btn-sm btn-danger mt-1'>
                        @csrf
                        @method('DELETE')
                        <button class="fa-solid fa-trash bg-transparent border-0"></button>
                    </form>
                </div>
            </div>
        </div>
        @if (count($child->children))
            @include('attribute::partials.child', ['children' => $child->children])
        @endif
    @endforeach
</ul>
