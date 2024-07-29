
<x-layout>
    <!-- navbar -->
    
    <!-- hero section -->
     <x-hero />

     
    

    <!-- blogs section -->
     <x-blogs-section 
            :blogs="$blogs" 
            :categories="$categories"
            :currentCategory="$currentCategory ?? null"/>
    
        
    

    <!-- subscribe new blogs -->
    <x-subscribe />

    <!-- footer -->
    
    
</x-layout>












    
    
