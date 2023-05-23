<div>
    <input type="text" class="text search-input" wire:model="searchTerm" placeholder="Cari..." />
    @if($searchTerm)
    <div class="float-container" style="position: absolute; top: 40px; left: 0; width: 100%;">
        <ul class="float-item" style="background-color: #f8f9fa; border: 1px solid #dee2e6; margin-top:20px; padding: 10px; border-radius: 4px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
            @foreach($results as $result)
                <div class="me-3">
                    <img class="avatar-60 rounded-circle" src="{{ $result->photo }}"alt="">
                    <a href="{{ route('profile.user', ['id' => $result->id]) }}">{{ $result->username }}</a>
                </div>
                <hr>
            @endforeach
        </ul>
    </div>
    @endif
</div>
