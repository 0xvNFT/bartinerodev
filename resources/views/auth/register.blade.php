@extends('layouts.app')

@section('content')

<section id="register">

    <div class="container">

        <h2 style="font-size: 2rem">Register</h2>

        <div class="row justify-content-center">

            <div class="col-auto">

                <form action="{{ route('register') }}" method="post" id="register-form">

                    @csrf

                    {{-- First and Last Name --}}
                    <div class="form-row">
                        <div class="form-group col-6">

                            <input type="text" class="form-control @error('firstname') form-error-inline @enderror" name="firstname" id="firstname" value="{{ old('firstname') }}" placeholder="First Name">

                            @error('firstname')
                                <div class="form-error">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>

                        <div class="form-group col-6">

                            <input type="text" class="form-control @error('lastname') form-error-inline @enderror" name="lastname" id="lastname" value="{{ old('lastname') }}" placeholder="Last Name">

                            @error('lastname')
                                <div class="form-error">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>
                    </div>
                    
                    {{-- Gender --}}
                    <div class="form-group">

                        <select name="gender" id="gender" class="form-control @error('gender') form-error-inline @enderror" value="{{ old('gender') }}">
                            <option value="" selected disabled>Gender</option>
                            <option value="Male" id="male">Male</option>
                            <option value="Female" id="female">Female</option>
                        </select>

                        @error('gender')
                            <div class="form-error">
                                {{ $message }}
                            </div>
                        @enderror
                        
                    </div>
                    
                    {{-- Address --}}
                    <div class="form-group">

                        <input type="text" class="form-control @error('address') form-error-inline @enderror" name="address" id="address" placeholder="House No., Street Name, Subdivision" value="{{ old('address') }}">

                        @error('address')
                            <div class="form-error">
                                {{ $message }}
                            </div>
                        @enderror
                        
                    </div>

                    {{-- Barangay --}}
                    <div class="form-group">
                        
                        <select name="barangay" id="barangay" class="form-control @error('barangay') form-error-inline @enderror" value="{{ old('barangay') }}">
                            <option value="" selected disabled>Barangay</option>
                            <option value="Brgy. Almanza Uno" id="brgy1">Brgy. Almanza Uno</option>
                            <option value="Brgy. Almanza Dos" id="brgy2">Brgy. Almanza Dos</option>
                            <option value="Brgy. BF International" id="brgy3">Brgy. BF International</option>
                            <option value="Brgy. CAA" id="brgy4">Brgy. CAA</option>
                            <option value="Brgy. Daniel Fajardo" id="brgy5">Brgy. Daniel Fajardo</option>
                            <option value="Brgy. Elias Aldana" id="brgy6">Brgy. Elias Aldana</option>
                            <option value="Brgy. Ilaya" id="brgy7">Brgy. Ilaya</option>
                            <option value="Brgy. Manuyo Uno" id="brgy8">Brgy. Manuyo Uno</option>
                            <option value="Brgy. Manuyo Dos" id="brgy9">Brgy. Manuyo Dos</option>
                            <option value="Brgy. Pamplona Uno" id="brgy10">Brgy. Pamplona Uno</option>
                            <option value="Brgy. Pamplona Dos" id="brgy11">Brgy. Pamplona Dos</option>
                            <option value="Brgy. Pamplona Tres" id="brgy12">Brgy. Pamplona Tres</option>
                            <option value="Brgy. Pilar" id="brgy13">Brgy. Pilar</option>
                            <option value="Brgy. Pulang Lupa Uno" id="brgy14">Brgy. Pulang Lupa Uno</option>
                            <option value="Brgy. Pulang Lupa Dos" id="brgy15">Brgy. Pulang Lupa Dos</option>
                            <option value="Brgy. Talon Uno" id="brgy16">Brgy. Talon Uno</option>
                            <option value="Brgy. Talon Dos" id="brgy17">Brgy. Talon Dos</option>
                            <option value="Brgy. Talon Tres" id="brgy18">Brgy. Talon Tres</option>
                            <option value="Brgy. Talon Kuatro" id="brgy19">Brgy. Talon Kuatro</option>
                            <option value="Brgy. Zapote" id="brgy20">Brgy. Zapote</option>
                        </select>

                        @error('barangay')
                            <div class="form-error">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    <hr>

                    {{-- Email and Number --}}
                    <div class="form-row">
                        <div class="form-group col-6">

                            <input type="email" class="form-control @error('email') form-error-inline @enderror" name="email" id="email" placeholder="Email" value="{{ old('email') }}">

                            @error('email')
                                <div class="form-error">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>
                        <div class="form-group col-6">
                            
                            <input type="number" class="form-control @error('mobile') form-error-inline @enderror" name="mobile" id="mobile" placeholder="Mobile Number" value="{{ old('mobile') }}">

                            @error('mobile')
                                <div class="form-error" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                            
                        </div>
                    </div>
                    
                    {{-- Username --}}
                    <div class="form-group">

                        <input type="text" class="form-control @error('username') form-error-inline @enderror" name="username" id="username" placeholder="Username" value="{{ old('username') }}">

                        @error('username')
                            <div class="form-error">
                                {{ $message }}
                            </div>
                        @enderror
                        
                    </div>

                    {{-- Password --}}
                    <div class="form-row">
                        <div class="form-group col-6">
                            
                            <input type="password" class="form-control @error('password') form-error-inline @enderror" name="password" id="password" placeholder="Password">

                            @error('password')
                                <div class="form-error">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>
                        <div class="form-group col-6">
                            
                            <input type="password" class="form-control @error('password') form-error-inline @enderror" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password">

                            @error('password_confirmation')
                                <div class="form-error">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>
                    </div>

                    <div class="form-group d-flex justify-content-center checkterms">
                        <div class="form-check">
                            
                          <input class="form-check-input @error('terms') form-error-inline @enderror" type=checkbox name="terms" id="terms"/>
                          <label class="form-check-label" for="terms">
                            <a href="/terms-and-conditions" style="color: black; margin-left: 0.5rem; text-decoration: underline;">I agree to the Terms and Conditions.</a>
                          </label>

                            @error('terms')
                                <div class="form-error">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                
                </form>

            </div>

        </div>

</section>

@endsection