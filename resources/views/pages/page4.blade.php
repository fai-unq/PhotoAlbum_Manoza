@extends('layouts.app')

@section('content')
<h2>Nature Photos</h2>
<div class="gallery">
  @php
    $photos = [
      ['file' => 'Angel Falls.jfif', 'name' => 'Angel Falls'],
      ['file' => 'Antelope Canyon Light Beams.jpg', 'name' => 'Antelope Canyon Light Beams'],
      ['file' => 'Aurora Borealis over Norway.jpg', 'name' => 'Aurora Borealis over Norway'],
      ['file' => 'Bamboo Forest in Arashiyama.jpg', 'name' => 'Bamboo Forest in Arashiyama'],
      ['file' => 'Banff National Park Reflection.webp', 'name' => 'Banff National Park Reflection'],
      ['file' => 'Cherry Blossoms in Kyoto.jpg', 'name' => 'Cherry Blossoms in Kyoto'],
      ['file' => 'Grand Canyon Sunset.jpg', 'name' => 'Grand Canyon Sunset'],
      ['file' => 'Iguazu Falls.jfif', 'name' => 'Iguazu Falls'],
      ['file' => 'Mount Everest at Sunrise.jpg', 'name' => 'Mount Everest at Sunrise'],
      ['file' => 'Mount Fuji and Lake Kawaguchiko.jfif', 'name' => 'Mount Fuji and Lake Kawaguchiko'],
      ['file' => 'Plitvice Lakes.jpg', 'name' => 'Plitvice Lakes'],
      ['file' => 'Reynisfjara Black Sand Beach.jpg', 'name' => 'Reynisfjara Black Sand Beach'],
      ['file' => 'Salar de Uyuni Mirror Effect.jpg', 'name' => 'Salar de Uyuni Mirror Effect'],
      ['file' => 'Tetons and the Snake River.jpg', 'name' => 'Tetons and the Snake River'],
      ['file' => 'The Great Barrier Reef Aerial.jpg', 'name' => 'The Great Barrier Reef Aerial'],
      ['file' => 'The Sahara Dunes.jpg', 'name' => 'The Sahara Dunes'],
      ['file' => 'The Wave Rock Formation.jpg', 'name' => 'The Wave Rock Formation'],
      ['file' => 'Victoria Falls Rainbow.webp', 'name' => 'Victoria Falls Rainbow'],
      ['file' => 'Yellowstones Grand Prismatic Spring.webp', 'name' => 'Yellowstones Grand Prismatic Spring'],
      ['file' => 'Yosemite Valley, Clearing Winter Storm.jpg', 'name' => 'Yosemite Valley, Clearing Winter Storm'],
    ];
  @endphp

  @foreach ($photos as $photo)
    <div class="photo-card">
      <img src="{{ asset('images/Nature Photos/' . $photo['file']) }}"
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
