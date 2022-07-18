<x-layout>
  <x-slot name='title'> {{__('ui.log-in')}}</x-slot>
  
  
  
  
  <div class="container-fluid bg-login min-vh-100 ">
    <div class="row">
      <div class="col-12 text-center">
        <h1 class="mt-150 mb-4 fw-bold">{{__('ui.log-in')}}</h1>           
      </div>
      <div class="col-11 col-md-6 col-lg-4 offset-md-2 offset-lg-4 form-box d-flex justify-content-center pt-4 pb-5 mx-auto">
        <div class="register-form-container">
                  {{-- Alert errors --}}
                  @if($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>   
                  @endif
                  {{-- form --}}
                  <form action="{{route('login')}}" method="POST">
                      @csrf
                          <h5 class="mt-3 fw-bold">{{__('ui.log-mail')}}</h5>
                          <div class="form-floating mb-3">
                            <input type="email" id="registerEmail"  class="form-control input-register" name="email" placeholder="name@example.com">
                            <label for="registerEmail" class="form-label text-black-50">{{__('ui.log-mail')}}</label>
                          </div>
                          <h5 class="mt-3 fw-bold">{{__('ui.log-pas')}}</h5>
                          <div class="form-floating mb-3">
                            <input type="password" id="registerPassword" class="form-control input-register" name="password" placeholder="exemple">
                            <label  for="registerPassword" class="form-label text-black-50">{{__('ui.log-pas')}}</label>
                          </div>
                          <button type="submit" class="form-btn w-100">{{__('ui.logenter')}}</button>
                          {{-- Presto family --}}
                          <p class="pt-3 px-1">{{__('ui.nonanc')}} <a class="text-decoration-none" href="{{route('register')}}">{{__('ui.unipr')}}</a></p>
                  </form>
                </div>
              </div>
          </div>
      </div>
</x-layout>