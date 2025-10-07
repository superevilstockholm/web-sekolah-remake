<div id="loadingOverlay" class="d-none position-fixed top-0 start-0 w-100 vh-100 bg-white d-flex justify-content-center align-items-center" style="z-index: 1050;">
    <div class="spinner-border text-primary" role="status" style="width: 5rem; height: 5rem;">
        <span class="visually-hidden">Loading...</span>
    </div>
</div>
<style>
    #loadingOverlay {
        transition: opacity 0.3s ease;
    }
</style>
<script>
    function showLoading() {
        const overlay = document.getElementById('loadingOverlay');
        overlay.classList.remove('d-none');
    }
    function hideLoading() {
        const overlay = document.getElementById('loadingOverlay');
        overlay.classList.add('d-none');
    }
</script>
