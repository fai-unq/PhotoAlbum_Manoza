@extends('layouts.app')

@section('content')
<h2>Travel Destination Photos</h2>
<div class="gallery">
  @php
    $photos = [
      ['file' => 'Agra, India.webp', 'name' => 'Agra, India'],
      ['file' => 'Antarctica.webp', 'name' => 'Antarctica'],
      ['file' => 'Bali, Indonesia.jpg', 'name' => 'Bali, Indonesia'],
      ['file' => 'Banff National Park, Canada.jpg', 'name' => 'Banff National Park, Canada'],
      ['file' => 'Cape Town, South Africa.jfif', 'name' => 'Cape Town, South Africa'],
      ['file' => 'Cebu, Philippines.jfif', 'name' => 'Cebu, Philippines'],
      ['file' => 'Dubai, UAE.jpg', 'name' => 'Dubai, UAE'],
      ['file' => 'Istanbul, Turkey.jpg', 'name' => 'Istanbul, Turkey'],
      ['file' => 'Kyoto, Japan.jpg', 'name' => 'Kyoto, Japan'],
      ['file' => 'London, UK.jpg', 'name' => 'London, UK'],
      ['file' => 'Machu Picchu, Peru.webp', 'name' => 'Machu Picchu, Peru'],
      ['file' => 'Marrakech, Morocco.jfif', 'name' => 'Marrakech, Morocco'],
      ['file' => 'New York City, USA.jpg', 'name' => 'New York City, USA'],
      ['file' => 'Paris, France.jfif', 'name' => 'Paris, France'],
      ['file' => 'Petra, Jordan.jpg', 'name' => 'Petra, Jordan'],
      ['file' => 'Reykjavík, Iceland.jpg', 'name' => 'Reykjavík, Iceland'],
      ['file' => 'Rio de Janeiro, Brazil.jpg', 'name' => 'Rio de Janeiro, Brazil'],
      ['file' => 'Santorini, Greece.jpg', 'name' => 'Santorini, Greece'],
      ['file' => 'Sydney, Australia.jpg', 'name' => 'Sydney, Australia'],
      ['file' => 'Venice, Italy.jpeg', 'name' => 'Venice, Italy']
    ];
  @endphp

  @foreach ($photos as $photo)
    <div class="photo-card">
      <img src="{{ asset('images/Travel Destination Photos/' . $photo['file']) }}"
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
