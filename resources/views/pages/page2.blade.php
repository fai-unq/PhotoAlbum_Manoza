@extends('layouts.app')

@section('content')
<h2>Flower Photos</h2>
<div class="gallery">
  @php
    $photos = [
      ['file' => 'Anemone.webp', 'name' => 'Anemone'],
      ['file' => 'Camellia.jpg', 'name' => 'Camellia'],
      ['file' => 'Carnation.jfif', 'name' => 'Carnation'],
      ['file' => 'Cherry Blossom.jpg', 'name' => 'Cherry Blossom'],
      ['file' => 'Daffodil.jfif', 'name' => 'Daffodil'],
      ['file' => 'Daisy.webp', 'name' => 'Daisy'],
      ['file' => 'Gerbera.jfif', 'name' => 'Gerbera'],
      ['file' => 'Hibiscus.webp', 'name' => 'Hibiscus'],
      ['file' => 'Lavender.jpg', 'name' => 'Lavender'],
      ['file' => 'Lily.jpg', 'name' => 'Lily'],
      ['file' => 'Lotus.webp', 'name' => 'Lotus'],
      ['file' => 'Marigold.jpg', 'name' => 'Marigold'],
      ['file' => 'Orchid.jfif', 'name' => 'Orchid'],
      ['file' => 'Peony.jpg', 'name' => 'Peony'],
      ['file' => 'Poppy.webp', 'name' => 'Poppy'],
      ['file' => 'Rose.jpg', 'name' => 'Rose'],
      ['file' => 'Snapdragon.jpg', 'name' => 'Snapdragon'],
      ['file' => 'Sunflower.jpeg', 'name' => 'Sunflower'],
      ['file' => 'Tulip.jpg', 'name' => 'Tulip'],
      ['file' => 'Zinnia.jpg', 'name' => 'Zinnia']
    ];
  @endphp

  @foreach ($photos as $photo)
    <div class="photo-card">
      <img src="{{ asset('images/Flower Photos/' . $photo['file']) }}"
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
