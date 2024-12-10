@extends('layouts.master')
@section('content')
<section class="min-h-screen mb-32">
  <div class="relative flex items-start pt-12 pb-56 m-4 overflow-hidden bg-center bg-cover min-h-50-screen rounded-xl" style="background-image: url('../assets/img/curved-images/curved14.jpg')">
    <div class="container z-10">
      <div class="flex flex-wrap justify-center -mx-3">
        <div class="w-full max-w-full px-3 mx-auto mt-0 text-center lg:flex-0 shrink-0 lg:w-5/12">
          <h1 class="mt-12 mb-2 text-white">Welcome!</h1>
          <p class="text-white">Please register your account to log in to the ebook</p>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="flex flex-wrap -mx-3 -mt-48 md:-mt-56 lg:-mt-48">
      <div class="w-full max-w-full px-3 mx-auto mt-0 md:flex-0 shrink-0 md:w-7/12 lg:w-5/12 xl:w-4/12">
        <div class="relative z-0 flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
          <div class="p-6 mb-0 text-center bg-white border-b-0 rounded-t-2xl">
            <h5>Register Account</h5>
          </div>
          <div class="flex-auto p-6">
            <form action="{{ route('register') }}" method="POST" role="form text-left">
              @csrf
              <div class="mb-4">
                <input type="text" name="name" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Name" aria-label="Name" value="{{ old('name') }}" required />
                @error('name')
                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-4">
                <input type="email" name="email" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Email" aria-label="Email" value="{{ old('email') }}" required />
                @error('email')
                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-4">
                <input type="password" name="password" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Password" aria-label="Password" required />
                @error('password')
                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-4">
                <input type="password" name="password_confirmation" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Confirm Password" aria-label="Confirm Password" required />
              </div>
              <div class="min-h-6 pl-6.92 mb-0.5 block">
                <input id="terms" class="w-4.92 h-4.92 ease-soft -ml-6.92 rounded-1.4 checked:bg-gradient-to-tl checked:from-gray-900 checked:to-slate-800 after:text-xxs after:font-awesome after:duration-250 after:ease-soft-in-out duration-250 relative float-left mt-1 cursor-pointer appearance-none border border-solid border-slate-200 bg-white bg-contain bg-center bg-no-repeat align-top transition-all after:absolute after:flex after:h-full after:w-full after:items-center after:justify-center after:text-white after:opacity-0 after:transition-all after:content-['\f00c'] checked:border-0 checked:border-transparent checked:bg-transparent checked:after:opacity-100" type="checkbox" value="" checked />
                <label class="mb-2 ml-1 font-normal cursor-pointer select-none text-sm text-slate-700" for="terms"> I agree the <a href="javascript:;" class="font-bold text-slate-700">Terms and Conditions</a> </label>
              </div>
              <div class="text-center">
                <button type="submit" class="inline-block w-full px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Sign up</button>
              </div>
              <p class="mt-4 mb-0 leading-normal text-sm">Already have an account? <a href="{{ route('login') }}" class="font-bold text-slate-700">Sign in</a></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
