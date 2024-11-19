<!-- Copyright Start -->
<div class="container-fluid copyright py-4">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-md-6 text-center text-md-start mb-md-0">
                @if (\App\Models\Setting::getValue('copyright_text'))
                <span class="text-white">{{ \App\Models\Setting::getValue('copyright_text')
                    }}</span>
                @else
                <span>&copy; <a href="#">Your Site Name</a>, All Right Reserved.</span>
                @endif
            </div>
            <div class="col-md-6 text-center text-md-end text-body">
                Designed By <a class="border-bottom text-white" href="https://htmlcodex.com">Saiquit</a>
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->