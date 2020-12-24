<!-- /resources/views/alert.blade.php -->

<div class="modal fade" id="{{ $id }}" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">{{ $name }}</h4>
            </div>
            <div class="modal-body">
                {{ $numbers }}
            </div>
            <div class="modal-footer">
                {{ $buttons }}
            </div>
        </div>
    </div>
</div>
