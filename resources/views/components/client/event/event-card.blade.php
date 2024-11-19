<div class="col-lg-6 col-xl-4 d-flex align-items-stretch wow fadeInUp" data-wow-delay="{{ $loop->index * 0.2 + 0.2 }}s">
    <div class="blog-item d-flex flex-column">
        <div class="blog-img">
            <img src="/assets/img/blog-1.jpg" class="img-fluid rounded-top w-100" alt="">
            <div class="blog-date px-4 py-2"><i class="fa fa-calendar-alt me-1"></i> {{
                \Carbon\Carbon::parse($event->date)->format('M d, Y') }}</div>
        </div>
        <div class="blog-content rounded-bottom p-4 d-flex flex-column flex-grow-1">
            <a href="{{ route('client.event', ['event' => $event]) }}" class="h4 d-inline-block mb-3">{{
                $event->title }}</a>
            <p>{{ $event->short_description }}</p>
            <div class="mt-auto">
                <a href="{{ route('client.event', ['event' => $event]) }}" class="fw-bold text-secondary">Read More <i
                        class="fa fa-angle-right"></i></a>
            </div>
        </div>
    </div>
</div>