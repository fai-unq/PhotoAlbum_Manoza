@extends('layouts.app')

@section('content')
<!-- Floating butterflies -->
<div class="butterfly" style="top: 60px; left: 30px;"></div>
<div class="butterfly" style="top: 180px; left: 80%;"></div>
<div class="butterfly" style="top: 300px; left: 50%;"></div>

<!-- Magical border and transition -->
<div class="home-wrapper page-border page-transition">
  <ul class="page-links">
    <li><a href="{{ route('page1') }}">🐾 Page 1 – Animal Photos</a></li>
    <li><a href="{{ route('page2') }}">🌸 Page 2 – Flower Photos</a></li>
    <li><a href="{{ route('page3') }}">🍩 Page 3 – Food and Snacks</a></li>
    <li><a href="{{ route('page4') }}">🌿 Page 4 – Nature Photos</a></li>
    <li><a href="{{ route('page5') }}">✈️ Page 5 – Travel Destination Photos</a></li>
  </ul>
</div>
@endsection
