<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
   
    <h1> this page is ragistration page</h1>

    <form wire:submit.prevent="submit">
        <input type="text" wire:model="name" placeholder="name">
       @error('name')
       <span class="error">{{ $message }}</span>  
        @enderror
        <br><br>
        <input type="text" wire:model="email" placeholder="email">
        @error('email')
        <span class="error">{{ $message }}</span>  
         @enderror<br><br>
        <input type="password" wire:model="password" placeholder="password">
        @error('password')
        <span class="error">{{ $message }}</span>  
         @enderror<br><br>
        <br>
       <button type="submit">sregistration</button>
    </form>
    
</div>
