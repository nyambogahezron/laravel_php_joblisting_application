@props(['tagsCsv'])

<?php
$tags = explode(',', $tagsCsv);
?>

<ul class="flex">
    @foreach ($tags as $tag)
        <li
            class="mr-2 flex items-center justify-center rounded-xl bg-red-200 px-3 py-1 text-xs text-white hover:bg-blue-600">
            <a href="/?tag={{ $tag }}">{{ $tag }}</a>
        </li>
    @endforeach
</ul>
