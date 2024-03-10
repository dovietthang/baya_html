<div class="mb-2">
    <div data-pr="{{$product->id}}" class="product-color-options mt-0 mb-0" name="kl">
        @if(count(@$colorList) > 0)
        <ul class="list-unstyled m-0">
            <span class="align-middle pe-1">{{__('Color')}}</span>
            @foreach($colorList as $item)
                <li data-attribute-color="{{$item->id}}" class="d-inline-block elColor align-middle @if($productSku->color_id == $item->id)selected @endif">
                    @if($product->option_image)
                    <div class="color-option">
                        <img style="width: 36px; height: 36px" src="{{$image_color[$item->id]}}" alt="">
                    </div>
                    @else
                        <div style="--border-color: {{$item->value == '#FFFFFF' ? 'blueviolet': $item->value}}" class="color-option">
                            <div style="background-color: {{$item->value}}; width: 20px; border: 1px solid grey;" class=""><span>&nbsp;</span></div>
                        </div>
                    @endif
                </li>
            @endforeach
        </ul>
        @endif
        @if(count(@$sizeList) > 0)
        <ul style="margin-top: 0.5rem !important" class="list-unstyled m-0">
            <span class="align-middle pe-1">{{__('Size')}}</span>
            @foreach($sizeList as $item)
                <li data-attribute-size="{{$item->id}}" class="d-inline-block elSize align-middle @if($productSku->size_id == $item->id)selected @endif">
                    <div  class="color-option size b-violet">
                        <div class="filloption bg-violet text-center">
                            <span>{{$item->value}}</span>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
        @endif


        {{-- @foreach($product->productAttributes as $at)
            @if(count($at->attrbuteValues()) > 0)
                <h6>{{__(mb_strtoupper($at->attributes->name))}}</h6>
            @else
                <div data-pr-detail="0" class="product-color-options mt-0 mb-0"></div>
            @endif
            <div>
                <ul class="list-unstyled mb-0">
                    @foreach($at->attrbuteValues() as $af)
                        @if($at->attributes->name == 'color' || $at->attributes->name == 'colors')
                            <li data-id="{{$af->id}}" data-attribute="{{$at->attributes->id}}"
                                class="d-inline-block @if($at->productDetailDefault() != null and $at->productDetailDefault()->attribute_value_id == $af->id)selected @endif">
                                <div class="color-option b-{{str_replace(' ', '-', $af->value)}}">
                                    <div class="filloption bg-{{str_replace(' ', '-', $af->value)}}"></div>
                                </div>
                            </li>
                        @else
                            <li data-id="{{$af->id}}" data-attribute="{{$at->attributes->id}}"
                                class="d-inline-block @if($at->productDetailDefault() != null and $at->productDetailDefault()->attribute_value_id == $af->id)selected @endif">
                                <div class="color-option b-violet">
                                    <div class="filloption bg-violet text-center nj">
                                        <span>{{$af->value}}</span>
                                    </div>
                                </div>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        @endforeach --}}
    </div>
</div>


