@extends ('sidebar')

@push('styles')
    @livewireStyles
@endpush

@section('content') 
<livewire:post-like-profile :id="$pos[0]->id" />

<button class="welcome-modal-btn">
   <a href="postingan"><i class="fas fa-arrow-up"></i></a>
</button>
<!-- Wrapper End-->
@endsection

@push('scripts')
    @livewireScripts
@endpush
