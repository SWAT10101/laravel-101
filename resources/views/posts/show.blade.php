@section('title', $post->title)



<x-layout>
    <x-post :post="$post" :comments="$comments" class="font-weight-bold" />
</x-layout>
