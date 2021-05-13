<div class="info-section">
    <div class="employer-img">
        <img src="{{ URL::asset('/img/profile.png') }}" alt="{{ $name }}">
    </div>
    <div class="employer-info">
        <p>
            <span class="badge badge-secondary employer-dpt"><i class="fas fa-fw fa-users" style="margin-right: 5px;"></i> {{ $dptm }}</span>
            <span class="employer-name">{{ $name }}</span>
            <span class="employer-job">{{ $job }}</span>
        </p>
    </div>
</div>
