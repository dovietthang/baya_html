<div class="modal-inner-wrap" data-role="focusable-scope">
    <header class="modal-header">
        <h1 id="modal-title-size" class="modal-title" data-role="title">
                {{$page->title}}
        </h1>
        <button class="action-close" data-role="closeBtn" type="button">
            <span>Close</span>
        </button>
    </header>
        <div id="modal-content-size" class="modal-content" data-role="content"><div class="sizechart" style="">
            <div class="mce-content-body">
                {!!$page->content!!}
            </div>
        </div>
    </div>
</div>
