<div class="fieldset" tabindex="0">
    <div class="swatch-opt" data-role="swatch-options" data-rendered="true">
        <div class="swatch-attribute color" class="swatch-attribute-label">
            {{__('Color')}}</span>
            <span class="swatch-attribute-selected-option">{{$productSku->color->title}}</span>
            <div aria-activedescendant="" tabindex="0" aria-invalid="false" aria-required="true"
                role="listbox" aria-labelledby="option-label-color-93"
                class="swatch-attribute-options clearfix">
                @foreach ($colors as $color)
                @if($product->option_image)
                    @if(count($listColor) > 0 && !in_array($color->id, $listColor))
                    <div style="pointer-events: none;" class="swatch-option color image disabled"
                        index="0" aria-checked="false" tabindex="0" option-label="{{$color->code}}"
                        aria-label="{{$color->code}}" data-color-id={{$color->id}}
                        option-tooltip-value="{{ $color->code }}"
                        role="option" thumb-width="110" thumb-height="90"
                        style="width:28px; height:28px">
                        <img src="{{$image_color[$color->id]}}"
                            style="width: auto; height:28px">

                    </div>
                    @else
                    <div class="swatch-option image @if($color->id == $productSku->color_id && $notActive != 'color')selected @endif"
                        index="0" aria-checked="false" tabindex="0" option-label="{{$color->code}}"
                        aria-label="{{$color->code}}" data-color-id={{$color->id}}
                        option-tooltip-value="{{ $color->code }}"
                        role="option" thumb-width="110" thumb-height="90"
                        style="width:28px; height:28px">
                        <img src="{{$image_color[$color->id]}}"
                            style="width: auto; height:28px">

                    </div>
                    @endif
                @else
                    @if(count($listColor) > 0 && !in_array($color->id, $listColor))
                    <div style="pointer-events: none;" class="swatch-option color image disabled"
                        index="0" aria-checked="false" tabindex="0" option-label="{{$color->code}}"
                        aria-label="{{$color->code}}" data-color-id={{$color->id}}
                        option-tooltip-value="{{ $color->code}}"
                        role="option" thumb-width="110" thumb-height="90"
                        style="width:28px; height:28px">
                        <div style="background-color: {{$color->value}}; width:28px; height: 28px"></div>
                    </div>
                    @else
                        <div class="swatch-option image @if($color->id == $productSku->color_id && $notActive != 'color')selected @endif"
                            index="0" aria-checked="false" tabindex="0" option-label="{{$color->code}}"
                            aria-label="{{$color->code}}" data-color-id={{$color->id}}
                            option-tooltip-value="{{ $color->code}}"
                            role="option" thumb-width="110" thumb-height="90"
                            style="width:28px; height:28px">
                            <div style="background-color: {{$color->value}}; width:28px; height: 28px"></div>
                        </div>
                    @endif
                @endif
                @endforeach
                </div>
                <div class="mage-error" generated="true" id="super_color-error">
            </div>
            <div class="swatch-attribute size">
                <span id=" option-label-size-152" class="swatch-attribute-label">
                    {{__('Size')}}</span>
                <span class="swatch-attribute-selected-option">{{$productSku->size->title}}</span>
                <div tabindex="0" aria-invalid="false" aria-required="true" role="listbox"
                    class="swatch-attribute-options clearfix">
                    @foreach ($sizes as $size)
                    @if(count($listSize) > 0 && !in_array($size->id, $listSize))
                    <div class="swatch-option text disabled"
                        index="1" aria-checked="false" aria-describedby="option-label-size-152"
                        tabindex="0" option-type="0" option-id="7016" option-label="{{$size->value}}" aria-label="{{$size->value}}"
                        option-tooltip-value="{{$size->value}}" role="option" thumb-width="110" thumb-height="90"
                        disabled="disabled">{{$size->value}}</div>
                    @else
                    <div class="swatch-option size text @if($size->id == $productSku->size_id && $notActive != 'size')selected @endif"
                        aria-checked="false" aria-describedby="option-label-size-152" tabindex="0"
                        option-type="0" data-size-id={{$size->id}}
                        option-label="{{$size->value}}"
                        aria-label="{{$size->value}}"
                        option-tooltip-value="{{$size->value}}" role="option"
                        thumb-width="110" thumb-height="90">{{$size->value}}
                    </div>
                    @endif
                    @endforeach
                </div>
                <div class="mage-error" generated="true" id="super_size-error">
                </div>
            </div>
        </div>
        @if($product->photo_size)
        <div url-image={{$product->photo_size}} class="check-size">
            <i class="far fa-chart-bar"></i> Bảng Size
        </div>
        @endif
        <div class="clear clr"></div>
    </div>
</div>
