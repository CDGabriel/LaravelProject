@props(['user', 'size'=>'w-12 h-12'])

@if ($user->image)
    <img src="{{ $user->imageURL() }}" alt="{{ $user->name }}" class="{{ $size }} rounded-full justify-self-center">
@else
    <img src="https://www.pngitem.com/pimgs/m/581-5813504_avatar-dummy-png-transparent-png.png" alt="Dummy Avatar"
        class="{{ $size }} rounded-full">
@endif