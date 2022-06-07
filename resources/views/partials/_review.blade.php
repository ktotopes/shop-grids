<ul class="review">
    @for($i=1;$i<=5;$i++)
        <li>
            <i @class(['lni','lni-star-filled' => $product->mark >= $i,'lni-star' => $product->mark < $i])></i>
        </li>
    @endfor
    <li><span>{{$product->mark}} Review(s)</span></li>
</ul>
