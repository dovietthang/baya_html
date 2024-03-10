<div class="sidebar sidebar-main">
    <div id="wrapper-layer-view" class="wrapper-layer-view">
        <div class="block filter active" id="layered-filter-block">
            <div class="block-content filter-content">
                @if(@$listFilter && count($listFilter) > 0)
                @php
                $new_href = $param_str;
                $url_clear = $param_str;
                @endphp
                <div class="filter-current"><strong style="cursor: pointer" class="block-subtitle filter-current-subtitle" role="heading"
                        aria-level="2" data-role="title" data-count="{{count($listFilter)}}">Lọc sản phẩm</strong>
                    <ol class="items">
                        @foreach ($listFilter as $key => $item)
                        @php
                        $new_href = isset($replace_str[$key]) ? str_replace($replace_str[$key], '', $param_str) :
                        $param_str;
                        $url_clear = str_replace($replace_str[$key], '', $url_clear);
                        $new_href[0] = '?';
                        @endphp
                        <li class="item">
                            <span class="filter-label">{{__($key)}}</span>
                            <span class="filter-value">{{$item}}</span>
                            <a class="action remove" href="{{$new_href}}"
                                title="{{__('Unchecked')}} {{__($key) . ' ' . $item}}"><span>{{__('Unchecked')}}</span>
                            </a>
                        </li>
                        @endforeach
                    </ol>
                </div>
                @php
                $url = $url_clear;
                if($url){
                $url[0] = '?';
                }
                else{
                $url = url()->current();
                }
                @endphp
                <div class="block-actions filter-actions">
                    <a href="{{$url}}" class="action clear filter-clear"><span>{{__('Delete all')}}</span>
                    </a>
                </div>
                @endif
                <div class="filter-options" id="narrow-by-list" data-role="content">
                    @if(count(@$childrenFilter) > 0)
                    @php $param_new = isset($replace_str['Category']) ? str_replace($replace_str['Category'], '',
                    $param_str) : str_replace('?', '&', $param_str) @endphp
                    <div data-role="collapsible" class="filter-options-item">
                        <div data-role="title" class="filter-options-title">{{__('Category')}}</div>
                        <div data-role="content" class="filter-options-content" style="display: none">
                            <ol class="items">
                                @foreach (@$childrenFilter as $item)
                                <li class="item">
                                    <a href="{{'?cat=' .$item->id. $param_new}}" rel="nofollow">{{$item->title}}</a>
                                </li>
                                @endforeach
                            </ol>
                        </div>
                    </div>
                    @endif
                    @if(!in_array('color', $array_check))
                    <div data-role="collapsible" class="filter-options-item">
                        <div data-role="title" class="filter-options-title">{{__('Color')}}</div>
                        @if($colors && count($colors) > 0)
                            <div data-role="content" class="filter-options-content" style="display: none">
                                <ol class="items">
                                    @foreach ($colors as $item)
                                    <li class="item">
                                        @if($param_str)
                                        <a href="{{$param_str. '&color='. $item->id}}" rel="nofollow">{{$item->title}}
                                        </a>
                                        @else
                                        <a href="?color={{$item->id}}" rel="nofollow">{{$item->title}}
                                        </a>
                                        @endif
                                    </li>
                                    @endforeach
                                </ol>
                            </div>
                        @endif
                    </div>
                    @endif
                    @if(!in_array('size', $array_check))
                    <div data-role="collapsible" class="filter-options-item">
                        <div data-role="title" class="filter-options-title">{{__('Size')}}</div>
                        @if($sizes && count($sizes) > 0)
                            <div data-role="content" class="filter-options-content" style="display: none">
                                <div class="swatch-attribute swatch-layered size" attribute-code="size" attribute-id="152">
                                    <div class="swatch-attribute-options clearfix">
                                        @foreach ($sizes as $item)
                                            @if($param_str)
                                            <a href="{{$param_str. '&size='. $item->id}}" aria-label="{{$item->title}}"
                                                class="swatch-option-link-layered">
                                                <div class="swatch-option text " tabindex="-1" option-type="0"
                                                    option-id="{{$item->id}}" option-label="{{$item->title}}"
                                                    option-tooltip-thumb="{{$item->title}}" option-tooltip-value="">
                                                    {{$item->title}}
                                                </div>
                                            </a>
                                            @else
                                            <a href="?size={{$item->id}}" aria-label="{{$item->title}}"
                                                class="swatch-option-link-layered">
                                                <div class="swatch-option text " tabindex="-1" option-type="0"
                                                    option-id="{{$item->id}}" option-label="{{$item->title}}"
                                                    option-tooltip-thumb="{{$item->title}}" option-tooltip-value="">
                                                    {{$item->title}}
                                                </div>
                                            </a>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                    @endif
                    {{-- <div data-role="collapsible" class="filter-options-item">
                        <div data-role="title" class="filter-options-title">Chất liệu</div>
                        <div data-role="content" class="filter-options-content">
                            <ol class="items">
                                <li class="item"> <a href="nam9d2a.html?materials=5646" rel="nofollow">Acrylic &
                                        Rayon (Giữ nhiệt)</a> </li>
                                <li class="item"> <a href="namb284.html?materials=5648" rel="nofollow">Coolmax
                                        Polyester</a> </li>
                            </ol>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
