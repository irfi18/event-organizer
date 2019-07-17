<div class="row" id="body-row">
    <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
        <ul class="list-group">
            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                <small>MAIN MENU</small>
            </li>
            <a href="<?php echo site_url('home'); ?>" target="blank" class="list-group-item list-group-item-action bg-dark text-white">
                    Homepage
                </a>
            <a href="<?php echo site_url('admin'); ?>" class="list-group-item list-group-item-action bg-dark text-white">
                    Dashboard
                </a>
            <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-dashboard fa-fw"></span>
                    <span class="menu-collapsed">Data</span>
                </div>
            </a>
            <div id='submenu1' class="collapse sidebar-submenu">
                <a href="<?php echo site_url('kriteria'); ?>" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Kriteria</span>
                </a>
                <a href="<?php echo site_url('alternatif'); ?>" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Alternatif</span>
                </a>
            </div>
            <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-user fa-fw "></span>
                    <span class="menu-collapsed">Perhitungan</span>
                </div>
            </a>
            <div id='submenu2' class="collapse sidebar-submenu">
                <a href="perbandingan" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Perbandingan</span>
                </a>
                <a href="proses" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Hasil Perhitungan</span>
                </a>
            </div>   
            <a href="help" class="list-group-item list-group-item-action bg-dark text-white">
                Help
            </a>         
            <a href="login/destroy" class="list-group-item list-group-item-action bg-dark text-white">
                Logout
            </a>
        </ul>
    </div>
</div>