<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Arsha Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons     
{{ asset('
') }}        -->
  <link href="{{ asset('/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono&display=swap" rel="stylesheet">


  <!-- Vendor CSS Files -->
  <link href="{{ asset('vendor/aos/aos.css" rel="stylesheet') }}">
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>

      <div class="container" data-aos="fade-up">
<div id="app" class="h-full" data-v-app="">


<!-- Component Start
<div class="flex flex-col items-center w-16 h-full overflow-hidden text-gray-400 bg-gray-900 rounded">
  <a class="flex items-center justify-center mt-3" href="#">
    <svg class="w-8 h-8 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
      <path d="M11 17a1 1 0 001.447.894l4-2A1 1 0 0017 15V9.236a1 1 0 00-1.447-.894l-4 2a1 1 0 00-.553.894V17zM15.211 6.276a1 1 0 000-1.788l-4.764-2.382a1 1 0 00-.894 0L4.789 4.488a1 1 0 000 1.788l4.764 2.382a1 1 0 00.894 0l4.764-2.382zM4.447 8.342A1 1 0 003 9.236V15a1 1 0 00.553.894l4 2A1 1 0 009 17v-5.764a1 1 0 00-.553-.894l-4-2z" />
    </svg>
  </a>
  <div class="flex flex-col items-center mt-3 border-t border-gray-700">
    <a class="flex items-center justify-center w-12 h-12 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="#">
      <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
      </svg>
    </a>
    <a class="flex items-center justify-center w-12 h-12 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="#">
      <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
      </svg>
    </a>
    <a class="flex items-center justify-center w-12 h-12 mt-2 text-gray-200 bg-gray-700 rounded" href="#">
      <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
      </svg>
    </a>
    <a class="flex items-center justify-center w-12 h-12 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="#">
      <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2" />
      </svg>
    </a>
  </div>
  <div class="flex flex-col items-center mt-2 border-t border-gray-700">
    <a class="flex items-center justify-center w-12 h-12 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="#">
      <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
      </svg>
    </a>
    <a class="flex items-center justify-center w-12 h-12 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="#">
      <svg class="w-6 h-6 stroke-current"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
      </svg>
    </a>
    <a class="relative flex items-center justify-center w-12 h-12 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="#">
      <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
      </svg>
      <span class="absolute top-0 left-0 w-2 h-2 mt-2 ml-2 bg-indigo-500 rounded-full"></span>
    </a>
  </div>
  <a class="flex items-center justify-center w-16 h-16 mt-auto bg-gray-800 hover:bg-gray-700 hover:text-gray-300" href="#">
    <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
    </svg>
  </a>
</div>

 -->
<!----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->


<div class="flex   w-screen h-screen p-10 space-x-6 bg-gray-300">

	<!-- Component Start -->
	<div class="flex flex-col items-center w-16  overflow-hidden text-gray-400 bg-gray-900 rounded">
		<a class="flex items-center justify-center mt-3" href="#">
			<svg class="w-8 h-8 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
				<path d="M11 17a1 1 0 001.447.894l4-2A1 1 0 0017 15V9.236a1 1 0 00-1.447-.894l-4 2a1 1 0 00-.553.894V17zM15.211 6.276a1 1 0 000-1.788l-4.764-2.382a1 1 0 00-.894 0L4.789 4.488a1 1 0 000 1.788l4.764 2.382a1 1 0 00.894 0l4.764-2.382zM4.447 8.342A1 1 0 003 9.236V15a1 1 0 00.553.894l4 2A1 1 0 009 17v-5.764a1 1 0 00-.553-.894l-4-2z" />
			</svg>
		</a>
		<div class="flex flex-col items-center mt-3 border-t border-gray-700">
			<a class="flex items-center justify-center w-12 h-12 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="#">
				<svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
				 	<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
				</svg>
			</a>
			<a class="flex items-center justify-center w-12 h-12 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="#">
				<svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
				</svg>
			</a>
		
			
		</div>
		<div class="flex flex-col items-center mt-2 border-t border-gray-700">
			
			<a class="flex items-center justify-center w-12 h-12 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="#">
				<svg class="w-6 h-6 stroke-current"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
				</svg>
			</a>
			
		</div>
		<a class="flex items-center justify-center w-16 h-16 mt-auto bg-gray-800 hover:bg-gray-700 hover:text-gray-300" href="#">
			<svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
			</svg>
		</a>
	</div>
	<!-- Component End  -->
	
	


   <div class="h-full flex">
   <!---->
   <div class="hidden lg:flex lg:flex-shrink-0"></div>
   <div class="flex-1 min-w-0 flex flex-col overflow-hidden">
      <div class="lg:hidden">
         <div class="bg-blue-600 py-2 px-4 flex items-center justify-between sm:px-6">
            <div><img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=white" alt="Workflow"></div>
            <div>
               <button type="button" class="-mr-3 h-12 w-12 inline-flex items-center justify-center bg-blue-600 rounded-md text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                  <span class="sr-only">Open sidebar</span>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-6 w-6">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                  </svg>
               </button>
            </div>
         </div>
      </div>
      <main class="flex-1 flex overflow-hidden">
         <div class="flex-1 flex flex-col overflow-y-auto xl:overflow-hidden">
            <div class="bg-white border-b border-gray-200 xl:hidden">
               <div class="max-w-3xl mx-auto px-6">
                  <nav class="-mb-px flex space-x-8" aria-label="Tabs">
                     <a class="group inline-flex items-center py-4 px-1 border-b-2 font-medium text-sm border-blue-500 text-blue-600" href="/app/settings">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="-ml-0.5 mr-2 h-5 w-5">
                           <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                           <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Basic Settings</span>
                     </a>
                     <a class="group inline-flex items-center py-4 px-1 border-b-2 font-medium text-sm border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300" href="/app/settings/weighting">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="-ml-0.5 mr-2 h-5 w-5">
                           <path stroke-linecap="round" stroke-linejoin="round" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                        </svg>
                        <span>Traits</span>
                     </a>
                     <a class="group inline-flex items-center py-4 px-1 border-b-2 font-medium text-sm border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300" href="/app/settings/output">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="-ml-0.5 mr-2 h-5 w-5">
                           <path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <span>Output Format</span>
                     </a>
                  </nav>
               </div>
            </div>
            <div class="flex-1 flex xl:overflow-hidden">
               <nav aria-label="Sections" class="hidden flex-shrink-0 w-96 bg-white border-r border-gray-200 xl:flex xl:flex-col">
                  <div class="flex-shrink-0 h-16 px-6 border-b border-gray-200 flex items-center">
                     <p class="text-lg font-medium text-blue-gray-900">Settings</p>
                  </div>
                  <div class="flex-1 min-h-0 overflow-y-auto">
                     <a class="flex p-6 border-b border-gray-200 hover:bg-blue-50 hover:bg-opacity-50 bg-blue-50" href="/app/settings">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="flex-shrink-0 -mt-0.5 h-6 w-6 text-gray-400">
                           <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                           <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <div class="ml-3 text-sm">
                           <p class="font-medium text-gray-900">Basic Settings</p>
                           <p class="mt-1 text-gray-500">Configure metadata and commission.</p>
                        </div>
                     </a>
                     <a class="flex p-6 border-b border-gray-200 hover:bg-blue-50 hover:bg-opacity-50" href="/app/settings/weighting">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="flex-shrink-0 -mt-0.5 h-6 w-6 text-gray-400">
                           <path stroke-linecap="round" stroke-linejoin="round" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                        </svg>
                        <div class="ml-3 text-sm">
                           <p class="font-medium text-gray-900">Traits</p>
                           <p class="mt-1 text-gray-500">Adjust trait names and rarity.</p>
                        </div>
                     </a>
                     <a class="flex p-6 border-b border-gray-200 hover:bg-blue-50 hover:bg-opacity-50" href="/app/settings/output">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="flex-shrink-0 -mt-0.5 h-6 w-6 text-gray-400">
                           <path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <div class="ml-3 text-sm">
                           <p class="font-medium text-gray-900">Render Settings</p>
                           <p class="mt-1 text-gray-500">Dimensions, quality and file format.</p>
                        </div>
                     </a>
                  </div>
               </nav>
               <div class="flex-1 xl:overflow-y-auto">
                  <div class="max-w-3xl mx-auto py-10 px-4 sm:px-6 lg:py-12 lg:px-8">
                     <h1 class="text-3xl font-extrabold text-blue-gray-900">Basic Settings</h1>
                     <form class="mt-12 space-y-10 divide-y divide-y-blue-gray-200">
                        <div>
                           <h2 class="text-xl font-medium text-blue-gray-900">Blockchain</h2>
                           <p class="mt-1 text-sm text-blue-gray-500">Select the format to use when exporting metadata</p>
                           <div id="headlessui-radiogroup-15" role="radiogroup" aria-labelledby="headlessui-label-16">
                              <label id="headlessui-label-16" class="sr-only" role="none"> Select a blockchain </label>
                              <div class="mt-4 grid grid-cols-1 gap-y-6 sm:grid-cols-3 sm:gap-x-4" role="none">
                                 <div class="border-transparent relative bg-white border rounded-lg shadow-sm p-4 flex cursor-pointer focus:outline-none" id="headlessui-radiogroup-option-17" role="radio" aria-checked="true" tabindex="0" aria-labelledby="headlessui-label-18">
                                    <div class="flex-1 flex">
                                       <div class="flex flex-1 justify-center">
                                          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2568 643" xml:space="preserve" class="h-8">
                                             <path d="M931.1,341h82.5c11.6,0,21,9.5,21,21.1c0,11.7-9.4,21.1-21,21.1h-99.5c-1.6,0-3.1,0.6-4.2,1.6l-30,25.9
                                                c-4.6,4-1.8,11.5,4.2,11.5h124.5c0,0,0.1,0,0.1-0.1c0-0.1,0.1-0.1,0.1-0.1c1.6,0.1,3.1,0.2,4.7,0.2c33,0,59.8-26.9,59.8-60.1
                                                c0-31.5-24.1-57.4-54.9-59.9c0,0-0.1,0-0.1-0.1c0-0.1,0-0.1-0.1-0.1h-88.8c-11.6,0-21-9.5-21-21.1c0-11.7,9.4-21.1,21-21.1h99.3
                                                c1.6,0,3.2-0.6,4.4-1.7l27.9-25.9c4.4-4.1,1.5-11.4-4.4-11.4H931.1c0,0,0,0,0,0s0,0,0,0c-0.5,0-1.1,0-1.6,0
                                                c-33,0-59.8,26.9-59.8,60.1c0,33.2,26.8,60.1,59.8,60.1C930,341,930.5,341,931.1,341C931.1,341,931.1,341,931.1,341
                                                C931.1,341,931.1,341,931.1,341z"></path>
                                             <path d="M1411.3,220.7c-3.6,0-6.5,2.9-6.5,6.6v188.4c0,3.6,2.9,6.6,6.5,6.6h151c1.8,0,3.5-0.8,4.8-2.1l18.9-20.3
                                                c3.9-4.2,1-11.1-4.8-11.1h-131.8c-3.6,0-6.5-2.9-6.5-6.6v-155c0-3.6-2.9-6.6-6.5-6.6H1411.3z"></path>
                                             <path fill-rule="evenodd" clip-rule="evenodd" d="M1169.5,220.7C1169.5,220.7,1169.5,220.7,1169.5,220.7C1169.5,220.8,1169.5,220.8,1169.5,220.7
                                                c-19.3,0.9-34.8,16.4-35.7,35.7c0,0,0,0,0,0s0,0,0,0c0,0,0,0,0,0v126.7c0,0,0,0,0,0s0,0,0,0c0,0.5,0,1.1,0,1.6
                                                c0,20.1,15.8,36.5,35.7,37.3c0,0,0,0,0,0v0l0,0c0,0,0,0,0,0h137c0,0,0,0,0,0l0,0v0l0,0c19.8-0.9,35.7-17.3,35.7-37.3
                                                c0-0.5,0-1.1,0-1.6c0,0,0,0,0,0s0,0,0,0V256.5c0,0,0,0,0,0s0,0,0,0c-0.8-19.3-16.3-34.9-35.6-35.7c0,0,0,0,0,0c0,0,0,0,0,0H1169.5z
                                                M1195.1,256.5L1195.1,256.5L1195.1,256.5C1195,256.5,1195,256.5,1195.1,256.5c-12.1,0.5-21.8,10.3-22.3,22.5c0,0,0,0,0,0
                                                c0,0,0,0,0,0v79.7c0,0,0,0,0,0c0,0,0,0,0,0c0,0.3,0,0.7,0,1c0,12.6,9.9,23,22.3,23.5c0,0,0,0,0,0l0,0v0v0h85.9v0l0,0v0c0,0,0,0,0,0
                                                c12.4-0.5,22.3-10.9,22.3-23.5c0-0.3,0-0.7,0-1v0v0l0,0c0,0,0,0,0,0V279c0,0,0,0,0,0s0,0,0,0c-0.5-12.2-10.2-21.9-22.3-22.5
                                                c0,0,0,0,0,0v0v0l0,0H1195.1z"></path>
                                             <path fill-rule="evenodd" clip-rule="evenodd" d="M1805.5,415.7c0,3.6,2.9,6.6,6.5,6.6h25.6c3.6,0,6.5-2.9,6.5-6.6V259.8c0,0,0,0,0,0l0,0l0,0c0,0,0,0,0,0
                                                c0-0.5,0-1.1,0-1.6c0-20.1-15.7-36.5-35.3-37.3c0,0,0,0,0,0c0,0,0,0,0,0h-131.5c0,0,0,0,0,0c0,0,0,0,0,0c-0.5,0-1.1,0-1.6,0
                                                c-20.4,0-36.9,16.7-36.9,37.4c0,0.5,0,1.1,0,1.6c0,0,0,0,0,0s0,0,0,0v155.9c0,3.6,2.9,6.6,6.5,6.6h25.6c3.6,0,6.5-2.9,6.5-6.6v-64.9
                                                c0-3.6,2.9-6.6,6.5-6.6h115.4c3.6,0,6.5,2.9,6.5,6.6V415.7z M1677.2,308.4V276c0-12.6,10.1-22.8,22.5-22.8h83.4
                                                c12.4,0,22.5,10.2,22.5,22.8v32.4c0,3.6-2.9,6.6-6.5,6.6h-115.4C1680.1,315,1677.2,312.1,1677.2,308.4z"></path>
                                             <path fill-rule="evenodd" clip-rule="evenodd" d="M2346,422.3c-3.6,0-6.5-2.9-6.5-6.6v-64.9c0-3.6-2.9-6.6-6.5-6.6h-116.7c-3.6,0-6.5,2.9-6.5,6.6v64.9
                                                c0,3.6-2.9,6.6-6.5,6.6h-25.8c-3.6,0-6.5-2.9-6.5-6.6V259.8v0v0c0,0,0,0,0,0c0,0,0,0,0,0c0-0.5,0-1.1,0-1.6
                                                c0-20.6,16.7-37.4,37.3-37.4c0.5,0,1.1,0,1.6,0c0,0,0,0,0,0c0,0,0,0,0,0h132.9c0,0,0,0,0,0c0,0,0,0,0,0
                                                c19.8,0.9,35.7,17.3,35.7,37.3c0,0.5,0,1.1,0,1.6c0,0,0,0,0,0s0,0,0,0c0,0,0,0,0,0v155.9c0,3.6-2.9,6.6-6.5,6.6H2346z M2209.8,276
                                                v32.4c0,3.6,2.9,6.6,6.5,6.6H2333c3.6,0,6.5-2.9,6.5-6.6V276c0-12.6-10.2-22.8-22.7-22.8h-84.3
                                                C2219.9,253.2,2209.8,263.4,2209.8,276z"></path>
                                             <path d="M1940.5,220.7c1.9,0,3.7,0.8,4.9,2.3l114.8,136.9c3.9,4.6,11.4,1.8,11.4-4.3V227.3c0-3.6,2.9-6.6,6.5-6.6h25.6
                                                c3.6,0,6.5,2.9,6.5,6.6v188.4c0,3.6-2.9,6.6-6.5,6.6h-31.8c-0.1,0-0.2-0.1-0.2-0.2c0-0.1,0-0.1-0.1-0.2l-116.8-135.9
                                                c-3.9-4.6-11.4-1.7-11.4,4.3v125.5c0,3.6-2.9,6.6-6.5,6.6h-25.8c-3.6,0-6.5-2.9-6.5-6.6V227.3c0-3.6,2.9-6.6,6.5-6.6H1940.5z"></path>
                                             <path d="M274.4,429.2c3.2-3.2,7.5-5,12-5h416.5c7.6,0,11.4,9.2,6,14.5L626.6,521c-3.2,3.2-7.5,5-12,5H198.1c-7.6,0-11.4-9.2-6-14.5
                                                L274.4,429.2z"></path>
                                             <path d="M274.4,122c3.2-3.2,7.5-5,12-5h416.5c7.6,0,11.4,9.2,6,14.5l-82.3,82.2c-3.2,3.2-7.5,5-12,5H198.1c-7.6,0-11.4-9.2-6-14.5
                                                L274.4,122z"></path>
                                             <path d="M626.6,274.6c-3.2-3.2-7.5-5-12-5H198.1c-7.6,0-11.4,9.2-6,14.5l82.3,82.2c3.2,3.2,7.5,5,12,5h416.5c7.6,0,11.4-9.2,6-14.5
                                                L626.6,274.6z"></path>
                                          </svg>
                                          <span id="headlessui-label-18" class="sr-only">Solana</span>
                                       </div>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="h-5 w-5 text-blue-600">
                                       <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    <div class="border-2 border-blue-500 absolute -inset-px rounded-lg pointer-events-none" aria-hidden="true"></div>
                                 </div>
                                 <div class="border-gray-300 relative bg-white border rounded-lg shadow-sm p-4 flex cursor-pointer focus:outline-none" id="headlessui-radiogroup-option-19" role="radio" aria-checked="false" tabindex="-1" aria-labelledby="headlessui-label-20">
                                    <div class="flex-1 flex">
                                       <div class="flex flex-1 justify-center">
                                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1080 270.6" class="h-8">
                                             <g id="Layer_2" data-name="Layer 2">
                                                <g id="Layer_1-2" data-name="Layer 1">
                                                   <path d="M306.2,155.7a3.56,3.56,0,0,1-3.6,3.5H236.3c1.7,16.4,14,31.4,31.4,31.4,11.9,0,20.7-4.5,27.3-14a3.58,3.58,0,0,1,2.9-1.7,3.21,3.21,0,0,1,3.3,3.3,3.1,3.1,0,0,1-.5,1.7c-6.7,11.6-20,17.3-33,17.3-22.3,0-38.3-20-38.3-41.3s15.9-41.3,38.3-41.3,38.4,19.8,38.5,41.1Zm-7.1-3.1c-1.4-16.4-14-31.4-31.4-31.4s-29.7,15-31.4,31.4Z" fill="currentColor"></path>
                                                   <path d="M386.8,116.2a3.4,3.4,0,0,1,3.3,3.3,3.21,3.21,0,0,1-3.3,3.3H369v69.9a3.33,3.33,0,0,1-3.3,3.3,3.4,3.4,0,0,1-3.3-3.3V122.8H345.3a3.21,3.21,0,0,1-3.3-3.3,3.33,3.33,0,0,1,3.3-3.3h17.1V90.7a3.55,3.55,0,0,1,3-3.5,3.27,3.27,0,0,1,3.7,3.3v25.7Z" fill="currentColor"></path>
                                                   <path d="M495.3,150v42.3a3.4,3.4,0,0,1-3.3,3.3,3.21,3.21,0,0,1-3.3-3.3V150c0-14.3-8.1-28.5-24-28.5-20.4,0-29.2,17.8-28,36.1,0,.5.2,2.6.2,2.9v31.7a3.55,3.55,0,0,1-3,3.5,3.27,3.27,0,0,1-3.7-3.3V53.3a3.33,3.33,0,0,1,3.3-3.3,3.4,3.4,0,0,1,3.3,3.3v78.6c5.7-10.2,15.9-17.1,27.8-17.1,19.6,0,30.7,17.1,30.7,35.2Z" fill="currentColor"></path>
                                                   <path d="M614.4,155.7a3.56,3.56,0,0,1-3.6,3.5H544.5c1.7,16.4,14,31.4,31.4,31.4,11.9,0,20.7-4.5,27.3-14a3.58,3.58,0,0,1,2.9-1.7,3.21,3.21,0,0,1,3.3,3.3,3.1,3.1,0,0,1-.5,1.7c-6.7,11.6-20,17.3-33,17.3-22.3,0-38.3-20-38.3-41.3s15.9-41.3,38.3-41.3c22.2,0,38.4,19.8,38.5,41.1Zm-7.2-3.1c-1.4-16.4-14-31.4-31.4-31.4s-29.7,15-31.4,31.4Z" fill="currentColor"></path>
                                                   <path d="M695.9,119.3a3.37,3.37,0,0,1-3.1,3.6c-19.5,2.9-28.3,18.8-28.3,37.3v31.7a3.55,3.55,0,0,1-3,3.5,3.27,3.27,0,0,1-3.7-3.3V119.8a3.55,3.55,0,0,1,3-3.5,3.27,3.27,0,0,1,3.7,3.3v14.7c5.5-9.3,16.4-18.1,27.8-18.1C694,116.2,695.9,117.4,695.9,119.3Z" fill="currentColor"></path>
                                                   <path d="M804.9,155.7a3.56,3.56,0,0,1-3.6,3.5H735c1.7,16.4,14,31.4,31.4,31.4,11.9,0,20.7-4.5,27.3-14a3.58,3.58,0,0,1,2.9-1.7,3.21,3.21,0,0,1,3.3,3.3,3.1,3.1,0,0,1-.5,1.7c-6.7,11.6-20,17.3-33,17.3-22.3,0-38.3-20-38.3-41.3s15.9-41.3,38.3-41.3,38.4,19.8,38.5,41.1Zm-7.1-3.1c-1.4-16.4-14-31.4-31.4-31.4s-29.7,15-31.4,31.4Z" fill="currentColor"></path>
                                                   <path d="M912.1,120.1v72.6a3.4,3.4,0,0,1-3.3,3.3,3.21,3.21,0,0,1-3.3-3.3V178.9c-5.5,10.9-15.2,18.8-27.6,18.8-19.7,0-30.6-17.1-30.6-35.2V120a3.33,3.33,0,0,1,3.3-3.3,3.4,3.4,0,0,1,3.3,3.3v42.5c0,14.3,8.1,28.5,24,28.5,22.3,0,27.6-20.9,27.6-44V119.9a3.35,3.35,0,0,1,4.5-3.1,3.63,3.63,0,0,1,2.1,3.3Z" fill="currentColor"></path>
                                                   <path d="M1080,149.7v42.5a3.4,3.4,0,0,1-3.3,3.3,3.21,3.21,0,0,1-3.3-3.3V149.7c0-14.3-8.1-28.3-24-28.3-20,0-27.6,21.4-27.6,38v32.8a3.4,3.4,0,0,1-3.3,3.3,3.21,3.21,0,0,1-3.3-3.3V149.7c0-14.3-8.1-28.3-24-28.3-20.2,0-28.5,15.9-27.8,37.1,0,.5.2,1.4,0,1.7v31.9a3.55,3.55,0,0,1-3,3.5,3.27,3.27,0,0,1-3.7-3.3V119.8a3.55,3.55,0,0,1,3-3.5,3.27,3.27,0,0,1,3.7,3.3v12.1c5.7-10.2,15.9-16.9,27.8-16.9,13.5,0,24,8.6,28.3,21.1,5.5-12.4,16.2-21.1,29.9-21.1,19.5,0,30.6,16.9,30.6,34.9Z" fill="currentColor"></path>
                                                   <path d="M83,100.1,0,137.8l83,49.1,83.1-49.1Z" style="opacity:0.6000000238418579;isolation:isolate;"></path>
                                                   <path d="M0,137.8l83,49.1V0Z" style="opacity:0.44999998807907104;isolation:isolate;"></path>
                                                   <path d="M83,0V186.9l83.1-49.1Z" style="opacity:0.800000011920929;isolation:isolate;"></path>
                                                   <path d="M0,153.6l83,117v-68Z" style="opacity:0.44999998807907104;isolation:isolate;"></path>
                                                   <path d="M83,202.6v68l83.1-117Z" style="opacity:0.800000011920929;isolation:isolate;"></path>
                                                </g>
                                             </g>
                                          </svg>
                                          <span id="headlessui-label-20" class="sr-only">Ethereum</span>
                                       </div>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="invisible h-5 w-5 text-blue-600">
                                       <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    <div class="border-2 border-transparent absolute -inset-px rounded-lg pointer-events-none" aria-hidden="true"></div>
                                 </div>
                                 <div class="border-gray-300 relative bg-white border rounded-lg shadow-sm p-4 flex cursor-pointer focus:outline-none" id="headlessui-radiogroup-option-21" role="radio" aria-checked="false" tabindex="-1" aria-labelledby="headlessui-label-22">
                                    <div class="flex-1 flex">
                                       <div class="flex flex-1 justify-center">
                                          <svg viewBox="0 0 1024 225" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-8">
                                             <g clip-path="url(#clip0)">
                                                <path d="M400.611 71.671C406.893 75.4685 412.209 80.69 415.591 87.8103C419.457 94.9305 421.39 103.475 421.39 112.969C421.39 122.462 419.457 130.532 415.108 137.652C411.242 144.772 405.443 149.994 398.195 153.317C390.946 157.114 382.247 159.013 373.066 159.013C367.75 159.013 362.917 158.063 358.085 156.165C353.252 154.741 348.903 151.893 345.521 148.57V197.937H317.492V67.8735H341.655L344.071 78.3166C354.702 69.7723 366.3 65.5001 378.381 65.5001C386.597 65.5001 394.329 67.3989 400.611 71.671ZM385.147 130.532C389.979 126.26 392.396 120.563 392.396 113.443C392.396 106.323 389.979 100.627 385.63 95.8799C381.281 91.133 375.482 89.2343 369.2 89.2343C363.884 89.2343 359.051 90.1837 355.185 92.5571C351.32 94.4558 348.42 97.7786 346.004 102.051V123.412C347.454 127.684 350.353 131.006 353.736 133.38C357.602 135.753 361.951 137.177 367.267 137.177C374.515 137.177 380.314 134.804 385.147 130.532Z" fill="currentColor"></path>
                                                <path d="M437.819 88.2748C442.169 81.6293 447.967 75.9331 455.699 72.1356C463.431 68.3381 472.13 65.9647 481.795 65.9647C491.46 65.9647 500.158 67.8635 507.89 72.1356C515.139 75.9331 520.938 81.6293 525.287 88.7495C529.636 95.8698 531.569 103.465 531.569 112.484C531.569 121.503 529.636 129.098 525.287 136.218C520.938 143.338 515.622 149.034 507.89 152.832C500.641 156.629 491.46 159.003 481.795 159.003C472.13 159.003 463.431 157.104 455.699 153.306C447.967 149.509 442.169 144.287 437.819 137.167C433.953 130.047 431.537 121.977 431.537 112.484C431.537 103.465 433.953 95.3951 437.819 88.2748ZM466.331 129.572C470.197 134.319 475.513 136.218 481.795 136.218C488.077 136.218 493.393 133.844 497.259 129.572C501.125 125.3 503.058 119.129 503.058 112.484C503.058 105.363 501.125 99.6672 497.259 95.3951C492.909 90.6483 488.077 88.2748 481.312 88.2748C475.029 88.2748 470.197 90.6483 465.848 94.9204C461.982 99.6672 460.049 105.363 460.049 112.484C460.049 119.129 461.982 124.825 466.331 129.572Z" fill="currentColor"></path>
                                                <path d="M576.999 0.463867V156.635H548.971V0.463867H576.999Z" fill="currentColor"></path>
                                                <path d="M692.008 70.2406L634.985 198.405H607.924L629.186 152.361L588.594 70.2406H620.488L643.684 121.506L666.88 70.2406H692.008Z" fill="currentColor"></path>
                                                <path d="M799.285 70.2369V156.629C799.285 164.699 796.869 172.294 792.036 178.939C787.204 185.585 780.922 190.807 772.706 194.604C764.491 198.401 755.793 200.3 746.128 200.3C738.879 200.3 732.597 199.351 727.281 197.927C721.966 196.028 717.616 194.129 714.234 192.231C710.368 189.857 706.502 187.009 702.152 183.212L718.583 164.224C722.449 168.022 726.798 170.87 730.664 172.769C734.53 174.667 739.846 176.091 745.645 176.091C752.893 176.091 758.692 174.193 763.525 170.87C768.357 167.547 770.773 162.326 770.773 156.155V143.813C767.874 148.085 764.008 151.882 758.209 154.731C752.41 157.579 745.645 159.003 737.913 159.003C730.181 159.003 722.449 157.104 715.683 152.832C708.918 149.034 703.602 143.338 699.253 136.218C695.387 129.098 692.971 121.503 692.971 112.958C692.971 104.414 694.904 96.3445 699.253 89.2242C703.602 82.104 708.918 76.4078 716.167 72.1356C722.932 67.8635 730.181 65.9647 737.913 65.9647C745.161 65.9647 751.444 66.9141 757.243 68.8128C763.042 70.7116 767.391 73.5597 770.29 76.8824L773.19 70.2369H799.285ZM770.773 123.401V102.041C768.84 97.7685 765.941 94.4457 761.592 92.0723C757.243 89.6989 752.41 88.2749 746.611 88.2749C739.846 88.2749 734.047 90.6483 729.214 94.9204C724.382 99.1926 721.965 104.889 721.965 112.009C721.965 118.655 724.382 124.826 729.214 129.572C734.047 134.319 739.846 136.693 746.611 136.693C757.726 136.218 765.941 131.946 770.773 123.401Z" fill="currentColor"></path>
                                                <path d="M822.489 88.2849C826.839 81.1647 832.637 75.9432 840.369 71.671C848.101 67.8735 856.8 65.5001 866.465 65.5001C876.13 65.5001 884.828 67.3989 892.56 71.671C899.809 75.4685 905.608 81.1647 909.957 88.2849C913.823 95.4052 916.239 103 916.239 112.019C916.239 121.038 914.306 128.633 909.957 135.753C906.091 142.874 900.292 148.57 892.56 152.367C885.311 156.165 876.13 158.538 866.465 158.538C856.8 158.538 848.101 156.639 840.369 152.842C832.637 149.044 826.839 143.823 822.489 136.703C818.14 129.582 816.207 121.513 816.207 111.544C816.207 103.475 818.14 95.4052 822.489 88.2849ZM850.518 129.582C854.384 134.329 859.699 136.228 865.981 136.228C872.264 136.228 877.579 133.855 881.445 129.582C885.311 125.31 887.244 119.139 887.244 112.494C887.244 105.374 885.311 99.6773 881.445 95.4052C877.579 91.133 872.264 88.7596 865.981 88.7596C859.699 88.7596 854.867 91.133 850.518 95.4052C846.168 99.6773 844.235 105.848 844.235 112.494C844.719 119.139 846.652 124.836 850.518 129.582Z" fill="currentColor"></path>
                                                <path d="M1015.3 73.085C1021.1 77.8318 1023.52 84.0027 1024 91.5976V156.629H995.491V102.041C995.008 93.4964 990.659 89.2242 982.443 89.2242C976.161 89.2242 970.846 92.0723 966.98 98.2432C963.114 104.414 961.181 112.009 961.181 121.028V156.629H933.152V70.2369H958.764L960.697 84.0027C964.08 78.3065 968.429 74.0343 974.228 70.7116C980.027 67.3888 986.793 65.9647 994.525 65.9647C1002.74 65.9647 1009.99 68.3381 1015.3 73.085Z" fill="currentColor"></path>
                                                <path d="M197.648 68.8237C192.815 65.9756 186.533 65.9756 181.218 68.8237L143.524 90.6592L117.912 104.9L80.219 126.735C75.3865 129.583 69.1043 129.583 63.7886 126.735L33.8273 109.646C28.9948 106.798 25.6121 101.577 25.6121 95.8807V62.1781C25.6121 56.4819 28.5116 51.2604 33.8273 48.4123L63.3053 31.7984C68.1378 28.9503 74.42 28.9503 79.7357 31.7984L109.214 48.4123C114.046 51.2604 117.429 56.4819 117.429 62.1781V84.0136L143.041 69.2984V47.463C143.041 41.7667 140.142 36.5452 134.826 33.6971L80.219 2.36801C75.3865 -0.480092 69.1043 -0.480092 63.7886 2.36801L8.2152 33.6971C2.89948 36.5452 0 41.7667 0 47.463V110.596C0 116.292 2.89948 121.514 8.2152 124.362L63.7886 155.691C68.621 158.539 74.9033 158.539 80.219 155.691L117.912 134.33L143.524 119.615L181.218 98.2541C186.05 95.406 192.332 95.406 197.648 98.2541L227.126 114.868C231.958 117.716 235.341 122.938 235.341 128.634V162.336C235.341 168.033 232.442 173.254 227.126 176.102L197.648 193.191C192.815 196.039 186.533 196.039 181.218 193.191L151.74 176.577C146.907 173.729 143.524 168.507 143.524 162.811V140.976L117.912 155.691V177.526C117.912 183.222 120.812 188.444 126.127 191.292L181.701 222.621C186.533 225.469 192.815 225.469 198.131 222.621L253.705 191.292C258.537 188.444 261.92 183.222 261.92 177.526V114.393C261.92 108.697 259.02 103.476 253.705 100.628L197.648 68.8237Z" fill="currentColor"></path>
                                             </g>
                                             <defs>
                                                <clipPath id="clip0">
                                                   <rect width="1024" height="225" fill="white"></rect>
                                                </clipPath>
                                             </defs>
                                          </svg>
                                          <span id="headlessui-label-22" class="sr-only">Polygon</span>
                                       </div>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="invisible h-5 w-5 text-blue-600">
                                       <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    <div class="border-2 border-transparent absolute -inset-px rounded-lg pointer-events-none" aria-hidden="true"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="pt-10 grid grid-cols-1 gap-y-6 sm:grid-cols-6 sm:gap-x-6">
                           <div class="sm:col-span-6">
                              <h2 class="text-xl font-medium text-blue-gray-900">Collection</h2>
                              <p class="mt-1 text-sm text-blue-gray-500">Metadata for this collection of NFTs</p>
                           </div>
                           <div class="sm:col-span-3"><label for="drop-name" class="block text-sm font-medium text-blue-gray-900"> Name </label><input type="text" id="drop-name" class="mt-1 px-3 py-2 block w-full border border-gray-300 rounded-md shadow-sm text-blue-gray-900 sm:text-sm focus:ring-blue-500 focus:border-blue-500"></div>
                           <div class="sm:col-span-3">
                              <label for="drop-family" class="block text-sm font-medium text-blue-gray-900"> Family </label><input type="text" id="drop-family" class="mt-1 px-3 py-2 block w-full border border-gray-300 rounded-md shadow-sm text-blue-gray-900 sm:text-sm focus:ring-blue-500 focus:border-blue-500">
                              <p class="mt-3 text-sm text-blue-gray-500">Optional name for a group of collections.</p>
                           </div>
                           <div class="sm:col-span-2">
                              <label for="drop-symbol" class="block text-sm font-medium text-blue-gray-900"> Symbol </label><input type="text" id="drop-symbol" class="mt-1 px-3 py-2 block w-full border border-gray-300 rounded-md shadow-sm text-blue-gray-900 sm:text-sm focus:ring-blue-500 focus:border-blue-500">
                              <p class="mt-3 text-sm text-blue-gray-500">Exchange symbol (e.g SNEK)</p>
                           </div>
                           <div class="sm:col-span-2">
                              <label for="drop-tokencount" class="block text-sm font-medium text-blue-gray-900"> Supply </label><input type="number" id="drop-tokencount" class="mt-1 px-3 py-2 block w-full border border-gray-300 rounded-md shadow-sm text-blue-gray-900 sm:text-sm focus:ring-blue-500 focus:border-blue-500">
                              <p class="mt-3 text-sm text-blue-gray-500">Number of tokens to generate.</p>
                           </div>
                           <div class="sm:col-span-2">
                              <label for="drop-url" class="block text-sm font-medium text-blue-gray-900"> External URL </label><input type="url" id="drop-url" class="mt-1 px-3 py-2 block w-full border border-gray-300 rounded-md shadow-sm text-blue-gray-900 sm:text-sm focus:ring-blue-500 focus:border-blue-500">
                              <p class="mt-3 text-sm text-blue-gray-500">Link to the website for this collection.</p>
                           </div>
                           <div class="sm:col-span-6">
                              <label for="drop-description" class="block text-sm font-medium text-blue-gray-900"> Description </label>
                              <div class="mt-1"><textarea name="drop-description" rows="4" class="block px-3 py-2 w-full border border-gray-300 rounded-md shadow-sm sm:text-sm focus:ring-blue-500 focus:border-blue-500"></textarea></div>
                           </div>
                        </div>
                        <div class="pt-10 grid grid-cols-1 gap-y-6 sm:grid-cols-6 sm:gap-x-6">
                           <div class="sm:col-span-6">
                              <h2 class="text-xl font-medium text-blue-gray-900">Commission</h2>
                              <p class="mt-1 text-sm text-blue-gray-500">Secondary market fees and treasury account</p>
                           </div> 
                           <div class="sm:col-span-3">
                              <label for="total-fee" class="block text-sm font-medium text-blue-gray-900"> Total Fee </label>
                              <div class="mt-1 relative rounded-md shadow-sm">
                                 <input type="number" id="total-fee" class="mt-1 px-3 py-2 block w-full border border-gray-300 rounded-md text-blue-gray-900 sm:text-sm focus:ring-blue-500 focus:border-blue-500">
                                 <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none"><span class="text-gray-500 sm:text-sm"> BPS </span></div>
                              </div>
                              <p class="mt-3 text-sm text-blue-gray-500">1 BPS = 0.01%</p>
                           </div>
                           <div class="sm:col-span-3"></div>
                           <div class="sm:col-span-1">
                              <label for="share-0" class="block text-sm font-medium text-blue-gray-900"> Fee Share </label>
                              <div class="mt-1 relative rounded-md shadow-sm">
                                 <input type="number" id="share-0" class="mt-1 px-3 py-2 block w-full border border-gray-300 rounded-md text-blue-gray-900 sm:text-sm focus:ring-blue-500 focus:border-blue-500">
                                 <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none"><span class="text-gray-500 sm:text-sm"> % </span></div>
                              </div>
                           </div>
                           <div class="sm:col-span-5">
                              <label for="creator-0" class="block text-sm font-medium text-blue-gray-900">Solana Address </label>
                              <div class="mt-1 flex rounded-md shadow-sm">
                                 <div class="relative flex items-stretch flex-grow focus-within:z-10"><input type="text" id="creator-0" class="rounded-md px-3 py-2 block w-full border border-gray-300 text-blue-gray-900 sm:text-sm focus:ring-blue-500 focus:border-blue-500"></div>
                                 <!---->
                              </div>
                           </div>
                           <div class="sm:col-span-3"><button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-blue-700 bg-blue-100 hover:bg-blue-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"> Add a creator </button></div>
                           <p class="text-sm text-blue-gray-500 sm:col-span-6">Total fee will be split between recipient addresses according to their share.</p>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </main>
   </div>
</div>

   </div>
	</div>
	<!-- Component End  -->
	
