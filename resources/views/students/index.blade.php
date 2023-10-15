@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">  
    <livewire:show-students />          
    </div>
</div>
<script>
    window.addEventListener('close-modal', event => {

        $('#studentModal').modal('hide');
        $('#updateStudentModal').modal('hide');
        $('#deleteStudentModal').modal('hide');
    })
</script>
@endsection