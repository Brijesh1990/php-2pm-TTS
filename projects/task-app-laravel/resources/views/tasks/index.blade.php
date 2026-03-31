@extends('layouts.app')

@section('title', 'Tasks - TaskMaster')

@section('content')
<!-- Re-using dashboard view for index as requested, or redirecting to dashboard -->
<script>window.location = "{{ route('dashboard') }}";</script>
@endsection
