@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    


    <main class="relative pt-lg flex w-full md:py-lg md:px-2xl lg:p-2xl lg:w-2/3 lg:justify-center">
   <div class="w-full p-lg pt-16 lg:!w-[640px] lg:pt-24">
      <div>
         <h1 class="text-black text-[32px] tracking-[-1px] lg:tracking-[-2px] lg:text-xl font-extrabold mb-md">Create an account for free</h1>
         <p class="text-concrete text-md mb-2xl">Free forever. No payment needed.</p>
         <form>
            <div class="space-y-xs">
               <div>
                  <div class="rounded-[10px] relative focus-within:ring-2 focus-within:ring-black transition ease-out duration-75 hover:shadow-[inset_0_0_0_2px_#e0e2d9] hover:focus-within:shadow-none">
                     <div class="flex w-100 rounded-[10px] leading-[48px] border-solid border-transparent border-2">
                        <label id="label-username" class="text-concrete h-2xl bg-chalk flex items-center pl-md rounded-sm rounded-r-none text-sm">linktr.ee/</label>
                        <div class="relative w-100 grow"><input name="username" autocomplete="username" type="text" placeholder="Username" aria-invalid="false" aria-labelledby="label-username" class="peer text-black leading-[48px] placeholder:leading-[48px] placeholder-concrete rounded-l-none pt-md pl-2xs text-sm h-2xl block p-md w-full rounded-sm bg-chalk text-black transition duration-75 ease-out !outline-none" value=""></div>
                     </div>
                  </div>
                  <div class="transition-[max-height] overflow-hidden ease-out duration-75 max-h-0">
                     <p id="error-username" class="text-tulip text-sm overflow-hidden max-h-[calc(16.8px*2)] ml-md mb-xs mt-2xs"></p>
                  </div>
               </div>
               <div>
                  <div class="rounded-[10px] relative focus-within:ring-2 focus-within:ring-black transition ease-out duration-75 hover:shadow-[inset_0_0_0_2px_#e0e2d9] hover:focus-within:shadow-none">
                     <div class="flex w-100 rounded-[10px] leading-[48px] border-solid border-transparent border-2">
                        <div class="relative w-100 grow"><input name="email" autocomplete="email" type="email" placeholder="Email" aria-invalid="false" aria-labelledby="label-email" class="peer text-black leading-[48px] placeholder:leading-[48px] placeholder-transparent pt-xl text-sm h-2xl block p-md w-full rounded-sm bg-chalk text-black transition duration-75 ease-out !outline-none" value=""><label id="label-email" class="absolute pointer-events-none left-md top-1.5 text-xs transition-all peer-placeholder-shown:top-[14px] peer-placeholder-shown:text-sm peer-focus:top-1.5 peer-focus:text-xs peer-placeholder-shown:tracking-normal text-concrete">Email</label></div>
                     </div>
                  </div>
                  <div class="transition-[max-height] overflow-hidden ease-out duration-75 max-h-0">
                     <p id="error-email" class="text-tulip text-sm overflow-hidden max-h-[calc(16.8px*2)] ml-md mb-xs mt-2xs"></p>
                  </div>
               </div>
               <div>
                  <div class="block rounded-[10px] focus-within:ring-2 focus-within:ring-black transition-[margin-bottom] duration-75 ease-out hover:shadow-[inset_0_0_0_2px_#e0e2d9] hover:focus-within:shadow-none">
                     <div class="rounded-[10px] transition duration-75 ease-out">
                        <div class="flex w-100 rounded-[10px] border-transparent border-solid border-2 transition duration-75 ease-out">
                           <div class="relative w-100 grow">
                              <input name="password" autocomplete="new-password" type="password" placeholder="Password" aria-invalid="false" aria-labelledby="label-password" class="placeholder-transparent peer pr-2xl pt-xl leading-[48px] placeholder:leading-[48px] text-sm h-2xl block p-md w-full rounded-sm bg-chalk text-black transition duration-75 ease-out !outline-none" value=""><label id="label-password" class="absolute pointer-events-none left-md top-1.5 text-xs transition-all peer-placeholder-shown:top-[14px] peer-placeholder-shown:text-sm peer-focus:top-1.5 peer-focus:text-xs peer-focus:tracking-normal text-concrete">Password</label>
                              <button type="button" class="absolute top-2xs right-2xs p-sm rounded-sm outline-2 focus:outline-black text-concrete">
                                 <span class="sr-only">Show Password</span>
                                 <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class=" text-black" role="graphics-symbol img" aria-labelledby="Eye Visible ">
                                    <title>Eye Visible</title>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99961 13C5.33906 13 3.02323 11.1441 1.08443 8C3.02323 4.85586 5.33906 3 7.99961 3C10.6602 3 12.976 4.85586 14.9148 8C12.976 11.1441 10.6602 13 7.99961 13ZM7.99961 2C4.73167 2 2.10074 4.34324 0.0703125 7.74367V8.25633C2.10074 11.6568 4.73167 14 7.99961 14C11.2675 14 13.8985 11.6568 15.9289 8.25633V7.74367C13.8985 4.34324 11.2675 2 7.99961 2ZM5.99961 8C5.99961 6.89543 6.89504 6 7.99961 6C9.10418 6 9.99961 6.89543 9.99961 8C9.99961 9.10457 9.10418 10 7.99961 10C6.89504 10 5.99961 9.10457 5.99961 8ZM7.99961 5C6.34275 5 4.99961 6.34315 4.99961 8C4.99961 9.65685 6.34275 11 7.99961 11C9.65646 11 10.9996 9.65685 10.9996 8C10.9996 6.34315 9.65646 5 7.99961 5Z" fill="currentColor"></path>
                                 </svg>
                              </button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="transition-[max-height] overflow-hidden ease-out duration-75 max-h-0">
                     <p id="error-password" class="text-tulip text-sm overflow-hidden max-h-[calc(16.8px*2)] ml-md mb-xs mt-2xs"></p>
                  </div>
               </div>
            </div>
            <div class="pt-lg pb-2xl">
               <label for="linktree-terms-privacy-accept" class="group w-fit min-h-[48px] rounded-sm first:mr-md flex justify-center align-center outline-none transition duration-75 ease-out text-sm mb-lg cursor-pointer">
                  <input type="checkbox" id="linktree-terms-privacy-accept" name="linktree-terms-privacy-accept" class="peer appearance-none" value="">
                  <div class="flex-shrink-0 self-center relative mr-4 w-lg h-lg rounded-sm flex justify-center transition duration-75 ease-out peer-focus-visible:ring-2 peer-focus-visible:ring-offset-2 peer-focus-visible:ring-black bg-white border-[1px] border-solid border-sand group-hover:shadow-[0_0_0_1px_#e0e2d9]">
                     <div class="self-center text-white">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class=" " role="graphics-symbol img" aria-labelledby="Check Icon ">
                           <title>Check Icon</title>
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7016 2.5097L14.3893 2.90014L6.38929 12.9001L5.62515 12.92L1.62515 8.41997L1.29297 8.04627L2.04038 7.38191L2.37256 7.75561L5.97873 11.8126L13.6084 2.27544L13.9208 1.88501L14.7016 2.5097Z" fill="currentColor"></path>
                        </svg>
                     </div>
                  </div>
                  <span class="text-black self-center">
                     <p class="text-black text-sm ">By creating an account you are agreeing to our <a class="undefined text-sm text-pansy inline-flex focus-visible:outline focus-visible:outline-2 focus-visible:outline-black focus-visible:outline-offset-2 underline" href="https://linktr.ee/s/terms/"><span>Terms and Conditions</span></a>.</p>
                  </span>
               </label>
               <p class="text-black text-sm ">View our <a class="undefined text-sm text-pansy inline-flex focus-visible:outline focus-visible:outline-2 focus-visible:outline-black focus-visible:outline-offset-2 underline" href="https://linktr.ee/s/privacy/"><span>Privacy Notice</span></a> to see how we manage your personal information.</p>
            </div>
            <button class="relative transition duration-75 ease-out w-full bg-chalk text-pebble undefined hover:bg-teasel active:bg-teasel h-2xl px-md rounded-xl outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-black antialiased pointer-events-none" disabled="" type="submit"><span class="flex justify-center items-center"><span class="block font-semibold text-md">Sign up with email</span></span></button>
         </form>
         <div class="flex justify-center mt-xl"><a class="undefined text-sm text-pansy inline-flex focus-visible:outline focus-visible:outline-2 focus-visible:outline-black focus-visible:outline-offset-2 underline" href="#/login"><span>Already have an account?</span></a></div>
      </div>
   </div>
</main>
</div>
@endsection
