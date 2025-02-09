@props(['title' => '', 'color' => '', 'textcolor' => '', 'hovercolor' => '', 'hovertextcolor' => '','padding'=>'', 'margin' => ''])
<div>
    <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
    <button class="{{ $color }} {{ $hovercolor }} {{ $textcolor }} font-bold border-2 rounded-lg {{ $padding }} {{ $hovertextcolor }}  {{ $margin }}">
      {{ $title }}
      </button>

      
      <style>
        .btn {
          @apply font-bold py-2 px-4 rounded;
        }
        .btn-blue {
          @apply bg-blue-500 text-white;
        }
        .btn-blue:hover {
          @apply bg-blue-700;
        }
      </style>
</div>