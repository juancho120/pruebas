@extends('layout.panel.header')
@extends('layout.panel.css')
@extends('layout.panel.scripts')
{{-- @extends('layout.panel.navbar') --}}
@extends('layout.panel.foother')

<!DOCTYPE html>
<html lang="en">
<head>
    @section('title', 'X')
    @section('css')        
    @section('scripts')
</head>
<body>
{{--     @section('navbar')
    @endsection --}}
    
    @yield('content')
</body>
</html>