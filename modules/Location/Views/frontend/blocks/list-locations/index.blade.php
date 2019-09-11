<div class="container">
    <div class="bravo-list-locations @if(!empty($layout)) {{ $layout }} @endif">
        <div class="title">
            {{$title}}
        </div>
        @if(!empty($desc))
            <div class="sub-title">
                {{$desc}}
            </div>
        @endif
        <div class="list-item">
            <div class="row">
                @foreach($rows as $key=>$row)
                    <?php
                    $size_col = 4;
                    if( !empty($layout) and $layout == "style_2"){
                        $size_col = 4;
                    }else{
                        if($key == 0){
                            $size_col = 8;
                        }
                    }
                    ?>
                    <div class="col-lg-{{$size_col}}">
                        @include('Location::frontend.blocks.list-locations.loop')
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>