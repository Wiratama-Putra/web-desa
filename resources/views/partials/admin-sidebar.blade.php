<li class="nav-item">
    <a class="nav-link" href="{{ route('admin-dashboard-index') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Pengajuan Surat</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('admin-skck-index') }}">Surat Pengantar SKCK</a>
            <a class="collapse-item" href="{{ route('admin-domisili-index') }}">Surat Keterangan Domisili</a>
            <a class="collapse-item" href="{{ route('admin-umum-index') }}">Surat Keterangan Umum</a>
        </div>
    </div>
</li>