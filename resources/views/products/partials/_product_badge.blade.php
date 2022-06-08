<div class="absolute top-0 left-0 flex">
    @if($product->discount)
        <span class="w-17 px-2 py-1 bg-red-500 text-white">-{{$product->discount}}%</span>
    @endif
    @if($product->is_new)
        <span class="w-17 px-2 py-1 bg-blue-500 text-white">New</span>
    @endif
</div>
