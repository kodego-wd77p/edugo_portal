@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center" >
        <div class="col-md-8">
            <div class="card" id="con-dash">
                <!-- <div class="card-header align-content-center">{{ __('Dashboard') }}</div> -->

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                
                    <!-- GREETINGS TO THE USER -->
                <h3>{{ __('Welcome to EduGo Portal,') }} <b>{{ Auth::user()->name}}</b> {{_('!')}}</h3>

                <div class="row">
  <div class="col">
    <div class="card"  id="bo-card">
      <div class="card-body">
        <h5 class="card-title">Create a Portal</h5>
        <p class="card-text">Effortless Record-Keeping Made Simple: Our innovative service takes the stress out of managing activities, assignments, and attendance. With just a few clicks, you can easily track and organize student records, saving time and energy. Say goodbye to messy paperwork and hello to a more efficient and productive teaching experience. Empower yourself with seamless record-keeping and focus on what truly matters!</p>
        <a href="<?php echo url('create') ?>" class="btn" id="dash">Create Now</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card" id="bo-card">
      <div class="card-body">
        <h5 class="card-title">Enter a Portal</h5>
        <p class="card-text">Eliminate the Hassle: Simplify your School Life with Seamless Submission! Experience a seamless and stress-free way to submit activities, assignments, and attendance. Our revolutionary service streamlines the entire process, ensuring effortless submission and giving you more time to excel academically. Say goodbye to endless paperwork and hello to simplicity, efficiency, and success!</p>
        <a href="#" class="btn" id="dash">Enter Now</a>
      </div>
    </div>
  </div>
</div>

                </div>
                


            </div>
        </div>
    </div>
</div>
@endsection
