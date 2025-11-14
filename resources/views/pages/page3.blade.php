@extends('layouts.app')

@section('content')
<h2>Food and Snack Photos</h2>
<div class="gallery">
  @php
    $photos = [
      ['file' => 'Bread.jpg', 'name' => 'Bread'],
      ['file' => 'Burger.jpg', 'name' => 'Burger'],
      ['file' => 'Cake.jpg', 'name' => 'Cake'],
      ['file' => 'Chocolate.webp', 'name' => 'Chocolate'],
      ['file' => 'Coffee and Tea.jfif', 'name' => 'Coffee and Tea'],
      ['file' => 'Donuts.jpg', 'name' => 'Donuts'],
      ['file' => 'French Fries.jpg', 'name' => 'French Fries'],
      ['file' => 'Fried Chicken.jpg', 'name' => 'Fried Chicken'],
      ['file' => 'Ice Cream.jpg', 'name' => 'Ice Cream'],
      ['file' => 'Pancakes.jpg', 'name' => 'Pancakes'],
      ['file' => 'Pizza.jpg', 'name' => 'Pizza'],
      ['file' => 'Ramen.jpg', 'name' => 'Ramen'],
      ['file' => 'Rice Meals.webp', 'name' => 'Rice Meals'],
      ['file' => 'Salad.jpg', 'name' => 'Salad'],
      ['file' => 'Seafood.webp', 'name' => 'Seafood'],
      ['file' => 'Smoothies.jpg', 'name' => 'Smoothies'],
      ['file' => 'Spaghetti.jpg', 'name' => 'Spaghetti'],
      ['file' => 'Steak.jpg', 'name' => 'Steak'],
      ['file' => 'Sushi.png', 'name' => 'Sushi'],
      ['file' => 'Tacos.webp', 'name' => 'Tacos']
    ];
  @endphp

  @foreach ($photos as $photo)
    <div class="photo-card">
      <img src="{{ asset('images/Food and Snacks/' . $photo['file']) }}"
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
