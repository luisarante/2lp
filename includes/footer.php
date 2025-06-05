<footer>
    <div class="w-full px-2 py-12 sm:px-12 relative flex justify-center items-center">
        <div class="absolute bottom-0 sm:bottom-[10px] translate-x-1/2 right-[50%]">
            <p class="text-md text-gray-500">
                &copy; Copyright, <span id="ano"></span> 
            </p>
        </div>
        <div class="flex gap-4">
            <a href=""><i class="fa-brands fa-2xl fa-facebook"></i></a>
            <a href=""><i class="fa-brands fa-2xl fa-instagram"></i></a>
            <a href=""><i class="fa-brands fa-2xl fa-youtube"></i></a>
        </div>
    </div>
</footer>

<script>
    document.getElementById('ano').textContent = new Date().getFullYear();
</script>   