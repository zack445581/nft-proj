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
			<a class="flex items-center justify-center w-12 h-12 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="/pricing">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-play-circle" viewBox="0 0 16 16">
               <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
               <path d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445z"></path>
            </svg>
			</a>
		
			
		</div>
		<div class="flex flex-col items-center mt-2 border-t border-gray-700">
			
			<a class="flex items-center justify-center w-12 h-12 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="/settings">
				<svg class="w-6 h-6 stroke-current"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
				</svg>
			</a>
			
		</div>
		<a class="flex items-center justify-center w-16 h-16 mt-auto bg-gray-800 hover:bg-gray-700 hover:text-gray-300" href="/settings">
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
                     <a class="group inline-flex items-center py-4 px-1 border-b-2 font-medium text-sm border-blue-500 text-blue-600" href="/settings">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="-ml-0.5 mr-2 h-5 w-5">
                           <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                           <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Basic Settings</span>
                     </a>
                     <a class="group inline-flex items-center py-4 px-1 border-b-2 font-medium text-sm border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300" href="/traits">
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
               <nav aria-label="Sections" class="hiddennot flex-shrink-0 w-96 bg- border-r border-gray-200 xl:flex xl:flex-col">
                  <div class="flex-shrink-0 h-16 px-6 border-b border-gray-200 flex items-center">
                     <p class="text-lg font-medium text-blue-gray-900">Settings</p>
                  </div>
                  <div class="flex-1 min-h-0 overflow-y-auto">
                     <a class="flex p-6 border-b border-gray-200 hover:bg-blue-50 hover:bg-opacity-50 bg-blue-50" href="/settings">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="flex-shrink-0 -mt-0.5 h-6 w-6 text-gray-400">
                           <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                           <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <div class="ml-3 text-sm">
                           <p class="font-medium text-gray-900">Basic Settings</p>
                           <p class="mt-1 text-gray-500">Configure metadata and commission.</p>
                        </div>
                     </a>
                     <a class="flex p-6 border-b border-gray-200 hover:bg-blue-50 hover:bg-opacity-50" href="/traits">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="flex-shrink-0 -mt-0.5 h-6 w-6 text-gray-400">
                           <path stroke-linecap="round" stroke-linejoin="round" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                        </svg>
                        <div class="ml-3 text-sm">
                           <p class="font-medium text-gray-900">Traits</p>
                           <p class="mt-1 text-gray-500">Adjust trait names and rarity.</p>
                        </div>
                     </a>
                     
                  </div>
               </nav>
               
               <div class="flex-1 xl:overflow-y-auto">
   <div class="max-w-3xl mx-auto py-10 px-4 sm:px-6 lg:py-12 lg:px-8">
      <h1 class="text-3xl font-extrabold text-blue-gray-900">Traits</h1>
      <div class="mt-6">
         <div id="headlessui-radiogroup-39" role="radiogroup" aria-labelledby="headlessui-label-40">
            <label id="headlessui-label-40" class="sr-only" role="none"> Toggle generator settings </label>
            <div class="mt-4 grid grid-cols-1 gap-4 sm:grid-cols-2" role="none">
               <div class="border-transparent relative bg- border rounded-lg shadow-sm p-4 flex cursor-pointer focus:outline-none" id="headlessui-radiogroup-option-41" role="radio" aria-checked="true" tabindex="0" aria-labelledby="headlessui-label-42" aria-describedby="headlessui-description-43">
                  <div class="flex-1 flex">
                     <div class="flex flex-col"><span id="headlessui-label-42" class="block text-sm font-medium text-gray-900">Include saved designs</span><span id="headlessui-description-43" class="mt-1 flex items-center text-sm text-gray-500">Any saved designs are guaranteed to be generated</span></div>
                  </div>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="h-5 w-5 text-blue-600">
                     <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                  </svg>
                  <div class="border-2 border-blue-500 absolute -inset-px rounded-lg pointer-events-none" aria-hidden="true"></div>
               </div>
               <div class="border-gray-300 relative bg- border rounded-lg shadow-sm p-4 flex cursor-pointer focus:outline-none" id="headlessui-radiogroup-option-44" role="radio" aria-checked="false" tabindex="-1" aria-labelledby="headlessui-label-45" aria-describedby="headlessui-description-46">
                  <div class="flex-1 flex">
                     <div class="flex flex-col"><span id="headlessui-label-45" class="block text-sm font-medium text-gray-900">Completely random</span><span id="headlessui-description-46" class="mt-1 flex items-center text-sm text-gray-500">Traits and variations will be generated at random</span></div>
                  </div>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="invisible h-5 w-5 text-blue-600">
                     <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                  </svg>
                  <div class="border-2 border-transparent absolute -inset-px rounded-lg pointer-events-none" aria-hidden="true"></div>
               </div>
            </div>
         </div>
      </div>
      <div class="mt-6 bg- overflow-hidden shadow rounded-lg divide-y divide-gray-200">
         <div class="px-4 py-5 sm:px-6">
            <div class="-ml-4 -mt-4 flex justify-between items-center flex-wrap sm:flex-nowrap">
               <div class="ml-4 mt-4">
                  <div class="border border-blue-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Accessories-root-name" class="block text-xs font-medium text-gray-500">Accessories</label><input type="text" id="Accessories-root-name" class="mt-0.5 block outline-none w-full border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm" placeholder="Accessories"></div>
               </div>
               <div class="ml-4 mt-4 flex-shrink-0 flex space-x-6">
                  <div class="border border-blue-gray-300 rounded-md px-3 py-2 w-24 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Accessories-root-count" class="block text-xs font-medium text-gray-500">Count</label><input type="number" id="Accessories-root-count" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm" placeholder="1"></div>
               </div>
            </div>
            <!---->
         </div>
         <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
               <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                  <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                     <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                           <tr>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Variation </th>
                              <th scope="col" class="w-16 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Rarity </th>
                              <th scope="col" class="w-16 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Count </th>
                           </tr>
                        </thead>
                        <tbody class="bg- divide-y divide-gray-200">
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/accessories/bat.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Accessories-bat.png" class="block text-xs font-medium text-gray-500">bat.png</label><input type="text" id="Accessories-bat.png" placeholder="bat.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">12% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md"><!---->
                              </td>
                           </tr>
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/accessories/gold-chain.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Accessories-gold-chain.png" class="block text-xs font-medium text-gray-500">gold-chain.png</label><input type="text" id="Accessories-gold-chain.png" placeholder="gold-chain.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">11% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md"><!---->
                              </td>
                           </tr>
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/accessories/gold-rolex.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Accessories-gold-rolex.png" class="block text-xs font-medium text-gray-500">gold-rolex.png</label><input type="text" id="Accessories-gold-rolex.png" placeholder="gold-rolex.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">11% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md">
                                 <div class="text-gray-500 mt-2 -mb-2 flex items-center justify-end text-xs">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="h-3 w-3 mr-1">
                                       <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                    minimum 1
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/accessories/intellect-serum.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Accessories-intellect-serum.png" class="block text-xs font-medium text-gray-500">intellect-serum.png</label><input type="text" id="Accessories-intellect-serum.png" placeholder="intellect-serum.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">11% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md">
                                 <div class="text-gray-500 mt-2 -mb-2 flex items-center justify-end text-xs">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="h-3 w-3 mr-1">
                                       <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                    minimum 1
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/accessories/mace.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Accessories-mace.png" class="block text-xs font-medium text-gray-500">mace.png</label><input type="text" id="Accessories-mace.png" placeholder="mace.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">11% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md">
                                 <div class="text-gray-500 mt-2 -mb-2 flex items-center justify-end text-xs">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="h-3 w-3 mr-1">
                                       <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                    minimum 1
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/accessories/mage.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Accessories-mage.png" class="block text-xs font-medium text-gray-500">mage.png</label><input type="text" id="Accessories-mage.png" placeholder="mage.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">11% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md"><!---->
                              </td>
                           </tr>
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/accessories/nether-raygun.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Accessories-nether-raygun.png" class="block text-xs font-medium text-gray-500">nether-raygun.png</label><input type="text" id="Accessories-nether-raygun.png" placeholder="nether-raygun.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">11% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md"><!---->
                              </td>
                           </tr>
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/accessories/popcorn.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Accessories-popcorn.png" class="block text-xs font-medium text-gray-500">popcorn.png</label><input type="text" id="Accessories-popcorn.png" placeholder="popcorn.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">11% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md"><!---->
                              </td>
                           </tr>
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/accessories/solana-flag.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Accessories-solana-flag.png" class="block text-xs font-medium text-gray-500">solana-flag.png</label><input type="text" id="Accessories-solana-flag.png" placeholder="solana-flag.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">11% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md"><!---->
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="mt-6 bg- overflow-hidden shadow rounded-lg divide-y divide-gray-200">
         <div class="px-4 py-5 sm:px-6">
            <div class="-ml-4 -mt-4 flex justify-between items-center flex-wrap sm:flex-nowrap">
               <div class="ml-4 mt-4">
                  <div class="border border-blue-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Headgear-root-name" class="block text-xs font-medium text-gray-500">Headgear</label><input type="text" id="Headgear-root-name" class="mt-0.5 block outline-none w-full border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm" placeholder="Headgear"></div>
               </div>
               <div class="ml-4 mt-4 flex-shrink-0 flex space-x-6">
                  <div class="border border-blue-gray-300 rounded-md px-3 py-2 w-24 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Headgear-root-count" class="block text-xs font-medium text-gray-500">Count</label><input type="number" id="Headgear-root-count" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm" placeholder="1"></div>
               </div>
            </div>
            <!---->
         </div>
         <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
               <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                  <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                     <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                           <tr>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Variation </th>
                              <th scope="col" class="w-16 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Rarity </th>
                              <th scope="col" class="w-16 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Count </th>
                           </tr>
                        </thead>
                        <tbody class="bg- divide-y divide-gray-200">
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/headgear/3d-glasses.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Headgear-3d-glasses.png" class="block text-xs font-medium text-gray-500">3d-glasses.png</label><input type="text" id="Headgear-3d-glasses.png" placeholder="3d-glasses.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">12% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md"><!---->
                              </td>
                           </tr>
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/headgear/astronaut-helmet.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Headgear-astronaut-helmet.png" class="block text-xs font-medium text-gray-500">astronaut-helmet.png</label><input type="text" id="Headgear-astronaut-helmet.png" placeholder="astronaut-helmet.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">11% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md"><!---->
                              </td>
                           </tr>
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/headgear/clown.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Headgear-clown.png" class="block text-xs font-medium text-gray-500">clown.png</label><input type="text" id="Headgear-clown.png" placeholder="clown.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">11% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md"><!---->
                              </td>
                           </tr>
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/headgear/dark-prince.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Headgear-dark-prince.png" class="block text-xs font-medium text-gray-500">dark-prince.png</label><input type="text" id="Headgear-dark-prince.png" placeholder="dark-prince.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">11% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md"><!---->
                              </td>
                           </tr>
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/headgear/fedora.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Headgear-fedora.png" class="block text-xs font-medium text-gray-500">fedora.png</label><input type="text" id="Headgear-fedora.png" placeholder="fedora.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">11% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md"><!---->
                              </td>
                           </tr>
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/headgear/halo.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Headgear-halo.png" class="block text-xs font-medium text-gray-500">halo.png</label><input type="text" id="Headgear-halo.png" placeholder="halo.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">11% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md">
                                 <div class="text-gray-500 mt-2 -mb-2 flex items-center justify-end text-xs">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="h-3 w-3 mr-1">
                                       <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                    minimum 1
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/headgear/hardhat.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Headgear-hardhat.png" class="block text-xs font-medium text-gray-500">hardhat.png</label><input type="text" id="Headgear-hardhat.png" placeholder="hardhat.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">11% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md">
                                 <div class="text-gray-500 mt-2 -mb-2 flex items-center justify-end text-xs">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="h-3 w-3 mr-1">
                                       <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                    minimum 1
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/headgear/headphones.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Headgear-headphones.png" class="block text-xs font-medium text-gray-500">headphones.png</label><input type="text" id="Headgear-headphones.png" placeholder="headphones.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">11% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md">
                                 <div class="text-gray-500 mt-2 -mb-2 flex items-center justify-end text-xs">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="h-3 w-3 mr-1">
                                       <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                    minimum 1
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/headgear/officer.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Headgear-officer.png" class="block text-xs font-medium text-gray-500">officer.png</label><input type="text" id="Headgear-officer.png" placeholder="officer.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">11% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md"><!---->
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="mt-6 bg- overflow-hidden shadow rounded-lg divide-y divide-gray-200">
         <div class="px-4 py-5 sm:px-6">
            <div class="-ml-4 -mt-4 flex justify-between items-center flex-wrap sm:flex-nowrap">
               <div class="ml-4 mt-4">
                  <div class="border border-blue-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Clothes-root-name" class="block text-xs font-medium text-gray-500">Clothes</label><input type="text" id="Clothes-root-name" class="mt-0.5 block outline-none w-full border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm" placeholder="Clothes"></div>
               </div>
               <div class="ml-4 mt-4 flex-shrink-0 flex space-x-6">
                  <div class="border border-blue-gray-300 rounded-md px-3 py-2 w-24 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Clothes-root-count" class="block text-xs font-medium text-gray-500">Count</label><input type="number" id="Clothes-root-count" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm" placeholder="1"></div>
               </div>
            </div>
            <!---->
         </div>
         <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
               <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                  <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                     <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                           <tr>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Variation </th>
                              <th scope="col" class="w-16 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Rarity </th>
                              <th scope="col" class="w-16 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Count </th>
                           </tr>
                        </thead>
                        <tbody class="bg- divide-y divide-gray-200">
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/clothes/astronaut-suit.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Clothes-astronaut-suit.png" class="block text-xs font-medium text-gray-500">astronaut-suit.png</label><input type="text" id="Clothes-astronaut-suit.png" placeholder="astronaut-suit.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">12% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md">
                                 <div class="text-gray-500 mt-2 -mb-2 flex items-center justify-end text-xs">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="h-3 w-3 mr-1">
                                       <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                    minimum 1
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/clothes/football-jersey.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Clothes-football-jersey.png" class="block text-xs font-medium text-gray-500">football-jersey.png</label><input type="text" id="Clothes-football-jersey.png" placeholder="football-jersey.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">11% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md">
                                 <div class="text-gray-500 mt-2 -mb-2 flex items-center justify-end text-xs">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="h-3 w-3 mr-1">
                                       <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                    minimum 1
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/clothes/jumpsuit.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Clothes-jumpsuit.png" class="block text-xs font-medium text-gray-500">jumpsuit.png</label><input type="text" id="Clothes-jumpsuit.png" placeholder="jumpsuit.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">11% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md"><!---->
                              </td>
                           </tr>
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/clothes/karate.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Clothes-karate.png" class="block text-xs font-medium text-gray-500">karate.png</label><input type="text" id="Clothes-karate.png" placeholder="karate.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">11% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md"><!---->
                              </td>
                           </tr>
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/clothes/mage.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Clothes-mage.png" class="block text-xs font-medium text-gray-500">mage.png</label><input type="text" id="Clothes-mage.png" placeholder="mage.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">11% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md"><!---->
                              </td>
                           </tr>
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/clothes/my-name-is.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Clothes-my-name-is.png" class="block text-xs font-medium text-gray-500">my-name-is.png</label><input type="text" id="Clothes-my-name-is.png" placeholder="my-name-is.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">11% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md"><!---->
                              </td>
                           </tr>
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/clothes/police.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Clothes-police.png" class="block text-xs font-medium text-gray-500">police.png</label><input type="text" id="Clothes-police.png" placeholder="police.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">11% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md"><!---->
                              </td>
                           </tr>
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/clothes/toga.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Clothes-toga.png" class="block text-xs font-medium text-gray-500">toga.png</label><input type="text" id="Clothes-toga.png" placeholder="toga.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">11% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md"><!---->
                              </td>
                           </tr>
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/clothes/trenchcoat.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Clothes-trenchcoat.png" class="block text-xs font-medium text-gray-500">trenchcoat.png</label><input type="text" id="Clothes-trenchcoat.png" placeholder="trenchcoat.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">11% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md"><!---->
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="mt-6 bg- overflow-hidden shadow rounded-lg divide-y divide-gray-200">
         <div class="px-4 py-5 sm:px-6">
            <div class="-ml-4 -mt-4 flex justify-between items-center flex-wrap sm:flex-nowrap">
               <div class="ml-4 mt-4">
                  <div class="border border-blue-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Eyes-root-name" class="block text-xs font-medium text-gray-500">Eyes</label><input type="text" id="Eyes-root-name" class="mt-0.5 block outline-none w-full border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm" placeholder="Eyes"></div>
               </div>
               <div class="ml-4 mt-4 flex-shrink-0 flex space-x-6">
                  <div class="border border-blue-gray-300 rounded-md px-3 py-2 w-24 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Eyes-root-count" class="block text-xs font-medium text-gray-500">Count</label><input type="number" id="Eyes-root-count" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm" placeholder="1"></div>
               </div>
            </div>
            <!---->
         </div>
         <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
               <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                  <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                     <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                           <tr>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Variation </th>
                              <th scope="col" class="w-16 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Rarity </th>
                              <th scope="col" class="w-16 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Count </th>
                           </tr>
                        </thead>
                        <tbody class="bg- divide-y divide-gray-200">
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/eyes/angry.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Eyes-angry.png" class="block text-xs font-medium text-gray-500">angry.png</label><input type="text" id="Eyes-angry.png" placeholder="angry.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">17% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md">
                                 <div class="text-gray-500 mt-2 -mb-2 flex items-center justify-end text-xs">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="h-3 w-3 mr-1">
                                       <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                    minimum 1
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/eyes/excited.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Eyes-excited.png" class="block text-xs font-medium text-gray-500">excited.png</label><input type="text" id="Eyes-excited.png" placeholder="excited.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">17% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md"><!---->
                              </td>
                           </tr>
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/eyes/googly.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Eyes-googly.png" class="block text-xs font-medium text-gray-500">googly.png</label><input type="text" id="Eyes-googly.png" placeholder="googly.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">17% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md">
                                 <div class="text-gray-500 mt-2 -mb-2 flex items-center justify-end text-xs">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="h-3 w-3 mr-1">
                                       <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                    minimum 1
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/eyes/neutral.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Eyes-neutral.png" class="block text-xs font-medium text-gray-500">neutral.png</label><input type="text" id="Eyes-neutral.png" placeholder="neutral.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">17% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md"><!---->
                              </td>
                           </tr>
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/eyes/smiling.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Eyes-smiling.png" class="block text-xs font-medium text-gray-500">smiling.png</label><input type="text" id="Eyes-smiling.png" placeholder="smiling.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">16% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md">
                                 <div class="text-gray-500 mt-2 -mb-2 flex items-center justify-end text-xs">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="h-3 w-3 mr-1">
                                       <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                    minimum 1
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/eyes/stupid.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Eyes-stupid.png" class="block text-xs font-medium text-gray-500">stupid.png</label><input type="text" id="Eyes-stupid.png" placeholder="stupid.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">16% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md"><!---->
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="mt-6 bg- overflow-hidden shadow rounded-lg divide-y divide-gray-200">
         <div class="px-4 py-5 sm:px-6">
            <div class="-ml-4 -mt-4 flex justify-between items-center flex-wrap sm:flex-nowrap">
               <div class="ml-4 mt-4">
                  <div class="border border-blue-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Expression-root-name" class="block text-xs font-medium text-gray-500">Expression</label><input type="text" id="Expression-root-name" class="mt-0.5 block outline-none w-full border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm" placeholder="Expression"></div>
               </div>
               <div class="ml-4 mt-4 flex-shrink-0 flex space-x-6">
                  <div class="border border-blue-gray-300 rounded-md px-3 py-2 w-24 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Expression-root-count" class="block text-xs font-medium text-gray-500">Count</label><input type="number" id="Expression-root-count" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm" placeholder="1"></div>
               </div>
            </div>
            <!---->
         </div>
         <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
               <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                  <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                     <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                           <tr>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Variation </th>
                              <th scope="col" class="w-16 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Rarity </th>
                              <th scope="col" class="w-16 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Count </th>
                           </tr>
                        </thead>
                        <tbody class="bg- divide-y divide-gray-200">
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/expression/angry.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Expression-angry.png" class="block text-xs font-medium text-gray-500">angry.png</label><input type="text" id="Expression-angry.png" placeholder="angry.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">20% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md">
                                 <div class="text-gray-500 mt-2 -mb-2 flex items-center justify-end text-xs">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="h-3 w-3 mr-1">
                                       <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                    minimum 1
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/expression/excited.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Expression-excited.png" class="block text-xs font-medium text-gray-500">excited.png</label><input type="text" id="Expression-excited.png" placeholder="excited.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">20% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md"><!---->
                              </td>
                           </tr>
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/expression/neutral.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Expression-neutral.png" class="block text-xs font-medium text-gray-500">neutral.png</label><input type="text" id="Expression-neutral.png" placeholder="neutral.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">20% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md">
                                 <div class="text-gray-500 mt-2 -mb-2 flex items-center justify-end text-xs">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="h-3 w-3 mr-1">
                                       <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                    minimum 1
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/expression/smile.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Expression-smile.png" class="block text-xs font-medium text-gray-500">smile.png</label><input type="text" id="Expression-smile.png" placeholder="smile.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">20% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md"><!---->
                              </td>
                           </tr>
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/expression/stupid.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Expression-stupid.png" class="block text-xs font-medium text-gray-500">stupid.png</label><input type="text" id="Expression-stupid.png" placeholder="stupid.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">20% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md">
                                 <div class="text-gray-500 mt-2 -mb-2 flex items-center justify-end text-xs">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="h-3 w-3 mr-1">
                                       <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                    minimum 1
                                 </div>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="mt-6 bg- overflow-hidden shadow rounded-lg divide-y divide-gray-200">
         <div class="px-4 py-5 sm:px-6">
            <div class="-ml-4 -mt-4 flex justify-between items-center flex-wrap sm:flex-nowrap">
               <div class="ml-4 mt-4">
                  <div class="border border-blue-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Skin-root-name" class="block text-xs font-medium text-gray-500">Skin</label><input type="text" id="Skin-root-name" class="mt-0.5 block outline-none w-full border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm" placeholder="Skin"></div>
               </div>
               <div class="ml-4 mt-4 flex-shrink-0 flex space-x-6">
                  <div class="border border-blue-gray-300 rounded-md px-3 py-2 w-24 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Skin-root-count" class="block text-xs font-medium text-gray-500">Count</label><input type="number" id="Skin-root-count" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm" placeholder="1"></div>
               </div>
            </div>
            <!---->
         </div>
         <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
               <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                  <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                     <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                           <tr>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Variation </th>
                              <th scope="col" class="w-16 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Rarity </th>
                              <th scope="col" class="w-16 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Count </th>
                           </tr>
                        </thead>
                        <tbody class="bg- divide-y divide-gray-200">
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/skin/abstract.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Skin-abstract.png" class="block text-xs font-medium text-gray-500">abstract.png</label><input type="text" id="Skin-abstract.png" placeholder="abstract.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">12% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md"><!---->
                              </td>
                           </tr>
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/skin/blue.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Skin-blue.png" class="block text-xs font-medium text-gray-500">blue.png</label><input type="text" id="Skin-blue.png" placeholder="blue.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">11% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md"><!---->
                              </td>
                           </tr>
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/skin/camo-coral.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Skin-camo-coral.png" class="block text-xs font-medium text-gray-500">camo-coral.png</label><input type="text" id="Skin-camo-coral.png" placeholder="camo-coral.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">11% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md"><!---->
                              </td>
                           </tr>
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/skin/camo-hot-pink.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Skin-camo-hot-pink.png" class="block text-xs font-medium text-gray-500">camo-hot-pink.png</label><input type="text" id="Skin-camo-hot-pink.png" placeholder="camo-hot-pink.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">11% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md">
                                 <div class="text-gray-500 mt-2 -mb-2 flex items-center justify-end text-xs">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="h-3 w-3 mr-1">
                                       <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                    minimum 1
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/skin/chrome-turquoise.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Skin-chrome-turquoise.png" class="block text-xs font-medium text-gray-500">chrome-turquoise.png</label><input type="text" id="Skin-chrome-turquoise.png" placeholder="chrome-turquoise.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">11% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md">
                                 <div class="text-gray-500 mt-2 -mb-2 flex items-center justify-end text-xs">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="h-3 w-3 mr-1">
                                       <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                    minimum 1
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/skin/damascus-steel.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Skin-damascus-steel.png" class="block text-xs font-medium text-gray-500">damascus-steel.png</label><input type="text" id="Skin-damascus-steel.png" placeholder="damascus-steel.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">11% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md">
                                 <div class="text-gray-500 mt-2 -mb-2 flex items-center justify-end text-xs">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="h-3 w-3 mr-1">
                                       <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                    minimum 1
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/skin/lava.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Skin-lava.png" class="block text-xs font-medium text-gray-500">lava.png</label><input type="text" id="Skin-lava.png" placeholder="lava.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">11% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md"><!---->
                              </td>
                           </tr>
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/skin/more-razzle.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Skin-more-razzle.png" class="block text-xs font-medium text-gray-500">more-razzle.png</label><input type="text" id="Skin-more-razzle.png" placeholder="more-razzle.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">11% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md"><!---->
                              </td>
                           </tr>
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/skin/regular.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Skin-regular.png" class="block text-xs font-medium text-gray-500">regular.png</label><input type="text" id="Skin-regular.png" placeholder="regular.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">11% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md"><!---->
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="mt-6 bg- overflow-hidden shadow rounded-lg divide-y divide-gray-200">
         <div class="px-4 py-5 sm:px-6">
            <div class="-ml-4 -mt-4 flex justify-between items-center flex-wrap sm:flex-nowrap">
               <div class="ml-4 mt-4">
                  <div class="border border-blue-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Background-root-name" class="block text-xs font-medium text-gray-500">Background</label><input type="text" id="Background-root-name" class="mt-0.5 block outline-none w-full border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm" placeholder="Background"></div>
               </div>
               <div class="ml-4 mt-4 flex-shrink-0 flex space-x-6">
                  <div class="border border-blue-gray-300 rounded-md px-3 py-2 w-24 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Background-root-count" class="block text-xs font-medium text-gray-500">Count</label><input type="number" id="Background-root-count" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm" placeholder="1"></div>
               </div>
            </div>
            <!---->
         </div>
         <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
               <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                  <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                     <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                           <tr>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Variation </th>
                              <th scope="col" class="w-16 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Rarity </th>
                              <th scope="col" class="w-16 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Count </th>
                           </tr>
                        </thead>
                        <tbody class="bg- divide-y divide-gray-200">
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/background/baby-blue.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Background-baby-blue.png" class="block text-xs font-medium text-gray-500">baby-blue.png</label><input type="text" id="Background-baby-blue.png" placeholder="baby-blue.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">12% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md">
                                 <div class="text-gray-500 mt-2 -mb-2 flex items-center justify-end text-xs">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="h-3 w-3 mr-1">
                                       <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                    minimum 1
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/background/capri.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Background-capri.png" class="block text-xs font-medium text-gray-500">capri.png</label><input type="text" id="Background-capri.png" placeholder="capri.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">11% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md"><!---->
                              </td>
                           </tr>
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/background/cotton-candy.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Background-cotton-candy.png" class="block text-xs font-medium text-gray-500">cotton-candy.png</label><input type="text" id="Background-cotton-candy.png" placeholder="cotton-candy.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">11% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md">
                                 <div class="text-gray-500 mt-2 -mb-2 flex items-center justify-end text-xs">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="h-3 w-3 mr-1">
                                       <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                    minimum 1
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/background/deep-champagne.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Background-deep-champagne.png" class="block text-xs font-medium text-gray-500">deep-champagne.png</label><input type="text" id="Background-deep-champagne.png" placeholder="deep-champagne.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">11% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md"><!---->
                              </td>
                           </tr>
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/background/lavender-blue.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Background-lavender-blue.png" class="block text-xs font-medium text-gray-500">lavender-blue.png</label><input type="text" id="Background-lavender-blue.png" placeholder="lavender-blue.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">11% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md"><!---->
                              </td>
                           </tr>
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/background/light-gray.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Background-light-gray.png" class="block text-xs font-medium text-gray-500">light-gray.png</label><input type="text" id="Background-light-gray.png" placeholder="light-gray.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">11% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md"><!---->
                              </td>
                           </tr>
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/background/magic-mint.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Background-magic-mint.png" class="block text-xs font-medium text-gray-500">magic-mint.png</label><input type="text" id="Background-magic-mint.png" placeholder="magic-mint.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">11% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md"><!---->
                              </td>
                           </tr>
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/background/mauve.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Background-mauve.png" class="block text-xs font-medium text-gray-500">mauve.png</label><input type="text" id="Background-mauve.png" placeholder="mauve.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">11% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md"><!---->
                              </td>
                           </tr>
                           <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-14 rounded overflow-hidden bg-gray-100"><img class="h-14 w-14" src="/demo/background/platinum.preview.png" alt=""></div>
                                    <div class="ml-4">
                                       <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500"><label for="Background-platinum.png" class="block text-xs font-medium text-gray-500">platinum.png</label><input type="text" id="Background-platinum.png" placeholder="platinum.png" class="mt-0.5 block w-full outline-none border-0 p-0 text-blue-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">11% </td>
                              <td class="w-16 px-6 py-4 whitespace-nowrap">
                                 <input type="number" min="0" step="1" class="py-4 px-3 shadow-sm text-blue-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-24 sm:text-sm border border-gray-300 rounded-md">
                                 <div class="text-gray-500 mt-2 -mb-2 flex items-center justify-end text-xs">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="h-3 w-3 mr-1">
                                       <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                    minimum 1
                                 </div>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
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
	
