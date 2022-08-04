                            @extends('master')
                            @section('content')
                                <h1>{{$page_name}}</h1>
                            @foreach ($products as $key=>$product )
                                    <ul class="">
                                        @if ($loop->first)
                                          @continue
                                        @endif
                                        <li>{{ $key }}</li>
                                        <li>{{ $product['name'] }}</li>
                                        <li>{{ $product['color'] }}</li>
                                        <li>{{ $product['price'] }}</li>

                                    </ul>

                            @endforeach


{{--
                            @while (true)
                                <p> I am looping forever</p>
                            @endwhile --}}
                            @endsection






    {{-- @if ($product_count<=10)
    <p>Product is not avaiable---- please refill</p>
    @else
    <p>product count:{{$product_count}}</p>
    @endif
    @switch($color)
        @case("blue")
           <p>blue is available</p>
            @break
        @case("red")
        <p>red is available</p>
            @break
        @case("green")
        <p>green is available</p>
            @break
        @default
         <p>stock Out</p>
    @endswitch
    @empty($products)
    <p>no products found</p>
@endsection --}}
