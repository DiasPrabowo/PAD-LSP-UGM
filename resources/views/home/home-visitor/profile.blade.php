@extends('home.layouts.layout')

@section('title', 'Home - Lembaga Sertifikasi Profesi UGM')

@section('content')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>


<div class="flex justify-center items-center py-12 px-4 md:px-8 lg:px-12">
    <div class="bg-white w-full max-w-4xl p-8 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold text-gray-800 mb-6 border-b-2 border-gray-200 pb-3 text-center">LEGAL PENDIRIAN</h1>
        <ul class="space-y-4 list-disc list-inside">
            <li class="text-lg text-gray-700">
                <span class="font-semibold">Peraturan Pemerintah No. 67 Tahun 2013:</span> Lambang Universitas Gadjah Mada memiliki 2 jenis lambang, yaitu lambang 3 Dimensi dan lambang 2 Dimensi.
            </li>
            <li class="text-lg text-gray-700">
                <span class="font-semibold">Peraturan Pembuatan Lembaga Sertifikasi Profesi:</span> Universitas Gadjah Mada.
            </li>
            <li class="text-lg text-gray-700">
                <span class="font-semibold">Peraturan Penggunaan Font:</span> Universitas Gadjah Mada.
            </li>
        </ul>
    </div>
</div>

<div class="flex justify-center items-center py-12 px-4 md:px-8 lg:px-12">
    <div class="bg-white w-full max-w-4xl p-8 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold text-gray-800 mb-6 border-b-2 border-gray-200 pb-3 text-center">STRUKTUR ORGANISASI</h1>
        <img src="{{ asset('images/Pengurus.png') }}" alt="Struktur Organisasi" class="w-full h-auto">
    </div>
</div>

<div class="flex justify-center items-center py-12 px-4 md:px-8 lg:px-12">
    <div class="bg-white w-full max-w-4xl p-8 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold text-gray-800 mb-6 border-b-2 border-gray-200 pb-3 text-center">LOKASI</h1>
        
        <!-- Add the map container div here -->
        <div id="map" style="width: 100%; height: 500px; border-radius: 8px;"></div>

        <script>
            var map = L.map('map', { attributionControl: false }).setView([-7.7749, 110.3748], 13);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
            }).addTo(map);

            // Add a marker with a popup
            var marker = L.marker([-7.7738306, 110.3724111]).addTo(map);
            marker.bindPopup(
                "<div style='text-align: center;'>" +
                "<b><a href='https://maps.app.goo.gl/1MvvKeFbT7G71AJcA' target='_blank' style='text-decoration: none; color: inherit;'>Lembaga Sertifikasi Profesi <br> Universitas Gadjah Mada</a></b>" +
                "</div>"
            ).openPopup();
        </script>
    </div>
</div>

@endsection
