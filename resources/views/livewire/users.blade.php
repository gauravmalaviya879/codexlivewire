<div>
    {{-- Stop trying to control. --}}
    <h2>component user parent</h2>
    @foreach ($names as $user)
        <h3>{{ $user }}</h3>
        {{-- passs data to child componentuser -list --}}
        <h2>   @livewire('user-list',['user'=>$user])</h2>
     
    @endforeach


</div>
