@extends('layouts.app')

@section('content')
<h2>Animal Photos</h2>
<div class="gallery">
  @php
    $photos = [
      ['file' => 'Bear.jpg', 'name' => 'Bear'],
      ['file' => 'Cat.jpg', 'name' => 'Cat'],
      ['file' => 'Deer.jfif', 'name' => 'Deer'],
      ['file' => 'Dog.jfif', 'name' => 'Dog'],
      ['file' => 'Duck.jfif', 'name' => 'Duck'],
      ['file' => 'Elephant.jpg', 'name' => 'Elephant'],
      ['file' => 'Fox.jpg', 'name' => 'Fox'],
      ['file' => 'Giraffe.jpg', 'name' => 'Giraffe'],
      ['file' => 'Horse.webp', 'name' => 'Horse'],
      ['file' => 'Kangaroo.jpg', 'name' => 'Kangaroo'],
      ['file' => 'Koala.jpg', 'name' => 'Koala'],
      ['file' => 'Lion.jpg', 'name' => 'Lion'],
      ['file' => 'Monkey.png', 'name' => 'Monkey'],
      ['file' => 'Owl.jfif', 'name' => 'Owl'],
      ['file' => 'Parrot.jfif', 'name' => 'Parrot'],
      ['file' => 'Penguin.jpg', 'name' => 'Penguin'],
      ['file' => 'Rabbit.jpg', 'name' => 'Rabbit'],
      ['file' => 'Tiger.jfif', 'name' => 'Tiger'],
      ['file' => 'Wolf.jpg', 'name' => 'Wolf'],
      ['file' => 'Zebra.jpg', 'name' => 'Zebra']
    ];
  @endphp

  @foreach ($photos as $photo)
    <div class="photo-card">
      <img src="{{ asset('images/Animal Photos/' . $photo['file']) }}"
           alt="{{ $photo['name'] }}"
           class="zoomable">
      <p>{{ $photo['name'] }}</p>
    </div>
  @endforeach
</div>

<!-- Zoom Script -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.photo-card').forEach(card => {
      card.addEventListener('click', () => {
        document.querySelectorAll('.photo-card.zoomed').forEach(other => {
          if (other !== card) other.classList.remove('zoomed');
        });
        card.classList.toggle('zoomed');
      });
    });
  });
</script>

@endsection
