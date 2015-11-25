<div class="page-header">
    <div class="page-header-content">
        <div class="page-title">
            <h1>
                <i class="fa fa-tachometer"></i>
                {{ t('dashboard') }}
            </h1>
        </div>
    </div>
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="{{ createUrl() }}"><i class="fa fa-home"> </i>Verone</a></li>
            <li class="active"><a href="{{ createUrl('Dashboard', 'Dashboard', 'index') }}">{{ t('dashboard') }}</a></li>
        </ul>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <ul class="dashboard">
                @foreach $eventResult
                    <li>
                        <a href="{{ $item['href'] }}">
                            @if $item['icon-type'] == 'class'
                                <i class="{{ $item['icon'] }}"></i>
                            @else
                                <img src="{{ $item['icon'] }}" alt="" />
                            @endif
                            <span>{{ $item['name'] }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
